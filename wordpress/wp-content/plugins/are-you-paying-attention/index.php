<?php

/* Plugin Name: Are you Paying Attention Quiz
Description: Give your readers a multiple choice question.
Version 1.0
Author: Emma
*/

if (! defined('ABSPATH') ) exit;

class AreYouPayingAttention {
    function __construct(){
        add_action('enqueue_block_editor_assets', array($this, 'adminAssets'));
    }

    function adminAssets() {
        wp_enqueue_script('ournewblocktype', plugin_dir_url(__FILE__) . 'test.js', array('wp-blocks','wp-element'));
    }
    
}

$areYouPayingAttention = new AreYouPayingAttention();