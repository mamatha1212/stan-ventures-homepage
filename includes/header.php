<?php
// includes/header.php
?>
<header class="site-header">
    <div class="container flex justify-between">
        <a href="/" class="logo-link">
            <span class="logo-icon">
                <!-- Figma Logo: Orange Circle with White S shape -->
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="20" cy="20" r="20" fill="#FF5722"/>
                    <path d="M26 14C24.5 13 22.5 13 22.5 13C18.5 13 16.5 15 16.5 17.5C16.5 20 18.5 21 21.5 22C24.5 23 26.5 24 26.5 26.5C26.5 29 23.5 30 19.5 30C19.5 30 16.5 30 14 28" stroke="white" stroke-width="3" stroke-linecap="round"/>
                </svg>
            </span>
            <span class="logo-text">
                Stan<br>Ventures
            </span>
        </a>
        
        <div class="mobile-toggle">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>

        <nav class="main-nav">
            <ul class="flex gap-md">
                <li><a href="#services" class="nav-link">Services <span class="arrow-down"></span></a></li>
                <li><a href="#resources" class="nav-link">Resources <span class="arrow-down"></span></a></li>
                <li><a href="#case-studies" class="nav-link">Case Studies</a></li>
                <li><a href="#about" class="nav-link">About Us <span class="arrow-down"></span></a></li>
            </ul>
        </nav>

        <div class="header-actions">
            <a href="#proposal" class="btn btn-primary">Get a Proposal</a>
        </div>
    </div>
</header>
