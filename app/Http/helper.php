<?php

if (!function_exists('lang')) {
    function lang()
    {
        if (session()->has('lang')) {
            return session('lang');
        } else {
            return "ar";
        }
    }
}

if (!function_exists('langDir')) {
    function langDir()
    {
        if (session()->has('lang')) {
            if (session('lang') == 'ar') {
                return 'rtl';
            } else {
                return 'ltr';
            }
        } else {
             return 'ltr';
        }
    }
}
