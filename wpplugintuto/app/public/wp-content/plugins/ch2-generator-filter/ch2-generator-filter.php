<?php
/*
  Plugin Name: Chapter 2 - Generator Filter
  Plugin URI: 
  Description: Companion to recipe 'Modifying the generator tag title using plugin filters'
  Author: ylefebvre
  Version: 1.0
  Author URI: http://ylefebvre.ca/
 */

 add_filter('the_generator','ch2gf_generator_filter');

function ch2gf_generator_filter($html,$type){
    if($type)
}