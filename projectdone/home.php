<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MaxMobiles</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DJYXWB1YNS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-DJYXWB1YNS');
</script>

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/home-img-1.png" alt="">
         </div>
         <div class="content">
            <span>Upto 50% Off</span>
            <h3>Latest Smartphones</h3>
            <a href="shop category and others/category.php?category=smartphone" class="btn">Shop Now</a>
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<section class="category">

   <h1 class="heading">Shop by Brands</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="shop category and others/category.php?category=samsung" class="swiper-slide slide">
      <img src="images/samsung logo.webp" alt="">
      <h3>Samsung</h3>
   </a>

   <a href="shop category and others/category.php?category=apple" class="swiper-slide slide">
      <img src="images/apple logo.webp" alt="">
      <h3>Apple</h3>
   </a>

   <a href="shop category and others/category.php?category=xiaomi" class="swiper-slide slide">
      <img src="images/mi-logo.webp" alt="">
      <h3>xiaomi</h3>
   </a>

   <a href="shop category and others/category.php?category=vivo" class="swiper-slide slide">
      <img src="images/vivo-logo.webp" alt="">
      <h3>Vivo</h3>
   </a>

   <a href="shop category and others/category.php?category=oppo" class="swiper-slide slide">
      <img src="images/oppo-logo.webp" alt="">
      <h3>Oppo</h3>
   </a>

   <a href="shop category and others/category.php?category=realme" class="swiper-slide slide">
      <img src="images/realme-logo.webp" alt="">
      <h3>Realme</h3>
   </a>

   <a href="shop category and others/category.php?category=oneplus" class="swiper-slide slide">
      <img src="images/one-plus-logo.webp" alt="">
      <h3>Oneplus</h3>
   </a>

   <a href="shop category and others/category.php?category=poco" class="swiper-slide slide">
      <img src="images/Poco-logo.webp" alt="">
      <h3>Poco</h3>
   </a>

   <a href="shop category and others/category.php?category=nokia" class="swiper-slide slide">
      <img src="images/nokia-logo.webp" alt="">
      <h3>Nokia</h3>
   </a>

   <a href="shop category and others/category.php?category=infinix" class="swiper-slide slide">
      <img src="images/Infinix-logo - Copy (2).webp" alt="">
      <h3>Infinix</h3>
   </a>

   <a href="shop category and others/category.php?category=itel" class="swiper-slide slide">
      <img src="images/itel logo.jpg" alt="">
      <h3>Itel</h3>
   </a>

   <a href="shop category and others/category.php?category=tecno" class="swiper-slide slide">
      <img src="images/tecno-logo.webp" alt="">
      <h3>Tecno</h3>
   </a>

   <a href="shop category and others/category.php?category=motorola" class="swiper-slide slide">
      <img src="images/motorola-logo.webp" alt="">
      <h3>Motorola</h3>
   </a>

   <a href="shop category and others/category.php?category=iqoo" class="swiper-slide slide">
      <img src="images/iqoo-ready-logo.webp" alt="">
      <h3>Iqoo</h3>
   </a>

   <a href="shop category and others/category.php?category=lava" class="swiper-slide slide">
      <img src="images/lava-logo.webp" alt="">
      <h3>Lava</h3>
   </a>

   <a href="shop category and others/category.php?category=asus" class="swiper-slide slide">
      <img src="images/asus-logo.webp" alt="">
      <h3>Asus</h3>
   </a>

   <a href="shop category and others/category.php?category=micromax" class="swiper-slide slide">
      <img src="images/micromax-logo.webp" alt="">
      <h3>Micromax</h3>
   </a>

   <a href="shop category and others/category.php?category=google" class="swiper-slide slide">
      <img src="images/google-logo.webp" alt="">
      <h3>Google</h3>
   </a>

   <a href="shop category and others/category.php?category=honor" class="swiper-slide slide">
      <img src="images/honor-logo.webp" alt="">
      <h3>Honor</h3>
   </a>

   <a href="shop category and others/category.php?category=nothing" class="swiper-slide slide">
      <img src="images/Nothing-logo.webp" alt="">
      <h3>Nothing</h3>
   </a>

   <a href="shop category and others/category.php?category=reliance" class="swiper-slide slide">
      <img src="images/reliasnce-logo.webp" alt="">
      <h3>Reliance</h3>
   </a>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<section class="home-products">

   <h1 class="heading">Latest products</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="shop category and others/quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>Rs.</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>