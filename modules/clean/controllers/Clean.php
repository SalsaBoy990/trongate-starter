<?php

class Clean extends Trongate
{
    function index() {
        $data['view_module'] = 'clean';
        $data['view_file'] = 'index';

        $this->template('clean', $data);
    }
}
