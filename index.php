
<head>


  <title>CouponBook</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

  <script src="js/hammer.js"></script>
  <script src="js/hammerslider.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" >
  <script src="js/sidebar.js"></script>

  <link rel="stylesheet" type="text/css" href="css/hammerslider.required.css">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
  <?php
  require 'required/connection.php';

  $data = $con->query("SELECT * FROM Coupons ORDER BY CouponNumber");
      while($row = mysqli_fetch_assoc($data)) {
            $coupon[] = $row['Coupon'];
            $couponNumber[] = $row['CouponNumber'];
            $couponUsed[] = $row['Used'];
            $couponUsedWhen[] = $row['UsedWhen'];
      }
  ?>
  <div>
    <img id="graybox" src="images/graybox.png">
    <div class="row">
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <p id="areyousure">Are you sure you wish to use this coupon?</p>
        <div class="row">
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <input type="image" id="yes" name="submit_blue" value="blue" alt="blue" src="images/yes.png">
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                              <img id="no" src="images/no.png">
                      </div>
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        </div>

          <img id="accept1" class="acceptbox" src="images/backgroundbox.png">
          </div>
      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
    </div>

<!-- coupon slide show -->
<div class="c-slider-wrap">
    <div class="c-slider" id="hammer-slider">
      <div class="c-slider__container">
        <?php
            if($couponUsed[0] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/1.png">
                </div>
              '; }

              if($couponUsed[1] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/2.png">
                </div>
                '; }

              if($couponUsed[2] == false){ echo '
                <div class="c-slider__slide">
              	  <img class="coupon" src="images/3.png">
                </div>
                '; }

              if($couponUsed[3] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/4.png">
                </div>
                '; }

              if($couponUsed[4] == false){ echo '
                <div class="c-slider__slide">
              	  <img class="coupon" src="images/5.png">
                </div>
                '; }

              if($couponUsed[5] == false){ echo '
                <div class="c-slider__slide">
              	  <img class="coupon" src="images/6.png">
                </div>
                '; }

              if($couponUsed[6] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/7.png">
                </div>
                '; }

              if($couponUsed[7] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/8.png">
                </div>
                '; }

              if($couponUsed[8] == false){ echo '
                  <div class="c-slider__slide">
                    <img class="coupon" src="images/9.png">
                  </div>
                '; }

              if($couponUsed[9] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/10.png">
                </div>
                '; }

              if($couponUsed[10] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/11.png">
                </div>
                '; }

              if($couponUsed[11] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/12.png">
                </div>
                '; }

              if($couponUsed[12] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/13.png">
                </div>
                '; }

              if($couponUsed[13] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/14.png">
                </div>
                '; }

              if($couponUsed[14] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/15.png">
                </div>
                '; }

              if($couponUsed[15] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/16.png">
                </div>
                '; }
              if($couponUsed[16] == false){ echo '
                  <div class="c-slider__slide">
                    <img class="coupon" src="images/17.png">
                  </div>
                '; }

              if($couponUsed[17] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/18.png">
                </div>
                '; }

              if($couponUsed[18] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/19.png">
                </div>
                '; }

              if($couponUsed[19] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/20.png">
                </div>
                '; }

              if($couponUsed[20] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/21.png">
                </div>
                '; }

              if($couponUsed[21] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/22.png">
                </div>
                '; }

              if($couponUsed[22] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/23.png">
                </div>
                '; }

              if($couponUsed[23] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/24.png">
                </div>
                '; }

              if($couponUsed[24] == false){ echo '
                  <div class="c-slider__slide">
                    <img class="coupon" src="images/25.png">
                  </div>
                '; }

              if($couponUsed[25] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/26.png">
                </div>
                '; }

              if($couponUsed[26] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/27.png">
                </div>
                '; }

              if($couponUsed[27] == false){ echo '
                <div class="c-slider__slide">
                  <img class="coupon" src="images/28.png">
                </div>
                '; }


          ?>

``      </div>
    </div>
  </div>

    <script>
    var coupon = document.getElementsByClassName("coupon");

(function() {
  var shown = false;
  var pressed = false;
  var selected;
    var sliderElement = document.getElementById('hammer-slider'),
    slider = HammerSlider(sliderElement, {
      mouseDrag: true
    });

    slider.setupSlider();


  //coupon start//
      Hammer(coupon[0]).on("tap press", function(e) {
      OpenCouponBox(0);
      });
  //coupon start//
      Hammer(coupon[1]).on("tap press", function(e) {
      OpenCouponBox(1);
      });
  //coupon start//
      Hammer(coupon[2]).on("tap press", function(e) {
      OpenCouponBox(2);
      });
  //coupon start//
      Hammer(coupon[3]).on("tap press", function(e) {
      OpenCouponBox(3);
      });
  //coupon start//
      Hammer(coupon[4]).on("tap press", function(e) {
      OpenCouponBox(4);
      });
  //coupon start//
      Hammer(coupon[5]).on("tap press", function(e) {
      OpenCouponBox(5);
      });
  //coupon start//
      Hammer(coupon[6]).on("tap press", function(e) {
      OpenCouponBox(6);
      });
  //coupon start//
      Hammer(coupon[7]).on("tap press", function(e) {
      OpenCouponBox(7);
      });
  //coupon start//
      Hammer(coupon[8]).on("tap press", function(e) {
      OpenCouponBox(8);
      });
  //coupon start//
      Hammer(coupon[9]).on("tap press", function(e) {
      OpenCouponBox(9);
      });
      //coupon start//
          Hammer(coupon[10]).on("tap press", function(e) {
          OpenCouponBox(10);
          });
      //coupon start//
          Hammer(coupon[11]).on("tap press", function(e) {
          OpenCouponBox(11);
          });
      //coupon start//
          Hammer(coupon[12]).on("tap press", function(e) {
          OpenCouponBox(12);
          });
      //coupon start//
          Hammer(coupon[13]).on("tap press", function(e) {
          OpenCouponBox(13);
          });
      //coupon start//
          Hammer(coupon[14]).on("tap press", function(e) {
          OpenCouponBox(14);
          });
      //coupon start//
          Hammer(coupon[15]).on("tap press", function(e) {
          OpenCouponBox(15);
          });
      //coupon start//
          Hammer(coupon[16]).on("tap press", function(e) {
          OpenCouponBox(16);
          });
      //coupon start//
          Hammer(coupon[17]).on("tap press", function(e) {
          OpenCouponBox(17);
          });
      //coupon start//
          Hammer(coupon[18]).on("tap press", function(e) {
          OpenCouponBox(18);
          });
      //coupon start//
          Hammer(coupon[19]).on("tap press", function(e) {
          OpenCouponBox(19);
          });
          //coupon start//
              Hammer(coupon[20]).on("tap press", function(e) {
              OpenCouponBox(20);
              });
          //coupon start//
              Hammer(coupon[21]).on("tap press", function(e) {
              OpenCouponBox(21);
              });
          //coupon start//
              Hammer(coupon[22]).on("tap press", function(e) {
              OpenCouponBox(22);
              });
          //coupon start//
              Hammer(coupon[23]).on("tap press", function(e) {
              OpenCouponBox(23);
              });
          //coupon start//
              Hammer(coupon[24]).on("tap press", function(e) {
              OpenCouponBox(24);
              });
          //coupon start//
              Hammer(coupon[25]).on("tap press", function(e) {
              OpenCouponBox(25);
              });
          //coupon start//
              Hammer(coupon[26]).on("tap press", function(e) {
              OpenCouponBox(26);
              });
          //coupon start//
              Hammer(coupon[27]).on("tap press", function(e) {
              OpenCouponBox(27);
              });


  function OpenCouponBox(selected) {
    if(pressed == false){
      pressed = true;

    setTimeout(function(){

    if(shown == false){
      document.getElementsByClassName("acceptbox")[0].style.display = "block";
      document.getElementById("graybox").style.display = "block";
      document.getElementById("yes").style.display = "block";
      document.getElementById("no").style.display = "block";
      document.getElementById("areyousure").style.display = "block";
      shown = true;

    }


    pressed = false;
  }, 200);

   }
   document.getElementById("yes").addEventListener("click", function(){
   document.getElementsByClassName("acceptbox")[0].style.display = "none";
   document.getElementById("graybox").style.display = "none";
   document.getElementById("yes").style.display = "none";
   document.getElementById("no").style.display = "none";
   document.getElementById("areyousure").style.display = "none";
   $.post('required/' + selected + '.php', function(result) {

   });
   shown = false;
   });
  }


    document.getElementById("no").addEventListener("click", function(){
    document.getElementsByClassName("acceptbox")[0].style.display = "none";
    document.getElementById("graybox").style.display = "none";
    document.getElementById("yes").style.display = "none";
    document.getElementById("no").style.display = "none";
    document.getElementById("areyousure").style.display = "none";
    shown = false;
    });






})();





  </script>
</body>
</html>
