<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

   <meta name="description" content="My second project">
	 <meta name="author" content="Andrey">

    
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/nova.css">
    <link rel="stylesheet" href="css/opensans.css">
    <link rel="stylesheet" href="css/montserrat.css">
    <link rel="stylesheet" href="css/style.css?v1.0">
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    <title>Gym</title>
  </head>
  <body>
    <p class="validator">
<a href="http://jigsaw.w3.org/css-validator/check/referer">
    <img style="border:0;width:88px;height:31px"
        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
        alt="Правильный CSS!" />
    </a>
</p>


<?php include 'header.php'?>


<section class="contacts-section">
    <div class="contacts-section__container">
        <div class="contacts-section__title">
            <h2 class="contacts-section__title-text pb-3 col-12 col-lg-7">Contact Us</h2>
        </div>
        <div class="contacts-section__subtitle pb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius deleniti laboriosam quo accusantium praesentium blanditiis dolor aspernatur voluptatum saepe in, reiciendis quis, vitae perspiciatis eligendi atque at enim illum ex, inventore recusandae alias nostrum consectetur. Aliquam nulla, et eius facere impedit fugiat voluptates possimus natus accusantium eos, deserunt, illum atque.</div>
        <div class="contacts-section__middlesection row align-items-stretch">
            <div class="contacts-section__wrap-form col-12 col-lg-7">
                <form action="PHPmailer/mailer/smartcontact.php" class="contacts-section__form" method="POST">
                    <input type="text" class="contacts-section__input mb-3 p-2" name="your_name" placeholder="Your Name">
                    <input type="text" class="contacts-section__input mb-3 p-2" name="your_email" placeholder="Your Email">
                    <textarea class="contacts-section__textarea mb-3 p-2" name="your_text" placeholder="Your Message"></textarea>
                    <input type="submit" class="contacts-section__submit pt-3 pb-3 mb-5" value="submit">
                </form>
            </div>
   <!--          
       <form action="PHPmailer/mailer/smart.php" method="POST">
         <input type="text" name="your_name"class = "footer__form-input mb-3" placeholder="Your name">
         <input type="email" name="your_email"class = "footer__form-input mb-5" placeholder = "Your email adress">
         <input type="submit" class = "footer__form-submit" value = "subscribe to newsletter">
       </form> -->

            <div class="contacts-section__wrap-text col-12 col-lg-5">
                <div class="contacts-section__subtitle_right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni assumenda est vitae ullam architecto odio nisi maxime dolore pariatur.</div>
                <div class="contacts-section__main-information ">
                    <p class="contacts-section__number"><i class="fas fa-phone-square-alt pr-2"></i>800 1234 5678</p>
                    <p class="contacts-section__email"><i class="fas fa-envelope-open  pr-2"></i>info@yourwebsite.com</p>
                    <p class="contacts-section__website"><i class="fas fa-globe-americas pr-2"></i>ww.website.com</p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'?>