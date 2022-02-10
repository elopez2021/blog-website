<?php
  include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>

<!--Stylesheet----------------------------------->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<!--fav-icon------------------------------------->
<link rel="shortcut icon" href="images/fav-icon.png"/>
<!--using-font-awesome--------------------------->
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
<!--poppins-font-family-------------------------->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>

    <section id="blog">
        <!--navigation----------------------------->
        <div class="navigation">
            <!--logo---------->
            <a href="index.html" class="logo">
                <i class="fas fa-blog"></i> Blog
            </a>
            <!--post-filter---------->
            <nav>
                <!--menu-icon------------->
                <input type="checkbox" class="menu-btn" id="menu-btn">
                <label for="menu-btn" class="menu-icon">
                    <span class="nav-icon"></span>
                </label>
                <!--filter--------->
                <ul class="blog-filter">
                    <li class="list blog-filter-active" data-filter="all">All</li>
                    <li class="list" data-filter="web">Web Design</li>
                    <li class="list" data-filter="app">App Design</li>
                    <li class="list" data-filter="new">New</li>
                </ul>
            </nav>
        </div>
        <!--container------------------------------->
        <div class="blog-container">
            <!--box-1----------------------------------------------->
            <div class="blog-box app">
                <!--img----->
                <div class="blog-img">
                    <img alt="img" src="images/b-1.jpg">
                    <span class="category">App</span>
                </div>
                <!--text---->
                <div class="blog-text">
                    <!--title------------------------>
                    <a href="article.html">
                        <strong>How To Create Ramdan Time App Design</strong>
                    </a>
                    <!--time-and-category------------->
                    <div class="category-time">
                        <span class="blog-category">App Design</span>
                        <span class="published-time">11-03-2021</span>
                    </div>
                    <!--publisher-profile------------->
                    <div class="publisher-profile">
                        <img alt="Publisher" src="images/p-1.png">
                        <span>Touseeq Ijaz</span>
                    </div>
                </div>
            </div>
            <!--box-2---------------------------------------->
            <div class="blog-box web">
                <!--img----->
                <div class="blog-img">
                    <img alt="img" src="images/b-2.jpg">
                    <span class="category">Web</span>
                </div>
                <!--text---->
                <div class="blog-text">
                    <!--title------------------------>
                    <a href="#">
                        <strong>How To Create Ramdan Time App Design</strong>
                    </a>
                    <!--time-and-category------------->
                    <div class="category-time">
                        <span class="blog-category">Web Design</span>
                        <span class="published-time">11-03-2021</span>
                    </div>
                    <!--publisher-profile------------->
                    <div class="publisher-profile">
                        <img alt="Publisher" src="images/p-1.png">
                        <span>Touseeq Ijaz</span>
                    </div>
                </div>
            </div>
            <!--box-3-------------------------------------------------->
            <div class="blog-box new">
                <!--img----->
                <div class="blog-img">
                    <img alt="img" src="images/b-3.jpg">
                    <span class="category">New</span>
                </div>
                <!--text---->
                <div class="blog-text">
                    <!--title------------------------>
                    <a href="#">
                        <strong>How To Create Ramdan Time App Design</strong>
                    </a>
                    <!--time-and-category------------->
                    <div class="category-time">
                        <span class="blog-category">App Design</span>
                        <span class="published-time">11-03-2021</span>
                    </div>
                    <!--publisher-profile------------->
                    <div class="publisher-profile">
                        <img alt="Publisher" src="images/p-1.png">
                        <span>Touseeq Ijaz</span>
                    </div>
                </div>
            </div>
            <!--box--4---------------------------------------------------------->
            <div class="blog-box app">
                <!--img----->
                <div class="blog-img">
                    <img alt="img" src="images/b-4.jpg">
                    <span class="category">App</span>
                </div>
                <!--text---->
                <div class="blog-text">
                    <!--title------------------------>
                    <a href="#">
                        <strong>How To Create Ramdan Time App Design</strong>
                    </a>
                    <!--time-and-category------------->
                    <div class="category-time">
                        <span class="blog-category">App Design</span>
                        <span class="published-time">11-03-2021</span>
                    </div>
                    <!--publisher-profile------------->
                    <div class="publisher-profile">
                        <img alt="Publisher" src="images/p-1.png">
                        <span>Touseeq Ijaz</span>
                    </div>
                </div>
            </div>
            <!--box--5----------------------------------------->
            <div class="blog-box web">
                <!--img----->
                <div class="blog-img">
                    <img alt="img" src="images/b-5.jpg">
                    <span class="category">Web</span>
                </div>
                <!--text---->
                <div class="blog-text">
                    <!--title------------------------>
                    <a href="#">
                        <strong>How To Create Ramdan Time App Design</strong>
                    </a>
                    <!--time-and-category------------->
                    <div class="category-time">
                        <span class="blog-category">Web Design</span>
                        <span class="published-time">11-03-2021</span>
                    </div>
                    <!--publisher-profile------------->
                    <div class="publisher-profile">
                        <img alt="Publisher" src="images/p-1.png">
                        <span>Touseeq Ijaz</span>
                    </div>
                </div>
            </div>
            <!--box--6--------------------------------->
            <div class="blog-box app">
                <!--img----->
                <div class="blog-img">
                    <img alt="img" src="images/b-6.jpg">
                    <span class="category">App</span>
                </div>
                <!--text---->
                <div class="blog-text">
                    <!--title------------------------>
                    <a href="#">
                        <strong>How To Create Ramdan Time App Design</strong>
                    </a>
                    <!--time-and-category------------->
                    <div class="category-time">
                        <span class="blog-category">App Design</span>
                        <span class="published-time">11-03-2021</span>
                    </div>
                    <!--publisher-profile------------->
                    <div class="publisher-profile">
                        <img alt="Publisher" src="images/p-1.png">
                        <span>Touseeq Ijaz</span>
                    </div>
                </div>
            </div>
            <!--box--7---------------------------------------->
            <div class="blog-box new">
                <!--img----->
                <div class="blog-img">
                    <img alt="img" src="images/b-7.jpg">
                    <span class="category">New</span>
                </div>
                <!--text---->
                <div class="blog-text">
                    <!--title------------------------>
                    <a href="#">
                        <strong>How To Create Ramdan Time App Design</strong>
                    </a>
                    <!--time-and-category------------->
                    <div class="category-time">
                        <span class="blog-category">App Design</span>
                        <span class="published-time">11-03-2021</span>
                    </div>
                    <!--publisher-profile------------->
                    <div class="publisher-profile">
                        <img alt="Publisher" src="images/p-1.png">
                        <span>Touseeq Ijaz</span>
                    </div>
                </div>
            </div>
            <!--box-9------------------------------------------>
            <div class="blog-box app">
                <!--img----->
                <div class="blog-img">
                    <img alt="img" src="images/b-8.jpg">
                    <span class="category">App</span>
                </div>
                <!--text---->
                <div class="blog-text">
                    <!--title------------------------>
                    <a href="#">
                        <strong>How To Create Ramdan Time App Design</strong>
                    </a>
                    <!--time-and-category------------->
                    <div class="category-time">
                        <span class="blog-category">App Design</span>
                        <span class="published-time">11-03-2021</span>
                    </div>
                    <!--publisher-profile------------->
                    <div class="publisher-profile">
                        <img alt="Publisher" src="images/p-1.png">
                        <span>Touseeq Ijaz</span>
                    </div>
                </div>
            </div>
            <!--box---9------------------------------->
            <div class="blog-box app">
                <!--img----->
                <div class="blog-img">
                    <img alt="img" src="images/b-3.jpg">
                    <span class="category">App</span>
                </div>
                <!--text---->
                <div class="blog-text">
                    <!--title------------------------>
                    <a href="#">
                        <strong>How To Create Ramdan Time App Design</strong>
                    </a>
                    <!--time-and-category------------->
                    <div class="category-time">
                        <span class="blog-category">App Design</span>
                        <span class="published-time">11-03-2021</span>
                    </div>
                    <!--publisher-profile------------->
                    <div class="publisher-profile">
                        <img alt="Publisher" src="images/p-1.png">
                        <span>Touseeq Ijaz</span>
                    </div>
                </div>
            </div>
            <!--box-10--------------------------------------->
            <div class="blog-box web">
                <!--img----->
                <div class="blog-img">
                    <img alt="img" src="images/b-6.jpg">
                    <span class="category">Web</span>
                </div>
                <!--text---->
                <div class="blog-text">
                    <!--title------------------------>
                    <a href="#">
                        <strong>How To Create Ramdan Time App Design</strong>
                    </a>
                    <!--time-and-category------------->
                    <div class="category-time">
                        <span class="blog-category">App Design</span>
                        <span class="published-time">11-03-2021</span>
                    </div>
                    <!--publisher-profile------------->
                    <div class="publisher-profile">
                        <img alt="Publisher" src="images/p-1.png">
                        <span>Touseeq Ijaz</span>
                    </div>
                </div>
            </div>
            <!--box--11---------------------------------->
            <div class="blog-box app">
                <!--img----->
                <div class="blog-img">
                    <img alt="img" src="images/b-4.jpg">
                    <span class="category">App</span>
                </div>
                <!--text---->
                <div class="blog-text">
                    <!--title------------------------>
                    <a href="#">
                        <strong>How To Create Ramdan Time App Design</strong>
                    </a>
                    <!--time-and-category------------->
                    <div class="category-time">
                        <span class="blog-category">App Design</span>
                        <span class="published-time">11-03-2021</span>
                    </div>
                    <!--publisher-profile------------->
                    <div class="publisher-profile">
                        <img alt="Publisher" src="images/p-1.png">
                        <span>Touseeq Ijaz</span>
                    </div>
                </div>
            </div>
            <!--box-12---------------------------------->
            <div class="blog-box web">
                <!--img----->
                <div class="blog-img">
                    <img alt="img" src="images/b-1.jpg">
                    <span class="category">Web</span>
                </div>
                <!--text---->
                <div class="blog-text">
                    <!--title------------------------>
                    <a href="#">
                        <strong>How To Create Ramdan Time App Design</strong>
                    </a>
                    <!--time-and-category------------->
                    <div class="category-time">
                        <span class="blog-category">Web Design</span>
                        <span class="published-time">11-03-2021</span>
                    </div>
                    <!--publisher-profile------------->
                    <div class="publisher-profile">
                        <img alt="Publisher" src="images/p-1.png">
                        <span>Touseeq Ijaz</span>
                    </div>
                </div>
            </div>
        </div>
     
    </section>
    <!--footer------------------------------------->
    <footer>
        <span class="copyright">Copyright 2022 - Blog</span>
        <!--social-links------->
        <div class="footer-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>
    <!--JQuery----------------------->
    <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
    
    <!--script----------------------->
    <script type="text/javascript">
    
        /*blog-filter-menu----------------------------*/
        $(document).on('click','.blog-filter li',function(){
            $(this).addClass('blog-filter-active').siblings().removeClass('blog-filter-active')
        });

        /*post-filter---------------------------------*/
        $(document).ready(function(){
            $('.list').click(function(){
                const value = $(this).attr('data-filter');
                if(value == 'all'){
                    $('.blog-box').show('1000');
                }
                else{
                    $('.blog-box').not('.'+value).hide('1000');
                    $('.blog-box').filter('.'+value).show('1000');
                }
            });
        });
    
        /*for-fix-filter-menu-----------------------------*/
        $(window).scroll(function(){
            if($(document).scrollTop() > 80){
                $('nav').addClass('fix-nav');
            }
            else{
                $('nav').removeClass('fix-nav');
            }
        });
    </script>
    
</body>
</html>