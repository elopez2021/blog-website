<?php
require_once 'config.php';

if(isset($_GET['watch'])){
    $id=$_GET['watch'];

    $query="SELECT * FROM post WHERE id=?";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $result=$stmt->get_result();
    $row=$result->fetch_assoc();

    $id=$row['id'];
    $title=$row['title'];
    $content=$row['content'];
    $image=$row['image'];
    $category=$row['category'];
    $created_by=$row['created_by'];
    $date=$row['date'];
    
 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

<!--Stylesheet----------------------------------->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/article.css"/>
<!--fav-icon------------------------------------->
<link rel="shortcut icon" href="images/fav-icon.png"/>
<!--using-font-awesome--------------------------->
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
<!--poppins-font-family-------------------------->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


</head>
<body>

 <!--navigation----------------------------->
 <div class="navigation">
    <!--logo---------->
    <a href="index.html" class="logo">
        <i class="fas fa-blog"></i> Blog
    </a>
</div>

<section id="blog-artcile">
    <!--side-ad---------->
    <div class="side-ad">
      <!-- NO ELIMINAR  -->
    </div>
    <!--article-container----->
    <div class="article-container">
        <!--main-heading------------------->
        <div class="article-main-heading">
            <h1><?= $title;?></h1>
        </div>
        <!--publisher-name-and-date-------->
        <div class="by-date">
            <!--name------->
            <div class="article-by">
                <i class="far fa-user"></i>
                <span><?= $created_by;?></span>
            </div>
            <!--date------->
            <div class="article-date">
                <i class="far fa-clock"></i>
                <p><?= $date;?></p>
            </div>
        </div>
        <!--article-img--------------------------------->
        <div class="article-img">
            <img alt="img" src="crud/<?= $row['image']?>"/>
        </div>

       
        <!--text----------------------------------->
        <div class="article-text">
            <!--box-1-------------->
            <div style="text-align:justify">
                <p><?= $content;?></p>
            </div>
            
        </div>
    </div>

</section>

<!--footer------------------------------------->
<footer>
<span class="copyright">Copyright 2021 - GoingToInternet</span>
<!--social-links------->
<div class="footer-social">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
</div>
</footer>

</body>
</html>