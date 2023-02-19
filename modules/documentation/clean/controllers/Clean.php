<?php

class Clean extends Trongate
{
    function __construct() {
        parent::__construct();
        $this->parent_module = 'documentation';
        $this->child_module = 'clean';
    }

    function index() {
        $this->view('index');
    }

    function clean() {
        $data['view_module'] = 'documentation/clean';
        $data['view_file'] = 'index';

        $this->template('clean', $data);
    }

    function __destruct() {
        $this->parent_module = '';
        $this->child_module = '';
    }
}
