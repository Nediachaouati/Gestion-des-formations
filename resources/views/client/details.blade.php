<!doctype html>
<html lang="en-US" dir="ltr">

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
    <link href="{{asset ('dashassets/css/phoenix.min.css')}}" rel="stylesheet" id="style-default">
    <link href="{{asset ('dashassets/css/user.min.css')}}" rel="stylesheet" id="user-style-default">
    
    
</head>

  <body>
    <main class="main" id="top">
        <div class="container-fluid px-0">
        
        @include('inc.client.sidebar')
        @include('inc.client.nav')


    <div class="content">
        <div class="pb-5">
            <div class="container">
               <div class="row">
                    <div class="col-lg-3 col-md-3">
                        
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="{{ asset ('mainassets/img/shop-details/thumb-1.png')}}">
                                    </div>
                                </a>
                            </li>
                           </ul>
                           
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img class="img-fluid product-image" src="{{asset ('uploads')}}/{{$formations->photo}}"  alt="Image">
                                </div>
                            </div>
                            
                           
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h2 style="color:#0f31ca">{{$formations->categorie}}</h2>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span> - 5 Reviews</span>
                            </div>
                           <h4 ><span >Description:</span> {{$formations->description}}</h4><br>
                           <h4><span>Date Session:</span> {{$formations->dateSession}}</h4><br>
                           <h4><span>Durée:</span> {{$formations->duree}}</h5><br>
                           <h4><span>Capacité:</span> {{$formations->capacite}}</h4><br>
                            <h4><span>Prix:</span> {{$formations->prix}} DT</h4><br>
                               
                            <form action="/client/order/store" method="POST"> 
                            @csrf

                            <input type="hidden" value="{{ $formations->id }}" name="idformation">
                            <div class="product__details__cart__option">
                            <button type="submit"  class="primary-btn"><i class="fa fa-shopping-cart mr-1"></i>Ajouter au panier</button>
                            </div>
                            
                            </form>
                            <br>
                            
                            <div class="product__details__last__option">
                                
                                <h4><span>Paiement sécurisé garanti</span></h4>
                                <img src="{{ asset ('mainassets/img/shop-details/details-payment.png')}}" alt="">
                                
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

   
    <!-- Shop Details Section End -->
             
        
</div>
</main>
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
    <script src="{{asset ('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset ('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>




