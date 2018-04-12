<?php

$lc = "";

if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
    $locale = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

if($locale == "es"){
    header("Location: home_es.html");
    exit();
/*
} else if($lc == "pt"){
    header("location: home_pt.html");
    exit();
*/
} else { 
    header("location: home_en.html");
    exit();
}
