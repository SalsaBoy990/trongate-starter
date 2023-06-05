<?php

class Frontpage extends Trongate {

	private array $pages;

	public function __construct( $module_name = null ) {
		parent::__construct( $module_name );

		$this->pages = [
			'Clean Documentation Module'            => 'clean',
			'Current Weather Module'                => 'weather',
			'Safe Password Generator Module'        => 'password_generator',
			'Entries Module'                        => 'entries',
			'Gallery Module'                        => 'gallery',
			'Basic Statistics Module'               => 'basestats',
			'GitHub Repo Search by Language Module' => 'github_repositories',
			'Fake Payment Module'                   => 'payment/form',
		];
	}

	function index() {

		$data['view_module'] = 'frontpage';
		$data['view_file']   = 'index';
		$data['title']       = 'Gulácsi András - test website';
		$data['description'] = 'Gulácsi András - test website';

		$data['pages'] = $this->pages;

		$this->template( 'clean_main', $data );
	}
}
