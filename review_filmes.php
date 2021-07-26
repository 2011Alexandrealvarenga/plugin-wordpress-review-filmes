<?php 
/*
Plugin Name: Review Filmes
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
    function register_post_type(){
        register_post_type('review_filmes', array(
            'labels' => array(
                'name' => 'Filmes Review',
                'singular_name' => 'Filmes Review',
            ),
            'description' => 'Post para cadastro de reviews',
            'supports' => array(
                'title','editor','except','revisions','thumbnail','custom-fields'
            ),
            'public' => TRUE,
            'menu_position' => 4,
        ));
    }
}
review_filmes::getInstance();


