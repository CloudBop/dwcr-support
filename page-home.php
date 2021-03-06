<?php
/*
	Template Name: Home Page	
*/

get_header(); ?>

	<?php get_template_part('frontpage-content','hero'); ?>
	<?php get_template_part('frontpage-content','optin'); ?>
	<?php get_template_part('frontpage-content','boost'); ?>
	<?php get_template_part('frontpage-content','benefits'); ?>
	<?php get_template_part('frontpage-content','coursefeatures'); ?>
	<?php get_template_part('frontpage-content','projectfeatures'); ?>
	<?php get_template_part('frontpage-content','featurette'); ?>
	<?php get_template_part('frontpage-content','instructor'); ?>
	<?php get_template_part('frontpage-content','testimonials'); ?>

<?php get_footer(); ?>