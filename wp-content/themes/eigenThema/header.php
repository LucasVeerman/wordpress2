<!DOCTYPE html>
<html>
    <head>
       <?php wp_head() ?>
        <title><?php bloginfo('title') ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" type="text/css" href="wp-content/themes/eigenThema/style.css">
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    </head>
    <body>
        <div id="header">
           <div id="logo">
              <div id="tekst1">
                    <h1><a href="#"><?php bloginfo('name') ?></a></h1>
                </div>
                <div id="tekst2">
                    Een Wordpress website
                </div> 
            </div>
            <div id="menu">
                <a href="#">Blog </a><a href="#"> Biografie</a>
            </div>
        </div>