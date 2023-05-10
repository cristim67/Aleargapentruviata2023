<!DOCTYPE html>

<?php require_once "controllerUserData.php"; ?>

<?php require_once "cachecontrol.php"; ?>
<html lang="ro">
<head>
     <title>Aleargă Pentru Viaţă </title>
     
 <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  
  <meta
  name="description"
  content="Crosul caritabil “Aleargă Pentru Viață” este cea mai mare competiție sportivă din București organizată exclusiv de studenți. își propune ca fiecare alergător care trece linia de sosire să trăiască o experiență de neuitat, îmbinând astfel mișcarea cu facerea unui bine.">
  <meta name="keywords" content="ETTI, LSE, UPB, APV, Aleargă Pentru Viață, Cros, Cros Caritabil, Alergat, Maraton, Cursa, Curse, Voluntari, Caritabil, Studenti, Facultatea de Electronică, Telecomunicaţii şi Tehnologia Informaţiei, Sport, Mișcare, Departamentul Sportiv, Eveniment, București, Atletism,  Cross, Semimaraton, Run, Running, Atlet, Barbati, Femei, Copii, Dizabilitati, Jogging, Sprint, Sprinten, Linia de start, Linia de finish, Categoria, Categorie, Adulti, 6km, 4km, 2km">
  
  <meta name="author" content="Departamentul IT LSE, Cristi Miloiu, Mihnea Aniculesei">
  
  
  <!-- Site Title -->
 
  <link rel="stylesheet" href="assets/css/plugins/fontawesome.min.css">
  <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css">
  <link rel="stylesheet" href="assets/css/plugins/slick.css">
  <link rel="stylesheet" href="assets/css/plugins/animate.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Theme Style -->
  <link rel="stylesheet" href="assets/css/theme_12.css">
  <link rel="stylesheet" href="assets/css/modificari.css">
  
  <link rel="icon" type="image/x-icon" href="/assets/img/event-conference/apv.ico">

</head>
<body>
  <!-- Start Preloader -->
  <div class="cs-preloader cs-accent_color cs-white_bg">
    <div class="cs-preloader_bg cs-center cs-accent_4_bg">
      <div class="cs-preloader_in cs-accent_15_border" style="zoom:2">
        <img src="assets/img/event-conference/logo.png" alt="Logo" >
      </div>
    </div>
  </div>
  <!-- End Preloader -->
  <!-- Start Header Section -->
  
<header class="cs-site_header cs-style1 cs-sticky-header cs-primary_font" >
    <div class="cs-main_header">
      <div class="container">
        <div class="cs-main_header_in">
          <div class="cs-main_header_left">
            <div class="cs-nav">
              <ul class="cs-nav_list">
                </li>
                                <li class="menu-item-has-children"><a href="about.php">Despre</a>
                  <ul>
                    <li><a href="about.php/#ce_este_apv">Ce este Aleargă Pentru Viaţă?</a></li>
                
                    <li><a href="about.php/#echipa">Echipă</a></li>
                    <li><a href="about.php/#istoric">Istoric</a></li>
                     <li><a href="https://www.facebook.com/media/set/?set=a.603987195089837&type=3" target="_blank">Galerie Foto</a></li>
                  </ul>
                </li>
        
               <li class="menu-item-has-children"><a href="#curse">Curse</a>
                  <ul>
                    <li><a href="allforone.php">Cursa All for One</a></li>
                    <li><a href="kids.php">Cursa Copii</a></li>
                    <li><a href="1016fete.php">10-16 Fete</a></li>
                    <li><a href="1016baieti.php">10-16 Baieti </a></li>
                    
                     <li><a href="1735fete.php">17-35 ani Feminin</a></li>
                     <li><a href="1735baieti.php">17-35 ani Masculin</a></li>
                  
                    <li><a href="35masculin.php">35+ Masculin</a></li>
                     <li><a href="35feminin.php">35+ Feminin</a></li>
                  </ul>
                </li>
                <li class="menu-item"><a href="cauza.php">Cauza</a>
                <li class="menu-item"><a href="infoutile.php">Info Utile </a>
                <li class="menu-item"><a href="contact.php">Contact</a>
                
                <li class="menu-item tel"><a href="https://revolut.me/cesare99b7" target="_blank">Doneaza</a>
                <li class="menu-item tel"><a href="register.php">Inscriere</a>
               
                </li>
           </ul>
            </div>
          </div>
          <div class="cs-main_header_center">

                
      
           
            <a class="cs-site_branding zoomprincipal" href="index.php" style="margin-right:3rem;"><img src="../assets/img/event-conference/logo.png" alt=""></a>
          </div>
          <div class="cs-main_header_right" style="margin-left:6rem;">
   
                   <div class="cs-social_btns cs-style1" style="margin-right:3rem;" >
                        <a href="https://www.facebook.com/AleargaPentruViata" target="_blank"><i class="fab fa-facebook"></i></a>
              <a href="https://www.instagram.com/aleargapentruviata.lse/" target="_blank"><i class="fab fa-instagram"></i></a>
           
             
            </div>
            
            
              <div class="cs-action_box">
           
      
              </div>
              <style>
                  
                  
.hover-item {
    background-color: #2F1A53;
}

.hover-item:hover {
    background-color:#5816ab;
}



              </style>
           
             <a href="https://revolut.me/cesare99b7" target="_blank" class="cs-toolbox_btn cs-accent_bg_2 cs-white_hover cs-accent_bg_hover cs-smoth_scroll hover-item" ><span class="cs-btn_text" >Doneaza</span></a>
                   
              <span style="margin-left:1rem;"></span>      
                                     <?php 

