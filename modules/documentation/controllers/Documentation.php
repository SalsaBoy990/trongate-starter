<?php

class Documentation extends Trongate
{
    function index()
    {
        $data['view_module'] = 'documentation';
        $data['view_file'] = 'index';

        $this->template('clean', $data);
    }
}
