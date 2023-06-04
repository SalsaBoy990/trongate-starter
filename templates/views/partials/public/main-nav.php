<?php

$links = [
	'Home' => [
         'url' => BASE_URL,
         'icon' => 'fa fa-home',
    ],

	'Entries' => [
		'url' => BASE_URL . 'entries',
		'icon' => 'fa fa-lightbulb-o',
	],

	'Our Values' => [
		'url' => BASE_URL,
		'icon' => 'fa fa-street-view',
	],

	'Get In Touch' => [
		'url' => BASE_URL,
		'icon' => 'fa fa-send',
	],

	'Clean CSS' => [
		'url' => BASE_URL . 'clean',
		'icon' => 'fa fa-send',
	],

];


foreach ($links as $title => $values) { ?>
    <li><a href="<?= $values['url'] ?>" <?= is_active_link($values['url']) ? 'aria-current="page"' : '' ?> class="<?= is_active_link($values['url'])  ? 'active' : '' ?>"><i class="<?= $values['icon'] ?>"></i><?= $title ?></a></li>
<?php } ?>
