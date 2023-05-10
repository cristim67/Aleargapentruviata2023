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
  
  
  <title>Despre | APV 2023</title>
  <link rel="stylesheet" href="../assets/css/plugins/fontawesome.min.css">
  <link rel="stylesheet" href="../assets/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/plugins/lightgallery.min.css">
  <link rel="stylesheet" href="../assets/css/plugins/slick.css">
  <link rel="stylesheet" href="../assets/css/plugins/animate.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- Theme Style -->
  <link rel="stylesheet" href="../assets/css/theme_12.css">
  <link rel="stylesheet" href="../assets/css/modificari.css">
  
  
  <link rel="icon" type="image/x-icon" href="/assets/img/event-conference/apv.ico">
</head>

<body style="">
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
                                <li class="menu-item-has-children"><a href="../about.php">Despre</a>
                  <ul>
                    <li><a href="#ce_este_apv">Ce este Aleargă Pentru Viaţă?</a></li>
                
                    <li><a href="#echipa">Echipă</a></li>
                    <li><a href="#istoric">Istoric</a></li>
                     <li><a href="https://www.facebook.com/media/set/?set=a.603987195089837&type=3" target="_blank">Galerie Foto</a></li>
                  </ul>
                </li>
        
               <li class="menu-item-has-children"><a href="#">Curse</a>
                  <ul>
                    <li><a href="../allforone.php">Cursa All for One</a></li>
                    <li><a href="../kids.php">Cursa Copii</a></li>
                    <li><a href="../1016fete.php">10-16 Fete</a></li>
                    <li><a href="../1016baieti.php">10-16 Baieti </a></li>
                    
                     <li><a href="../1735baieti.php">17-35 ani Feminin</a></li>
                     <li><a href="../1735baieti.php">17-35 ani Masculin</a></li>
                  
                    <li><a href="../35masculin.php">35+ Masculin</a></li>
                     <li><a href="../35feminin.php">35+ Feminin</a></li>
                  </ul>
                </li>
                   <li class="menu-item"><a href="../cauza.php">Cauza</a>
                <li class="menu-item"><a href="../infoutile.php">Info Utile </a>
                <li class="menu-item"><a href="../contact.php">Contact</a>
                
                <li class="menu-item tel"><a href="https://revolut.me/cesare99b7" target="_blank">Doneaza</a>
                <li class="menu-item tel"><a href="../register.php">Inscriere</a> 
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
else echo'  <a href="#" onclick="inscrierephp"  class="cs-toolbox_btn cs-accent_bg_2 cs-white_hover cs-accent_bg_hover cs-smoth_scroll" ><span class="cs-btn_text">Inscriere</span></a>';
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
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <!-- End Hero Seciton -->
 <div id="ce_este_apv">
  <!-- Start About Seciton -->
  <div class="cs-height_140 cs-height_lg_75"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-5 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
        <div class="cs-vertical_middle">
          <div class="cs-vertical_middle_in">
            <div class="cs-text_box cs-style1 cs-type1">
              <h2 class="cs-text_box_title text-uppercase cs-bold"><br>Ce este Aleargă Pentru Viață?</h2>
              <div class="cs-height_35 cs-height_lg_25"></div>
              <div class="cs-text_box_text">Având o tradiție de peste 13 ani,  Aleargă Pentru Viață reprezintă un cros caritabil organizat de Liga Studenților Electroniști. Acesta este format din mai multe curse împărțite pe categorii de vârstă, la care participarea se face pe baza unei donații pentru o cauză umanitară.
</div>
  <div class="cs-text_box_text" style="margin-top:1rem;">Astfel, scopul evenimentului Aleargă Pentru Viață este de a da o mână de ajutor unei persoane care se confruntă cu o situație dificilă din punct de vedere medical, reușind să aducă un aport semnificativ pentru revenirea la o viață normală a acesteia.

</div>
  <div class="cs-text_box_text"  style="margin-top:1rem;">Prin intermediul acestui eveniment reușim atât să îi ajutăm pe cei aflați în dificultate, cât și să promovăm mișcarea și un stil de viață sănătos în rândul oamenilor din jurul nostru.

