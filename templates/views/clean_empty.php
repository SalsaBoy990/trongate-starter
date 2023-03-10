<!DOCTYPE html>
<html lang="en" x-data="data" :class="{'dark': darkMode }" x-transition>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>css/trongate.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>css/app.css">
    <!-- don't change anything above here -->
    <!-- add your own stylesheet below here -->
    <link rel="stylesheet" type="text/css" href="documentation-clean_module/css/clean.css">
    <link rel="stylesheet" type="text/css" href="documentation-clean_module/css/prism.css">

    <title>Public</title>

    <script src="entries_module/tinymce/tinymce.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#entry-content-area',
            language: 'hu_HU',
            directionality: 'ltr'
        });
    </script>
</head>
<body @scroll="setScrollToTop()">
<div class="wrapper">
    <header>
        <div id="header-sm">
            <div id="hamburger" onclick="openSlideNav()">
                &#9776;
            </div>
            <div class="logo">
                <a href="<?= BASE_URL ?>">
                    <img src="documentation_module/images/logo.png" alt="<?= WEBSITE_NAME ?>" />
                    <span>Clean Theme</span>
                </a>
            </div>
            <div>
                <?php
                echo anchor('account', '<i class="fa fa-user"></i>');
                echo anchor('logout', '<i class="fa fa-sign-out"></i>');
                ?>
                <span class="pointer darkmode-toggle" rel="button"
                      @click="toggleDarkMode" x-text="isDarkModeOn() ? '🔆' : '🌒'"
                      :title="isDarkModeOn() ? 'Light mode' : 'Dark mode'">
                </span>
            </div>
        </div>
        <div id="header-lg">
            <div class="logo">
                <a href="<?= BASE_URL ?>">
                    <img src="documentation_module/images/logo.png" alt="<?= WEBSITE_NAME ?>" />
                    <span>Clean Theme</span>
                </a>
            </div>
            <div>
                <ul id="top-nav">
                    <li><a href="<?= BASE_URL ?>"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="<?= BASE_URL ?>"><i class="fa fa-lightbulb-o"></i>About Us</a></li>
                    <li><a href="<?= BASE_URL ?>"><i class="fa fa-street-view"></i>Our Values</a></li>
                    <li><a href="<?= BASE_URL ?>"><i class="fa fa-gears"></i>How We Work</a></li>
                    <li><a href="<?= BASE_URL ?>documentation-clean/index"><i class="fa fa-send"></i>Clean Template</a></li>
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
            <h2> Table of Contents </h2>
            <nav>
                <a href="#"><h3><?= anchor('entries/create', 'Create New Entry') ?></h3></a>
                <a href="#"><h3><?= anchor('entries/manage', 'Entry List') ?></h3></a>

            </nav>
        </aside>


        <main class="content">
            <?= Template::display($data) ?>
        </main>

    </div>


    <span class="light-gray pointer scroll-to-top-button padding-0-5 round" role="button"
          title="Toggle table of content"
          x-show="scrollTop > 800" @click="scrollToTop" x-transition>
        <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </span>

</div>
<footer class="footer">
    <div class="container">
        <!-- it's okay to remove the links and content here - everything is cool (DC) -->
        <div class="normal">&copy; Copyright <?= date('Y').' '.OUR_NAME ?></div>
        <div class="small"><?= anchor('https://trongate.io', 'Powered by Trongate') ?></div>
    </div>
</footer>
<div id="slide-nav">
    <div id="close-btn" onclick="closeSlideNav()">&times;</div>
    <ul auto-populate="true"></ul>
</div>
<script src="<?= BASE_URL ?>js/app.js"></script>
<script src="documentation-clean_module/js/clean.js"></script>
<script src="documentation-clean_module/js/prism.js"></script>

</body>
</html>
