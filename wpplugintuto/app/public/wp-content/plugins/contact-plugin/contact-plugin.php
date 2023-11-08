<?php 

/*
Plugin Name: Contact Plugin
Plugin URI:
Description: Plugin de formulalire de contact
Version: 1.0
Author: van kocko 
Author URI: http://ylefebvre.ca
License: GPLv2
*/



if(!defined('ABSPATH'))
{
    die("Vous ne pouvez pas accéder ici");
}
if(!class_exists('contactPlugin')){
    class contactPlugin{
         require_once(plugin_dir_path(__FILE__).'/vendor/autoload.php'); 
    }
    new class contactPlugin

}