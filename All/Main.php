<!DOCTYPE html>
<html>

<head>
          <style>
.corona {
  text-align: right;
  font-size: 20px;
  color: white; 
  animation: move-rtl 6000ms linear infinite;
}
hr{
          background-color:white;
}
@keyframes move-rtl {
  0% {
    transform: translateX(0);
  }

  100% {
    transform: translateX(-100%);
  }
}
          </style>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width">
          <title>Main Page</title>
          <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" type="text/css" />
          <link href="style.css" rel="stylesheet" type="text/css" />
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>


<body onload="myfunction()">
          <?php
          require_once("header.php")
          ?>
          <div class="container">
                    <div class="row text-center py-5">
                              <div class="col-md-3 col-sm-6 my-3 my-md-0">
                                        <form action="jean.php" method="post">
                                                  <a href="jean.php"><div class="card shadow">
                                                            <div>
                                                                      <img src="a s.avif" alt="Image1" class="img-fluid card-img-top" style="width:100%;height:250px;">
                                                            </div>
                                                  </div></a>
                                        </form>
                              </div>
                              <div class="col-md-3 col-sm-6 my-3 my-md-0">
                                        <form action="tshirt.php" method="post">
                                                  <a href="tshirt.php"><div class="card shadow">
                                                            <div>
                                                                      <img src="ad.avif" alt="Image1" class="img-fluid card-img-top" style="width:100%;height:250px;">
                                                            </div>
                                                  </div></a>
                                        </form>
                              </div>
                              <div class="col-md-3 col-sm-6 my-3 my-md-0">
                                        <form action="shoe.php" method="post">
                                                  <a href="shoe.php"><div class="card shadow">
                                                            <div>
                                                                      <img src="nike.jpg" alt="Image1" class="img-fluid card-img-top" style="width:100%;height:250px;">
                                                            </div>
                                                  </div></a>
                                        </form>
                              </div>
                              <div class="col-md-3 col-sm-6 my-3 my-md-0">
                                        <form action="electronics.php" method="post">
                                                  <a href="electronics.php"><div class="card shadow">
                                                            <div>
                                                                      <img src="mac.webp" alt="Image1" class="img-fluid card-img-top" style="width:100%;height:250px;">
                                                            </div>
                                                  </div></a>
                                        </form>
                              </div>

                              
                    </div>
                    <div class="row text-center py-5">
                              <div class="col-md-3 col-sm-6 my-3 my-md-0">
                                        <form action="headphones.php" method="post">
                                                  <a href="headphones.php"><div class="card shadow">
                                                            <div>
                                                                      <img src="noise.webp" alt="Image1" class="img-fluid card-img-top" style="width:100%;height:250px;">
                                                            </div>
                                                  </div></a>
                                        </form>
                              </div>
                              <div class="col-md-3 col-sm-6 my-3 my-md-0">
                                        <form action="mobile.php" method="post">
                                                  <a href="mobile.php"><div class="card shadow">
                                                            <div>
                                                                      <img src="oneplus.jpg" alt="Image1" class="img-fluid card-img-top" style="width:100%;height:250px;">
                                                            </div>
                                                  </div></a>
                                        </form>
                              </div>
                              <div class="col-md-3 col-sm-6 my-3 my-md-0">
                                        <form action="gym.php" method="post">
                                                  <a href="gym.php"><div class="card shadow">
                                                            <div>
                                                                      <img src="dumbell.jpg" alt="Image1" class="img-fluid card-img-top" style="width:100%;height:250px;">
                                                            </div>
                                                  </div></a>
                                        </form>
                              </div>
                              <div class="col-md-3 col-sm-6 my-3 my-md-0">
                                        <form action="watches.php" method="post">
                                                  <a href="watches.php"><div class="card shadow">
                                                            <div>
                                                                      <img src="boat1.jpg" alt="Image1" class="img-fluid card-img-top" style="width:100%;height:250px;">
                                                            </div>
                                                  </div></a>
                                        </form>
                              </div>

                              
                    </div>
          </div>
          <footer>
                    <div id="Locations" style="background-color:black;color:white;">
                    
                    <h1 style="text-align:center;"> ---Contact Us---</h1>
                              <div class="row text-center py-5">
                                        <div class="col-md-3 col-sm-6 my-3 my-md-0">
                                                  <div class="Borivali-details">
                                                            <h3>Borivali Branch</h3>
                                                            <p>Kasturba Main Road,<br> Opposite Salute Restaurant,<br> Kastur Park, Borivali,<br> Mumbai, Maharashtra
                                                                      400092</p>
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.342462771616!2d72.84746407399247!3d19.22390104731516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b12a67f41bd9%3A0x38f7e4de6348e!2sReliance%20Mall!5e0!3m2!1sen!2sin!4v1695290206019!5m2!1sen!2sin" width="250" height="250" style=" border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                  </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 my-3 my-md-0">
                                                  <div class="Andheri-details">
                                                            <h3>Andheri Branch</h3>
                                                            <p>New Link Rd,<br> Phase D, Oshiwara,<br> Andheri (West),<br> Mumbai, Maharashtra 400053</p>
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.875479099184!2d72.81030703476561!3d19.1412127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c83c05b7fc89%3A0x324fb542f69a0e2e!2sInfiniti%20Mall!5e0!3m2!1sen!2sin!4v1695290960002!5m2!1sen!2sin" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                  </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 my-3 my-md-0">
                                                  <div class="Kurla-details">
                                                            <h3>Kurla Branch</h3>
                                                            <p>
                                                                      Lal Bahadur Shastri Marg,<br> Patelwadi.Kurla,<br> Kamani, Kurla West,<br> Mumbai, Maharashtra 400070
                                                            </p>
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.4847312988886!2d72.88447128885497!3d19.086379500000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c887efb78b9f%3A0x9f9dc99c3119470a!2sPhoenix%20Marketcity!5e0!3m2!1sen!2sin!4v1695291161334!5m2!1sen!2sin" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                                  </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 my-3 my-md-0">
                                                  <div class="Kurla-details">
                                                            <h3>Thane Branch</h3>
                                                            <p>
                                                            On Eastern Express Highway Service Rd,<br> Thane West,<br> Thane, <br>Maharashtra 400606                                                            </p>
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.691798984868!2d72.96908647515758!3d19.208659147794616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b97304d636f1%3A0xd7d62dc2bdd3f9cc!2sViviana%20Mall!5e0!3m2!1sen!2sin!4v1705215536581!5m2!1sen!2sin" width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                  </div>
                                        </div>
                              </div>
                              <hr>
                    <p class="corona">
                              Stay home, Stay safe
                    </p>
                    <hr>
                    <br>
          </footer>
          <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>

</html>