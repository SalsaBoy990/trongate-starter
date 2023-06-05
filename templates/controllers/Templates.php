<?php
class Templates extends Trongate {

    function custom($data) {
        load('custom', $data);
    }

    function public($data) {
        load('public', $data);
    }


	/**
	 * For entries module
	 * @param $data
	 *
	 * @return void
	 */
	function entry($data) {
		load('modules/entries/entry', $data);
	}


	/* This is the base template for clean framework */
    function clean_div($data) {
        load('modules/clean/clean_div', $data);
    }

	/**
	 *
	 * @param $data
	 *
	 * @return void
	 */
	function clean_main($data) {
        load('modules/clean/clean_main', $data);
    }


	/* This is the template for weather module */
	function weather($data) {
		load('modules/weather_module/weather', $data);
	}


	/* This is the template for the gallery module */
	function gallery($data) {
		load('modules/gallery_module/gallery', $data);
	}

	/* This is the template for the basestats module */
	function basestats($data) {
		load('modules/basestats_module/basestats', $data);
	}

	/* This is the template for the payment module */
	function payment($data) {
		load('modules/payment_module/payment', $data);
	}


	//
    function error_404($data) {
        load('error_404', $data);
    }

    function admin($data) {

        if (isset($data['additional_includes_top'])) {
            $data['additional_includes_top'] = $this->_build_additional_includes($data['additional_includes_top']);
        } else {
            $data['additional_includes_top'] = '';
        }

        if (isset($data['additional_includes_btm'])) {
            $data['additional_includes_btm'] = $this->_build_additional_includes($data['additional_includes_btm']);
        } else {
            $data['additional_includes_btm'] = '';
        }

        load('admin', $data);
    }

    function _build_css_include_code($file) {
        $code = '<link rel="stylesheet" href="'.$file.'">';
        $code = str_replace('""></script>', '"></script>', $code);
        return $code;
    }

    function _build_js_include_code($file) {
       $code = '<script src="'.$file.'"></script>';
       $code = str_replace('""></script>', '"></script>', $code);
       return $code;
    }

    function _build_additional_includes($files) {

        $html = '';
        foreach ($files as $file) {
            $file_bits = explode('.', $file);
            $filename_extension = $file_bits[count($file_bits)-1];

            if (($filename_extension !== 'js') && ($filename_extension !== 'css')) {
                $html.= $file;
            } else {
                if ($filename_extension == 'js') {
                    $html.= $this->_build_js_include_code($file);
                } else {
                   $html.= $this->_build_css_include_code($file);
                }   
            }

            $html.= '
    ';
        }

        $html = trim($html);
        $html.= '
';

        return $html;
    }

}
