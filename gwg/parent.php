<?php
/*
Template Name: Go to parent
*/
wp_redirect(get_permalink($post->post_parent->ID));
?>