@php
    use Illuminate\Support\Str;
    $r = \Route::current()->getAction();
    $route = isset($r['as']) ? $r['as'] : '';
@endphp
<!DOCTYPE html>
<!--
Template Name: JB desks
Version: 1.0.0
Author: webstrot

-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="fr">
<!--[endif]-->
<!-- <meta name="description" content="lepoto,livres,manuels,education,ventes de manuels scolaire,achat de manuels scolaire" />
                        <meta name="keywords" content="lepoto,livres,manuels,education,ventes de manuels scolaire,achat de manuels scolaire" /> -->

<!-- Mirrored from webstrot.com/html/jbdesk/main_pages/index_III.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 23:01:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <title>lepoto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
                        <!-- <meta name="description" content="lepoto,livres,manuels,education,ventes de manuels scolaire,achat de manuels scolaire" />
                        <meta name="keywords" content="lepoto,livres,manuels,education,ventes de manuels scolaire,achat de manuels scolaire" /> -->
                        <meta name="author" content="BULL" />
    <meta name="MobileOptimized" content="320" />
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="css/dropify.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="css/nice-select.css" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/18ec058639.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">

    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="images/icolepoto0.png" />

    {{-- <link rel="shortcut icon" type="image/png" href="images/icolepoto.png" /> --}}
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JTS4X9C6LN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JTS4X9C6LN');
</script>
@if(session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            title: 'Success!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'Cool'
        });
    });
</script>
@endif
</head>

