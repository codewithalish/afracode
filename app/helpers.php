<?php


function defaultImage($path = null, $alt = null)
{
    $path = ($path != null) ? $path :  'images/default.jpg';
    echo '<img src="' . $path . '" alt="' . $alt . '" />';
}


