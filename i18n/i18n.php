<?php

// i18n localization with gettext
define('DEFAULT_LOCALE', 'hu_HU.utf8');
define('DEFAULT_DOMAIN', 'messages');


putenv("LANG=".DEFAULT_LOCALE);
putenv("LANGUAGE=".DEFAULT_LOCALE);
setlocale(LC_ALL, DEFAULT_LOCALE);


textdomain(DEFAULT_DOMAIN);
bindtextdomain(DEFAULT_DOMAIN, __DIR__ . '/locales');
bind_textdomain_codeset(DEFAULT_DOMAIN, 'UTF-8');
