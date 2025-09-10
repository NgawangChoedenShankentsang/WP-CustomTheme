<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php customtheme_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header class="header wrapper">
            <div class="header__content wrapper__content">
                <a class="logo-link" href="/">
                    <div class="logo-image">CC</div>
                </a>
                <nav class="topnav">
                    <ul class="topnav__links">
                        <li><a class="topnav__link" href="/articles">Articles</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main id="content" role="main">