if( $_SESSION['email']){
  echo'  
    <span style="margin-right:2rem;"></span>
  <a href="#" onclick="logoutphp()"  class="cs-toolbox_btn cs-accent_bg_2 cs-white_hover cs-accent_bg_hover cs-smoth_scroll" ><span class="cs-btn_text">Deconecteaza-te</span></a>';
}
else echo'  <a href="#pricing"  class="cs-toolbox_btn cs-accent_bg_2 cs-white_hover cs-accent_bg_hover cs-smoth_scroll" ><span class="cs-btn_text">Inscriere</span></a>';
?>

               <script>
  
  function linken(){
      var a = "en"+location.pathname;
      location.href=a;
  }
  function inscriere(){
      location.href="pricing.php";
  } 
  function inscrierephp(){
      location.href="register.php";
  }
   function logoutphp(){
      location.href="logout-user.php";
  }
  </script>
  
            
          </div>
        </div>
      </div>
  </header>
  



  <!-- End Header Section -->
  
  

  
    <div class="afis-pc">
        
  <div class="cs-height_90 cs-height_lg_80"></div>
  <!-- Start Hero Seciton -->
  <div class="cs-flying_img_wrap cs-style5 cs-parallax imagprinc" >
      
    <img src="../assets/img/event-conference/flying-img1.png" alt="Flying image" class="cs-flying_img cs-posiiton1 cs-to_up">
    <img src="../assets/img/event-conference/flying-img2.png" alt="Flying image" class="cs-flying_img cs-posiiton2 cs-to_up">
    
    <div class="cs-hero cs-style12 cs-center text-center cs-parallax cs-hobble" data-src="../assets/img/event-conference/hero-img.jpg" >
        
      <div class="cs-hero_pattern cs-hover_layer3" >
        <div class="cs-hero_pattern_in cs-bg_parallax">
            
                    <h1 class="cs-hero_title cs-extra_bold cs-white "  style="margin-top:2rem;  -webkit-text-stroke: 2px #554bb9; "> 
           
            Aleargă Pentru Viaţă
            </h1>
            
        </div>
      </div>
      <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          
        <div class="cs-hero_text">
                
          <div class="cs-center" style="margin-top:-11rem;zoom:1.25;" >
              
            <a href="https://www.youtube.com/embed/4rQ_rWDrGt0?autoplay=1" class="cs-player_btn cs-style1 cs-center cs-video_open cs-white cs-accent_bg_2 cs-accent_color_hover cs-accent_bg_2_hover"   >
              <span class="cs-player_btn_in cs-center cs-white"><i class="fas fa-play" ></i></span>
              <span class="cs-video_animaiton cs-center cs-accent_border_2"  >
                <span ><span ></span></span>
              </span>
            </a>    
          </div>
      
        </div>
      </div>
      <div class="cs-hero_img cs-bg" data-src="../assets/img/creative-agency/hero-img.jpg">
        <div class="cs-hero_img_circle"></div>
      </div>
    </div>
  </div>
  <!-- End Hero Seciton -->
  
  
  
  
  
  
  
  
    
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <!-- Start Counter -->
  <div class="container zoom6">
    <div class="cs-counter_4_wrap cs-accent_bg_2 cs-parallax">
        
      <div class="cs-counter_4_wrap_in cs-bg_parallax" data-src="../assets/img/event-conference/counter_bg.png">
        <!-- <div class="cs-countdown  cs-style4 text-center" data-countdate="2023-05-07T10:00:00">-->
        <!--  <div class="cs-counter cs-style4 text-center ">-->
        <!--    <h3 id="cs-count-days" class="cs-counter_number cs-extra_bold cs-white"></h3>-->
        <!--    <div class="cs-counter_seperator cs-accent_bg"></div>-->
        <!--    <div class="cs-counter_title cs-medium text-uppercase cs-white cs-primary_font">Zile</div>-->
        <!--    </div>-->
        <!--    </div>-->
        <!--  <div class="cs-countdown  cs-style4 text-center" data-countdate="2023-05-07T10:00:00">-->
        <!--  <div class="cs-counter cs-style4 text-center ">-->
        <!--    <h3 id="cs-count-hours" class="cs-counter_number cs-extra_bold cs-white"></h3>-->
        <!--    <div class="cs-counter_seperator cs-accent_bg"></div>-->
        <!--    <div class="cs-counter_title cs-medium text-uppercase cs-white cs-primary_font">Ore</div>-->
        <!--    </div>-->
        <!--    </div>-->
        <!-- <div class="cs-countdown  cs-style4 text-center" data-countdate="2023-05-07T10:00:00">-->
        <!--  <div class="cs-counter cs-style4 text-center ">-->
        <!--    <h3 id="cs-count-minutes" class="cs-counter_number cs-extra_bold cs-white"></h3>-->
        <!--    <div class="cs-counter_seperator cs-accent_bg"></div>-->
        <!--    <div class="cs-counter_title cs-medium text-uppercase cs-white cs-primary_font">Minute</div>-->
        <!--    </div>-->
        <!--    </div>-->
        <!--   <div class="cs-countdown  cs-style4 text-center"data-countdate="2023-05-07T10:00:00">-->
        <!--  <div class="cs-counter cs-style4 text-center ">-->
        <!--    <h3 id="cs-count-seconds" class="cs-counter_number cs-extra_bold cs-white"></h3>-->
        <!--    <div class="cs-counter_seperator cs-accent_bg"></div>-->
        <!--    <div class="cs-counter_title cs-medium text-uppercase cs-white cs-primary_font">Secunde</div>-->
        <!--    </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        <!--</div>-->
        <h1 style="color:white;"> Evenimentul s-a terminat! -> <a href="/assets/rezultate.pdf" target="_blank">Rezultate</a> </h1>
    
        
  </div>
  <!-- End Counter -->
       </div>
 
       
       
       
       
       </div>
       
       
       </div>
       
       
       
       
       
       
       
           <div class="afis-tel">
  <div class="cs-height_90 cs-height_lg_80"></div>
  <!-- Start Hero Seciton -->
  <div class="cs-flying_img_wrap cs-style5 cs-parallax" >
      
    <img src="../assets/img/event-conference/flying-img1.png" alt="Flying image" class="cs-flying_img cs-posiiton1 cs-to_up">
    <img src="../assets/img/event-conference/flying-img2.png" alt="Flying image" class="cs-flying_img cs-posiiton2 cs-to_up">
    
    <div class="cs-hero cs-style12 cs-center text-center cs-parallax cs-hobble" data-src="../assets/img/event-conference/hero-img-tel.jpg" >
        
      <div class="cs-hero_pattern cs-hover_layer3">
        <div class="cs-hero_pattern_in cs-bg_parallax">
            
                    <h1 class="cs-hero_title cs-extra_bold cs-white "  style="margin-top:1rem;  -webkit-text-stroke: 2px #554bb9; "> 
           
            Aleargă Pentru Viaţă
            </h1>
            
        </div>
      </div>
      <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
          
        <div class="cs-hero_text">
                
          <div class="cs-center" style="margin-top:-10rem;"  >
              
            <a href="https://www.youtube.com/embed/4rQ_rWDrGt0?autoplay=1" class="cs-player_btn cs-style1 cs-center cs-video_open cs-white cs-accent_bg_2 cs-accent_color_hover cs-accent_bg_2_hover"  >
              <span class="cs-player_btn_in cs-center cs-white"><i class="fas fa-play" ></i></span>
              <span class="cs-video_animaiton cs-center cs-accent_border_2" >
                <span ><span ></span></span>
              </span>
            </a>    
          </div>
      
        </div>
      </div>
      <div class="cs-hero_img cs-bg" data-src="../assets/img/creative-agency/hero-img.jpg">
        <div class="cs-hero_img_circle"></div>
      </div>
    </div>
  </div>
  <!-- End Hero Seciton -->
  
  
  
  
  
  
  
  
    
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <!-- Start Counter -->
  <div class="container">
      
    <div class="cs-counter_4_wrap cs-accent_bg_2 cs-parallax">
      <div class="cs-counter_4_wrap_in cs-bg_parallax" data-src="../assets/img/event-conference/counter_bg.png">
 <!--<div class="cs-countdown  cs-style4 text-center" data-countdate="2023-05-07T10:00:00">-->
 <!--         <div class="cs-counter cs-style4 text-center ">-->
 <!--           <h3 id="cs-count-days" class="cs-counter_number cs-extra_bold cs-white"></h3>-->
 <!--           <div class="cs-counter_seperator cs-accent_bg"></div>-->
 <!--           <div class="cs-counter_title cs-medium text-uppercase cs-white cs-primary_font">Zile</div>-->
 <!--           </div>-->
 <!--           </div>-->
 <!--         <div class="cs-countdown  cs-style4 text-center" data-countdate="2023-05-07T10:00:00">-->
 <!--         <div class="cs-counter cs-style4 text-center ">-->
 <!--           <h3 id="cs-count-hours" class="cs-counter_number cs-extra_bold cs-white"></h3>-->
 <!--           <div class="cs-counter_seperator cs-accent_bg"></div>-->
 <!--           <div class="cs-counter_title cs-medium text-uppercase cs-white cs-primary_font">Ore</div>-->
 <!--           </div>-->
 <!--           </div>-->
 <!--        <div class="cs-countdown  cs-style4 text-center" data-countdate="2023-05-07T10:00:00">-->
 <!--         <div class="cs-counter cs-style4 text-center ">-->
 <!--           <h3 id="cs-count-minutes" class="cs-counter_number cs-extra_bold cs-white"></h3>-->
 <!--           <div class="cs-counter_seperator cs-accent_bg"></div>-->
 <!--           <div class="cs-counter_title cs-medium text-uppercase cs-white cs-primary_font">Minute</div>-->
 <!--           </div>-->
 <!--           </div>-->
 <!--          <div class="cs-countdown  cs-style4 text-center"data-countdate="2023-05-07T10:00:00">-->
 <!--         <div class="cs-counter cs-style4 text-center ">-->
 <!--           <h3 id="cs-count-seconds" class="cs-counter_number cs-extra_bold cs-white"></h3>-->
 <!--           <div class="cs-counter_seperator cs-accent_bg"></div>-->
 <!--           <div class="cs-counter_title cs-medium text-uppercase cs-white cs-primary_font">Secunde</div>-->
 <!--           </div>-->
 <!--           </div>-->
 <!--         </div>-->
 <!--       </div>-->
        <!-- .cs-countdown -->
          <h1 style="color:white;zoom:0.4"> Evenimentul s-a terminat! -> <a href="/assets/rezultate.pdf" target="_blank">Rezultate</a> </h1>

        </div>
         
  </div>
  <div class="cs-height_140 cs-height_lg_75"></div>
  <!-- End Counter -->
       </div>
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       </div>
       
       
       <div class="about-pc" style="margin-top:6rem;">
  <!-- Start About Seciton -->
  <div class="container">
    <div class="row">
      <div class="col-lg-5 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="cs-vertical_middle">
          <div class="cs-vertical_middle_in">
            <div class="cs-text_box cs-style1 cs-type1">
              <div class="cs-text_box_subtitle cs-medium cs-accent_color">DESPRE APV</div>
              <h2 class="cs-text_box_title text-uppercase cs-bold"> Aleargă pentru Viaţă, <br>cros caritabil<h2 class="cs-text_box_title text-uppercase cs-bold"> <br> O tradiție de 13 ani</h2></h2>
              <div class="cs-height_35 cs-height_lg_25"></div>
              <div class="cs-text_box_text">Crosul caritabil “Aleargă Pentru Viață” este cea mai mare competiție sportivă din București organizată exclusiv de studenți. își propune ca fiecare alergător care trece linia de sosire să trăiască o experiență de neuitat, îmbinând astfel mișcarea cu facerea unui bine.
<p style="margin-top:1rem;">Află mai multe despre campania noastră!
</p>
</div>
              <div class="cs-height_35 cs-height_lg_25"></div>
              <div class="cs-text_icon_box" style="zoom:1.3;">
                <div class="cs-text_box_icon cs-center cs-accent_color cs-accent_10_bg">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="22px">
                    <path fill-rule="evenodd" fill="currentColor" d="M11.644,18.318 C10.879,19.313 10.013,20.439 9.023,21.741 C8.900,21.904 8.706,21.999 8.500,21.999 C8.294,21.999 8.100,21.904 7.977,21.741 C6.981,20.432 6.111,19.302 5.343,18.305 C0.920,12.557 -0.000,11.360 -0.000,8.378 C-0.000,3.757 3.813,-0.001 8.500,-0.001 C13.187,-0.001 17.000,3.757 17.000,8.378 C17.000,11.355 16.077,12.554 11.644,18.318 ZM8.500,1.287 C4.534,1.287 1.308,4.468 1.308,8.378 C1.308,10.926 2.083,11.934 6.385,17.525 C7.016,18.346 7.717,19.255 8.500,20.281 C9.277,19.261 9.974,18.356 10.602,17.541 C14.915,11.933 15.692,10.921 15.692,8.378 C15.692,4.468 12.466,1.287 8.500,1.287 ZM8.500,12.890 C5.976,12.890 3.923,10.866 3.923,8.378 C3.923,5.890 5.976,3.866 8.500,3.866 C11.024,3.866 13.077,5.890 13.077,8.378 C13.077,10.866 11.024,12.890 8.500,12.890 ZM8.500,5.155 C6.697,5.155 5.231,6.601 5.231,8.378 C5.231,10.155 6.697,11.600 8.500,11.600 C10.303,11.600 11.769,10.155 11.769,8.378 C11.769,6.601 10.303,5.155 8.500,5.155 Z"/>
                  </svg>
                </div>
                <h3 class="cs-text_box_icon_title">Rectoratul UPB </h3>
               
              </div>
              <div class="cs-height_45 cs-height_lg_30"></div>
              <a href="#pricing" class="cs-btn cs-style1 cs-btn_lg cs-medium text_uppercase cs-primary_font cs-accent_bg_2 cs-accent_border_2 cs-white cs-accent_bg_hover cs-white_hover cs-accent_border_hover cs-smoth_scroll">INSCRIERE </a>
            </div>
          </div>
        </div>
      </div><!-- .col -->
      <div class="col-lg-6 offset-lg-1 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="cs-right_full_width">
          <div class="cs-height_0 cs-height_lg_50"></div>
          <div class="cs-image_box cs-style3 cs-type3 cs-parallax">
            <div class="cs-image_box_img"><img src="../assets/img/event-conference/about.png" alt="About Image"></div>
            <div class="cs-image_box_text cs-to_up cs-accent_color">
              <div class="cs-image_box_text_in">
                <div class="cs-image_box_title cs-extra_bold cs-white cs-primary_font">7</div>
                <h2 class="cs-image_box_subtitle cs-medium cs-white cs-medium">mai 2023</h2>
              </div>
            </div>
            <div class="cs-image_box_pattern cs-to_left cs-accent_color_2"></div>
          </div>
        </div>
      </div><!-- .col -->
    </div>
  </div>
  <div class="cs-height_135 cs-height_lg_80"></div>
  <!-- End About Seciton -->
  </div>
  
  
     <div class="about-tel">
  <!-- Start About Seciton -->
  <div class="container">
    <div class="row">
      <div class="col-lg-5 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="cs-vertical_middle">
          <div class="cs-vertical_middle_in">
            <div class="cs-text_box cs-style1 cs-type1">
              <div class="cs-text_box_subtitle cs-medium cs-accent_color">DESPRE APV</div>
              <h2 class="cs-text_box_title text-uppercase cs-bold"> Aleargă pentru Viaţă, <br>cros caritabil<h2 class="cs-text_box_title text-uppercase cs-bold"> <br> O tradiție de 13 ani</h2></h2>
              <div class="cs-height_35 cs-height_lg_25"></div>
              <div class="cs-text_box_text">Crosul caritabil “Aleargă Pentru Viață” este cea mai mare competiție sportivă din București organizată exclusiv de studenți. își propune ca fiecare alergător care trece linia de sosire să trăiască o experiență de neuitat, îmbinând astfel mișcarea cu facerea unui bine.
