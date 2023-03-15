<?php echo gettext('TEST'); ?>
<style>
    .payment .content-300 {
        max-width: 320px;
        width: 100%;
    }

    .payment .expiration-date {
        display: grid;
        grid-template-columns: repeat(3, calc(33% - 40px));
        column-gap: 20px;
    }

</style>

<section class="payment">

    <h2>Simple Payment Form</h2>
    <hr>

    <?php flashdata('<div class="panel success">', '</div>'); ?>
    <?= Modules::run('a-validate/_validation_errors') ?>

    <?php
    echo form_open($form_location);


    echo form_label('Card number *', ['for' => "card_number"]); ?>
    <input class="content-300 <?= Modules::run('a-validate/_has_error', 'card_number') ? 'text-red' : '' ?>"
           type="text" name="card_number" value="<?= $card_number ?>" inputmode="numeric"
           aria-label="credit card number"
           placeholder="4242 4242 4242 4242">
    <?php if (Modules::run('a-validate/_has_error', 'card_number')) { ?>
        <p class="fs-14 text-red margin-top-0"><?= Modules::run('a-validate/_get_error', 'card_number') ?></p>
    <?php } ?>


    <p class="margin-bottom-0-5 margin-top-1-5"><b>Expiration date</b></p>

    <div class="expiration-date content-300">
        <div>
            <label for="month"
                   class="margin-top-0 <?= Modules::run('a-validate/_has_error', 'month') ? 'text-red' : '' ?>">Month
                *</label>
            <input type="text" name="month" placeholder="MM" value=""
                   inputmode="numeric" aria-label="credit card expiration month"
                   class="<?= Modules::run('a-validate/_has_error', 'month') ? 'border border-red' : '' ?>"
            >
        </div>
        <div>
            <label for="year"
                   class="margin-top-0 <?= Modules::run('a-validate/_has_error', 'year') ? 'text-red' : '' ?>">Year
                *</label>
            <input type="text" name="year" placeholder="YY" value=""
                   inputmode="numeric" aria-label="credit card expiration year"
                   class="<?= Modules::run('a-validate/_has_error', 'year') ? 'border border-red' : '' ?>"
            >
        </div>
        <div>
            <label for="cvv"
                   class="margin-top-0 <?= Modules::run('a-validate/_has_error', 'cvv') ? 'text-red' : '' ?>">CVV
                *</label>
            <input type="text" name="cvv" value="<?= $cvv ?>"
                   inputmode="numeric" aria-label="CVV security code"
                   class="<?= Modules::run('a-validate/_has_error', 'cvv') ? 'border border-red' : '' ?>"
            >
        </div>
    </div>


    <?php
    echo form_label('Name on the card *', ['for' => 'full-name']);
    echo form_input('full_name', $full_name, [
        'class' => 'content-300 '.Modules::run('a-validate/_has_error', 'full_name') ? 'border border-red' : '',
        'aria-label' => 'name on the card'
    ]);
    if (Modules::run('a-validate/_has_error', 'full_name')) { ?>
        <p class="fs-14 text-red margin-top-0"><?= Modules::run('a-validate/_get_error', 'full_name') ?></p>
    <?php } ?>


    <?php
    echo form_label('Your email address *', ['for' => 'email_address']);
    echo form_email('email_address', $email_address, [
        'class' => 'content-300 '.Modules::run('a-validate/_has_error', 'email_address') ? 'border border-red' : '',
        'aria-label' => 'your email address'
    ]);
    if (Modules::run('a-validate/_has_error', 'email_address')) { ?>
        <p class="fs-14 text-red margin-top-0"><?= Modules::run('a-validate/_get_error', 'email_address') ?></p>
    <?php } ?>


    <?php
    echo form_label('Choose currency to convert to *', ['for' => 'currency']);
    echo form_dropdown('currency', $currency_options, $currency, [
        'class' => 'content-300 '.Modules::run('a-validate/_has_error', 'currency') ? 'border border-red' : ''
    ]);
    if (Modules::run('a-validate/_has_error', 'currency')) { ?>
        <p class="fs-14 text-red margin-top-0"><?= Modules::run('a-validate/_get_error', 'currency') ?></p>
    <?php } ?>


    <?php
    echo form_label('Amount to pay (HUF) *', ['for' => 'amount']);
    echo form_number('amount', $amount, [
        'class' => 'content-300 '.Modules::run('a-validate/_has_error', 'amount') ? 'border border-red' : '',
        'placeholder' => '1',
        'inputmode' => 'numeric',
        'aria-label' => 'amount to pay in HUF'
    ]);
    if (Modules::run('a-validate/_has_error', 'amount')) { ?>
        <p class="fs-14 text-red margin-top-0"><?= Modules::run('a-validate/_get_error', 'amount') ?></p>
    <?php } ?>

    <br>

    <?php
    echo form_submit('submit', 'Send Money!');
    echo form_close();
    ?>

    <div class="box">
        <p class="text-green"><b>Amount in € is: <?php echo 28.50; ?></b></p>
    </div>

</section>

<?php Modules::run('a-validate/_clear_validation_errors'); ?>


<script type="text/javascript" src="payment_module/js/payment.js"></script>