<body>
    <!-- preloader Start -->
    <!-- preloader Start -->
    <div class="jb_preloader">
        <div class="spinner_wrap">
            <div class="spinner"></div>
        </div>
    </div>
    <div class="cursor cursor2 cursor3"></div>
    <!-- Top Scroll Start --><a href="javascript:" id="return-to-top" class="return_top3"><i class="fas fa-angle-double-up"></i></a>
    <!-- Top Scroll End -->
    <!-- cp navi wrapper Start -->
    <nav class="cd-dropdown cd_dropdown_index2 cd_dropdown_index3 d-block d-sm-block d-md-block d-lg-none d-xl-none">
        <h2><a href="{{ route('accueil') }}"> <span><img src="images/logolepoto10.png" style="height:100%;object-fit: contain;object-position: center;" alt="img"></span></a></h2>
        <a href="#0" class="cd-close">Close</a>
        <ul class="cd-dropdown-content">
            <li>
                <form class="cd-search">
                    <input type="search" placeholder="Search...">
                </form>
            </li>
            <li class="">
                <a href="{{ route('accueil') }}">acceuil</a>
            </li>
            <li class="">
                <a href="#manuel">Manuels</a>
            </li>
            <!-- .has-children -->
            <li class="">
                <a href="#accordion">FAQ</a>
            </li>
            <li><a href="{{route('profile.edit')}}" class="gc_main_navigation">Profil</a></li>
            <li><a href="{{route('apropos')}}">A propos </a></li>
            <li><a href="{{ route('contact_us') }}">contact</a></li>
        </ul>
        <!-- .cd-dropdown-content -->
    </nav>
    <div class="cp_navi_main_wrapper index_2_top_header index_3_top_header jb_cover">

        <div class="cp_logo_wrapper index_2_logo index_3_logo" style="display: flex;align-items: center;justify-content: center;" style="display: flex;align-items: center;justify-content: center;">
            <a href="{{route('accueil')}}">
                <img src="images/logolepoto.png" alt="logo" style="width:163px;height:43px;object-fit: cover;">
            </a>
        </div>
        <!-- mobile menu area start -->
        <header class="mobail_menu d-block d-sm-block d-md-block d-lg-none d-xl-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cd-dropdown-wrapper">
                            <a class="house_toggle" href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                    <g>
                                        <g>
                                            <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#004165" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#004165" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#004165" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#004165" />
                                        </g>
                                        <g>
                                            <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#004165" />
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <!-- .cd-dropdown -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- .cd-dropdown-wrapper -->
        </header>

        <div class="jb_navigation_wrapper index_2_right_menu index_3_right_menu">
            <div class="posting_job">
                <ul>
                    <li>
                        <div class="jb_search_btn_wrapper index_2_search d-none d-sm-none d-md-none d-lg-block d-xl-block">
                            <!-- extra nav -->
                            <div class="extra-nav">
                                <div class="extra-cell">
                                    <button id="quik-search-btn" type="button" class="site-button radius-xl"><i class="fas fa-search"></i></button>
                                </div>
                            </div>

                            <!-- Quik search -->
                            <div class="dez-quik-search bg-primary-dark">
                                <form action="{{route('posts.search')}}" method="get">
                                    <input name="recherche" value="" type="text" class="form-control" placeholder="Entrez votre recherche...">
                                    <span id="quik-search-remove"><i class="fas fa-times"></i></span>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li>
                        @if(!empty(Auth::user()))
                        <div class="jb_profile_box jb_3_profile_box">
                            <div class="nice-select" tabindex="0"> <span class="current">
                                    @if(!empty(Auth::user()->avatar->path))
                                        <img src="{{ Storage::url(Auth::user()->avatar->path) }}" alt="img" style="width:50px;height:50px;border-radius:50%;"></span>
                                    @else
                                    <i class="fa-solid fa-user" style="color:#b446ff; font-size: 30px"></i>
                                    {{-- <i class="fa-regular fa-user"></i> --}}
                                        {{-- <img src="images/profile-11.jpg" alt="img" style="width:50px;height:50px;border-radius:50%;"></span> --}}
                                    @endif </span>
                                <ul class="list">
                                    <li><a href="{{route('profile.edit')}}"><i class="fas fa-user-edit"></i>Profil</a>
                                    </li>

                                    {{-- <li><a href="#"><i class="far fa-calendar-alt"></i> My Calender</a> --}}
                                    </li>
                                    <li><a href="#accordion"><i class="fas fa-comment"></i>FAQ</a>
                                    </li>
                                    {{-- <li><a href="#"><i class="fas fa-lock"></i>Lock Screen</a> --}}
                                    </li>
                                     <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class="ion-power"></i>Déconnexion</a></li>
                                     </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        @else
                        @endif
                    </li>
                    @if(empty(Auth::user()))
                    <li class="btn_hover">
                         <a href="{{ route('login') }}">Connexion</a>
                    </li>
                    @else
                        <li class="btn_hover">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                    <li class="btn_hover"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();"><i class="ion-power"></i>Déconnexion</a></li>
                            </form>
                        </li>

                     @endif
                </ul>
            </div>

            <div class="mainmenu green_main_menu blue_main_menu d-xl-block d-lg-block d-md-none d-sm-none d-none">
                <ul class="main_nav_ul menu_2_ul">
                    <li class="has-mega gc_main_navigation"><a href="{{ route('accueil') }}" class="gc_main_navigation <?php echo Str::startsWith($route, 'accueil') ? 'active_class active_class2 active_class3' : ''; ?> ">acceuil</a>

                    </li>
                    <li class="has-mega gc_main_navigation"><a href="#manuel" class="gc_main_navigation <?php echo Str::startsWith($route, '#manuel') ? 'active_class active_class2 active_class3' : ''; ?>">Manuels</a>

                    </li>
                    <li class="has-mega gc_main_navigation kv_sub_menu green_sub_menu blue_sub_menu">
                        <a href="#accordion" class="gc_main_navigation <?php echo Str::startsWith($route, '#accordion') ? 'active_class active_class2 active_class3' : ''; ?>"> FAQ</a>
                        <!-- mega menu start -->

                    </li>
                    <li class="has-mega gc_main_navigation ">
                        <a href="{{route('apropos')}}" class="gc_main_navigation <?php echo Str::startsWith($route, 'apropos') ? 'active_class active_class2 active_class3' : ''; ?>">A   propos</a>

                        </li>

                   <li><a href="{{route('contact_us')}}" class="gc_main_navigation <?php echo Str::startsWith($route, 'contact_us') ? 'active_class active_class2 active_class3' : ''; ?>">contact</a></li>
                   <li><a href="{{route('profile.edit')}}" class="gc_main_navigation <?php echo Str::startsWith($route, 'profile') || Str::startsWith($route, 'login') || Str::startsWith($route, 'register') ? 'active_class active_class2 active_class3' : ''; ?>">Profil</a></li>

                </ul>
            </div>
            <!-- mainmenu end -->

        </div>
    </div>

    <!-- navi wrapper End -->
    <!-- slider wrapper Start -->

    <!-- slider wrapper End -->
    <!--services wrapper start-->