<p style="margin-top:1rem;">Află mai multe despre campania noastră!
</p>
</div>
              <div class="cs-height_35 cs-height_lg_25"></div>
              <div class="cs-text_icon_box" style="zoom:1.3;">
                <div class="cs-text_box_icon cs-center cs-accent_color cs-accent_10_bg">
                         <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#006470" version="1.1" id="Capa_1" width="17px" height="22px" viewBox="0 0 413.107 413.107" xml:space="preserve" stroke="#006470">

<g id="SVGRepo_bgCarrier" stroke-width="0"/>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

<g id="SVGRepo_iconCarrier"> <g> <g> <path d="M228.749,361.374c-9.323,1.727-18.932,2.639-28.748,2.639c-86.831,0-157.458-70.641-157.458-157.458 c0-86.817,70.627-157.458,157.458-157.458c86.831,0,157.458,70.64,157.458,157.457c0,1.252-0.02,2.501-0.049,3.747 c0.701-0.065,1.408-0.104,2.127-0.104c9.631,0,17.881,5.992,21.234,14.441h0.23c6.312,0,12.332,1.271,17.822,3.566 c0.77-7.114,1.176-14.336,1.176-21.65c0-110.276-89.725-200-200-200c-110.276,0-200,89.724-200,200c0,110.275,89.724,200,200,200 c14.543,0,28.725-1.575,42.395-4.538c-8.426-8.399-13.646-20.012-13.646-32.82L228.749,361.374L228.749,361.374z"/> <path d="M178.717,105.287v87.93h-55.313c-11.728,0-21.257,9.529-21.257,21.284c0,11.742,9.529,21.271,21.257,21.271h76.598 c11.757,0,21.284-9.528,21.284-21.271V105.287c0-11.742-9.526-21.271-21.284-21.271S178.717,93.545,178.717,105.287z"/> <path d="M308.172,260.032c0-2.854-0.994-5.592-2.812-7.774V233.04c0-5.152-4.193-9.344-9.348-9.344h-0.195 c-5.15,0-9.342,4.191-9.342,9.344v19.218c-1.82,2.187-2.814,4.924-2.814,7.774c0,6.703,5.453,12.156,12.254,12.156h0.1 C302.719,272.188,308.172,266.735,308.172,260.032z"/> <path d="M336.736,252.258V233.04c0-5.152-4.193-9.344-9.348-9.344s-9.346,4.191-9.346,9.344v19.219 c-1.816,2.188-2.812,4.924-2.812,7.773c0,6.703,5.453,12.156,12.158,12.156c6.703,0,12.158-5.453,12.158-12.156 C339.549,257.181,338.555,254.442,336.736,252.258z"/> <path d="M358.766,223.696c-5.154,0-9.346,4.191-9.346,9.344v19.218c-1.818,2.182-2.812,4.919-2.812,7.774 c0,6.703,5.453,12.156,12.156,12.156c6.705,0,12.16-5.453,12.16-12.156c0-2.849-0.996-5.586-2.816-7.773V233.04 C368.107,227.888,363.916,223.696,358.766,223.696z"/> <path d="M380.23,238.137h-3.461v18.687h3.461c7.824,0,14.191,6.364,14.191,14.188v98.186c0,7.823-6.367,14.188-14.191,14.188 H274.354c-7.824,0-14.189-6.365-14.189-14.188v-98.186c0-7.822,6.365-14.188,14.189-14.188h3.461v-18.687h-3.461 c-18.129,0-32.877,14.747-32.877,32.873v98.186c0,18.126,14.748,32.873,32.877,32.873H380.23 c18.129,0,32.877-14.747,32.877-32.873V271.01C413.107,252.884,398.359,238.137,380.23,238.137z"/> <path d="M286.586,315.327c-6.727,0-12.195,5.47-12.195,12.194c0,6.724,5.471,12.193,12.195,12.193 c6.723,0,12.193-5.47,12.193-12.193S293.309,315.327,286.586,315.327z"/> <path d="M327.295,315.327c-6.725,0-12.193,5.47-12.193,12.194c0,6.724,5.469,12.193,12.193,12.193 c6.723,0,12.191-5.47,12.191-12.193S334.018,315.327,327.295,315.327z"/> <path d="M368.002,315.327c-6.725,0-12.191,5.47-12.191,12.194c0,6.724,5.469,12.193,12.191,12.193 c6.725,0,12.191-5.47,12.191-12.193C380.195,320.798,374.727,315.327,368.002,315.327z"/> <path d="M286.586,348.037c-6.727,0-12.195,5.47-12.195,12.192c0,6.726,5.471,12.196,12.195,12.196 c6.723,0,12.193-5.471,12.193-12.196C298.779,353.507,293.309,348.037,286.586,348.037z"/> <path d="M327.295,348.037c-6.725,0-12.193,5.47-12.193,12.192c0,6.726,5.469,12.196,12.193,12.196 c6.723,0,12.191-5.471,12.191-12.196C339.486,353.507,334.018,348.037,327.295,348.037z"/> <path d="M368.002,348.037c-6.725,0-12.191,5.47-12.191,12.192c0,6.726,5.469,12.196,12.191,12.196 c6.725,0,12.191-5.471,12.191-12.196C380.195,353.507,374.727,348.037,368.002,348.037z"/> <path d="M368.002,282.616c-6.725,0-12.191,5.471-12.191,12.195s5.469,12.195,12.191,12.195c6.725,0,12.191-5.471,12.191-12.195 C380.195,288.087,374.727,282.616,368.002,282.616z"/> </g> </g> </g>

</svg>
                 
                </div>
                <h3 class="cs-text_box_icon_title">7 Mai </h3>
               
              </div>
              <div class="cs-text_icon_box" style="zoom:1.3; margin-top:1.5rem;" >
                <div class="cs-text_box_icon cs-center cs-accent_color cs-accent_10_bg">
         <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="22px">
                    <path fill-rule="evenodd" fill="currentColor" d="M11.644,18.318 C10.879,19.313 10.013,20.439 9.023,21.741 C8.900,21.904 8.706,21.999 8.500,21.999 C8.294,21.999 8.100,21.904 7.977,21.741 C6.981,20.432 6.111,19.302 5.343,18.305 C0.920,12.557 -0.000,11.360 -0.000,8.378 C-0.000,3.757 3.813,-0.001 8.500,-0.001 C13.187,-0.001 17.000,3.757 17.000,8.378 C17.000,11.355 16.077,12.554 11.644,18.318 ZM8.500,1.287 C4.534,1.287 1.308,4.468 1.308,8.378 C1.308,10.926 2.083,11.934 6.385,17.525 C7.016,18.346 7.717,19.255 8.500,20.281 C9.277,19.261 9.974,18.356 10.602,17.541 C14.915,11.933 15.692,10.921 15.692,8.378 C15.692,4.468 12.466,1.287 8.500,1.287 ZM8.500,12.890 C5.976,12.890 3.923,10.866 3.923,8.378 C3.923,5.890 5.976,3.866 8.500,3.866 C11.024,3.866 13.077,5.890 13.077,8.378 C13.077,10.866 11.024,12.890 8.500,12.890 ZM8.500,5.155 C6.697,5.155 5.231,6.601 5.231,8.378 C5.231,10.155 6.697,11.600 8.500,11.600 C10.303,11.600 11.769,10.155 11.769,8.378 C11.769,6.601 10.303,5.155 8.500,5.155 Z"/>
                  </svg>
                </div>
                <h3 class="cs-text_box_icon_title" >Rectoratul UPB</h3>
               
              </div>
              <div class="cs-height_45 cs-height_lg_30"></div>
              <a href="#pricing" class="cs-btn cs-style1 cs-btn_lg cs-medium text_uppercase cs-primary_font cs-accent_bg_2 cs-accent_border_2 cs-white cs-accent_bg_hover cs-white_hover cs-accent_border_hover cs-smoth_scroll">INSCRIERE </a>
            </div>
          </div>
        </div>
      </div><!-- .col -->
      <div class="col-lg-6 offset-lg-1 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="cs-right_full_width">
          <div class="cs-height_0 cs-height_lg_50"></div>
          <div class="cs-image_box cs-style3 cs-type3 cs-parallax">
            <div class="cs-image_box_img"><img src="../assets/img/event-conference/about.png" alt="About Image"></div>
         
            <div class="cs-image_box_pattern cs-to_left cs-accent_color_2"></div>
          </div>
        </div>
      </div><!-- .col -->
    </div>
  </div>
  <div class="cs-height_135 cs-height_lg_80"></div>
  <!-- End About Seciton -->
  </div>
  
  <!-- Start Schedule Section -->
  <div id="curse"></div>
   <div class="cs-accent_4_bg cs-flying_img_wrap cs-style6 cs-parallax">
    <img src="../assets/img/event-conference/flying-img3.png" alt="Flying image" class="cs-flying_img cs-posiiton1 cs-to_up">
    <img src="../assets/img/event-conference/flying-img4.png" alt="Flying image" class="cs-flying_img cs-posiiton2 cs-to_up">
    <div class="cs-height_135 cs-height_lg_75"></div>
    <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
      <div class="cs-section_heading cs-style2 cs-size3 text-center text-uppercase">
        <h2 class="cs-section_title cs-extra_bold">Curse</h2>
      </div>
      <div class="cs-height_70 cs-height_lg_50"></div>
    </div>
    <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
      <div class="cs-tabs cs-style2 cs-fade_tabs">
        <ul class="cs-tab_links cs-style5 cs-mp0 text-uppercase cs-accent_bg_2">
            
                 <li class="active">
            <a href="#tab_six" class="cs-accent_bg_hover">
              <h3 class="cs-semi_bold cs-white">All for One</h3>
              <p class="cs-white">Toate vârstele</p>
            </a>
          </li>
            
            
          <li >
            <a href="#tab_one" class="cs-accent_bg_hover">
              <h3 class="cs-semi_bold cs-white">Copii</h3>
              <p class="cs-white">< 10 ani</p>
            </a>
          </li>
          
         
          <li>
            <a href="#tab_two" class="cs-accent_bg_hover">
              <h3 class="cs-semi_bold cs-white">Fete</h3>
              <p class="cs-white">10-16 ani</p>
            </a>
          </li>
          <li>
            <a href="#tab_three" class="cs-accent_bg_hover">
              <h3 class="cs-semi_bold cs-white">Baieti</h3>
              <p class="cs-white">10-16 ani</p>
            </a>
          </li>
          <li>
            <a href="#tab_four" class="cs-accent_bg_hover">
              <h3 class="cs-semi_bold cs-white">Feminin</h3>
              <p class="cs-white">17-35 ani</p>
            </a>
          </li>
        
        
          <li>
            <a href="#tab_five" class="cs-accent_bg_hover">
              <h3 class="cs-semi_bold cs-white">Masculin</h3>
              <p class="cs-white">17-35 ani</p>
            </a>
          </li>
          
          
            
     
                     <li>
            <a href="#tab_seven" class="cs-accent_bg_hover">
              <h3 class="cs-semi_bold cs-white">Feminin</h3>
              <p class="cs-white">35+ ani</p>
            </a>
          </li>
          <li>
            <a href="#tab_eight" class="cs-accent_bg_hover">
              <h3 class="cs-semi_bold cs-white">Masculin</h3>
              <p class="cs-white">35+ ani</p>
            </a>
          </li>
          
          
        </ul>
        <div class="cs-tab_content">
          <div id="tab_one" class="cs-tab">
         
            <div class="cs-event cs-style1 cs-white_bg">
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Ora de start: 11:10</h2>
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Distanță: 400m</h2>
              
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Donaţie minimă: 20 RON</h2>
              <div class="cs-posted_by cs-primary_font text-uppercase cs-primary_color">
                
              
              </div>
              <button class="cs-event_toggle_btn cs-center cs-accent_color cs-accent_10_bg cs-accent_30_bg_hover active"><i class="fas fa-angle-down"></i></button>
              <div class="cs-event_toggle_body active">
                <div class="cs-event_details" style="margin-bottom:1rem;">   Vezi mai jos harta traseului!
                <p> Pentru mai multe informații consultați <a href="/assets/Regulament APV 2023.pdf" style=" font-weight: bold;">regulamentul </a></p>
