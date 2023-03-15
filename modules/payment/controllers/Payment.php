<?php

final class Payment extends Trongate
{
    private const API_KEY = 'hpWn4UmQrheZEI5giMjJMV5vdOd2gK0RvwwgZ9a1';
    private const API_URL = 'https://api.freecurrencyapi.com/v1/latest';


    //$from_currency = urlencode('HUF');
    private string $from_currency;
    //$to_currency = urlencode('EUR');
    private string $to_currency;

    // Min and max limits for the amount to pay
    private const MIN = 1;
    private const MAX = 1000000;

    private string $card_number;
    private string $month;
    private string $year;
    private float $amount_to_pay;
    private float $converted_amount;
    private string $cvv;
    private string $full_name;
    private string $email_address;


    public function __construct($module_name = null)
    {
        parent::__construct($module_name);

        // payment data
        $this->card_number = '';
        $this->month = '';
        $this->year = '';
        $this->cvv = '';

        $this->amount_to_pay = 150000; // in HUF
        $this->converted_amount = 0.0; // in EUR or in chosen currency

        $this->from_currency = 'HUF';
        $this->to_currency = 'EUR';

        $this->full_name = '';
        $this->email_address = '';

        // Validate module (child)
        $this->module('a-validate');
        $this->module('a-api_helper');

    }

    // the html payment form endpoint
    function form()
    {
        $data = $this->_get_data_from_post();

        $data['view_file'] = 'index';
        $data['form_location'] = str_replace('/form', '/submit', current_url());
        $data['currency_options'] = $this->_get_currency_options($data['currency']);

//        echo PHP_INT_MAX;
//        echo PHP_INT_SIZE;

        $this->template('clean_starter', $data);
    }

    // setup values for the currency select field
    private function _get_currency_options(): array
    {
        $options[''] = 'Select currency...';
        $options['eur'] = 'EUR';
        $options['usd'] = 'USD';

        return $options;

    }

    // post endpoint to capture payment data
    function submit()
    {

        $submit = post('submit');

        // post requests needs validation
        if ($submit == 'Send Money!') {

            // custom pre-processing
            $card = post('card_number', true);
            $card = preg_replace('/\s/', '', $card); // Remove all whitespace
            $_POST['card-number'] = $card;

            // rules
            $this->validation_helper->set_rules('card_number', 'Card number',
                'required|numeric|exact_length[16]');

            $this->validation_helper->set_rules('month', 'Expiration month',
                'required|numeric|exact_length[2]');

            $this->validation_helper->set_rules('year', 'Expiration year',
                'required|numeric|exact_length[2]');

            $this->validation_helper->set_rules('amount', 'Amount in HUF',
                'required|greater_than['.self::MIN.']|less_than['.self::MAX.']');

            $this->validation_helper->set_rules('cvv', 'CVV code',
                'required|min_length[3]|max_length[4]');

            $this->validation_helper->set_rules('full_name', 'Name on the card',
                'required|min_length[3]');

            $this->validation_helper->set_rules('email_address', 'Email address',
                'required|valid_email');

            $this->validation_helper->set_rules('currency', 'Currency',
                'required');


            // run the validation tests
            $result = $this->validation_helper->run();


            // validate card number (Luhn algorithm)
//            $this->_validate_card_number($card);
            $this->validate->_validate_card_number($card);

            // validate month in MM format
            $this->_validate_expiration_month();


            // expiration validation
            $this->_validate_card_expiration();

            // this is a workaround to be able to have custom validations that are not part of the framework
            if ($result === true && !isset($_SESSION['form_submission_errors'])) {
                echo 'ready for payment...';
            } else {
                // validation_errors();
                $this->form();
            }

        }

    }


