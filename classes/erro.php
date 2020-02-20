<?php

class erro{

    public static function trataerro(Exception $e){
        if (DEBUG)
        {
            echo '<pre>';
            print_r($e);
            echo '</pre>';
        }   
    else
        {
            echo $e->getMessage();
            exit();
         }
    }
}
