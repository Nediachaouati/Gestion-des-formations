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
   <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&di">

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
    
    <style>
        .center-button {
            display: flex;
            justify-content: center;
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
                <div class="container">
                    <table class="table table-bordered text-center mb-0">
                        <thead >
                            <tr>
                                <th>Catégorie</th>
                                <th>Prix</th>
                               
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            @foreach($commande->Lignecommandes as $lc)
                            <tr>
                                <td class="align-middle"><img src="{{ asset('uploads')}}/{{ $lc->formation->photo }}" alt="" style="width: 50px;"> {{ $lc->formation->categorie }}</td>
                                <td class="align-middle">{{ $lc->formation->prix }} TND</td>
                               
                                <td class="align-middle"><a href="/client/lc/{{ $lc->id }}/destroy" class="btn btn-sm btn-primary"><i class="fa fa-times"></i></a></td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container">
                    <form action="/client/checkout" method="POST">
                        @csrf
                        <input type="hidden" name="commande" value="{{$commande->id}}">
                    <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-primary"  >Payer</button>
                        </div>
                        
                        
                       </form>
                </div>
            </div>
        </div>
        <!-- Cart End -->
    
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  </body>

</html>




