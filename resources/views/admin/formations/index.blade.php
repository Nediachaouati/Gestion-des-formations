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
      
    </style>
  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">
        
        @include('inc.admin.sidebar')
        @include('inc.admin.nav')


        <div class="content">
          <div class="pb-5">
            <div class="row g-5">
              <div>
                <div class="text-center mb-4">
                  <h2 class="section-title px-5" style="color: rgb(49, 48, 48)"><span class="px-2">Liste des Formations </span></h2></i>
                    <hr/></div>
                <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary mt-3">Ajouter Formations</a>
              

                <div class="mt-2">
                  <form action="/admin/formation/search" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-10">
                        <input type="text" class="form-control" name="formation_name" placeholder="Chercher Formation">
                      </div>
                      <div class="col-2">
                        <button class="btn btn-success" type="submit">Chercher</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="mt-3">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 70px;text-align: center;">#</th>
                        <th style="width: 120px; text-align: center;">Catégorie</th>
                        <th style="width: 80px; text-align: center;">Prix</th>
                        <th style="width: 80px; text-align: center;">Durée</th>
                        <th style="width: 110px; text-align: center;">Date Session</th>
                        
                        <th style="width: 120px; text-align: center;">Logo</th>
                        <th style="width: 160px; text-align: center;">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($formations as $index=>$f)
                      <tr>
                        <th scope="row" style="text-align: center;">{{$index+1}}</th>
                        <td style="text-align: center;">{{$f->categorie}}</td>
                        <td style="text-align: center;">{{$f->prix}}</td>
                        <td style="text-align: center;">{{$f->duree}}</td>
                        <td style="text-align: center;">{{$f->dateSession}}</td>
                        
                        <td style="text-align: center;" >
                          <img src="{{asset ('uploads')}}/{{$f->photo}}" width="100" alt="">
                          </td>
                        <td style="text-align: center;">

                            <a data-bs-toggle="modal" data-bs-target="#editFormation{{$f->id}}" class="btn btn-success">Modifier</a>
                            <a onclick="return confirm('voulez-vous vraiment supprimer cette formation? ')" href="/admin/formation/{{$f->id}}/delete" class="btn btn-danger">Supprimer</a>
                        </td>
                      </tr>
                      
                      @endforeach
                    </tbody>
                  </table>
                </div>
                 
                
            
            </div>
            </div>
          </div>
          
          
          
         
        </div>
      </div>
    </main>
    
    
                      
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Ajout des Formations</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-times fa-w-11 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg=""><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button>
                            </div>
                            <form action="/admin/formation/store" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                              
                               
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput1">Categorie </label>
                                        <input name="categorie" class="form-control" id="exampleFormControlInput1" type="text" placeholder="Tappez le categorie">
                                      
                                        @error('categorie')
                                        <div class="alert alert-danger">
                                          {{ $message }}
                                      
                                      </div>
                                      @enderror

                                    </div>
                                      <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput1">Prix </label>
                                        <input name="prix" class="form-control" id="exampleFormControlInput1" type="text" placeholder="Tappez le prix">
                                      
                                        @error('prix')
                                        <div class="alert alert-danger">
                                          {{ $message }}
                                      
                                      </div>
                                      @enderror

                                    </div>
                                      <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput1">Duree </label>
                                        <input name="duree" class="form-control" id="exampleFormControlInput1" type="text" placeholder="Tappez la duree">
                                      
                                        @error('duree')
                                        <div class="alert alert-danger">
                                          {{ $message }}
                                      
                                      </div>
                                      @enderror
                                      
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput1">Capacité </label>
                                        <input name="capacite" class="form-control" id="exampleFormControlInput1" type="text" placeholder="Tappez la capacité">
                                      
                                        @error('capacite')
                                        <div class="alert alert-danger">
                                          {{ $message }}
                                      
                                      </div>
                                      @enderror
                                      
                                    </div>

                                      <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput1">Date Session </label>
                                        <input name="dateSession" class="form-control" id="exampleFormControlInput1" type="date" placeholder="Tappez la date de session">
                                        @error('dateSession')
                                        <div class="alert alert-danger">
                                          {{ $message }}
                                      
                                      </div>
                                      @enderror
                                    </div>

                                    <div class="mb-0">
                                      <label class="form-label" for="exampleTextarea">Descriptions</label>
                                      <textarea name="description" class="form-control" id="exampleTextarea" rows="4"> </textarea>
                                    
                                      @error('description')
                                      <div class="alert alert-danger">
                                        {{ $message }}
                                    
                                    </div>
                                    @enderror
  
                                    </div>
  
                                    <div class="mb-0">
                                      <label class="form-label" for="exampleTextarea">Logo Formation</label>
                                      <input name="photo" class="form-control" id="exampleFormControlInput1" type="file" placeholder="Choisir Logo">
                                    
                                      @error('photo')
                                      <div class="alert alert-danger">
                                        {{ $message }}
                                    
                                    </div>
                                    @enderror
  
                                    </div>
                                      
                               
                            </div>
                            <div class="modal-footer"><button class="btn btn-primary" type="submit">Envoyer</button>
                                <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button></div>
                        </form>
                        </div>
                        </div>
                      </div>


                      @foreach ($formations as $index=>$f)
                      <!--Model Modifier -->  
                      <div class="modal fade" id="editFormation{{$f->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modifier formation:<span class="text-primary"> {{$f->categorie}} </span></h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-times fa-w-11 fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg=""><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button>
                            </div>
                            <form action="/admin/formation/update" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="modal-body">
                                
                                <input type="hidden" name="idformation" value="{{ $f->id }}">
                                <img src="{{asset ('uploads')}}/{{$f->photo}}" width="100" alt="">
                             
                                  <div class="mb-3">
                                      <label class="form-label" for="exampleFormControlInput1">Categorie </label>
                                      <input name="categorie" class="form-control" id="exampleFormControlInput1" type="text" placeholder="Tappez le categorie" value="{{$f->categorie}}">
                                    
                                      @error('categorie')
                                      <div class="alert alert-danger">
                                        {{ $message }}
                                    
                                    </div>
                                    @enderror

                                  </div>
                                    <div class="mb-3">
                                      <label class="form-label" for="exampleFormControlInput1">Prix </label>
                                      <input name="prix" class="form-control" id="exampleFormControlInput1" type="text" placeholder="Tappez le prix" value="{{$f->prix}}">
                                    
                                      @error('prix')
                                      <div class="alert alert-danger">
                                        {{ $message }}
                                    
                                    </div>
                                    @enderror

                                  </div>
                                    <div class="mb-3">
                                      <label class="form-label" for="exampleFormControlInput1">Duree </label>
                                      <input name="duree" class="form-control" id="exampleFormControlInput1" type="text" placeholder="Tappez la duree" value="{{$f->duree}}">
                                    
                                      @error('duree')
                                      <div class="alert alert-danger">
                                        {{ $message }}
                                    
                                    </div>
                                    @enderror
                                    
                                  </div>

                                  <div class="mb-3">
                                      <label class="form-label" for="exampleFormControlInput1">Capacité </label>
                                      <input name="capacite" class="form-control" id="exampleFormControlInput1" type="text" placeholder="Tappez la capacité" value="{{$f->capacite}}">
                                    
                                      @error('capacite')
                                      <div class="alert alert-danger">
                                        {{ $message }}
                                    
                                    </div>
                                    @enderror
                                    
                                  </div>

                                    <div class="mb-3">
                                      <label class="form-label" for="exampleFormControlInput1">Date Session </label>
                                      <input name="dateSession" class="form-control" id="exampleFormControlInput1" type="date" placeholder="Tappez la date de session" value="{{$f->dateSession}}">
                                      @error('dateSession')
                                      <div class="alert alert-danger">
                                        {{ $message }}
                                    
                                    </div>
                                    @enderror
                                  </div>
                                  <input type="hidden" value="{{$f->id}}" name="id_formation"> 
                             
                                  <div class="mb-0">
                                    <label class="form-label" for="exampleTextarea">Descriptions</label>
                                    <textarea name="description" class="form-control" id="exampleTextarea" rows="3" >{{$f->description}} </textarea>
                                  
                                    @error('description')
                                    <div class="alert alert-danger">
                                      {{ $message }}
                                  
                                  </div>
                                  @enderror

                                  </div>

                                  <div class="mb-0">
                                    <label class="form-label" for="exampleTextarea">Logo Formation</label>
                                    <input name="photo" class="form-control" id="exampleFormControlInput1" type="file" placeholder="Choisir Logo">
                                  
                                    @error('photo')
                                    <div class="alert alert-danger">
                                      {{ $message }}
                                  
                                  </div>
                                  @enderror

                                  </div>

                                  
                          </div>
                          <div class="modal-footer"><button class="btn btn-primary" type="submit">Modifer</button>
                              <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button></div>
                      </form>
                        </div>
                        </div>
                      </div>
                      @endforeach
                    
    <script src="{{asset ('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset ('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>