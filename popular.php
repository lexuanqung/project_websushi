<?php
        include "connect.php";
        session_start();
        class Thongtin
        {
            public $about_caption;
            public $about_img;
        }
        
        
        
        $sql = "SELECT about_caption, about_img FROM tbl_about";
        $result = $con->query($sql);
        $array = [];
        
        if ($result->num_rows > 0) {
            // Load dữ liệu lên website
            while ($row = $result->fetch_assoc()) {
                $thongtin = new Thongtin();
                $thongtin->about_caption = $row["about_caption"];
                $thongtin->about_img = $row["about_img"];
                array_push($array, $thongtin);
            }
        
            
        } else {
            echo "0 results";
        }
        $con->close();
        
        function RenderColunCardMaThue($value)
        {
            ob_start();
         ?>
            <nav class="about">

                <div class="about__left">
                    <img src='http://localhost:8080/Project-sushi-/<?= $value->about_img ?>' width="300px">
                </div>

                <div class="about__right">
                    <div class="about__data">
                        <span class="subtitle">About us</span>

                        <h2>
                            We Provide 
                            <img src="img/about-sushi-title.png" alt="">
                            Healthy Food
                        </h2>

                        <p> <?= $value->about_caption ?></p>
                    </div>
                </div>
            </nav>

        <?php
            return ob_get_clean();
        }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ============= FAVION ======================= -->
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Sushi</title>
    <style>
       
    </style>
    
</head>
<body>
    <!-- ============= HEADER ======================= -->
    <header class="header" id="header">
        <nav class="nav">
            <a href="#" class="nav__logo">
                <img src="img/logo.png" alt="logo image">
                Sushi
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.php" class="nav__link">Home</a>
                    </li>

                    <li class="nav__item">
                        <a href="about.php" class="nav__link">About us</a>
                    </li>

                    <li class="nav__item">
                        <a href="popular.php" class="nav__link">Popular</a>
                    </li>

                    <li class="nav__item">
                        <a href="recently.php" class="nav__link">Recently</a>
                    </li>
                    <li class="nav__item">
                        <a href="recently.php" class="nav__link">Acount</a>
                    </li>
                    
                </ul>

                <!-- ======== close ========= -->
                <!-- <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div> -->

            

            </div>

            <!-- <div class="nav__button">
                Theme change button
                <i class="ri-moon-line change-theme" id="theme-button"></i>

                Toggle button
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-apps-2-line"></i>
                </div>
            </div> -->
        </nav>
    </header>

    <!-- ============= MAIN ======================= -->
    <main class="main" id="main">
        <section class="home">
            
        </section>

        <section class="about">
           
        </section>

        <section class="popular">
            <?php

            foreach ($array as $key => $value) {
                echo RenderColunCardMaThue($value);
            }
            ?>
        </section>

        <section class="recently">

        </section>
    </main>

    <!-- ============= FOOTER ======================= -->
    <footer class="footer">

    </footer>

    <!-- ============= CROLLREVEAL ======================= -->
    <script src=""></script>


    <!-- ============= MAIN JS ======================= -->
    <script src="main.js"></script>
</body>
</html>