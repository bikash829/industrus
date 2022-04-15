<?php session_start(); ?>
</head>

<body>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        industrus@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +880-1234567899
                    </div>
                </div>
                <div class="ht-right">
                    <?php if (isset($_SESSION['isLoggedIn'])) { ?>
                        <a class="login-panel" href="logout"></i>Logout</a>

                        <a class="login-panel pr-3"><i class="fa fa-user"></i><?= $_SESSION['name'] ?></a>
                    <?php } else { ?>
                        <a class="login-panel" href="login"><i class="fa fa-user"></i>Login</a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="index">Home</a></li>
                        <li><a href="sample-request">Order</a></li>
                        <li><a href="blog">Blog</a></li>
                        <li><a href="contact">Contact</a></li>
                        <?php if (isset($_SESSION['isLoggedIn'])) { ?>

                            <li class="hidden_nav"><a href="logout">Logout</a></li>
                        <?php } else { ?>
                            <li class="hidden_nav"><a href="login">Log In</a></li>
                        <?php } ?>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>