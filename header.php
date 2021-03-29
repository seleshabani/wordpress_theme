<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body>
    <nav class="base-menu">
        <div class="menu-brand">
            <div class="brand-icon">
                <div class="brand-icon-1"></div>
                <div class="brand-icon-2"></div>
                <div class="brand-icon-3"></div>
            </div>
            <div class="brand-text">
                <a href="/">Blog App</a>
            </div>
        </div>
        <?php wp_nav_menu(['theme_location'=>'header','menu_class'=>'menu-nav',
        'container'=>'','items_wrap'=>'<div id="%1$s" class="%2$s">%3$s</div>']) ?>
        <!-- <div class="menu-nav">
             <a href="#" class="menu-nav-item">Demos</a>
            <a href="#" class="menu-nav-item">Features</a>
            <a href="#" class="menu-nav-item">Post</a>
            <a href="#" class="menu-nav-item">Categories</a>
            <a href="#" class="menu-nav-item active">Shop</a>
        </div>-->
        <div class="menu-widgets">
            <div class="search">
                <i class="fa fa-search"></i>
            </div>
            <div class="basket">
                <i class="fa fa-shopping-basket"></i>
            </div>
            <div class="dark-mode-handler">
                <i class="far fa-sun"></i>
                <div class="input">
                    <input type="checkbox" name="" id="">
                </div>
                <i class="far fa-moon"></i>
            </div>
        </div>
    </nav>
    <main>