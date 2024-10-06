
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NewTechIt</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset ('mainassets/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('mainassets/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('mainassets/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('mainassets/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('mainassets/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('mainassets/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('mainassets/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset ('mainassets/css/style.css')}}" type="text/css">
  <style>
      .section-header h3 {
        font-size: 32px;
        color: #111;
        text-transform: uppercase;
        text-align: center;
        font-weight: 700;
        position: relative;
        padding-bottom: 15px;
      }
      
      .section-header h3::before {
        content: "";
        position: absolute;
        display: block;
        width: 120px;
        height: 1px;
        background: #ddd;
        bottom: 1px;
        left: calc(50% - 60px);
      }
      
      .section-header h3::after {
        content: "";
        position: absolute;
        display: block;
        width: 40px;
        height: 3px;
        background: #0b73ba;
        bottom: 0;
        left: calc(50% - 20px);
      }
      
      .section-header p {
        text-align: center;
        padding-bottom: 30px;
        color: #333;
      }
  </style>


</head>

<body>

    <div id="preloder">
        <div class="loader"></div>
    </div>

    
    <header class="header">
        
        <div class="container">
            <div class="row">
                <div class="col-md-6"> 
                    <div class="header__logo">
                        <a href="/"><img src="{{ asset('mainassets/img/home/logo.png')}}" height="70px" width="110px" alt=""></a>
                        <span class="business"><span style="color:#04A1DE;">YOUR BUSINESS</span><span style="color:dimgray" > DEFENDER</span></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="/">Accueil</a></li>
                          
                            <li><a href="/contact">Contacts</a></li>
                            <li><a href="/login">Se connecter</a></li>
                            <li><a href="/register">S'inscrire</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
           
        </div>
    </header>

    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="{{ asset('mainassets/img/home/acc2.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                               
                                    <h2 style=" color:rgb(12, 87, 131)">Formation & Transfert de Compétences</h2>
                               
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
        
        
            <div class="hero__items set-bg" data-setbg="{{ asset('mainassets/img/home/acc1.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                               
                                <h2 style="color:rgb(12, 87, 131)">Organisation des Formations</h2>
                               
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </section>
   
    <section class="categories spad">
        <div class="container">
            <header class="section-header">
                <h3>À propos</h3>
                <br>
                <p style="color:rgb(48, 46, 46); font-size: 17px;"><strong>NewtechIT </strong>  est une société de Conseil et Services en Ingénierie Informatique, créée en 2015 et spécialisée
                  dans les infrastructures systèmes et sécurité.
                  Newtech IT vous garantit un support à forte valeur ajoutée avec la meilleure qualité de service en mettant à
                  votre disposition une équipe expérimentée, enthousiaste et dynamique afin d’améliorer votre productivité et
                  répondre à vos besoins métier.</p>
                  <p style="color:rgb(48, 46, 46); font-size: 17px;"><strong>Chez Newtech IT</strong>, nous nous appuyons sur les meilleures technologies du marché et des partenariats stratégiques pour fournir des solutions informatiques globales. Nous proposons à nos clients des formations officielles accompagnées d'un transfert de compétences complet sur les solutions déployées. Nos sessions de formation sont organisées avec des maquettes multi-éditeurs, garantissant un apprentissage pratique et pertinent. Notre objectif est de permettre à nos clients de maîtriser pleinement les outils et technologies mis en place, renforçant ainsi leur efficacité et leur autonomie.
                </p>
                
                </header>
        </div>
   <br><br>
        <div class="container">
            
            <div class="row">
                <div class="col-lg-3 col-md-5 col-sm-5">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{ asset('mainassets/img/blog/c2.jpg')}}"></div>
                        <div class="blog__item__text">
                            <span><img src="{{ asset('mainassets/img/icon/calendar.png')}}" alt=""> </span>
                            <h5><strong>Approche Pratique</strong></h5>
                            <p>Dans les LABs pratiques pour expérience d'apprentissage.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-5">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{ asset('mainassets/img/home/formateurs.png')}}"></div>
                        <div class="blog__item__text">
                            <span><img src="{{ asset('mainassets/img/icon/calendar.png')}}" alt=""> </span>
                            <h5><strong>Formateurs Experts</strong></h5>
                            <p>Instructeurs certifies avec une vaste expérience du terrain.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-5">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{ asset('mainassets/img/blog/c3.jpg')}}"></div>
                        <div class="blog__item__text">
                            <span><img src="{{ asset('mainassets/img/icon/calendar.png')}}" alt=""> </span>
                            <h5><strong>Certifications</strong></h5>
                            <p>Préparez-vous et obtenez des certifications reconnues dans l'industrie.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-5">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{ asset('mainassets/img/blog/c4.jpg')}}"></div>
                        <div class="blog__item__text">
                            <span><img src="{{ asset('mainassets/img/icon/calendar.png')}}" alt=""> </span>
                            <h5><strong>Support Continu </strong></h5>
                            <p>Accés a des ressources et assistance méme aprés la formations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<br><br>

        <div class="container">
            <header class="section-header">
                <h3>Nos Produits</h3>
                <br>
                <div class="row ">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('mainassets/img/product/v.png')}}">
                                
                                <ul class="product__hover">
                                    <li><a href="#"><img src="{{ asset('mainassets/img/icon/heart.png')}}" alt=""></a></li>
                                    
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h4 style="text-align: center">Vmware</h4>
                              
                               
                               
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('mainassets/img/product/active.png')}}">
                                <ul class="product__hover">
                                    <li><a href="#"><img src="{{ asset('mainassets/img/icon/heart.png')}}" alt=""></a></li>
                                   
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h4 style="text-align: center">Active Directory</h4>
                                
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                        <div class="product__item sale">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('mainassets/img/product/aruba.png')}}">
                                
                                <ul class="product__hover">
                                    <li><a href="#"><img src="{{ asset('mainassets/img/icon/heart.png')}}" alt=""></a></li>
                                    
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h4 style="text-align: center">Aruba</h4>
                                
                               
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('mainassets/img/product/ex.webp.png')}}">
                                <ul class="product__hover">
                                    <li><a href="#"><img src="{{ asset('mainassets/img/icon/heart.png')}}" alt=""></a></li>
                                
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h4 style="text-align: center">Exchange</h4>
                                
                               
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('mainassets/img/product/fortine.png')}}">
                                <ul class="product__hover">
                                    <li><a href="#"><img  src="{{ asset('mainassets/img/icon/heart.png')}}" alt=""></a></li>
                                   
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h4 style="text-align: center">Fortinet</h4>
                                
                               
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                        <div class="product__item sale">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('mainassets/img/product/veeam.png')}}">
                                
                                <ul class="product__hover">
                                    <li><a href="#"><img src="{{ asset('mainassets/img/icon/heart.png')}}" alt=""></a></li>
                                    
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h4 style="text-align: center">Veeam</h4>
                               
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('mainassets/img/product/redhat.png')}}">
                                <ul class="product__hover">
                                    <li><a href="#"><img src="{{ asset('mainassets/img/icon/heart.png')}}" alt=""></a></li>
                                    
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h4 style="text-align: center">Red Hat</h4>
                               
                               
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('mainassets/img/product/dell.png')}}">
                                <ul class="product__hover">
                                    <li><a href="#"><img src="{{ asset('mainassets/img/icon/heart.png')}}" alt=""></a></li>
                                   
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h4 style="text-align: center">Dell Technologies</h4>
                               
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
              </header>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="{{ asset ('mainassets/img/home/logo.png')}}" height="90px" width="130px" alt=""></a>
                        </div>
                       
                    </div>
                </div>
                
                
           
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
    
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>  NewTechIT. All Rights Reserved. <i class="fa fa-heart-o"
                            aria-hidden="true"></i>  <a href="https://colorlib.com" target="_blank"></a>
                           
                                <a href="#"><i class="fa fa-facebook" style="color:rgb(7, 7, 136)"></i></a>
                                <a href="#"><i class="fa fa-twitter" style="color:rgb(7, 7, 136)"></i></a>
                                <a href="#"><i class="fa fa-pinterest" style="color:rgb(7, 7, 136)"></i></a>
                                <a href="#"><i class="fa fa-instagram" style="color:rgb(7, 7, 136)"></i></a>
                            
                        </p>
                  
                    </div>
                    
                </div>
            
        </div>
    </footer>
   
    <script src="{{ asset ('mainassets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset ('mainassets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset ('mainassets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset ('mainassets/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ asset ('mainassets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset ('mainassets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset ('mainassets/js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset ('mainassets/js/mixitup.min.js')}}"></script>
    <script src="{{ asset ('mainassets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset ('mainassets/js/main.js')}}"></script>
</body>

</html>