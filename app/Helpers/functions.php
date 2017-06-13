<?php

if ( ! function_exists('dd')) {
    function dd($data)
    {
        die(dump($data));
    }
}