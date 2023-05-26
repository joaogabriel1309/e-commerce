<?php

class Tamplate extends Smarty{
    function __construct()
    {
        parent::__construct();

        self::setTemplateDir('view/');
        self::setCompileDir('view/compiler/');
        self::setCacheDir('view/cache/');
    }
}