</div>
        
          <div class="cs-event_location" style="margin-bottom:0.7rem;" >
                    
                    
                  <div class="cs-event_location_icon cs-center cs-accent_color cs-accent_10_bg" >
                      
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="22px">
                      <path fill-rule="evenodd" fill="currentColor" d="M11.644,18.318 C10.879,19.313 10.013,20.439 9.023,21.741 C8.900,21.904 8.706,21.999 8.500,21.999 C8.294,21.999 8.100,21.904 7.977,21.741 C6.981,20.432 6.111,19.302 5.343,18.305 C0.920,12.557 -0.000,11.360 -0.000,8.378 C-0.000,3.757 3.813,-0.001 8.500,-0.001 C13.187,-0.001 17.000,3.757 17.000,8.378 C17.000,11.355 16.077,12.554 11.644,18.318 ZM8.500,1.287 C4.534,1.287 1.308,4.468 1.308,8.378 C1.308,10.926 2.083,11.934 6.385,17.525 C7.016,18.346 7.717,19.255 8.500,20.281 C9.277,19.261 9.974,18.356 10.602,17.541 C14.915,11.933 15.692,10.921 15.692,8.378 C15.692,4.468 12.466,1.287 8.500,1.287 ZM8.500,12.890 C5.976,12.890 3.923,10.866 3.923,8.378 C3.923,5.890 5.976,3.866 8.500,3.866 C11.024,3.866 13.077,5.890 13.077,8.378 C13.077,10.866 11.024,12.890 8.500,12.890 ZM8.500,5.155 C6.697,5.155 5.231,6.601 5.231,8.378 C5.231,10.155 6.697,11.600 8.500,11.600 C10.303,11.600 11.769,10.155 11.769,8.378 C11.769,6.601 10.303,5.155 8.500,5.155 Z"></path>
                    </svg>
                  </div>
                  <h3 class="cs-event_location_title">Rectoratul UPB</h3>
                </div>
              </div>
              
                    <div class="map" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m42!1m12!1m3!1d1051.7564164316468!2d26.050924936618955!3d44.43943916368305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m27!3e2!4m5!1s0x40b201c187a44aeb%3A0x776c5045f461c6b0!2sBucure%C5%9Fti%20Sectorul%206%2C%20Bucure%C8%99ti%20061344!3m2!1d44.4396542!2d26.052221199999998!4m3!3m2!1d44.439018999999995!2d26.0515156!4m3!3m2!1d44.4397981!2d26.051081699999997!4m3!3m2!1d44.4400312!2d26.0518355!4m3!3m2!1d44.4399332!2d26.0523311!4m3!3m2!1d44.4396554!2d26.052215!5e0!3m2!1sro!2sro!4v1679949014977!5m2!1sro!2sro" loading="lazy" style="border:0;" ></iframe>
                </div>
                
              
            </div>
          
          </div><!-- .cs-tab -->
          
          
          <div id="tab_two" class="cs-tab ">
         
            <div class="cs-event cs-style1 cs-white_bg">
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Ora de start: 10:00</h2>
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Distanță: 1.8km (2 x 900m)</h2>
              
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Donaţie minimă: 20 RON</h2>
              <div class="cs-posted_by cs-primary_font text-uppercase cs-primary_color">
                
              
              </div>
              <button class="cs-event_toggle_btn cs-center cs-accent_color cs-accent_10_bg cs-accent_30_bg_hover active"><i class="fas fa-angle-down"></i></button>
              <div class="cs-event_toggle_body active">
                <div class="cs-event_details" style="margin-bottom:1rem;">   Vezi mai jos harta traseului!
                <p> Pentru mai multe informații consultați <a href="/assets/Regulament APV 2023.pdf" style=" font-weight: bold;">regulamentul </a></p>
</div>
        
          <div class="cs-event_location" style="margin-bottom:0.7rem;" >
                    
                    
                  <div class="cs-event_location_icon cs-center cs-accent_color cs-accent_10_bg" >
                      
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="22px">
                      <path fill-rule="evenodd" fill="currentColor" d="M11.644,18.318 C10.879,19.313 10.013,20.439 9.023,21.741 C8.900,21.904 8.706,21.999 8.500,21.999 C8.294,21.999 8.100,21.904 7.977,21.741 C6.981,20.432 6.111,19.302 5.343,18.305 C0.920,12.557 -0.000,11.360 -0.000,8.378 C-0.000,3.757 3.813,-0.001 8.500,-0.001 C13.187,-0.001 17.000,3.757 17.000,8.378 C17.000,11.355 16.077,12.554 11.644,18.318 ZM8.500,1.287 C4.534,1.287 1.308,4.468 1.308,8.378 C1.308,10.926 2.083,11.934 6.385,17.525 C7.016,18.346 7.717,19.255 8.500,20.281 C9.277,19.261 9.974,18.356 10.602,17.541 C14.915,11.933 15.692,10.921 15.692,8.378 C15.692,4.468 12.466,1.287 8.500,1.287 ZM8.500,12.890 C5.976,12.890 3.923,10.866 3.923,8.378 C3.923,5.890 5.976,3.866 8.500,3.866 C11.024,3.866 13.077,5.890 13.077,8.378 C13.077,10.866 11.024,12.890 8.500,12.890 ZM8.500,5.155 C6.697,5.155 5.231,6.601 5.231,8.378 C5.231,10.155 6.697,11.600 8.500,11.600 C10.303,11.600 11.769,10.155 11.769,8.378 C11.769,6.601 10.303,5.155 8.500,5.155 Z"></path>
                    </svg>
                  </div>
                  <h3 class="cs-event_location_title">Rectoratul UPB</h3>
                </div>
              </div>
              
                    <div class="map" >
  <iframe src="https://www.google.com/maps/embed?pb=!1m54!1m12!1m3!1d3197.5546921811306!2d26.052006740819518!3d44.43936790814989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m39!3e2!4m5!1s0x40b201c187a44aeb%3A0x776c5045f461c6b0!2sBucure%C5%9Fti%20Sectorul%206%2C%20Bucure%C8%99ti%20061344!3m2!1d44.4396542!2d26.052221199999998!4m3!3m2!1d44.438950999999996!2d26.0519574!4m3!3m2!1d44.4388648!2d26.052301!4m3!3m2!1d44.438254799999996!2d26.0521617!4m3!3m2!1d44.437896699999996!2d26.0542789!4m3!3m2!1d44.4400724!2d26.054449299999998!4m3!3m2!1d44.440621799999995!2d26.052691!4m3!3m2!1d44.4404821!2d26.052519099999998!4m3!3m2!1d44.4396604!2d26.0521988!5e0!3m2!1sro!2sro!4v1679943999036!5m2!1sro!2sro"loading="lazy" style="border:0;" ></iframe>
                </div>
                
              
            </div>
          
          </div><!-- .cs-tab -->
          
           
            <div id="tab_three" class="cs-tab ">
         
            <div class="cs-event cs-style1 cs-white_bg">
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Ora de start: 10:20</h2>
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Distanță: 1.8km (2 x 900m)</h2>
              
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Donaţie minimă: 20 RON</h2>
              <div class="cs-posted_by cs-primary_font text-uppercase cs-primary_color">
                
              
              </div>
              <button class="cs-event_toggle_btn cs-center cs-accent_color cs-accent_10_bg cs-accent_30_bg_hover active"><i class="fas fa-angle-down"></i></button>
              <div class="cs-event_toggle_body active">
                <div class="cs-event_details" style="margin-bottom:1rem;">   Vezi mai jos harta traseului!
                <p> Pentru mai multe informații consultați <a href="/assets/Regulament APV 2023.pdf" style=" font-weight: bold;">regulamentul </a></p>