</div>
              <div class="cs-height_35 cs-height_lg_25"></div>
              <div class="cs-text_icon_box">
                <div class="cs-text_box_icon cs-center cs-accent_color cs-accent_10_bg">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px" height="22px">
                    <path fill-rule="evenodd" fill="currentColor" d="M11.644,18.318 C10.879,19.313 10.013,20.439 9.023,21.741 C8.900,21.904 8.706,21.999 8.500,21.999 C8.294,21.999 8.100,21.904 7.977,21.741 C6.981,20.432 6.111,19.302 5.343,18.305 C0.920,12.557 -0.000,11.360 -0.000,8.378 C-0.000,3.757 3.813,-0.001 8.500,-0.001 C13.187,-0.001 17.000,3.757 17.000,8.378 C17.000,11.355 16.077,12.554 11.644,18.318 ZM8.500,1.287 C4.534,1.287 1.308,4.468 1.308,8.378 C1.308,10.926 2.083,11.934 6.385,17.525 C7.016,18.346 7.717,19.255 8.500,20.281 C9.277,19.261 9.974,18.356 10.602,17.541 C14.915,11.933 15.692,10.921 15.692,8.378 C15.692,4.468 12.466,1.287 8.500,1.287 ZM8.500,12.890 C5.976,12.890 3.923,10.866 3.923,8.378 C3.923,5.890 5.976,3.866 8.500,3.866 C11.024,3.866 13.077,5.890 13.077,8.378 C13.077,10.866 11.024,12.890 8.500,12.890 ZM8.500,5.155 C6.697,5.155 5.231,6.601 5.231,8.378 C5.231,10.155 6.697,11.600 8.500,11.600 C10.303,11.600 11.769,10.155 11.769,8.378 C11.769,6.601 10.303,5.155 8.500,5.155 Z"/>
                  </svg>
                </div>
                <h3 class="cs-text_box_icon_title">Rectoratul UPB</h3>
              </div>
              <div class="cs-height_45 cs-height_lg_30"></div>
              <a href="register.php" class="cs-btn cs-style1 cs-btn_lg cs-medium text_uppercase cs-primary_font cs-accent_bg_2 cs-accent_border_2 cs-white cs-accent_bg_hover cs-white_hover cs-accent_border_hover">Inscriere</a>
            </div>
          </div>
        </div>
      </div><!-- .col -->
      <div class="col-lg-6 offset-lg-1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="cs-right_full_width">
          <div class="cs-height_0 cs-height_lg_50"></div>
          <div class="cs-image_box cs-style3 cs-type3 cs-parallax">
            <div class="cs-image_box_img"><img src="../assets/img/event-conference/about3.jpg" alt="About Image"></div>
       
            <div class="cs-image_box_pattern cs-to_left cs-accent_color_2"></div>
          </div>
        </div>
      </div><!-- .col -->
    </div>
  </div>
  <div class="cs-height_135 cs-height_lg_80"></div>
  <!-- End About Seciton -->
</div>
</div>
 <!--Start Team-->




    <div id="echipa">
        <div class="cs-gradient_bg_1">
    <div class="cs-height_140 cs-height_lg_80"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="cs-text_box cs-style1 cs-type1">
            <h2 class="cs-text_box_title text-uppercase cs-bold">Echipa</h2>
            <div class="cs-height_35 cs-height_lg_35"></div>
          
            <div class="cs-height_35 cs-height_lg_35"></div>
            <h4 class="text-uppercase cs-semi_bold cs-accent_color_2">„Munca în echipă este sursa ce le permite oamenilor obișnuiți să atingă rezultate neobișnuite.”
</h4>
            <div class="cs-text_box_text" style="margin-top:1.5rem;">Prin intermediul evenimentului “Aleargă Pentru Viață” se distinge munca în echipă depusă de voluntarii Departamentului Sportiv al Ligii Studenților Electroniști, fără de care toate aceste reușite nu ar fi posibile. 
</div>

      <div class="cs-text_box_text" style="margin-top:1.5rem;">În fiecare an, studenții voluntari își doresc ca totul să iasă perfect, așa că pasiunea și aspirația cu care aceștia organizează evenimentul sunt intense. Cu toții lucrează împreună concentrându-se pe obiectivul final, iar efortul depus de fiecare în parte duce spre atingerea unor niveluri de înaltă performanță.

