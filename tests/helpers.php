<?php

// Polyfill core framework functions
if (!defined('app_path')) {
    function app_path($path) {
        return __DIR__.'/../src/'.$path;
    }
}

if (!defined('public_path')) {
    function public_path($path) {
        return app_path($path);
    }
}
