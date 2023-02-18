<?php

class Hook
{
    public static function view($nameView, $argc = [])
    {  
        ob_start();
        extract($argc);
        require_once "./view/$nameView.php";
        $content1 = ob_get_contents();
        ob_clean();
        ob_end_flush();
        echo $content1; // Hieu.dev. From e-web.vn
    }
}
