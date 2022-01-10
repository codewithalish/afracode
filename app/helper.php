<?php

function defaultImage($path = null , $alt = null){
    $default_image='images/default.jpg';
    $path = ($path != null) ? $path : $default_image;
    echo '<img src="' . $path . '"alt=' . $alt .'" />';
}

