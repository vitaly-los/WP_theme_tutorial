<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="wrapper">
            <header>
                <div class="header-top clearfix">
                    <a href="<?php
                    echo home_url();
                    ?>" class="logo">Wood Design</a>
                    <nav  class="topmenu">
                        <div class="menu-button">MENU</div>
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'top',
                            'container' => null
                        ]);
                        ?>
                    </nav>

                </div>
                <?php if (is_active_sidebar('sidebar-top')): ?>
                    <div  class="header-bottom">
                        <?php dynamic_sidebar('sidebar-top'); ?>
                    </div>
                <?php endif; ?>
            </header>
            <div  class="content-wrapper clearfix">