<?php

class Support {
  public static function css() {
    add_theme_support('wp-block-styles');
    add_editor_style('style.css');
  }

  public static function init() {
    add_action('after_setup_theme', ['Support', 'css']);
  }
}
