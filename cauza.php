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
  
  
  <title>Florin Moise | APV 2023</title>
  <link rel="stylesheet" href="../assets/css/plugins/fontawesome.min.css">
  <link rel="stylesheet" href="../assets/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/plugins/lightgallery.min.css">
  <link rel="stylesheet" href="../assets/css/plugins/slick.css">
  <link rel="stylesheet" href="../assets/css/plugins/animate.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- Theme Style -->
  <link rel="stylesheet" href="../assets/css/theme_12.css">
    <!-- Theme Style -->
  <link rel="stylesheet" href="../assets/css/modificari.css">
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
  <div class="cs-height_90 cs-height_lg_80"></div>

  <!-- Start Post Details -->
  <div class="cs-blog_details cs-style1 cs-type1" style="margin-top:-8rem;">
    <div class="cs-gradient_bg_1">
      <div class="cs-height_130 cs-height_lg_70"></div>
      <div class="cs-blog_details_head">
        <div class="cs-left text-center">
          <img src="../assets/img/event-conference/testimonial6.jpg" alt="Image" style="zoom:1.4">
          <div class="cs-height_10 cs-height_lg_0"></div>
     
        </div>
        <div class="cs-right">
          <div class="cs-blog_details_info">
            <div class="cs-blog_details_meta">
              <div class="cs-posted_by">
              </div>
            
            </div>
            <div class="cs-height_25 cs-height_lg_25"></div>
            <h1 class="cs-blog_details_title" style="margin-top:1rem;">Florin Moise</h1>
                      <p style="margin-top:5rem;">
Florin Moise este un suflet tânăr, ambițios, care inspiră viață și bunătate și a fost dintotdeauna un spirit liber și aventuros. Iubea ieșirile cu prietenii și fotbalul, însă, la vârsta de 15 ani, viața lui s-a schimbat într-o fracțiune de secundă.</p>
<p>22.09.2020 e ziua în care destinul lui Florin avea să atârne de un fir de ață. Acesta a fost implicat într-un accident provocat de un șofer neatent, aflat sub influența băuturilor alcoolice.  Astfel, a primit un diagnostic crunt: 
</p>
          </div>
        </div>
      </div>
    </div>
    <div class="cs-height_80 cs-height_lg_60"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2" >


          <h4   style="margin-top:-8rem;">Tetraplegie Spastică Scheletară post Fractură Vertebrală.</h4>
          <p>Deși medicii nu i-au dat nici o șansă la viață, Florin a luptat să le demonstreze tuturor că este un erou. Datorită operațiilor costisitoare și a terapiilor zilnice de kinetoterapie, reușește să facă progrese în drumul său spre o viață normală, făcând astfel primii pași după tragedie. Însă, efortul depus de el pentru a face câțiva pași este echivalent cu efortul unui om normal de a alerga câteva sute de metri.
</p>
          <p>Florin încă are nevoie de tratament recuperator zilnic, însă trebuie să parcurgă sute de kilometri pentru a ajunge la clinici specializate care să îi dea o șansă la recuperare, dar costurile anuale ajung la suma de 16.000 de euro, un efort financiar pe care mama sa și-l permite cu greu. 
</p>
          <p>Liga Studenților Electroniști, prin energia debordantă a voluntarilor, luptă acum pentru Florin. Ne vom uni forțele și motivați dăm startul celei de-a paisprezecea ediții a crosului caritabil "Aleargă Pentru Viață", pentru a-i oferi șansa la o viață normală. Vino și aleargă alături de noi pe 7 Mai 2023 în Rectoratul Universității Politehnica din București!
</p>
        </div>
      </div>
      
          <div class="row" style="zoom:1.7;">
      <div class="col-lg-8 offset-lg-2" >
        <div class="cs-height_20 cs-height_lg_20"></div>
        <div class="cs-author cs-style1 cs-accent_4_bg">
          <div class="cs-author-img"><img src="../assets/img/event-conference/testimonial1.jpg" alt=""></div>
          <div class="cs-author-right">
            <div class="cs-author_title">Donează şi tu!</div>
            <h2 class="cs-author_name cs-accent_color">Florin Moise</h2>
            <div class="cs-author_desc"> Cont revolut: <a href="https://revolut.me/cesare99b7 "> revolut.me/cesare99b7 </a> </div>
   
             <div class="cs-author_desc" style="margin-top:1rem;"> IBAN: RO71BREL0005505351950100 </div>
                   <div class="cs-author_desc" style="margin-top:1rem;"> <br>La detalii de plată se vor menționa “DONAȚIE APV”, numele, prenumele
participantului care a efectuat donația. </div>
          </div>
          
        </div>
        
    <div class="cs-height_80 cs-height_lg_60"></div>
    </div>
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