    // Convert the amount from one currency to another
    private function _convert_currency(): void
    {
        $query = $this->_construct_query();
//        $json = $this->_curl_call($query);
        $json = $this->api_helper->_curl_call($query);
        $results = json_decode($json);

        $currency_rates = $results->data;

        // convert HUF -> USD -> EUR
        $this->converted_amount = $this->amount_to_pay / $currency_rates->{$this->from_currency} * $currency_rates->{$this->to_currency};

        // $json = file_get_contents(self::API_URL .'?=' . self::API_KEY);
        // $obj = json_decode($json, true);

    }


    /** make get call to the endpoint */
    private function _curl_call(string $query): string
    {
        // Initializes a new cURL session
        $curl = curl_init($query);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        // Execute cURL request
        $response = curl_exec($curl);
        // Close cURL session
        curl_close($curl);

        return $response;
    }


    /** construct the query url */
    private function _construct_query(): string
    {
        return self::API_URL.'?apikey='.self::API_KEY;
    }


    /**
     * Luhn algorithm to determine the validity of the credit card number
     * @see http://en.wikipedia.org/wiki/Luhn_algorithm
     */
    private function _validate_card_number($card_number): void
    {
        $sum = '';

        foreach (str_split(strrev((string) $card_number)) as $i => $d) {
            // if it is odd, multiply by 2
            if ($i % 2 !== 0) {
                $num = $d * 2;

                // if $num is > 10, calculate the sum of the digits
                if ($num > 10) {
                    $sum .= floor($num / 10) + ($num % 10);
                } else {
                    $sum .= $num;
                }
            } else { // use the original number
                $sum .= $d;
            }
        }
        // The sum must end with zero
        if ( !(array_sum(str_split($sum)) % 10 === 0) ) {
            $_SESSION['form_submission_errors']['card_number'][] = 'The Card number is invalid.';
        }
    }


    private function _validate_expiration_month()
    {
        // validate month in MM format
        $valid_months = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];

        if (!in_array(post('month', true), $valid_months)) {
            // errors are stored in this session item
            $_SESSION['form_submission_errors']['month'][] = 'The Expiration month field is in incorrect format (must be to digits like \'01\')';
        }
    }


    private function _validate_card_expiration()
    {

        $month = post('month', true);
        $year = post('year', true);
        $year = intval('20'.$year);

        $current_year = intval(date('Y'));
        $current_month = intval(date('m'));


        if ($year < $current_year) {
            $_SESSION['form_submission_errors']['card_number'][] = 'Card is expired! Expired year.';
        } else {
            if ($year === $current_year) {

                if ($month < $current_month) {
                    $_SESSION['form_submission_errors']['card_number'][] = 'Card is expired! Expired month.';

                } else {
                    if ($month === $current_month) {
                        // April, June, September, November have the duration of 30 days
                        if ($month === 4 || $month === 6 || $month === 9 || $month === 11) {
                            $day = 30;
                        } else {
                            if ($month === 2) {
                                // Leap year
                                if ((($year % 4 === 0) && ($year % 100 !== 0)) || $year % 400 === 0) {
                                    $day = 29;
                                } else {
                                    $day = 28;
                                }
                            } else {
                                $day = 31;
                            }
                        }
                        $current_date_time = date('Y-m-d H:i:s');
                        if ($month < 10) {
                            $month = '0'.$month;
                        }
                        $card_valid_date = $year.'-'.$month.'-'.$day.' 23:59:59';
                        $seconds = strtotime($card_valid_date) - strtotime($current_date_time);
                        if ($seconds < 0) {
                            $_SESSION['form_submission_errors']['card_number'][] = 'Your card expired last month.';
                        }
                    }
                }
            }
        }

    }

    private function _get_data_from_post() {
        $data['card_number'] = post('card_number', true);

        $month = post('month', true);
        $data['month'] = $month < 10 ? '0'.$month : $month;

        $year = post('year', true);
        $data['year'] = $year < 10 ? '0'.$year : $year;

        $data['cvv'] = post('cvv', true);
        $data['full_name'] = post('full_name', true);
        $data['email_address'] = post('email_address', true);
        $data['currency'] = post('currency', true);
        $data['amount'] = post('amount', true);

        return $data;
    }

}
