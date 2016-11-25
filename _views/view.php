<?php
/**
 * Created by PhpStorm.
 * User: jean
 * Date: 24/11/16
 * Time: 20:17
 */
//namespace _views;


class view
{
    public static function header($addon = '')
    {
        $header = '           
                
                <head>
                <meta charset="utf-8">
                <meta http-equiv="x-ua-compatible" content="ie=edge">
                <title>Agenda</title>
                <meta name="description" content="">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
                <link rel="icon" href="img/favicon">
                <!-- Place favicon.ico in the root directory -->
                ' . $addon . '
                <link rel="stylesheet" href="css/normalize.css">
                <link rel="stylesheet" href="css/main.css">
                <link rel="stylesheet" href="css/bootstrap.min.css">
                <link href="css/sticky-footer.css" rel="stylesheet">                
                <script src="js/vendor/modernizr-2.8.3.min.js"></script>
            </head>';
        echo $header;
    }


    public static function footer()
    {
        $footer = '<footer class="footer">';
        $footer .= '<div class="container">';
        $footer .= '<span class="text-muted">Usuário: ' . $_SESSION['login'] . '</span>';
        $footer .= '</div>';
        $footer .= '</footer>';
        echo $footer;
    }
}