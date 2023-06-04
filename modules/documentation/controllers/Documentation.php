<?php

class Documentation extends Trongate
{
    function index()
    {
        $data['view_module'] = 'documentation/clean';
        $data['view_file'] = 'index';

	    $data['title'] = 'Clean Components';
	    $data['description'] = 'Basic Components for Clean SS and JS library';

        $this->template('clean_div', $data);
    }
}