</div>
<!-- navi wrapper End -->
<!-- slider wrapper Start -->
    <div class="contenu">
        @yield('content')
    </div>
    <div class="popular_wrapper jb_cover">
        <div class="slider_small3_shape shapenew">
            <img src="images/shape4.png" class="img-responsive " alt="img">
        </div>

    </div>

    <div class="col-lg-12 col-md-12 col-sm-12">
                            <div id="accordion" role="tablist" style="margin:100px 100px;">
                                <h1>Questions fréquemment posées...</h1>
                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading1">
                                        <h5 class="h5-md">
								       	    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
								          		C'est quoi LEPOTO?

								        	</a>
								     	 </h5>
                                    </div>

                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="heading1" data-parent="#accordion" style="">
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>LEPOTO est une plateforme de commerce de livres en ligne pour en savoir plus merci de vous rendre sur la page <a href="{{route('apropos')}}">a propos </a></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="card">

                                    <div class="card_pagee" role="tab" id="heading2">
                                        <h5 class="h5-md">
								       	    <a class="collapsed" data-toggle="collapse" href="#collapsethree" role="button" aria-expanded="false" aria-controls="collapsethree">
								            Qui êtes-vous?

								        	</a>
								     	 </h5>
                                    </div>

                                    <div id="collapsethree" class="collapse" role="tabpanel" aria-labelledby="heading2" data-parent="#accordion" style="">
                                        <div class="card-body">

                                            <div class="card_cntnt">
                                                <p>Nous sommes une entreprise specialisé spécialisée dans les solutions digitales . De l'idée au déploiement nous vous permettons d'atteindre vos objectifs grâce au digital. </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
    <!--popular wrapper end-->
    <!--resume wrapper start-->
    <div class="pricing_table_3 recent_resume_wrapper jb_cover">
        <div class="slider_small_shape44">
            <img src="images/p2.png" class="img-responsive " alt="img">
        </div>

        <div class="counter_jbbb2 jb_cover">

            <img src="images/line3.png" class="img-responsive" alt="img">
        </div>
    </div>
    <!--resume wrapper end-->
    <!-- news app wrapper start-->


    <!-- news app wrapper end-->
    <!-- footer Wrapper Start -->
    <div class="footer jb_cover">
    <div class="ft_shape bubble-18">
        <img src="images/bubble2.png" class="img-responsive " alt="img">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="footerNav jb_cover" >
                    <a href="#"><img src="images/logolepoto.png" alt="img" style="width:200px;"></a>
                    <ul class="footer_first_contact">
                        <li style="display:flex;align-items:center;"><i class="flaticon-location-pointer"></i>
                            <p>Douala, Nyalla
                            </p>
                        </li>
                        <li style="display:flex;align-items:center;flex-flow:row column;"><i class="flaticon-telephone"></i>
                            <p>
                                <a href="tel:+237698549128">698-549-128</a>
                                {{-- <a href="tel:+237698549128">652-097-642</a> --}}
                            </p>

                        </li>
                        <li style="display:flex;align-items:center;"><i class="flaticon-envelope"></i><a href="mailto:lucfotso0@gmail.com">contact.lepoto@gmail.com </a>
                            <br>
                            {{-- <a href="mailto:lucfotso0@gmail.com">support@gmail.com</a> --}}
                        </li>

                    </ul>

                    <ul class="icon_list_news index2_icon_list jb_cover">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i>
                                </a>
                        </li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footerNav jb_cover footer_border_displ">
                        <h5>Pages</h5>
                        <ul class="nav-widget">
                            <li><a href="{{route('accueil')}}"><i class="fa fa-square"></i>Accueil</a></li>

                            <li><a href="{{route('manuel')}}"><i class="fa fa-square"></i>Manuels</a></li>

                            <li><a href="#accordion"><i class="fa fa-square"></i>FAQ</a></li>

                            <li><a href="{{route('apropos')}}"><i class="fa fa-square"></i>A propos</a></li>

                            <li><a href="{{route('contact_us')}}"><i class="fa fa-square"></i>Contact</a></li>


                        </ul>
                    </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
                    <div class="footerNav jb_cover footer_border_displ">
                        <h5>Nous laissez un avis ?</h5>
                        <form action="{{route('mail')}}" method="GET">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-pos">
                                        <div class="form-group i-name">

                                            <input type="text" class="form-control require" name="full_name"  id="namTen-first" placeholder=" Nom*">
                                            {{-- <i class="fas fa-user-alt"></i> --}}
                                        </div>
                                    </div>
                                </div>

                                <!-- /.col-md-12 -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-e">
                                        <div class="form-group i-email">
                                            <label class="sr-only">Email </label>
                                            <input type="email" class="form-control require" name="email"  id="emailTen" placeholder=" Email *" data-valid="email" data-error="Email should be valid.">
                                            {{-- <i class="fas fa-envelope"></i> --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-m">
                                        <div class="form-group i-message">

                                            <textarea class="form-control require" name="message" rows="5" id="messageTen" placeholder=" Message"></textarea>
                                            {{-- <i class="fas fa-comment"></i> --}}
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-md-12 -->
                                <div class="col-md-12">
                                    <div class="tb_es_btn_div">
                                        <div class="response"></div>
                                        <div class="tb_es_btn_wrapper">
                                            <button type="submit" class="submitForm">envoyer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">

                </div>
                <div class="copyright_left"><i class="fa fa-copyright"></i> 2023 <a href="#">  LEPOTO.  </a> Tout droit réservé.
            </div>

            <div class="clearfix"></div>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
    <div class="waveWrapper waveAnimation">
        <div class="waveWrapperInner bgTop gradient-color">
            <div class="wave waveTop wavetop_1 wavetop_3"></div>
        </div>
        <div class="waveWrapperInner bgMiddle">
            <div class="wave waveMiddle"></div>
        </div>
        <div class="waveWrapperInner bgBottom">
            <div class="wave waveBottom wavebottom_1 wavebottom_3"></div>
        </div>
    </div>
    <div class="ft_shape2 bubble-190">
        <img src="images/bubble2.png" class="img-responsive " alt="img">
    </div>
    <div class="ft_shape1 bubble-19">
        <img src="images/bubble2.png" class="img-responsive " alt="img">
    </div>
</div>


    <!-- footer Wrapper End -->
	 <!-- chat box Wrapper start -->
  </div>
  <!-- chat box Wrapper end -->
    <!--custom js files-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/jquery.menu-aim.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/dropify.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.min.js"></script> --}}

    <!-- custom js-->
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/656a7923bfb79148e5992a6d/1hgjuidol';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

{{-- <script>
    const signale = document.querySelector("#signale");
    const raison = document.querySelector("#raison");
    signale.addEventListener("mouseover",() =>
    {
        raison.style.display='';
    })
</script> --}}

</body>


<!-- Mirrored from webstrot.com/html/jbdesk/main_pages/index_III.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 23:02:06 GMT -->
</html>
