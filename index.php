<?php

require "./lib/autoload.php";

$smarty = new Tamplate();
Rotas::get_Page();
//$smarty->assign('ID', 'JOAO GABRIEL');
//echo Rotas::get_SiteHome(). '<br>';
//echo Rotas::get_SiteRoot();
$smarty->assign('GET_THEME', Rotas::get_SiteTheme());
$smarty->assign('GET_HOME',  Rotas::get_SiteHome());

$smarty->display('index.tpl');