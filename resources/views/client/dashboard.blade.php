<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>NewTechIt</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="{{asset ('dashassets/css/phoenix.min.css')}}" rel="stylesheet" id="style-default">
    <link href="{{asset ('dashassets/css/user.min.css')}}" rel="stylesheet" id="user-style-default">

    <style>
      body {
        opacity: 0;
      }

      
.card.product-item {
  transition: transform 0.3s ease;
}

.card.product-item:hover {
  transform: scale(1.05);
}


.card-header {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px; 
}


.product-image {
  max-width: 100%;
  max-height: 100%;
  object-fit: cover; 
}


    </style>
  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">
        
        @include('inc.client.sidebar')
        @include('inc.client.nav')


        <div class="content">
          <div class="pb-5">
           
              

                <div class="container-fluid pt-5">
                  <div class="text-center mb-4">
                      <h2 class="section-title px-5"><span class="px-2">Les Formations Disponibles</span></h2>
                  </div><hr/>
                  <br>
                 
                  <div class="row px-xl-5 pb-3">
                    @foreach ($formations as $showFormation=>$f)
                        
                    
                      <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                          <div class="card product-item border-0 mb-4">
                              <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                  <img class="img-fluid product-image" src="{{asset ('uploads')}}/{{$f->photo}}" width="100" alt="">
                  
                                  
                                </div>
                              <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                  <h5 class="text-truncate mb-3">{{$f->categorie}}</h5>
                                  <div class="d-flex justify-content-center">
                                      
                                      <h5 class="text-muted ml-2">{{$f->prix}}DT</h5>
                                  </div>
                              </div>
                              <div class="card-footer d-flex justify-content-between bg-light border">
                                  <a href="/client/details/{{ $f->id }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i> Voir les détails</a>
                                  <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Ajouter au panier</a>
                              </div>
                          </div>
                      </div>
                      
                      @endforeach
                     
                     
                      
                     
                  </div>
              </div>
             
           
          </div>
          
          
          
          
        </div>
      </div>
    </main>
    <script src="{{asset ('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset ('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>




