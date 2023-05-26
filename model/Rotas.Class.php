<?php
Class Rotas{
    public static $pag;
    private static $folder_controller = 'controller';
    private static $folder_view = 'view';

    static function get_SiteHome(){
        return config::SITE_URL . '/' . config::SITE_FOLDER;
    }

    static function get_SiteRoot(){
        return $_SERVER['DOCUMENT_ROOT'] . '/' .config::SITE_FOLDER;
    }

    static function  get_SiteTheme(){
        return self::get_SiteHome() . '/' . self::$folder_view. '/' .'template';
    }

    static function get_Cart(){
        return self::get_SiteHome() . '/carrinho';
    }

    static function get_Page(){
        if (isset($_GET['pag'])){
            $pagina = $_GET['pag'];
            self::$pag = explode('/', $pagina);
            $page = 'controller/' . self::$pag[0] . ".php";

            //echo "<pre>";
            //var_dump(self::$pag);
            //echo "</pre>";
    
            if (file_exists($page)){
                include $page;
            }else{
                include 'erro.php';
            }
        }
    }
}