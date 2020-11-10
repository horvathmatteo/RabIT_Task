<?php

class appController extends DbConnect {
    public static function CreateView($viewName) {
        require_once("./view/$viewName.php");
    }

    public static function listAds(){
        $ads = self::query("SELECT title, m_name FROM  users,advertisements 
                            WHERE advertisements.userid = users.ID");
        return $ads;
    }

    public static function listUsers(){
        $user = self::query("SELECT * FROM users");
        return $user;
    }
}

?>
