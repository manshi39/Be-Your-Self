<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be YourSelf</title>

    <!-- link swipers css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

    <!-- custom stylesheet link -->
        <link rel="stylesheet" href="css/slide.css">
        

    
</head>
<body>

            <div class="section-1">
        <div class="container-fluid p-0">
            <div class="site-content">
                <div class="d-flex justify-content-center">
                    <div class="d-flex flex-column">
                        <h1 class="site-title">Talent Show PlatForm</h1>
                        <p class="title" style="color:white;">Here! You can show your talent without any fear.</p>
                       <div class="more-btn">
                         <button class="btn site-btn2" style="background-repeat:no-repeat; background-color: rgba(147,112,219,0.5);" type="button" onclick="myFunction()">
                            <h1>
                                <form action="upload.php" method="post" enctype="multipart/form-data" >
                                        <input type="file" id="firstimg" name="file" style="color: rgba(216,191,216,0.9); visibility: none;" onchange="getImage(this.value);">
                                        <input type="submit" name="submit" value="Uploads" style="background-color: transparent; color: rgba(216,191,216,0.9); border: none;">
                                    <div id="display-image"></div>
                                </form>
                                </h1>
                            </button>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <section class="section-1">
        
            <div class="container text-center">
                <h1 class="heading-1">Fantasting Talent & Different Types of Craft</h1>
                <!-- <h1 class="heading-2"></h1> -->
                <h2 class="heading-2">Fill free to enroll in and show your talent without fear.
                    Make other's learn from you and explore yourself more to make better you 
                    for future challenges.</h2>

                     <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
          <img src="pixa\1.jpg" alt="">
      </div>
      <div class="swiper-slide">
          <img src="pixa\2.jpg" alt="">
      </div>
      <div class="swiper-slide">
          <img src="pixa\3.jpg" alt="">
      </div>
      <div class="swiper-slide">
          <img src="pixa\4.jpg" alt="">
      </div>
      <div class="swiper-slide">
          <img src="pixa\5.jpg" alt="">
      </div>
      <div class="swiper-slide">
          <img src="pixa\6.jpg" alt="">
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

</div>
</div> 
 </section>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

     <div class="section-2">
        <div class="container-fluid">
            <div class="d-flex justify-content-center">
                <div>
                     <br><br><br>
                    <h1 class="heading-1" style="color:black;">Like & Share Your Love</h1>
                    <p class="para" style="color:black;">Give some support to the one who really want to grow and reach the heights.</p>
                    <br>
                    <a href= "galary.php" input type="button" value="show" class="btn" style="background-color: rgba(255,228,181); color: rgba(0,0,0,1);"><h1>Show</h1></a>
                    
                </div>
            </div>
        </div>
    </div>

            <!-- <div class="section-4 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <img src="pixa/pexels-taryn-elliott-4440217.jpg" alt="Image-7" width="600" height="600">
                    </div>
                    <div class="col-md-5">
                        <h1 class="text-white">Don't Know From Where to Start</h1>
                        <a href="#">Join Us</a>

                        <p class="para-1">
                            Let's start your new image as be yourself. Open up your talent
                            to the world and let world know that you can also touch the sky.</p>
                    </div>
                </div>
            </div>
        </div> -->


    
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/flickity@2.3.0/dist/flickity.pkgd.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script type="text/javascript">
        function getImage(imagename)
        {
            var newimg = imagename.replace(/^.*\\/,"");
            $('#getImage').html(newimg);
        }
    </script>
</body>
</html>