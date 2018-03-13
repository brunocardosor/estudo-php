<?php

require_once("vendor/autoload.php");

use Rain\Tpl;

$config = array(
    "tpl_dir" => "templates/",
    "cache_dir" => "cache/",
    "debug" => true
);

Tpl::configure($config);

// Tpl::registerPlugin (new Tpl\Plugin\PathReplace());

$tpl = new Tpl();

$tpl->assign("name", "Obi Wan Kenoby");

$tpl->assign("version", PHP_VERSION);

$tpl->draw("index");
