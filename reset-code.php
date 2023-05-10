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
  
  
  
  <title>Reset-Code | APV 2023</title>
  <link rel="stylesheet" href="../assets/css/plugins/fontawesome.min.css">
  <link rel="stylesheet" href="../assets/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/plugins/lightgallery.min.css">
  <link rel="stylesheet" href="../assets/css/plugins/slick.css">
  <link rel="stylesheet" href="../assets/css/plugins/animate.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- Theme Style -->
  <link rel="stylesheet" href="../assets/css/theme_12.css">
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
    background-color:#cc00cc;
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


  <!-- End Header Section -->
  <!-- Start Hero Seciton -->
 
  <!-- End Hero Seciton -->

  <!-- Start Contact -->
   <div id="next_section">
    <div class="cs-height_140 cs-height_lg_80"></div>
    <div class="container">
      <div class="cs-contact cs-style2 cs-white_bg">

                <div class="cs-contact_left cs-accent_bg position-relative">
          <div class="cs-contact_info_wrap">
            <h2 class="cs-contact_title cs-semi_bold cs-white">Informaţii</h2>
            <div class="cs-height_10 cs-height_lg_10"></div>
            <ul class="cs-contact_info cs-mp0 cs-white">
                
                <a href="assets/Regulament APV 2023.pdf" target="_blank" >
              <li style="margin-bottom:2rem;"><i class="fas fa-balance-scale"></i>Regulament</li>
              </a>
                <a href="assets/Program APV 2023.pdf" target="_blank" >
              <li style="margin-bottom:2rem;"><i class="fas fa-calendar-alt"></i>Program</li>
              </a>
              <a href="https://www.google.com/maps/place/Rectorat+UPB/@44.4384017,26.0516988,17.34z/data=!4m14!1m7!3m6!1s0x40b201c3dbebeb93:0x3430edb769db1b1f!2sRectorat+UPB!8m2!3d44.4384184!4d26.0517637!16s%2Fg%2F1hm6l8l7x!3m5!1s0x40b201c3dbebeb93:0x3430edb769db1b1f!8m2!3d44.4384184!4d26.0517637!16s%2Fg%2F1hm6l8l7x" target="_blank" >
              <li style="margin-bottom:2rem;"><i class="fas fa-map-marker-alt"></i>Rectoratul UPB</li>
              </a>
            </ul>
          </div>
          <div class="cs-social_btns_wrap">
            <div class="cs-social_btns cs-style1 cs-white_50">
              <a href="https://www.facebook.com/AleargaPentruViata" class="cs-accent_color_2_hover" target="_blank"><i class="fab fa-facebook-f" style="margin-right:2rem;"> </i></a>
              <a href="https://www.instagram.com/aleargapentruviata.lse/" class="cs-accent_color_2_hover"><i class="fab fa-instagram"></i></a>
             
            </div>
          </div>
              <div class="cs-circle cs-accent_60_bg_2"></div>
        </div>
        
        <div class="cs-contact_right cs-accent_10_bg">
          <h1 class="cs-contact_title cs-semi_bold" style="margin-top:-2rem;">Verificare Cod</h1>
          <div class="cs-height_10 cs-height_lg_10"></div>
          
              <form action="reset-code.php"class="cs-contact_form" method="POST" autocomplete="">
            
            
              <?php 
                    if(isset($_SESSION['info']) && (count($errors)<=0)){
                        ?>
                        <div  class="alert alert-success  text-center" >
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    
                    
                    
                    
                    
                    
                                    <div class="row cs-row_gap_20">
                                        
                                 <div class="form-group">
                                     
                       <p style="margin-top:1rem;"> Code :</p> 
                 <input type="text" name="otp" class="cs-form_field cs-white_bg cs-accent_30_border cs-primary_color"  required >
                              
                    
                              
                                 <div class="form-group">
                                <button type="submit"  class="cs-form_field cs-white_bg cs-accent_30_border cs-primary_color"  type="submit" name="check-reset-otp" value="Submit" style="margin-top:2rem;">Verifica</button></div>
                                
                            </form>
        </div>
      </div>
          
          <div class="cs-circle cs-accent_60_bg_2"></div>
        </div>
    </div>
    <div class="cs-height_140 cs-height_lg_80"></div>
  </div>
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
  <script src="../assets/js/plugins/jquery-3.6.0.min.js"></script>
  <script src="../assets/js/plugins/isotope.pkg.min.js"></script>
  <script src="../assets/js/plugins/jquery.slick.min.js"></script>
  <script src="../assets/js/plugins/lightgallery.min.js"></script>
  <script src="../assets/js/plugins/jquery.counter.min.js"></script>
  <script src="../assets/js/plugins/wow.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
</html>