</div>


          </div>
          <div class="cs-height_0 cs-height_lg_50"></div>
        </div>
             <div class="col-lg-6 offset-lg-1 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="cs-right_full_width">
          <div class="cs-height_0 cs-height_lg_50"></div>
          <div class="cs-image_box cs-style3 cs-type3 cs-parallax">
            <div class="cs-image_box_img"><img src="../assets/img/event-conference/about2.jpg" alt="About Image"></div>
           
            <div class="cs-image_box_pattern cs-to_left cs-accent_color_2"></div>
          </div>
        </div>
      </div><!-- .col -->
        </div>
      </div>
    </div>
    <div class="cs-height_105 cs-height_lg_50"></div>
  </div>
  <!-- End Pricing Section -->
    </div>



  <!-- Start Pricing Section -->
 
  <!-- Start Team Seation -->
  
  <!-- End Team Seation -->

 
    <div id="istoric">
  <!-- Start Testimonial Section -->
  <div class="cs-height_135 cs-height_lg_75"></div>
  <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
    <div class="cs-section_heading cs-style2 cs-size3 text-center text-uppercase">
      <h2 class="cs-section_title cs-extra_bold">Istoric</h2>
    </div>
    <div class="cs-height_70 cs-height_lg_50"></div>
  </div>
  <div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
    <div class="cs-slider cs-style1 cs-remove_overflow">
      <div class="cs-slider_container" data-autoplay="1" data-loop="10" data-speed="900" data-center="0" data-fade-slide="1" data-slides-per-view="1">
        <div class="cs-slider_wrapper">
          <div class="cs-slide">
            <div class="cs-testimonial cs-style9">
              <div class="cs-testimonial_left">
                <div class="cs-testimonial_avatar">
                  <img src="../assets/img/event-conference/testimonial2.jpg" alt="Testimonial" class="cs-testimonial_img">
                  <img src="../assets/img/event-conference/testimonial_shape1.png" alt="" class="cs-avatar_shape cs-type1">
                  <img src="../assets/img/event-conference/testimonial_shape2.png" alt="" class="cs-avatar_shape cs-type2">
                </div>
              </div>
              <div class="cs-testimonial_right cs-vertical_middle">
                <div class="cs-vertical_middle_in">
                  <div class="cs-testimonial_icon cs-accent_20_color">
                    <img src="../assets/img/event-conference/icons/icon1.png" alt="">
                  </div>
                  <div class="cs-testimonial_text">În cea de a zecea ediție ne-am întâlnit cu Valentina Cotolea, care este o tânără dornică de viață, plănuieşte să înființeze un centru de recuperare pentru adulți, pentru a-i ajuta pe cei cu probleme. Însă chiar ea a fost încercată de destin încă de la 
naștere, fiind diagnosticată cu parapareză spastică.
 </div>
                  <h3 class="cs-testimonial_avatar_name text-uppercase cs-medium">Valentina Cotolea</h3>
                </div>
              </div>
            </div>
          </div><!-- .cs-slide -->
          <div class="cs-slide">
            <div class="cs-testimonial cs-style9">
              <div class="cs-testimonial_left">
                <div class="cs-testimonial_avatar">
                  <img src="../assets/img/event-conference/testimonial3.jpg" alt="Testimonial" class="cs-testimonial_img">
                  <img src="../assets/img/event-conference/testimonial_shape1.png" alt="" class="cs-avatar_shape cs-type1">
                  <img src="../assets/img/event-conference/testimonial_shape2.png" alt="" class="cs-avatar_shape cs-type2">
                </div>
              </div>
              <div class="cs-testimonial_right cs-vertical_middle">
                <div class="cs-vertical_middle_in">
                  <div class="cs-testimonial_icon cs-accent_20_color">
                    <img src="../assets/img/event-conference/icons/icon1.png" alt="">
                  </div>
                  <div class="cs-testimonial_text">În cea de a unsprezecea ediție, l-am cunoscut pe Eduard Sobaru, un suflet tânăr, ambițios, care inspiră viață și bunătate și a fost dintotdeauna un spirit liber și aventuros. Eduard lucra în parcul de aventură Edenland, după o operațiune de salvare a unor copii, echipamentul lui de siguranță s-a desprins și a căzut în gol de la o înălțime de 12 metri. Eduard a fost diagnosticat cu tetraplegie spastică, urmând un program riguros de recuperare compus din ședințe de kinetoterapie individuală, terapie, masaj și consiliere psihologică.
