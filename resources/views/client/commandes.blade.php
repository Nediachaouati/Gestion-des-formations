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
           <div class="row g-5">
           <div>
            <div class="text-center mb-4">
              <h2 class="section-title px-5"><span class="px-2"> Mes Commandes</span></h2>
          </div><hr/><br>
            <table class="table table-bordered text-center mb-0">
                <thead>
                    <tr>
                        <th>Commande</th>
                        <th>Date</th>
                        <th>Etat</th>
                        
                    </tr>
                </thead>
                <tbody>

                    @foreach(auth()->user()->commandes as $index =>$commande)
                    <tr>
                        <td>Commande {{$index+1}}</td>
                        <td>{{$commande->created_at}}</td>
                        <td>
                           @if($commande->etat=="en cours")
                           <button class="btn btn-warning">{{$commande->etat}}</button>
                           @else
                           <button class="btn btn-success">{{$commande->etat}}</button>
                        @endif
                        </td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>

           </div>
        
        </div>
    </div>
      </div>
    </main>
    <script src="{{asset ('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset ('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>




