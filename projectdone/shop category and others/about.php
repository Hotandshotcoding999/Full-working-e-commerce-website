<?php

include '../../projectdone/components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../../projectdone/css/style.css">

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
   
<?php include '../../projectdone/components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="../../projectdone/images/23.png" alt="">
      </div>

      <div class="content">
         <h3>Developer's Message:</h3>
         <p>Hey There ! I'm Priyom Biswas Alongside me is my friend Ritu Shah. We're both Students of BCA in the Department of Computer Science at Tinsukia College [Batch : 2024] . We share a passion for coding and exploring new technologies. Together, we're always eager to learn and grow in our field.</p>

         <p>We would like to thank <a href="" target="_blank"></a>Mrs.Pooja Kumari mam for guiding us through the session and making us able to develop projects like this. </p>
         <a href="../../projectdone/shop category and others/contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Client's Reviews.</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="../../projectdone/images/pic-5.jpg" alt="">
         <p>Been using their services for quite a bit and have never had an issue with the quality of their products. Online e-products working great as well. Only issue I have is they usually deliver when I'm a little caught up, though I've set a preferred delivery time. Everything else has been good.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> <a href="" target="_blank">Denisha Adhikari</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="../../projectdone/images/pic-1.jpg" alt="">
         <p>It is the first online services in India which we can trust completely.I always unbox making a video and instantly complain if there's anything wrong. Sometimes even don't need to return the item and they process the refund. Mamobiles do heavy fine to sellers who send wrong products thats why its platform getting better day by day.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="" target="_blank">Rushab Risal</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="../../projectdone/images/pic-3.jpg" alt="">
         <p>Maxmobiles is great if you choose good sellers . A variety of required item available . Customers can return and refund full amount within 7 days easily . Maxmobiles is boosting eCommerce business in Itanagar.It provides great opportunity to sale items online with ease.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="" target="_blank">Kaushal Shah</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="../../projectdone/images/pic-7.jpg" alt="">
         <p>Using Maxmobiles for online shopping from almost 3 years. Outstanding experience with them. Game vouchers and pick up point as delivery with 0 shipping charges are super saving services.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="" target="_blank">Subash Ray</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="../../projectdone/images/pic-2.jpg" alt="">
         <p>I have been using their services for the last 2 years and I have found them extremely reliable.Their return policy is what gives you an extra layer of reliance and peace of mind. In case the product doesn't meet your expectations or if there is any fault in it. then you can return the product within seven days from the date of delivery.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="" target="_blank">Ranjit Chaudhary</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="../../projectdone/images/pic-6.jpg" alt="">
         <p>Maxmobiles is cool! I have ordered hundreds of products from it and never got any scam. It delivers products in time with out delay. Packaging of products are strong and delivery rates are too low. Just amazing Website will keep shopping from Maxmobiles.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href=""  target="_blank">Pranil Poudel</a></h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include '../../projectdone/components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="../../projectdone/js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>