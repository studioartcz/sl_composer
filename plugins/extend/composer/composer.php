<?php

if (!defined('_core')) {
    die;
}

/* registrace extendu */
_extend('regm', 'sys.init', function($args) {

    // Autoloader
    if (is_file(_indexroot . 'vendor/autoload.php')) {
        require_once(_indexroot . 'vendor/autoload.php');
    }

});