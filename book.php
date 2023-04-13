
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ============= FAVION ======================= -->
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Sushi</title>
    <style>
        .container{
            margin-top: 200px;
        }

        

        .home__left{
            float: left;
            font-family: "Poppins", sans-serif;
            display: block;
            margin-left: 200px;
        }

        .home__left_title{
            text-align: center;
            font-size: 25px;
            column-gap: .5rem;
            text-shadow: 5px 2px 4px grey;
            font-weight: bold;
            
        }

        .home__left_title img{
            width: 40px;
        }
        .home__left .title p{
            width: 350px;
            margin-top: 30px;
        }

        .home__left .button{
            display: inline-flex;
            text-align: center;
            column-gap: .5rem;
            background-color: hsl(19, 64%, 54%);
            padding: 1rem 1.5rem;
            border-radius: 4rem;
            color: #fff;
            font-weight: 500;
            transition: background .3s;
            margin-top: 3rem;
            margin-left: 2.5rem;
            box-shadow: 3px 5px 5px 0px hsl(19, 8%, 55%);
        }

        .home__left .button i{
            font-size: 1.5rem;
            transition: transform .3s;
        }

        .home__left .button:hover{
            background-color: hsl(19, 64%, 52%);
        }

        .home__left .button:hover i{
            transform: translateX(.25rem);
        }


        .container .home__right{
            float: right;
        }

        .container .home__right .home__img img{
            width: 400px;
        }
        
        
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
                        <a href="book.php" class="nav__link">Book</a>
                    </li>

                    <li class="nav__item" id="account">
                        <a href="account.php" class="nav__link">Acount</a>
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

        </section>

        <section class="recently">

        </section>

        <section class="book">
            <div class="col-lg-6">
            <h3 style="text-align: center; margin-bottom:20px;">************** Đặt bàn **************</h3>
            <form class="row g-3">
                
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div> <br>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>

                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6" >
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form> 
            </div>
            
        </section>

        <section class="account">
        
        </section>
    </main>

    <!-- ============= FOOTER ======================= -->
    <footer class="footer">

    </footer>

    <!-- ============= CROLLREVEAL ======================= -->
    <script src="">
        
    </script>


    <!-- ============= MAIN JS ======================= -->
    <script src="main.js"></script>
   
    
    </script>
</body>
</html>