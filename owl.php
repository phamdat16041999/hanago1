<!DOCTYPE html>
<html lang="en">
<head>

  <!-- head -->
  <meta charset="utf-8">

  <!--   <link rel="stylesheet" href="C:\Users\Pham Dat\Desktop\owl\docs.theme.min.css"> -->
  <link rel="stylesheet" href="owl/owl.carousel.min.css">
  <!--     <link rel="stylesheet" href="C:\Users\Pham Dat\Desktop\owl\owl.theme.default.min.css"> -->
  <!-- javascript -->
  <script src="owl/jquery.min.js"></script>
  <script src="owl/owl.carousel.js"></script>
  <style>
   .item img{
    width: 100%;
    height: 100px;
  }
  @media screen and (max-width: 1204px) {
   .item img{
    width: 100%;
    height: 70px;
  }
}
</style>
</head>
<body>

  <!--  Demos -->
  <section id="demos">
    <div class="row">
      <div class="large-12 columns" style="width: 100%">
        <div class="owl-carousel owl-theme">
         <?php 
         $sql = "Select * from duantrienkhai";
         $cats = query($sql);
         for($i=0; $i<count($cats); $i++)
         {
          ?>
          <div class="item">
           <img src="<?=$cats[$i][2]?>" alt="image"/>

         </div>
         <?php 
       }
       ?>
     </div>
     <script>
      $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
          items: 4,
          loop: true,
          margin: 10,
          autoplay: true,
          autoplayTimeout: 1000,
          autoplayHoverPause: true,
          dots: false,

        });
        $('.play').on('click', function() {
          owl.trigger('play.owl.autoplay', [1000])
        })
        $('.stop').on('click', function() {
          owl.trigger('stop.owl.autoplay')
        })
      })

    </script>
  </div>
</div>
</section>



</body>
</html>