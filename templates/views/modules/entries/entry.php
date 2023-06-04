<!DOCTYPE html>
<html lang="en" x-data="data" :class="{'dark': darkMode }" x-transition>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>css/trongate.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>css/app.css">
    <!-- don't change anything above here -->
    <!-- add your own stylesheet below here -->
    <link rel="stylesheet" type="text/css" href="documentation-clean_module/css/clean.css">
    <link rel="stylesheet" type="text/css" href="documentation-clean_module/css/prism.css">

    <!-- Font Awesome icons -->
    <link href="<?= BASE_URL ?>fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>fontawesome/css/brands.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>fontawesome/css/solid.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>fontawesome/css/regular.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="entries_module/css/entries.css">

    <title><?= $title . ' | ' ?><?= WEBSITE_NAME ?>></title>

	<?= Template::partial('partials/public/meta', $data) ?>

</head>
<body @scroll="setScrollToTop()">
<div class="wrapper">
    <header>
        <div id="header-sm">
            <div id="hamburger" onclick="openSlideNav()" aria-label="Open sidebar navigation">
                &#9776;
            </div>
            <div class="logo">
                <a href="<?= BASE_URL ?>">
                    <img src="documentation_module/images/logo.png" alt="<?= WEBSITE_NAME ?>"/>
                    <span>Clean Theme</span>
                </a>
            </div>
            <div class="button-group">
	            <?php
	            echo anchor('account', '<i class="fa fa-user"></i>', array('title' => 'User account', 'aria-label' => 'Goto your account'));
	            echo anchor('logout', '<i class="fa fa-sign-out"></i>', array('title' => 'Logout', 'aria-label' => 'Logout button'));
	            ?>
                <button class="icon-button darkmode-toggle"
                        rel="button"
                        aria-label="Toggle dark / light theme"
                        @click="toggleDarkMode"
                        x-text="isDarkModeOn() ? '🔆' : '🌒'"
                        :title="isDarkModeOn() ? 'Light mode' : 'Dark mode'">
                </button>
            </div>
        </div>
        <div id="header-lg">
            <div class="logo">
                <a href="<?= BASE_URL ?>">
                    <img src="documentation_module/images/logo.png" alt="<?= WEBSITE_NAME ?>"/>
                    <span>Clean Theme</span>
                </a>
            </div>
            <div>
                <ul id="top-nav">
	                <?= Template::partial('partials/public/main-nav') ?>

                    <li>
                        <button class="icon-button darkmode-toggle"
                                rel="button"
                                aria-label="Toggle dark / light theme"
                                @click="toggleDarkMode"
                                x-text="isDarkModeOn() ? '🔆' : '🌒'"
                                :title="isDarkModeOn() ? 'Light mode' : 'Dark mode'">
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </header>


    <div x-data="{ showToc: true}" class="main-container container relative">


        <span @click="showToc = ! showToc" class="pointer absolute padding-0-5 top-left margin-top-1-5" role="button"
              title="Table of content">
            <i :class="{'fa fa-arrow-left' : showToc,  'fa fa-arrow-right' : !showToc }" aria-hidden="true"></i>
        </span>


        <aside x-show="showToc" x-transition class="toc">
            <h2 class="fs-20"> Table of Contents </h2>
            <nav>
				<?php foreach ( $entries as $entry ) { ?>
                    <h3 class="fs-16"><?= anchor( BASE_URL . 'entry/' . $entry->url_string, $entry->title ) ?></h3>
				<?php } ?>
            </nav>
        </aside>


        <main class="content">
			<?= Template::display( $data ) ?>
        </main>

    </div>


    <button class="light-gray scroll-to-top-button padding-0-5 round"
            role="button"
            title="Scroll to the top of the page"
            aria-label="Scroll to the top of the page"
            x-show="scrollTop > 800"
            @click="scrollToTop"
            x-transition>
        <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </button>

</div>
<footer class="footer">
    <div class="container">
        <!-- it's okay to remove the links and content here - everything is cool (DC) -->
        <div class="normal">&copy; Copyright <?= date( 'Y' ) . ' ' . OUR_NAME ?></div>
        <div class="small"><?= anchor( 'https://trongate.io', 'Powered by Trongate' ) ?></div>
    </div>
</footer>
<div id="slide-nav">
    <div id="close-btn" onclick="closeSlideNav()" aria-label="Close sidebar navigation">&times;</div>
    <ul auto-populate="true"></ul>
</div>
<script src="<?= BASE_URL ?>js/app.js"></script>
<script src="documentation-clean_module/js/clean.js"></script>
<script src="documentation-clean_module/js/prism.js"></script>

</body>
</html>