</div>
        
          <div class="cs-event_location" style="margin-bottom:0.7rem;" >
                    
                    
                  <div class="cs-event_location_icon cs-center cs-accent_color cs-accent_10_bg" >
                      
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="22px">
                      <path fill-rule="evenodd" fill="currentColor" d="M11.644,18.318 C10.879,19.313 10.013,20.439 9.023,21.741 C8.900,21.904 8.706,21.999 8.500,21.999 C8.294,21.999 8.100,21.904 7.977,21.741 C6.981,20.432 6.111,19.302 5.343,18.305 C0.920,12.557 -0.000,11.360 -0.000,8.378 C-0.000,3.757 3.813,-0.001 8.500,-0.001 C13.187,-0.001 17.000,3.757 17.000,8.378 C17.000,11.355 16.077,12.554 11.644,18.318 ZM8.500,1.287 C4.534,1.287 1.308,4.468 1.308,8.378 C1.308,10.926 2.083,11.934 6.385,17.525 C7.016,18.346 7.717,19.255 8.500,20.281 C9.277,19.261 9.974,18.356 10.602,17.541 C14.915,11.933 15.692,10.921 15.692,8.378 C15.692,4.468 12.466,1.287 8.500,1.287 ZM8.500,12.890 C5.976,12.890 3.923,10.866 3.923,8.378 C3.923,5.890 5.976,3.866 8.500,3.866 C11.024,3.866 13.077,5.890 13.077,8.378 C13.077,10.866 11.024,12.890 8.500,12.890 ZM8.500,5.155 C6.697,5.155 5.231,6.601 5.231,8.378 C5.231,10.155 6.697,11.600 8.500,11.600 C10.303,11.600 11.769,10.155 11.769,8.378 C11.769,6.601 10.303,5.155 8.500,5.155 Z"></path>
                    </svg>
                  </div>
                  <h3 class="cs-event_location_title">Rectoratul UPB</h3>
                </div>
              </div>
              
                    <div class="map" >
  <iframe src="https://www.google.com/maps/embed?pb=!1m54!1m12!1m3!1d3197.5546921811306!2d26.052006740819518!3d44.43936790814989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m39!3e2!4m5!1s0x40b201c187a44aeb%3A0x776c5045f461c6b0!2sBucure%C5%9Fti%20Sectorul%206%2C%20Bucure%C8%99ti%20061344!3m2!1d44.4396542!2d26.052221199999998!4m3!3m2!1d44.438950999999996!2d26.0519574!4m3!3m2!1d44.4388648!2d26.052301!4m3!3m2!1d44.438254799999996!2d26.0521617!4m3!3m2!1d44.437896699999996!2d26.0542789!4m3!3m2!1d44.4400724!2d26.054449299999998!4m3!3m2!1d44.440621799999995!2d26.052691!4m3!3m2!1d44.4404821!2d26.052519099999998!4m3!3m2!1d44.4396604!2d26.0521988!5e0!3m2!1sro!2sro!4v1679943999036!5m2!1sro!2sro"loading="lazy" style="border:0;" ></iframe>
                </div>
                
              
            </div>
          
          </div><!-- .cs-tab -->
           
           
             <div id="tab_four" class="cs-tab ">
         
            <div class="cs-event cs-style1 cs-white_bg">
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Ora de start: 12:00</h2>
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Distanță: 4km (2 x 2km)</h2>
              
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Donaţie minimă: 40 RON</h2>
              <div class="cs-posted_by cs-primary_font text-uppercase cs-primary_color">
                
              
              </div>
              <button class="cs-event_toggle_btn cs-center cs-accent_color cs-accent_10_bg cs-accent_30_bg_hover active"><i class="fas fa-angle-down"></i></button>
              <div class="cs-event_toggle_body active">
                <div class="cs-event_details" style="margin-bottom:1rem;">   Vezi mai jos harta traseului!
                <p> Pentru mai multe informații consultați <a href="/assets/Regulament APV 2023.pdf" style=" font-weight: bold;">regulamentul </a></p>
</div>
        
          <div class="cs-event_location" style="margin-bottom:0.7rem;" >
                    
                    
                  <div class="cs-event_location_icon cs-center cs-accent_color cs-accent_10_bg" >
                      
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="22px">
                      <path fill-rule="evenodd" fill="currentColor" d="M11.644,18.318 C10.879,19.313 10.013,20.439 9.023,21.741 C8.900,21.904 8.706,21.999 8.500,21.999 C8.294,21.999 8.100,21.904 7.977,21.741 C6.981,20.432 6.111,19.302 5.343,18.305 C0.920,12.557 -0.000,11.360 -0.000,8.378 C-0.000,3.757 3.813,-0.001 8.500,-0.001 C13.187,-0.001 17.000,3.757 17.000,8.378 C17.000,11.355 16.077,12.554 11.644,18.318 ZM8.500,1.287 C4.534,1.287 1.308,4.468 1.308,8.378 C1.308,10.926 2.083,11.934 6.385,17.525 C7.016,18.346 7.717,19.255 8.500,20.281 C9.277,19.261 9.974,18.356 10.602,17.541 C14.915,11.933 15.692,10.921 15.692,8.378 C15.692,4.468 12.466,1.287 8.500,1.287 ZM8.500,12.890 C5.976,12.890 3.923,10.866 3.923,8.378 C3.923,5.890 5.976,3.866 8.500,3.866 C11.024,3.866 13.077,5.890 13.077,8.378 C13.077,10.866 11.024,12.890 8.500,12.890 ZM8.500,5.155 C6.697,5.155 5.231,6.601 5.231,8.378 C5.231,10.155 6.697,11.600 8.500,11.600 C10.303,11.600 11.769,10.155 11.769,8.378 C11.769,6.601 10.303,5.155 8.500,5.155 Z"></path>
                    </svg>
                  </div>
                  <h3 class="cs-event_location_title">Rectoratul UPB</h3>
                </div>
              </div>
              
                    <div class="map" >
 <iframe src="https://www.google.com/maps/embed?pb=!1m52!1m12!1m3!1d1359.0739952763695!2d26.051536155519436!3d44.4381565085272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m37!3e2!4m3!3m2!1d44.4372435!2d26.047853099999998!4m3!3m2!1d44.4392806!2d26.047387!4m3!3m2!1d44.4388363!2d26.0495043!4m3!3m2!1d44.438002399999995!2d26.051835699999998!4m3!3m2!1d44.440619999999996!2d26.0526777!4m3!3m2!1d44.4378836!2d26.054248899999997!4m3!3m2!1d44.4377256!2d26.051095999999998!4m3!3m2!1d44.4380264!2d26.0493903!4m3!3m2!1d44.4372292!2d26.0480509!5e0!3m2!1sro!2sro!4v1679944496994!5m2!1sro!2sro" loading="lazy"style="border:0;" ></iframe>
                </div>
                
              
            </div>
          
          </div><!-- .cs-tab -->
           
     <div id="tab_five" class="cs-tab ">
         
            <div class="cs-event cs-style1 cs-white_bg">
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Ora de start: 13:00</h2>
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Distanță: 6km (3 x 2km)</h2>
              
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Donaţie minimă: 40 RON</h2>
              <div class="cs-posted_by cs-primary_font text-uppercase cs-primary_color">
                
              
              </div>
              <button class="cs-event_toggle_btn cs-center cs-accent_color cs-accent_10_bg cs-accent_30_bg_hover active"><i class="fas fa-angle-down"></i></button>
              <div class="cs-event_toggle_body active">
                <div class="cs-event_details" style="margin-bottom:1rem;">   Vezi mai jos harta traseului!
                <p> Pentru mai multe informații consultați <a href="/assets/Regulament APV 2023.pdf" style=" font-weight: bold;">regulamentul </a></p>
</div>
        
          <div class="cs-event_location" style="margin-bottom:0.7rem;" >
                    
                    
                  <div class="cs-event_location_icon cs-center cs-accent_color cs-accent_10_bg" >
                      
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="22px">
                      <path fill-rule="evenodd" fill="currentColor" d="M11.644,18.318 C10.879,19.313 10.013,20.439 9.023,21.741 C8.900,21.904 8.706,21.999 8.500,21.999 C8.294,21.999 8.100,21.904 7.977,21.741 C6.981,20.432 6.111,19.302 5.343,18.305 C0.920,12.557 -0.000,11.360 -0.000,8.378 C-0.000,3.757 3.813,-0.001 8.500,-0.001 C13.187,-0.001 17.000,3.757 17.000,8.378 C17.000,11.355 16.077,12.554 11.644,18.318 ZM8.500,1.287 C4.534,1.287 1.308,4.468 1.308,8.378 C1.308,10.926 2.083,11.934 6.385,17.525 C7.016,18.346 7.717,19.255 8.500,20.281 C9.277,19.261 9.974,18.356 10.602,17.541 C14.915,11.933 15.692,10.921 15.692,8.378 C15.692,4.468 12.466,1.287 8.500,1.287 ZM8.500,12.890 C5.976,12.890 3.923,10.866 3.923,8.378 C3.923,5.890 5.976,3.866 8.500,3.866 C11.024,3.866 13.077,5.890 13.077,8.378 C13.077,10.866 11.024,12.890 8.500,12.890 ZM8.500,5.155 C6.697,5.155 5.231,6.601 5.231,8.378 C5.231,10.155 6.697,11.600 8.500,11.600 C10.303,11.600 11.769,10.155 11.769,8.378 C11.769,6.601 10.303,5.155 8.500,5.155 Z"></path>
                    </svg>
                  </div>
                  <h3 class="cs-event_location_title">Rectoratul UPB</h3>
                </div>
              </div>
              
                    <div class="map" >
 <iframe src="https://www.google.com/maps/embed?pb=!1m52!1m12!1m3!1d1359.0739952763695!2d26.051536155519436!3d44.4381565085272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m37!3e2!4m3!3m2!1d44.4372435!2d26.047853099999998!4m3!3m2!1d44.4392806!2d26.047387!4m3!3m2!1d44.4388363!2d26.0495043!4m3!3m2!1d44.438002399999995!2d26.051835699999998!4m3!3m2!1d44.440619999999996!2d26.0526777!4m3!3m2!1d44.4378836!2d26.054248899999997!4m3!3m2!1d44.4377256!2d26.051095999999998!4m3!3m2!1d44.4380264!2d26.0493903!4m3!3m2!1d44.4372292!2d26.0480509!5e0!3m2!1sro!2sro!4v1679944496994!5m2!1sro!2sro"loading="lazy" style="border:0;" ></iframe>
                </div>
                
              
            </div>
          
          </div><!-- .cs-tab -->
          
        <div id="tab_six" class="cs-tab active">
         
            <div class="cs-event cs-style1 cs-white_bg">
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Ora de start: 11:30</h2>
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Distanță: 400m</h2>
              
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Donaţie minimă: Opţional</h2>
              <div class="cs-posted_by cs-primary_font text-uppercase cs-primary_color">
                
              
              </div>
              <button class="cs-event_toggle_btn cs-center cs-accent_color cs-accent_10_bg cs-accent_30_bg_hover active"><i class="fas fa-angle-down"></i></button>
              <div class="cs-event_toggle_body active">
                <div class="cs-event_details" style="margin-bottom:1rem;">Cursa All For One este o tură populară, necompetitivă, perfectă pentru cei care vor să facă mișcare în natură pe o distanță accesibilă. Aceasta se adresează tuturor persoanelor, de orice vârstă sau gen, chiar și persoanelor cu dizabilități.
                <p style="margin-top:0.5rem;">Tocmai în spiritul caritabil din care s-a și născut Aleargă Pentru Viață, participanții sunt încurajați să ofere drept donație pentru Florin cât consideră.</p>
                <p  style="margin-top:-1rem;">Vezi mai jos harta traseului!</p>
                <p style="margin-top:-1rem;"> Pentru mai multe informații consultați <a href="/assets/Regulament APV 2023.pdf" style=" font-weight: bold;">regulamentul </a></p>
