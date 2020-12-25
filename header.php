<?php
/*
* Header File
*
* @package Tochi
*/

 ?>

 <!DOCTYPE html>
 <html lang="<?php language_attributes(); ?>" dir="ltr">
   <head>
     <meta charset=<?php bloginfo('charset') ?>>
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie-edge">

     <!--Adds Wordpress header scripts, links and other subscriptions needed by the file  -->
     <?php wp_head(); ?>
     <title>Wordpress Theme</title>
   </head>
   <body <?php body_class(); ?>>

     <?php
     //Checking for backward Compatibility
      if(function_exists ( 'wp_body_open' )){
        //
        wp_body_open();

      }

     ?>


     <header> <p>Header</p> </header>
