<?php
  session_start();
  if(!isset($_SESSION['userId'])){
    header("Location: Login/login.php");
    exit();
  }
  
?>
<!DOCTYPE html>
<html lang="zxx">
<head>

    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAA6OgwALfnLwDnxTAAv9owAOfQLwDU5i8A19MwAJ3nMAB3rSQA1tAvAOfnMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAC7EAAAAAAAu7u7AAAAAAC7u7tTAAAAALu7VVMzAAAAuydXMzMAAABiJ3dzMwAAAIgnd6MzAAAAiCeqozMAAACIiKqjMwAAAIiIhKMAAAAAiIiIAAAAAAAAiJAAAAAAAAAAAAAAAAAAAAAAAAAAD//wAA//8AAPj/AADgfwAA4B8AAOAHAADgBwAA4AcAAOAHAADgBwAA4AcAAOAfAADgfwAA+P8AAP//AAD//wAA" rel="icon" type="image/x-icon" />
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

</head>

<title>E-TOON</title>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-right">
                <?php
                      if(isset($_SESSION['userId'])){
                        echo '<a href="Login/includes/logout.inc.php" class="login-panel"><i class="fa fa-user"></i>Logout</a>';
                        echo '<a href="../E-Toon/profile.php" class="login-panel">';
                        echo '<i class="fa fa-user"></i>';
                        echo $_SESSION['uName'];
                        echo '&nbsp; &nbsp; &nbsp; &nbsp;';
                        echo '</a>';
                        if($_SESSION['type'] == 'admin'){
                          echo '<a href="../E-Toon/admin.php" class="login-panel">';
                          echo '<i class="fa fa-user"></i>';
                          echo 'Admin';
                          echo '&nbsp; &nbsp; &nbsp; &nbsp;';
                          echo '</a>';
                        }
                      }
                      else {
                        echo '<a href="Login/login.php" class="login-panel"><i class="fa fa-user"></i>Login</a>';
                      }
                    ?>
                    <div class="top-social">
                        <a href="https://www.facebook.com/"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <form action="../E-Toon/genres/Search.php" method="POST">
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                      <div class="logo">
                          <a href="/e-toon">
                              <img src="img/Logo_E-Toon.png" alt="">
                          </a>
                      </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                                <div class="input-group">
                                <input type="text" placeholder="Find something?" name = "find">
                                <button type="submit"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </form>
    </header>
    <!-- Header End -->