</div>
        
          <div class="cs-event_location" style="margin-bottom:0.7rem;" >
                    
                    
                  <div class="cs-event_location_icon cs-center cs-accent_color cs-accent_10_bg" >
                      
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="22px">
                      <path fill-rule="evenodd" fill="currentColor" d="M11.644,18.318 C10.879,19.313 10.013,20.439 9.023,21.741 C8.900,21.904 8.706,21.999 8.500,21.999 C8.294,21.999 8.100,21.904 7.977,21.741 C6.981,20.432 6.111,19.302 5.343,18.305 C0.920,12.557 -0.000,11.360 -0.000,8.378 C-0.000,3.757 3.813,-0.001 8.500,-0.001 C13.187,-0.001 17.000,3.757 17.000,8.378 C17.000,11.355 16.077,12.554 11.644,18.318 ZM8.500,1.287 C4.534,1.287 1.308,4.468 1.308,8.378 C1.308,10.926 2.083,11.934 6.385,17.525 C7.016,18.346 7.717,19.255 8.500,20.281 C9.277,19.261 9.974,18.356 10.602,17.541 C14.915,11.933 15.692,10.921 15.692,8.378 C15.692,4.468 12.466,1.287 8.500,1.287 ZM8.500,12.890 C5.976,12.890 3.923,10.866 3.923,8.378 C3.923,5.890 5.976,3.866 8.500,3.866 C11.024,3.866 13.077,5.890 13.077,8.378 C13.077,10.866 11.024,12.890 8.500,12.890 ZM8.500,5.155 C6.697,5.155 5.231,6.601 5.231,8.378 C5.231,10.155 6.697,11.600 8.500,11.600 C10.303,11.600 11.769,10.155 11.769,8.378 C11.769,6.601 10.303,5.155 8.500,5.155 Z"></path>
                    </svg>
                  </div>
                  <h3 class="cs-event_location_title">Rectoratul UPB</h3>
                </div>
              </div>
              
                    <div class="map" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m42!1m12!1m3!1d1051.7564164316468!2d26.050924936618955!3d44.43943916368305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m27!3e2!4m5!1s0x40b201c187a44aeb%3A0x776c5045f461c6b0!2sBucure%C5%9Fti%20Sectorul%206%2C%20Bucure%C8%99ti%20061344!3m2!1d44.4396542!2d26.052221199999998!4m3!3m2!1d44.439018999999995!2d26.0515156!4m3!3m2!1d44.4397981!2d26.051081699999997!4m3!3m2!1d44.4400312!2d26.0518355!4m3!3m2!1d44.4399332!2d26.0523311!4m3!3m2!1d44.4396554!2d26.052215!5e0!3m2!1sro!2sro!4v1679949014977!5m2!1sro!2sro" loading="lazy" style="border:0;" ></iframe>
                </div>
                
              
            </div>
          
          </div><!-- .cs-tab -->
          
           
     <div id="tab_seven" class="cs-tab ">
         
            <div class="cs-event cs-style1 cs-white_bg">
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Ora de start: 14:10</h2>
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Distanță: 2km </h2>
              
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Donaţie minimă: 40 RON</h2>
              <div class="cs-posted_by cs-primary_font text-uppercase cs-primary_color">
                
              
              </div>
              <button class="cs-event_toggle_btn cs-center cs-accent_color cs-accent_10_bg cs-accent_30_bg_hover active"><i class="fas fa-angle-down"></i></button>
              <div class="cs-event_toggle_body active">
                <div class="cs-event_details" style="margin-bottom:1rem;">  Vezi mai jos harta traseului!
                <p> Pentru mai multe informații consultați <a href="/assets/Regulament APV 2023.pdf" style=" font-weight: bold;">regulamentul </a></p>
</div>
        
          <div class="cs-event_location" style="margin-bottom:0.7rem;" >
                    
                    
                  <div class="cs-event_location_icon cs-center cs-accent_color cs-accent_10_bg" >
                      
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="22px">
                      <path fill-rule="evenodd" fill="currentColor" d="M11.644,18.318 C10.879,19.313 10.013,20.439 9.023,21.741 C8.900,21.904 8.706,21.999 8.500,21.999 C8.294,21.999 8.100,21.904 7.977,21.741 C6.981,20.432 6.111,19.302 5.343,18.305 C0.920,12.557 -0.000,11.360 -0.000,8.378 C-0.000,3.757 3.813,-0.001 8.500,-0.001 C13.187,-0.001 17.000,3.757 17.000,8.378 C17.000,11.355 16.077,12.554 11.644,18.318 ZM8.500,1.287 C4.534,1.287 1.308,4.468 1.308,8.378 C1.308,10.926 2.083,11.934 6.385,17.525 C7.016,18.346 7.717,19.255 8.500,20.281 C9.277,19.261 9.974,18.356 10.602,17.541 C14.915,11.933 15.692,10.921 15.692,8.378 C15.692,4.468 12.466,1.287 8.500,1.287 ZM8.500,12.890 C5.976,12.890 3.923,10.866 3.923,8.378 C3.923,5.890 5.976,3.866 8.500,3.866 C11.024,3.866 13.077,5.890 13.077,8.378 C13.077,10.866 11.024,12.890 8.500,12.890 ZM8.500,5.155 C6.697,5.155 5.231,6.601 5.231,8.378 C5.231,10.155 6.697,11.600 8.500,11.600 C10.303,11.600 11.769,10.155 11.769,8.378 C11.769,6.601 10.303,5.155 8.500,5.155 Z"></path>
                    </svg>
                  </div>
                  <h3 class="cs-event_location_title">Rectoratul UPB</h3>
                </div>
              </div>
              
                    <div class="map" >
 <iframe src="https://www.google.com/maps/embed?pb=!1m52!1m12!1m3!1d1359.0739952763695!2d26.051536155519436!3d44.4381565085272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m37!3e2!4m3!3m2!1d44.4372435!2d26.047853099999998!4m3!3m2!1d44.4392806!2d26.047387!4m3!3m2!1d44.4388363!2d26.0495043!4m3!3m2!1d44.438002399999995!2d26.051835699999998!4m3!3m2!1d44.440619999999996!2d26.0526777!4m3!3m2!1d44.4378836!2d26.054248899999997!4m3!3m2!1d44.4377256!2d26.051095999999998!4m3!3m2!1d44.4380264!2d26.0493903!4m3!3m2!1d44.4372292!2d26.0480509!5e0!3m2!1sro!2sro!4v1679944496994!5m2!1sro!2sro"loading="lazy" style="border:0;" ></iframe>
                </div>
                
              
            </div>
          
          </div>
        
                            
         <div id="tab_eight" class="cs-tab ">
         
            <div class="cs-event cs-style1 cs-white_bg">
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Ora de start: 15:00</h2>
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Distanță: 4km (2 x 2km) </h2>
              
              <h2 class="cs-event_title text-uppercase cs-semi_bold">Donaţie minimă: 40 RON</h2>
              <div class="cs-posted_by cs-primary_font text-uppercase cs-primary_color">
                
              
              </div>
              <button class="cs-event_toggle_btn cs-center cs-accent_color cs-accent_10_bg cs-accent_30_bg_hover active"><i class="fas fa-angle-down"></i></button>
              <div class="cs-event_toggle_body active">
                <div class="cs-event_details" style="margin-bottom:1rem;">  Vezi mai jos harta traseului!
                <p> Pentru mai multe informații consultați <a href="/assets/Regulament APV 2023.pdf" style=" font-weight: bold;">regulamentul </a></p>
