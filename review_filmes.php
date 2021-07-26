<?php 
/*
Plugin Name: review filmes
Plugin URI: www.alexandre.com
Description: Alterar Rodape
Version: 1.0
Author: alexandre
Author URI: www.alexandre.com
License: GLPV2
Text Domain: primeiro plugin
*/

class review_filmes{
    private static $instance;
    public static function getInstance(){
        if(self::$instance == NULL){
            self::$instance = new self();
        }
    }
    private function __construct(){
        add_action('init',array($this, 'register_post_type'));

    }



}


review_filmes::getInstance();


