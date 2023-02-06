<?php

class W3css extends Trongate
{
    function __construct() {
        parent::__construct();
        $this->parent_module = 'documentation';
        $this->child_module = 'w3css';
    }

    function index() {
        $data['view_module'] = 'documentation/w3css';
        $data['view_file'] = 'index';

        $data['colors'] = 'https://www.w3schools.com/w3css/w3css_colors.asp';
        $data['containers'] = 'https://www.w3schools.com/w3css/w3css_containers.asp';
        $data['panels'] = 'https://www.w3schools.com/w3css/w3css_panels.asp';
        $data['alerts'] = 'https://www.w3schools.com/w3css/w3css_alerts.asp';
        $data['cards'] = 'https://www.w3schools.com/w3css/w3css_cards.asp';
        $data['tables'] = 'https://www.w3schools.com/w3css/w3css_tables.asp';
        $data['lists'] = 'https://www.w3schools.com/w3css/w3css_lists.asp';
        $data['buttons'] = 'https://www.w3schools.com/w3css/w3css_buttons.asp';
        $data['tags'] = 'https://www.w3schools.com/w3css/w3css_tags.asp';
        $data['badges'] = 'https://www.w3schools.com/w3css/w3css_badges.asp';
        $data['responsive'] = 'https://www.w3schools.com/w3css/w3css_responsive.asp';
        $data['grid'] = 'https://www.w3schools.com/w3css/w3css_grid.asp';
        $data['display'] = 'https://www.w3schools.com/w3css/w3css_display.asp';
        $data['modal'] = 'https://www.w3schools.com/w3css/w3css_modal.asp';
        $data['progressbar'] = 'https://www.w3schools.com/w3css/w3css_progressbar.asp';
        $data['dropdowns'] = 'https://www.w3schools.com/w3css/w3css_dropdowns.asp';
        $data['accordions'] = 'https://www.w3schools.com/w3css/w3css_accordions.asp';
        $data['tabulators'] = 'https://www.w3schools.com/w3css/w3css_tabulators.asp';
        $data['navigation'] = 'https://www.w3schools.com/w3css/w3css_navigation.asp';
        $data['sidebar'] = 'https://www.w3schools.com/w3css/w3css_sidebar.asp';
        $data['pagination'] = 'https://www.w3schools.com/w3css/w3css_pagination.asp';
        $data['slideshow'] = 'https://www.w3schools.com/w3css/w3css_slideshow.asp';
        $data['animate'] = 'https://www.w3schools.com/w3css/w3css_animate.asp';
        $data['images'] = 'https://www.w3schools.com/w3css/w3css_images.asp';
        $data['effects'] = 'https://www.w3schools.com/w3css/w3css_effects.asp';
        $data['input'] = 'https://www.w3schools.com/w3css/w3css_input.asp';
        $data['filters'] = 'https://www.w3schools.com/w3css/w3css_filters.asp';
        $data['defaults'] = 'https://www.w3schools.com/w3css/w3css_defaults.asp';
        $data['tooltips'] = 'https://www.w3schools.com/w3css/w3css_tooltips.asp';


        $this->template('w3css', $data);

    }

    function __destruct() {
        $this->parent_module = '';
        $this->child_module = '';
    }
}
