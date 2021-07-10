<?php
/**
* Header Template.
*
* @package Aquila
*/

?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class('hello-class'); ?>>

         <?php wp_body_open(); ?>

        <header>HEADER</header>
