<?php 


if (!function_exists("dd")) {
    function dd($input) {
        header("location:$input");
    }
}
