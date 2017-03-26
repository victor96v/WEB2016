<!DOCTYPE html>
<html lang="en">
<head>


    <?php require "PHP/head.php"; ?>
</head>
<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

       <?php require "PHP/navbar.php"; ?>

      </div>
    </div>
<!-- #Header Starts -->




<div id="home">
<!-- Slider Starts -->
<?php include "PHP/slider.php"; ?>
<!-- #Slider Ends -->
</div>

<!-- Circle Starts -->
<div id="menu"  class="container spacer about">
<?php require "PHP/menu.php"; ?>
</div>
<!-- #Cirlce Ends -->
<div id="carta" class="spacer">
 <?php include "assets/3DRestaurantMenu/carta.php"; ?>
</div>
<!-- team -->
<div id="team" class="spacer">
    <?php require "PHP/team.php"; ?>
</div>

<!-- team ends -->



<div id="contact" class="spacer">
<!--Contact Starts-->
<div class="container contactform center">

<?php include "PHP/reservas.php"; ?>

</div>

</div>
<!--Contact Ends-->



<!-- Footer Starts -->


<div class="footer text-center spacer">

<?php require "PHP/footer.php";?>
    
</div>






<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>


<!-- jquery -->
<?php require "PHP/scripts.php"; ?>



</body>
</html>