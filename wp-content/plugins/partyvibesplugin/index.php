<?php
/*
* Plugin Name: Repot Plugin 
* Plugin URI: https://repot.petratrananh.dk/
* Description: This is a pop up form Plugin for RePot based on HTML5, CSS, JS and PHP
* Version: 3.0.0
* Author: Petra Tran Anhova
* Author URI: https://repot.petratrananh.dk/
* License: GPL2
*/

function newsletter_form()
{
  $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
  	$content .= '<section>';
    $content .= '<h3 id="velkommen">#IDOBETTER #REPOT </h3>';
    $content .= '<img id="logo" src=" '.plugins_url("partyvibesplugin/img/logo.png").' " ';
    $content .= 'alt="Repot Logo">';
  	$content .= '<p id="text">Share with us your journey. Become a part of the world where you do your best for yourself and the enviroment around you.  </p>';
  	$content .= '</section>';
    $content .= '<section class="form">';
    $content .= '<form action="#" id="myForm">';
  	$content .= '<div>';
 	$content .= '<input type="submit" value="Follow us" name="submitBtn" id="submitBtn2">';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
  	$content .= '</div>';
    return $content;
}

    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('show_partyvibesplugin','newsletter_form');
    
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');
    

    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
        
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:400,500,800&display=swap');
        
        wp_enqueue_style('CustomStylesheet', plugins_url('partyvibesplugin/css/style.css'));
        
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('partyvibesplugin/js/script.js'), array('jquery'), null, true);
    }