<body>
<div class="nav-item">
         <div class="container">
              <div class="nav-menu mobile-menu dropdown">
                 <ul>
     <li><a href="../e-toon/genres/PageAllgenres.php">All Genres</a></li>
                     <li><a href="../e-toon/genres/PageFantasy.php">Fantasy</a></li>
                       <li><a href="../e-toon/genres/PageSport.php">Sport</a></li>
                      <li><a href="../e-toon/genres/PageSchool.php">School</a></li>
       <li><a href="../e-toon/genres/PageAction.php">Action</a></li>
       <li><a href="../e-toon/genres/PageLoveComedy.php">LoveComedy</a></li>
       <li><a href="../e-toon/genres/PageAdult.php">Adult</a></li>
                   </ul>
              </div>
                
           </div>
      </div>
        </div>

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="img/OnepunchmanHome.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Romance</span>
                            <h1><font color="white">OnePunchMan</font></h1>
                            <p><font color="white">เรื่องมันเริ่มขึ้นเมื่อชายหนุ่มธรรมดาๆคนหนึ่ง(ไซตามะ)ที่กำลังท้อใจเพราะว่างงาน บังเอิญไปเจอเหตุการณ์ที่สัตว์ประหลาดจะทำร้ายเด็กคนหนึ่งเข้า หลังจากเขาเข้าไปช่วยเหลือและกำจัดสัตว์ประหลาดตัวนั้น และเขาก็บังเกิดความคิดอยากเป็น ฮีโร่ ขึ้นมาหลังจากฝึกฝนอยากหนัก จนผมร่วงหมดทุกเส้น3 ปีผ่านไป เขาก็ได้กลายเป็นยอดมนุษย์ ซุปเปอร์ฮีโร่ แนว ฮาๆ ด้วยพลังที่สุดยอดของเขาชายหนุ่มที่ชื่่อ ไซตามะ เขาสามารถต่อย สัตว์ประหลาด ได้ด้วยในหมัดเดียว</font></p>
                            <a href="../E-Toon/genres/Onepunchman/index.php" class="primary-btn">Read Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>New <span>today</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="img/Dr.stone_Home.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Fantasy</span>
                            <h1>Dr.stone</h1>
                            <p>วันหนึ่งก้เกิดแสงประหลาดสาดส่องเข้าหาโลกทั้งใบและผลของแสงนั้นทำให้มนุษย์บนโลกกลายเป็นหิน และโลกก็ตกอยู่ในความเงียบงันล่วงเลยมานับพันปี จนกระทั่งเกิดเหตุการณ์ที่ไม่คาดคิดขึ้น มนุษย์ผู้คู่หนึ่งที่เป็นหินมานานนับพันปีก็ตื่นและกระเทาะจากหินออกมา นั่นคือเด็กหนุ่มที่ชื่อเซนคู ผู้มีมันสมองเป็นเลิศและ ไทจุ ผู้มีพลังเป็นเลิศ ได้ตื่นขึ้นมาอีกครั้ง ทั้งสองจะเอาตัวรอดยังไงบนโลกที่เต็มไปด้วยหินและสัตว์ป่า พร้อมทั้งไขปริศนาว่าแสงนั้นคือสิ่งใดที่ทำให้มนุษย์ทั้งโลกหยุดนิ่ง</p>
                            <a href="../E-Toon/genres/Dr.Stone/index.php" class="primary-btn">Read Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>New <span>today</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="img/Haikyu_Home.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Sport</span>
                            <h1>Haikyu</h1>
                            <p>ฮินาตะ โชโย แข่งขันวอลเลย์บอลในช่วงมัธยมต้น เขาได้พบความพ่ายแพ้จาก คาเงยามะ นักกีฬาอัจฉริยะ ผู้ได้รับฉายาว่า ราชาเจ้าคอร์ท อย่างหมดท่า จนฮินาตะได้สาบานกับตัวเองว่าเขาจะแก้แค้นให้ได้ แต่ก็ได้มาพบกับ คาเงยามะ ที่มาอยู่ชมรมและโรงเรียนเดียวกัน</p>
                            <a href="../E-Toon/genres/Haikyu/index.php" class="primary-btn">Read Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>New <span>today</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                   <img src="img/The Promised Neverland_Home.jpg" alt="">
                        <div class="inner-text">
                        <a href = "../E-Toon/genres/The_Promised_Neverland/index.php"><h4>The Promised Neverland</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                    <img src="img/Onepunchman_Home.jpg" alt=""></a>
                        <div class="inner-text">
                          <a href = "../E-Toon/genres/Onepunchman/index.php"> <h4>OnePunchMan</h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                       <img src="img/Sololevel_Home.jpg" alt="">
                        <div class="inner-text">
                             <a href = "../E-Toon/genres/Sololeveling/index.php"><h4>Sololeveling</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="img/child.jpg">
                        <h2>Popular</h2>
                      
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
					             <div class="filter-control">
                        <ul>
                            <li>Recomended</li>
                        </ul>
                      </div>
                      <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/cartoon/sololevel.jpg" alt="" width="270" height="345">
                                <ul>
                                    <li class="quick-view"><a href="../E-Toon/genres/Sololeveling/index.php">Read Now</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Fantasy</div>
                                <a href="../E-Toon/genres/Sololeveling/index.php">
                                    <h5>Solo Leveling</h5>
                                </a>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="genres\img\Me and My 26 year old.jpg" alt="" width="270" height="345">
                                <ul>
                                    <li class="quick-view"><a href="../E-Toon/genres/Me_and_My_26_year_old/index.php">Read Now</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">LoveComedy</div>
                                <a href="../E-Toon/genres/Me_and_My_26_year_old/index.php">
                                    <h5>Me and My 26 year old</h5>
                                </a>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="genres\img\Captain Tsubasa.jpg" alt="" width="270" height="345">
                                <ul>
                                    <li class="quick-view"><a href="../E-Toon/genres/Captain_Tsubasa/index.php">Read Now</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Sport</div>
                                <a href="../E-Toon/genres/Captain_Tsubasa/index.php">
                                    <h5>Captain Tsubasa</h5>
                                </a>
                            </div>
                        </div>
                       <!-- <div class="product-item">
                            <div class="pi-pic">
                                <img src="genres\img\Why the Hell are You Here Teacher.jpg" alt="" width="270" height="345">
                                <ul>
                                    <li class="quick-view"><a href="../E-Toon/genres/Why_the_Hell_are_You_Here_Teacher/index.php">Read Now</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Adult</div>
                                <a href="../E-Toon/genres/Why_the_Hell_are_You_Here_Teacher/index.php">
                                    <h5>Why the Hell are You Here Teache</h5>
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li>Recomended</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
						<div class="product-item">
                            <div class="pi-pic">
                                <img src="img/onepice_Home.jpg" alt="" width="270"  height="330">
                                <ul>
                                    <li class="quick-view"><a>Coming soon</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Fantasy</div>
                                <a href="#">
                                    <h5>Onepice</h5>
                                </a>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="genres/img/Toriko.jpg" alt="" width="270"  height="330">
                                <ul>
                                <li class="quick-view"><a>Coming soon</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Action,Fantasy</div>
                                <a href="#">
                                    <h5>Toriko</h5>
                                </a>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/the prince of tennis_Home.jpg" alt="" width="270"  height="330">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                <li class="quick-view"><a>Coming soon</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Sport</div>
                                <a href="#">
                                    <h5>The Prince of tennis</h5>
                                </a>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/Boruto_Home.jpg" alt="" width="270"  height="330">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                   <!-- <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li> -->
                                   <li class="quick-view"><a>Coming soon</a></li>
                                    <!-- <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li> -->
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Action,Fantasy</div>
                                <a href="#">
                                    <h5>Boruto</h5>
                                </a>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="img/cartoon/Attack on titan.jpg" alt="" width="270"  height="330">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                <li class="quick-view"><a>Coming soon</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Action</div>
                                <a href="#">
                                    <h5>Attack on titan</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="img/child1.jpg">
                        <h2><font color="black">Coming Soon</font></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Man Banner Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <ul>
                          <li>Contact</li>
                          <li>Instagram: E-TOON-TH</li>
                          <li>Fanpage: E-TOON TH</li>
                          <li>Fanpage: EToon! TH</li>
                          <li>Email: E_TOON@etoon.co.th</li>
                        </ul>
                        <div class="footer-social">
                          <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                          <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                          <a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Genres<i class="fa fa-heart-o" aria-hidden="true"></i></h5>
                        <ul>
                            <li><a href="../E-Toon/genres/PageAllgenres.php">All genres</a></li>
                            <li><a href="../E-Toon/genres/PageAction.php">Action</a></li>
                            <li><a href="../E-Toon/genres/PageAdult.php">Adult</a></li>
                        
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Genres<i class="fa fa-heart-o" aria-hidden="true"></i></h5>
                        <ul>
                          <li><a href="../E-Toon/genres/PageFantasy.php">Fantasy</a></li>
                          <li><a href="../E-Toon/genres/PageLoveComedy.php">LoveComedy</a></li>
                          <li><a href="../E-Toon/genres/PageSchool.php">School</a></li>
                          <li><a href="../E-Toon/genres/PageSport.php">Sport</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>My Account</h5>
                        <div class="footer-widget">
                            <ul>
                                <li><a href="../E-Toon/profile.php">Profile</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Silpakorn</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