</div>
                  <h3 class="cs-testimonial_avatar_name text-uppercase cs-medium">Eduard Sobaru</h3>
                </div>
              </div>
            </div>
          </div><!-- .cs-slide -->
          <div class="cs-slide">
            <div class="cs-testimonial cs-style9">
              <div class="cs-testimonial_left">
                <div class="cs-testimonial_avatar">
                  <img src="../assets/img/event-conference/testimonial4.jpg" alt="Testimonial" class="cs-testimonial_img">
                  <img src="../assets/img/event-conference/testimonial_shape1.png" alt="" class="cs-avatar_shape cs-type1">
                  <img src="../assets/img/event-conference/testimonial_shape2.png" alt="" class="cs-avatar_shape cs-type2">
                </div>
              </div>
              <div class="cs-testimonial_right cs-vertical_middle">
                <div class="cs-vertical_middle_in">
                  <div class="cs-testimonial_icon cs-accent_20_color">
                    <img src="../assets/img/event-conference/icons/icon1.png" alt="">
                  </div>
                  <div class="cs-testimonial_text">
Penultima ediție ni-l scoate în cale pe
Darius Ghereben, student, fost handbalist și un tânăr care avea tot viitorul în față, întotdeauna zâmbitor.  Darius a suferit un accident în timp ce mergea cu ATV-ul, în urma căruia și-a fracturat vertebrele C5-C6, rămânând paralizat de la gât în jos.
În urma unei operații la coloană doctorii au reușit sa îi ofere o nouă șansă, însă tratamentul a fost foarte costisitor.
</div>
                  <h3 class="cs-testimonial_avatar_name text-uppercase cs-medium">Darius Ghereben</h3>
                </div>
              </div>
            </div>
          </div><!-- .cs-slide -->
          
                    <div class="cs-slide">
            <div class="cs-testimonial cs-style9">
              <div class="cs-testimonial_left">
                <div class="cs-testimonial_avatar">
                  <img src="../assets/img/event-conference/testimonial5.jpg" alt="Testimonial" class="cs-testimonial_img">
                  <img src="../assets/img/event-conference/testimonial_shape1.png" alt="" class="cs-avatar_shape cs-type1">
                  <img src="../assets/img/event-conference/testimonial_shape2.png" alt="" class="cs-avatar_shape cs-type2">
                </div>
              </div>
              <div class="cs-testimonial_right cs-vertical_middle">
                <div class="cs-vertical_middle_in">
                  <div class="cs-testimonial_icon cs-accent_20_color">
                    <img src="../assets/img/event-conference/icons/icon1.png" alt="">
                  </div>
                  <div class="cs-testimonial_text">
Anul trecut, i-am sprijinit povestea lui Andrei Bucur, un tânăr plin de ambiție, fost student al Academiei de Poliție, căruia viața i-a fost potrivnică. Astfel, la data de 3 mai 2017, chiar în cadrul unui antrenament pentru meseria la care visa, acesta a leșinat, iar la spital a primit o veste cruntă: făcuse un anevrism cerebral. După un lung șir de operații costisitoare în Franța, Andrei a reușit să scape de pericolul decesului, dar aceste intervenții nu au reușit să rezolve semipareza facială apărută în urma anevrismului. Șansele acestuia de recuperare totală sunt foarte mari, însă costul acestor proceduri au fost peste puterile lui și ale familiei sale.
</div>
                  <h3 class="cs-testimonial_avatar_name text-uppercase cs-medium">Andrei Bucur</h3>
                </div>
              </div>
            </div>
          </div><!-- .cs-slide -->
          
        </div>
      </div><!-- .cs-slider_container -->
      <div class="cs-pagination cs-style1 cs-hidden"></div>
      <div class="cs-slider_arrows cs-style1 cs-type6 cs-center">
        <div class="cs-left_arrow cs-center cs-accent_color_2">
          <i class="fas fa-angle-left"></i>
        </div>
        <div class="cs-right_arrow cs-center cs-accent_color_2">
          <i class="fas fa-angle-right"></i>
        </div>
      </div>
    </div><!-- .cs-slider -->
  </div>
  <div class="cs-height_135 cs-height_lg_75"></div>
  <!-- End Testimonial Section -->
</div>
    
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
      <a href="https://www.facebook.com/media/set/?set=a.603987195089837&type=3" target="_blank"class="cs-btn cs-style1 cs-btn_lg cs-medium text_uppercase cs-primary_font cs-accent_bg_2 cs-accent_border_2 cs-white cs-accent_bg_hover cs-white_hover cs-accent_border_hover">Galerie Foto</a>
    </div>
    <div class="cs-height_140 cs-height_lg_80"></div>
  </div>






  <!-- Start Footer Section -->
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