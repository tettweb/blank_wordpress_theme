<?php

// Please run "npm i" on the root of this theme

function lmc_enqueue(){
  $uri = get_theme_file_uri();

  //Register
  wp_register_style('lmc_normalizecss', $uri . '/node_modules/normalize.css/normalize.css');
  wp_register_style('lmc_main_style', $uri . '/assets/css/main.css');

  //Enqueue
  wp_enqueue_style('lmc_normalizecss');
  wp_enqueue_style('lmc_main_style');
}