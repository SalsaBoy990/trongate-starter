<?php
class Welcome extends Trongate {

    function index() {
        //echo BASE_URL;
        //die();
        $data['source_url'] = 'https://en.wikipedia.org/wiki/Rock_music';
        $data['page_headline'] = 'Rock Music';
        $output = $this->view('rock', $data, true );
        $output = str_replace('Rock Music', 'Rock and Roll Music', $output);

        echo htmlentities($output);
        echo $output;
    }

    function greeting(string $name) {
        //$name = segment(3);
        settype($name, 'string');
        echo 'helló, ' . urldecode($name);
    }

    /*protected function send_payment($user_id) {

        settype($user_id, 'int');

        if ($user_id>0) {
            echo 'now sending payment to '.$user_id;
        }
    }*/
    function _send_payment($user_id) {

        settype($user_id, 'int');

        if ($user_id>0) {
            echo 'now sending payment to '.$user_id;
        }
    }

    function test() {
        $user_id = 7;
        $this->_send_payment($user_id);
    }


    function rock() {
        $data['page_headline'] = 'Rock Music';
        $data['source_url'] = 'https://en.wikipedia.org/wiki/Rock_music';
        $data['view_module'] = 'welcome';
        $data['view_file'] = 'rock';
        $this->template('public', $data);
    }

    function classical() {
        $data['page_headline'] = 'Classical Music';
        $data['source_url'] = 'https://en.wikipedia.org/wiki/Classical_music';
        $data['view_module'] = 'welcome';
        $data['view_file'] = 'classical';
        $this->template('classical', $data);
    }

    function jazz() {
        $data['page_headline'] = 'Jazz Music';
        $data['source_url'] = 'https://en.wikipedia.org/wiki/Jazz';
        $data['view_module'] = 'welcome';
        $data['view_file'] = 'jazz';
        $this->template('jazz', $data);
    }

    function custom() {
        $data['page_headline'] = 'Rock Music';
        $data['source_url'] = 'https://en.wikipedia.org/wiki/Rock_music';
        $data['view_module'] = 'welcome';
        $data['view_file'] = 'rock';
        $this->template('custom', $data);
    }

    function w3css() {
        $data['view_module'] = 'welcome';
        $data['view_file'] = 'w3css';
        $this->template('w3css', $data);
    }

}
