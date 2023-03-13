<?php

class Setup {
  public static function themes() {
    wp_enqueue_style('mytheme-styles', get_stylesheet_uri(), ['bootsrap'], wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('boostrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', [], '4.4.1', 'all');
    wp_enqueue_style('mytheme-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', [], '5.13.0', 'all');
  }

  public static function scripts() {
    wp_enqueue_script('jquery-script', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', [], '3.4.1', true);
    wp_enqueue_script('popper-script', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], '1.16.0', true);
    wp_enqueue_script('bootsrap-script', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', [], '4.4.1', true);
  }

  public static function init() {
    add_action('wp_enqueue_scripts', ['Setup', 'themes']);
    add_action('wp_enqueue_scripts', ['Setup', 'scripts']);
  }
}
