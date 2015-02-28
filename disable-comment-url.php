<?php

/*
Plugin Name: Disable Comment URL
Plugin URI: http://www.mastergraphiks.com
Description: This Plugin Lets help you to Disable the URL on your Comment Form!
Author: Syed Raza Ali
Version: 1.0
Author URI: http://www.mastergraphiks.com
*/

// Below is the Function created for removing the URL from your Comment

function disable_comment_url($fields)
{
    unset($fields['url']);
    return $fields;
}

// Here added filter to your website to make this plugin work with your Wordpress Version

add_filter('comment_form_default_fields','disable_comment_url');
?>
