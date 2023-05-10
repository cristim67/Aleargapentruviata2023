<!DOCTYPE html>
<?php require_once "controllerUserData.php"; ?>


<?php require_once "cachecontrol.php"; ?>

<html lang="ro">
<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta
  name="description"
  content="Crosul caritabil “Aleargă Pentru Viață” este cea mai mare competiție sportivă din București organizată exclusiv de studenți. își propune ca fiecare alergător care trece linia de sosire să trăiască o experiență de neuitat, îmbinând astfel mișcarea cu facerea unui bine.">
  <meta name="keywords" content="ETTI, LSE, UPB, APV, Aleargă Pentru Viață, Cros, Cros Caritabil, Alergat, Maraton, Cursa, Curse, Voluntari, Caritabil, Studenti, Facultatea de Electronică, Telecomunicaţii şi Tehnologia Informaţiei, Sport, Mișcare, Departamentul Sportiv, Eveniment, București, Atletism,  Cross, Semimaraton, Run, Running, Atlet, Barbati, Femei, Copii, Dizabilitati, Jogging, Sprint, Sprinten, Linia de start, Linia de finish, Categoria, Categorie, Adulti, 6km, 4km, 2km">
  
  <meta name="author" content="Departamentul IT LSE, Cristi Miloiu, Mihnea Aniculesei">
  
  
  <title>Contact | APV 2023</title>
  <link rel="stylesheet" href="../assets/css/plugins/fontawesome.min.css">
  <link rel="stylesheet" href="../assets/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/plugins/lightgallery.min.css">
  <link rel="stylesheet" href="../assets/css/plugins/slick.css">
  <link rel="stylesheet" href="../assets/css/plugins/animate.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- Theme Style -->
  <link rel="stylesheet" href="../assets/css/theme_12.css">
  
  <link rel="stylesheet" href="../assets/css/modificari.css">
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
        
               <li class="menu-item-has-children"><a href="#">Curse</a>
                  <ul>
                    <li><a href="allforone.php">Cursa All for One</a></li>
                    <li><a href="kids.php">Cursa Copii</a></li>
                    <li><a href="1016fete.php">10-16 Fete</a></li>
                    <li><a href="1016baieti.php">10-16 Baieti </a></li>
                    
                     <li><a href="1735baieti.php">17-35 ani Feminin</a></li>
                     <li><a href="1735baieti.php">17-35 ani Masculin</a></li>
                  
                    <li><a href="35masculin.php">35+ Masculin</a></li>
                     <li><a href="35feminin.php">35+ Feminin</a></li>
                  </ul>
                </li>     <li class="menu-item"><a href="cauza.php">Cauza</a>
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
else echo'  <a href="" onclick="inscrierephp();" class="cs-toolbox_btn cs-accent_bg_2 cs-white_hover cs-accent_bg_hover cs-smoth_scroll" ><span class="cs-btn_text">Inscriere</span></a>';
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
      </div>
  </header>
  <div id="contact"></div>
  <div class="cs-flying_img_wrap cs-style7 cs-parallax">
    <img src="../assets/img/event-conference/flying-img5.png" alt="Flying image" class="cs-flying_img cs-posiiton1 cs-to_up">
    <img src="../assets/img/event-conference/flying-img6.png" alt="Flying image" class="cs-flying_img cs-posiiton2 cs-to_up">
    <div class="cs-height_130 cs-height_lg_70"></div>
    <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
      <div class="cs-section_heading cs-style2 text-center cs-size2 text-uppercase">
        <h2 class="cs-section_title cs-extra_bold">Contact</h2>
        <div class="cs-height_5 cs-height_lg_5"></div>
 
      </div>
      <div class="cs-height_75 cs-height_lg_55"></div>
    </div>
    <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
      <div class="row">
        <div class="col-lg-4">
          <div class="cs-team_member cs-style8 text-center cs-white_bg">
            <div class="cs-team_member_in cs-accent_5_bg cs-accent_5_bg_2_hover cs-transition_3 cs-accent_border cs-accent_border_2_hover">
              <div class="cs-member_image position-relative">
                <img src="../assets/img/event-conference/team1.jpg" alt="Member" class="cs-accent_border cs-transition_3">
               
              </div>
              <div class="cs-member_info">
                <h2 class="cs-member_name cs-semi_bold text-uppercase">Bogdan Vlad</h2>
                <div class="cs-member_designation cs-primary_color"><p></p>Coordonator Aleargă Pentru Viață <p><p></p>bogdan.mihail.vlad29@gmail.com
<p></p>0726894957
</p></div>
              </div>
            </div>
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-lg-4">
          <div class="cs-team_member cs-style8 text-center cs-white_bg">
            <div class="cs-team_member_in cs-accent_5_bg cs-accent_5_bg_2_hover cs-transition_3 cs-accent_border cs-accent_border_2_hover">
              <div class="cs-member_image position-relative">
                <img src="../assets/img/event-conference/team2.jpg" alt="Member" class="cs-accent_border cs-transition_3">
              
              </div>
            <div class="cs-member_info">
                <h2 class="cs-member_name cs-semi_bold text-uppercase">Teodora Naidin</h2>
                <div class="cs-member_designation cs-primary_color"><p></p>Coordonator Departamentul Sportiv <p><p><p></p>teodoranaidin@gmail.com</p>0770775823
</p></div>
              </div>
            </div>
          </div>
          <div class="cs-height_30 cs-height_lg_30"></div>
        </div>
        <div class="col-lg-4">
          <div class="cs-team_member cs-style8 text-center cs-white_bg">
            <div class="cs-team_member_in cs-accent_5_bg cs-accent_5_bg_2_hover cs-transition_3 cs-accent_border cs-accent_border_2_hover">
              <div class="cs-member_image position-relative">
                <img src="../assets/img/event-conference/team3.jpg" alt="Member" class="cs-accent_border cs-transition_3">
               
              </div>
      <div class="cs-member_info">
                <h2 class="cs-member_name cs-semi_bold text-uppercase">Cesar Leoni</h2>
                <div class="cs-member_designation cs-primary_color"><p></p>Vicecoordonator Aleargă Pentru Viață<p><p><p></p>leoni.cesar.emanuele@gmail.com</p>0770591517
</p></div>
              </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
  <!-- End Header Section -->

  <!-- End Video Popup -->

  <!-- Script -->
  <script src="../assets/js/plugins/jquery-3.6.0.min.js"></script>
  <script src="../assets/js/plugins/isotope.pkg.min.js"></script>
  <script src="../assets/js/plugins/jquery.slick.min.js"></script>
  <script src="../assets/js/plugins/lightgallery.min.js"></script>
  <script src="../assets/js/plugins/jquery.counter.min.js"></script>
  <script src="../assets/js/plugins/wow.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
</html>