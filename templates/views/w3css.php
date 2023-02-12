<!DOCTYPE html>
<html lang="en" x-data="data" x-bind:class="{'dark': darkMode }" x-transition>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>css/trongate.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>css/app.css">
    <!-- don't change anything above here -->
    <!-- add your own stylesheet below here -->
    <link rel="stylesheet" href="<?= BASE_URL ?>css/custom.css">
    <link rel="stylesheet" type="text/css" href="documentation-w3css_module/css/clean.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>Public</title>
</head>
<body x-on:scroll="setScrollToTop()">
<div class="wrapper">
    <header>
        <div id="header-sm">
            <div id="hamburger" onclick="openSlideNav()">
                &#9776;
            </div>
            <div class="logo">
                <?= anchor(BASE_URL, WEBSITE_NAME) ?>
            </div>
            <div>

                <span class="pointer" rel="button"
                      @click="toggleDarkMode" x-text="isDarkModeOn() ? '🔆' : '🌒'"
                      x-bind:title="isDarkModeOn() ? 'Light mode' : 'Dark mode'">
                </span>

                <?php
                echo anchor('account', '<i class="fa fa-user"></i>');
                echo anchor('logout', '<i class="fa fa-sign-out"></i>');
                ?></div>
        </div>
        <div id="header-lg">
            <div class="logo">
                <?= anchor(BASE_URL, WEBSITE_NAME) ?>
            </div>
            <div>
                <ul id="top-nav">
                    <li><a href="<?= BASE_URL ?>"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="<?= BASE_URL ?>"><i class="fa fa-lightbulb-o"></i>About Us</a></li>
                    <li><a href="<?= BASE_URL ?>"><i class="fa fa-street-view"></i>Our Values</a></li>
                    <li><a href="<?= BASE_URL ?>"><i class="fa fa-gears"></i>How We Work</a></li>
                    <li><a href="<?= BASE_URL ?>"><i class="fa fa-send"></i>Get In Touch</a></li>

                    <li><span class="pointer" rel="button"
                              @click="toggleDarkMode" x-text="isDarkModeOn() ? '🔆' : '🌒'"
                              x-bind:title="isDarkModeOn() ? 'Light mode' : 'Dark mode'">
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div><?= Template::display($data) ?></div>

    <span class="light-gray pointer scroll-to-top-button padding-small round" role="button"
          title="Toggle table of content"
          x-show="scrollTop > 800" @click="scrollToTop" x-transition>
        <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </span>

</div>
<footer class="footer">
    <div class="container">
        <!-- it's okay to remove the links and content here - everything is cool (DC) -->
        <div>&copy; Copyright <?= date('Y').' '.OUR_NAME ?></div>
        <div><?= anchor('https://trongate.io', 'Powered by Trongate') ?></div>
    </div>
</footer>
<div id="slide-nav">
    <div id="close-btn" onclick="closeSlideNav()">&times;</div>
    <ul auto-populate="true"></ul>
</div>
<script src="<?= BASE_URL ?>js/app.js"></script>
<script src="documentation-w3css_module/js/clean.js"></script>

<script>

    document.addEventListener('alpine:init', () => {
        Alpine.data('data', () => ({
            scrollTop: 0,
            darkMode: localStorage.getItem('darkMode') === 'true',

            toggleDarkMode() {
                this.darkMode = !this.darkMode;
            },

            isDarkModeOn() {
                return this.darkMode === true;
            },

            setScrollToTop() {
                this.scrollTop = document.body.scrollTop;
            },

            scrollToTop() {
                document.body.scrollTop = 0;

            },

            init() {
                this.$watch('darkMode', val => localStorage.setItem('darkMode', val));
            },
        }));

        Alpine.data('dropdown', () => ({
            openDropdown: false,

            toggleDropdown() {
                this.openDropdown = !this.openDropdown;
            },

            hideDropdown() {
                this.openDropdown = false;
            }
        }));
    });


</script>

</body>
</html>
