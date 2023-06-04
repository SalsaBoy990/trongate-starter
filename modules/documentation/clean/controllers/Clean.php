<?php

class Clean extends Trongate
{
    function __construct() {
        parent::__construct();
        $this->parent_module = 'documentation';
        $this->child_module = 'clean';
    }

    function index() {
        $data['view_module'] = 'documentation/clean';
        $data['view_file'] = 'index';

		// SEO
		$data['title'] = 'Clean Components';
		$data['description'] = 'Basic Components for Clean SS and JS library';

        $this->template('clean_div', $data);
    }

    function __destruct() {
        $this->parent_module = '';
        $this->child_module = '';
    }
}
