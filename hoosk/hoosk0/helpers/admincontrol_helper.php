<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Admincontrol_helper
{
    public static function is_logged_in($userName)
    {
        // if (($userName == "")):
        //     var_dump($userName);
        //     $redirect = BASE_URL . '/admin/login';
        // header("Location: $redirect");
        // exit;
        // endif;
    }
    public static function is_Role_Admin($role)
    {
        // if (($role != "admin")):
        //     // var_dump($role);
        //     $redirect = BASE_URL . '/admin';
        // header("Location: $redirect");
        // exit;
        // endif;
    }
}