</div>
        
          <div class="cs-event_location" style="margin-bottom:0.7rem;" >
                    
                    
                  <div class="cs-event_location_icon cs-center cs-accent_color cs-accent_10_bg" >
                      
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="22px">
                      <path fill-rule="evenodd" fill="currentColor" d="M11.644,18.318 C10.879,19.313 10.013,20.439 9.023,21.741 C8.900,21.904 8.706,21.999 8.500,21.999 C8.294,21.999 8.100,21.904 7.977,21.741 C6.981,20.432 6.111,19.302 5.343,18.305 C0.920,12.557 -0.000,11.360 -0.000,8.378 C-0.000,3.757 3.813,-0.001 8.500,-0.001 C13.187,-0.001 17.000,3.757 17.000,8.378 C17.000,11.355 16.077,12.554 11.644,18.318 ZM8.500,1.287 C4.534,1.287 1.308,4.468 1.308,8.378 C1.308,10.926 2.083,11.934 6.385,17.525 C7.016,18.346 7.717,19.255 8.500,20.281 C9.277,19.261 9.974,18.356 10.602,17.541 C14.915,11.933 15.692,10.921 15.692,8.378 C15.692,4.468 12.466,1.287 8.500,1.287 ZM8.500,12.890 C5.976,12.890 3.923,10.866 3.923,8.378 C3.923,5.890 5.976,3.866 8.500,3.866 C11.024,3.866 13.077,5.890 13.077,8.378 C13.077,10.866 11.024,12.890 8.500,12.890 ZM8.500,5.155 C6.697,5.155 5.231,6.601 5.231,8.378 C5.231,10.155 6.697,11.600 8.500,11.600 C10.303,11.600 11.769,10.155 11.769,8.378 C11.769,6.601 10.303,5.155 8.500,5.155 Z"></path>
                    </svg>
                  </div>
                  <h3 class="cs-event_location_title">Rectoratul UPB</h3>
                </div>
              </div>
              
                    <div class="map" >
 <iframe src="https://www.google.com/maps/embed?pb=!1m52!1m12!1m3!1d1359.0739952763695!2d26.051536155519436!3d44.4381565085272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m37!3e2!4m3!3m2!1d44.4372435!2d26.047853099999998!4m3!3m2!1d44.4392806!2d26.047387!4m3!3m2!1d44.4388363!2d26.0495043!4m3!3m2!1d44.438002399999995!2d26.051835699999998!4m3!3m2!1d44.440619999999996!2d26.0526777!4m3!3m2!1d44.4378836!2d26.054248899999997!4m3!3m2!1d44.4377256!2d26.051095999999998!4m3!3m2!1d44.4380264!2d26.0493903!4m3!3m2!1d44.4372292!2d26.0480509!5e0!3m2!1sro!2sro!4v1679944496994!5m2!1sro!2sro"loading="lazy" style="border:0;" ></iframe>
                </div>
                
              
            </div>
          
          </div>
        
          
          </div><!-- .cs-tab -->
        </div>
      </div>
    </div>
    <div class="cs-height_140 cs-height_lg_80"></div>
  </div>
  
   <div class="cs-height_135 cs-height_lg_75"></div>
  <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
    <div class="cs-section_heading cs-style2 cs-size3 text-center text-uppercase">
      <div class="cs-section_subtitle cs-primary_font cs-medium cs-accent_color">Cauza Aleargă Pentru Viață 2023
</div>
      <h2 class="cs-section_title cs-extra_bold">Florin Moise</h2>
    </div>
    <div class="cs-height_70 cs-height_lg_50"></div>
  </div>
  <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
    <div class="cs-slider cs-style1 cs-remove_overflow">
      <div class="cs-slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-fade-slide="1" data-slides-per-view="1">
        <div class="cs-slider_wrapper">
          <div class="cs-slide">
            <div class="cs-testimonial cs-style9">
              <div class="cs-testimonial_left">
                <div class="cs-testimonial_avatar">
                  <img src="../assets/img/event-conference/testimonial1.jpg" alt="Testimonial" class="cs-testimonial_img">
                  <img src="../assets/img/event-conference/testimonial_shape1.png" alt="" class="cs-avatar_shape cs-type1">
                  <img src="../assets/img/event-conference/testimonial_shape2.png" alt="" class="cs-avatar_shape cs-type2">
                </div>
              </div>
              <div class="cs-testimonial_right cs-vertical_middle">
                <div class="cs-vertical_middle_in">
                  <div class="cs-testimonial_icon cs-accent_20_color">
                    <img src="../assets/img/event-conference/icons/icon1.png" alt="">
                  </div>
                  <div class="cs-testimonial_text">La vârsta de 15 ani, în septembrie 2020, Florin Moise a fost implicat într-un accident provocat de un șofer neatent, aflat sub influența băuturilor alcoolice.  Astfel, a primit un diagnostic crunt: Tetraplegie Spastică Scheletară post Fractură Vertebrală.
Deși medicii nu i-au dat nici o șansă la viață, Florin a luptat să le demonstreze tuturor că este un erou. 
</div>
                  <h3 class="cs-testimonial_avatar_name text-uppercase cs-medium">Mai multe detalii despre Florin:</h3>
                   <div class="cs-height_45 cs-height_lg_30"></div>
              <a href="cauza.php" class="cs-btn cs-style1 cs-btn_lg cs-medium text_uppercase cs-primary_font cs-accent_bg_2 cs-accent_border_2 cs-white cs-accent_bg_hover cs-white_hover cs-accent_border_hover cs-smoth_scroll"> DETALII </a>
            </div>
                </div>
                </div>
              </div>
            </div>
          </div><!-- .cs-slide -->

    </div><!-- .cs-slider -->
  </div>
  <!-- End Testimonial Section -->
  

  <!-- End Schedule Section -->
  <div id="pricing" >
    <div></div>
    <!-- Start Pricing Section -->
    <div class="cs-gradient_bg_1 cs-flying_img_wrap cs-style8 cs-parallax">
      <img src="../assets/img/event-conference/flying-img8.png" alt="Flying image" class="cs-flying_img cs-posiiton1 cs-to_up">
      <img src="../assets/img/event-conference/flying-img7.png" alt="Flying image" class="cs-flying_img cs-posiiton2 cs-to_right_up">
      <div class="cs-height_135 cs-height_lg_75"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-5 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="cs-text_box cs-style1 cs-type1">
              <div class="cs-text_box_subtitle cs-medium cs-accent_color"> Alătură-te nouă în lupta pentru Florin!
</div>
              <h2 class="cs-text_box_title text-uppercase cs-bold">Înscrie-te la Aleargă Pentru Viață 2023</h2>
              <div class="cs-height_35 cs-height_lg_35"></div>
              <div class="cs-text_box_text"> Înscrierile se pot realiza atât în ziua evenimentului, cu cel mult 30 minute înainte de startul fiecărei curse, cât și online, accesând una dintre cele două opțiuni.

Persoanele înscrise online vor avea prioritate la check-in în ziua evenimentului.
</div>
              <div class="cs-height_35 cs-height_lg_35"></div>
            
            </div>
            <div class="cs-height_0 cs-height_lg_50"></div>
          </div>
          <div class="col-lg-7 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="cs-pricing_table_3_wrap">
              <div class="row">
                <div class="col-sm-6">
                  <div class="cs-pricing_table cs-style3 cs-white_bg text-center">
                    <div class="cs-pricing_head position-relative overflow-hidden cs-accent_color">
                      <h2 class="cs-pricing_name cs-medium text-uppercase cs-secondary_font cs-white_80" style="margin-top:2rem; zoom:1.3;"> Plată Cash</h2>
                      <div class="cs-price_wrap cs-bold cs-white">
                        <span class="cs-symble"></span>
                        <span class="cs-price"></span>
                      </div>
                      <div class="cs-pricing_bar"></div>
                    </div>
                    <div class="cs-pricing_table_in">
                      <ul class="cs-pricing_feature cs-mp0">
                        <li><i class="fas fa-check cs-accent_color_2"></i>se realizează în ziua evenimentului, la check-in
