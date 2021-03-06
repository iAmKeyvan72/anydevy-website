<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    <?php
    wp_head();
    ?>

</head>

<body>
<header>
	<button class="menu-toggle">
       <span class="bar"></span>
    </button>
    <nav class="navbar">
        <ul class="navbar-list">
            <li class="navbar-item">
                <a class="navbar-link" data-text="Home" href="<?php echo site_url(); ?>">Home</a>
            </li>
            <li class="navbar-item">
                <a class="navbar-link" data-text="Projects" href="<?php echo site_url('/projects'); ?>">Projects</a>
            </li>
            <li class="navbar-item">
                <a class="navbar-link" data-text="Services" href="<?php echo site_url('/services'); ?>">Services</a>
            </li>
            <li class="navbar-item">
                <a class="navbar-link" data-text="Solutions" href="<?php echo site_url('/solutions'); ?>">Solutions</a>
            </li>
            <li class="navbar-item">
                <a class="navbar-link" data-text="Blog" href="<?php echo site_url('/blog'); ?>">Blog</a>
            </li>
            <li class="navbar-item">
                <a class="navbar-link" data-text="Contact Us" href="#footer">Contact Us</a>
            </li>
        </ul>
    </nav>

    <div>
        <a href="#footer" class="btn new-quote-btn btn-blue"> Get Free Quote Now </a>
    </div>
</header>