</li>
                      </ul>
                      <div class="cs-height_30 cs-height_lg_30"></div>
                      <div class="cs-pricing_btn">
                        <a href="register.php"class="cs-btn cs-style1 cs-medium text_uppercase cs-primary_font cs-accent_bg cs-accent_border cs-white cs-accent_bg_2_hover cs-white_hover cs-accent_border_2_hover" >Inscriere</a>
                      </div>
                    </div>
                  </div>
                  <div class="cs-height_60 cs-height_lg_60"></div>
                </div>
                <div class="col-sm-6">
                  <div class="cs-pricing_table cs-style3 cs-white_bg text-center">
                    <div class="cs-pricing_head position-relative overflow-hidden cs-accent_color_2">
                      <h2 class="cs-pricing_name cs-medium text-uppercase cs-secondary_font cs-white_80" style="margin-top:2rem; zoom:1.3;"> Plată Card</h2>
                      <div class="cs-price_wrap cs-bold cs-white">
                        <span class="cs-symble"></span>
                        <span class="cs-price"></span>
                      </div>
                      <div class="cs-pricing_bar"></div>
                    </div>
                    <div class="cs-pricing_table_in">
                      <ul class="cs-pricing_feature cs-mp0">
                        <li><i class="fas fa-check cs-accent_color"></i>se realizează doar online, după completarea formularului de înscriere</li>
                      </ul>
                      <div class="cs-height_30 cs-height_lg_30"></div>
                      <div class="cs-pricing_btn">
                        <a href="register.php" class="cs-btn cs-style1 cs-medium text_uppercase cs-primary_font cs-accent_bg_2 cs-accent_border_2 cs-white cs-accent_bg_hover cs-white_hover cs-accent_border_hover">Inscriere</a>
                      </div>
                    </div>
                  </div>
                  <div class="cs-height_60 cs-height_lg_60"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cs-height_110 cs-height_lg_50"></div>
    </div>
    <!-- End Pricing Section -->
  </div>
  
  <!-- Start Team Seation -->
  
  <!-- End Team Seation -->



  <!-- Start Testimonial Section -->
 

  <div class="cs-flying_img_wrap cs-style9 cs-parallax">
    <img src="../assets/img/event-conference/flying-img9.png" alt="Flying image" class="cs-flying_img cs-posiiton1 cs-to_left_up">
    <img src="../assets/img/event-conference/flying-img6.png" alt="Flying image" class="cs-flying_img cs-posiiton2 cs-to_up">
    <div class="cs-height_135 cs-height_lg_75"></div>
    <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
      <div class="cs-section_heading cs-style2 cs-size3 text-center text-uppercase">
        <div class="cs-section_subtitle cs-primary_font cs-medium cs-accent_color">Momente Speciale</div>
        <h2 class="cs-section_title cs-extra_bold">Galerie Foto</h2>
      </div>
      <div class="cs-height_70 cs-height_lg_50"></div>
    </div>
    <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
      <div class="cs-isotop cs-style1 cs-isotop_col_3 cs-has_gutter_30 cs-lightgallery">
        <div class="cs-grid_sizer"></div>
        <div class="cs-isotop_item">
          <a href="../assets/img/event-conference/gallery_lg_8.jpg" class="cs-gallery cs-style1 cs-bg cs-gallery_height2 cs-lightbox-item" data-src="../assets/img/event-conference/gallery1.jpg">
            <div class="cs-gallery_hover cs-center cs-accent_80_bg"><span class="cs-add"></span></div>
          </a>
        </div><!-- .cs-isotop_item -->
        <div class="cs-isotop_item">
          <a href="../assets/img/event-conference/gallery_lg_7.jpg" class="cs-gallery cs-style1 cs-bg cs-gallery_height3 cs-lightbox-item" data-src="../assets/img/event-conference/gallery2.jpg">
            <div class="cs-gallery_hover cs-center cs-accent_80_bg"><span class="cs-add"></span></div>
          </a>
        </div><!-- .cs-isotop_item -->
        <div class="cs-isotop_item">
          <a href="../assets/img/event-conference/gallery_lg_12.jpg" class="cs-gallery cs-style1 cs-bg cs-gallery_height4 cs-lightbox-item" data-src="../assets/img/event-conference/gallery3.jpg">
            <div class="cs-gallery_hover cs-center cs-accent_80_bg"><span class="cs-add"></span></div>
          </a>
        </div><!-- .cs-isotop_item -->
        <div class="cs-isotop_item">
          <a href="../assets/img/event-conference/gallery_lg_11.jpg" class="cs-gallery cs-style1 cs-bg cs-gallery_height5 cs-lightbox-item" data-src="../assets/img/event-conference/gallery4.jpg">
            <div class="cs-gallery_hover cs-center cs-accent_80_bg"><span class="cs-add"></span></div>
          </a>
        </div><!-- .cs-isotop_item -->
        <div class="cs-isotop_item">
          <a href="../assets/img/event-conference/gallery_lg_10.jpg" class="cs-gallery cs-style1 cs-bg cs-gallery_height4 cs-lightbox-item" data-src="../assets/img/event-conference/gallery5.jpg">
            <div class="cs-gallery_hover cs-center cs-accent_80_bg"><span class="cs-add"></span></div>
          </a>
        </div><!-- .cs-isotop_item -->
        <div class="cs-isotop_item">
          <a href="../assets/img/event-conference/gallery_lg_1.jpg" class="cs-gallery cs-style1 cs-bg cs-gallery_height6 cs-lightbox-item" data-src="../assets/img/event-conference/gallery6.jpg">
            <div class="cs-gallery_hover cs-center cs-accent_80_bg"><span class="cs-add"></span></div>
          </a>
        </div><!-- .cs-isotop_item -->
      </div><!-- .isotop -->
    </div>
    <div class="cs-height_50 cs-height_lg_50"></div>
    <div class="text-center">
      <a href="https://www.facebook.com/media/set/?set=a.603987195089837&type=3" target="_blank" class="cs-btn cs-style1 cs-btn_lg cs-medium text_uppercase cs-primary_font cs-accent_bg_2 cs-accent_border_2 cs-white cs-accent_bg_hover cs-white_hover cs-accent_border_hover">Galerie Foto</a>
    </div>
    <div class="cs-height_140 cs-height_lg_80"></div>
  </div>
  <!-- End Gallery Section -->


  <!-- Start Sponsors Section -->
  <div class="cs-gradient_bg_2">
    <div class="cs-height_135 cs-height_lg_75"></div>
                <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="margin-bottom:2rem;">
      <div class="cs-section_heading cs-style4 cs-size4 text-uppercase">
        <div class="cs-section_heading_left" >
               <h2 class="cs-section_title cs-extra_bold text-center">Partener media</h2>
        </div>
        <div class="cs-section_heading_right">
        
          </a>
        </div>
      </div>
      <div class="cs-height_75 cs-height_lg_55"></div>
    </div>
    <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
     
         <div class="row" style="  display: flex;
  justify-content: center; margin-bottom:10rem;">
  
        <div class="col-lg-4">
          <div class="cs-post cs-style10" >
            <a href="https://zutv.ro/"  target="_blank" class="cs-post_thumb" data-src="../assets/img/event-conference/post14.png"></a>
       
          </div>
      </div>
      </div>
       <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="margin-bottom:2rem;">
      <div class="cs-section_heading cs-style4 cs-size4 text-uppercase">
        <div class="cs-section_heading_left" >
               <h2 class="cs-section_title cs-extra_bold text-center">Organizatori</h2>
        </div>
        <div class="cs-section_heading_right">
        
          </a>
        </div>
      </div>
      <div class="cs-height_75 cs-height_lg_55"></div>
    </div>
    <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
     
         <div class="row">
        <div class="col-lg-4">
          <div class="cs-post cs-style10">
            <a href="https://upb.ro/"  target="_blank" class="cs-post_thumb" data-src="../assets/img/event-conference/post1.png"></a>
         
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-lg-4">
          <div class="cs-post cs-style10">
            <a href="http://www.electronica.pub.ro/"  target="_blank" class="cs-post_thumb" data-src="../assets/img/event-conference/post2.png"></a>
       
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-lg-4">
          <div class="cs-post cs-style10 ">
            <a href="https://lsebucuresti.org/" target="_blank" class="cs-post_thumb cs-bg" data-src="../assets/img/event-conference/post3.png"></a>
           
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
      </div>
      </div>

    <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" style="margin-top:10rem;">
      <div class="cs-section_heading cs-style4 cs-size4 text-uppercase">
        <div class="cs-section_heading_left" >
               <h2 class="cs-section_title cs-extra_bold text-center">Sponsori</h2>
        </div>
        <div class="cs-section_heading_right">
        
          </a>
        </div>
      </div>
      <div class="cs-height_75 cs-height_lg_55"></div>
    </div>
    <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">

       <div class="row">
        <div class="col-lg-4">
          <div class="cs-post cs-style10">
            <a href="http://2mprint.ro/"  target="_blank" class="cs-post_thumb" data-src="../assets/img/event-conference/post4.png"></a>
         
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-lg-4">
          <div class="cs-post cs-style10">
            <a href="https://www.nanevents.ro/"  target="_blank" class="cs-post_thumb" data-src="../assets/img/event-conference/post5.png"></a>
       
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-lg-4">
          <div class="cs-post cs-style10 ">
            <a href="https://www.nutrivita.ro/" target="_blank" class="cs-post_thumb cs-bg" data-src="../assets/img/event-conference/post6.png"></a>
           
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
         <div class="row">
        <div class="col-lg-4">
          <div class="cs-post cs-style10">
            <a href="https://www.trendyshades.ro/"  target="_blank" class="cs-post_thumb" data-src="../assets/img/event-conference/post7.png"></a>
         
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-lg-4">
          <div class="cs-post cs-style10">
            <a href="https://www.watch24.ro/"  target="_blank" class="cs-post_thumb" data-src="../assets/img/event-conference/post8.png"></a>
       
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-lg-4">
          <div class="cs-post cs-style10 ">
            <a href="https://fssu.ro/" target="_blank" class="cs-post_thumb cs-bg" data-src="../assets/img/event-conference/post9.png"></a>
           
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
      </div>
      </div>
       <div class="row">
        <div class="col-lg-4">
          <div class="cs-post cs-style10">
            <a href="https://ivelo.ro/"  target="_blank" class="cs-post_thumb" data-src="../assets/img/event-conference/post11.png"></a>
         
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-lg-4">
          <div class="cs-post cs-style10">
            <a href="https://aquacarpatica.ro/"  target="_blank" class="cs-post_thumb" data-src="../assets/img/event-conference/post12.png"></a>
       
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-lg-4">
          <div class="cs-post cs-style10 ">
            <a href="https://balmix.ro/" target="_blank" class="cs-post_thumb cs-bg" data-src="../assets/img/event-conference/post13.png"></a>
           
          </div>
    </div>

      <div class="row">
        <div class="col-lg-4">
          <div class="cs-post cs-style10">
            <a href="https://www.floridelux.ro/"  target="_blank" class="cs-post_thumb" data-src="../assets/img/event-conference/post10.png"></a>
         
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-lg-4">
          <div class="cs-post cs-style10">
            <a href="https://en.veronatraining.com/"  target="_blank" class="cs-post_thumb" data-src="../assets/img/event-conference/post15.png"></a>
       
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-lg-4">
          <div class="cs-post cs-style10 ">
            <a href="https://www.kissfm.ro/" target="_blank" class="cs-post_thumb cs-bg" data-src="../assets/img/event-conference/post16.png"></a>
           
          </div>
    </div>
  
    <div class="row">
        <div class="col-lg-4">
          <div class="cs-post cs-style10">
            <a href="https://sportsbusinessacademy.ro/"  target="_blank" class="cs-post_thumb" data-src="../assets/img/event-conference/post17.png"></a>
         
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-lg-4">
          <div class="cs-post cs-style10">
            <a href="https://18gym.ro/"  target="_blank" class="cs-post_thumb" data-src="../assets/img/event-conference/post18.png"></a>
       
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-lg-4">
          <div class="cs-post cs-style10 ">
            <a href="https://lsebucuresti.org/" target="_blank" class="cs-post_thumb cs-bg" data-src="../assets/img/event-conference/post3.png"></a>
           
          </div>
    </div>
  
  
    <div class="cs-height_30 cs-height_lg_30"></div>
 
    </div>    <div class="cs-height_30 cs-height_lg_30"></div>
  </div>
  <!-- End Sponsors Section -->
 <!-- Start Team Seation -->

  <!-- End Team Seation -->
  <!-- Start Footer Section -->
 <?php require_once 'layouts/footer.php';?>
  <!-- End Footer Section -->

  <!-- Start Video Popup -->
  <div class="cs-video_popup">
    <div class="cs-video_popup_overlay"></div>
    <div class="cs-video_popup_content">
      <div class="cs-video_popup_layer"></div>
      <div class="cs-video_popup_container">
        <div class="cs-video_popup_align">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="about:blank"></iframe>
          </div>
        </div>
        <div class="cs-video_popup_close"></div>
      </div>
    </div>
  </div>
  <!-- End Video Popup -->

  <!-- Script -->
  <script src="assets/js/plugins/jquery-3.6.0.min.js"></script>
  <script src="assets/js/plugins/isotope.pkg.min.js"></script>
  <script src="assets/js/plugins/jquery.slick.min.js"></script>
  <script src="assets/js/plugins/lightgallery.min.js"></script>
  <script src="assets/js/plugins/jquery.counter.min.js"></script>
  <script src="assets/js/plugins/wow.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>