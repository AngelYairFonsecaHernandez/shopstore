<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ShopStore</title>

        <!-- Fonts -->
    <link href="{{asset('css/shop-homepage.css')}}" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="{{asset('templatemain/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
       <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Tienda de Zapatos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Tienda
              <span class="sr-only">(current)</span>
            </a>
          </li>
@guest
<li class="nav-item">
    <a class="nav-link" href="{{route('login')}}">Iniciar Sesion</a>
  </li>
@endguest
          
          @auth
          <li class="nav-item">
          <a class="nav-link" href="{{route('cat.index')}}">Ir al Panel</a>
          </li>
          @endauth
          
         
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Todas las categorias</h1>
        <div class="list-group">
          <a href="{{route('home')}}" class="list-group-item">Todos los productos</a>
            @foreach ($categorias as $item)
            
        <a href="{{route('indexPersonalizado',$item->id)}}" class="list-group-item">{{$item->nombre}}</a>
            @endforeach
         
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="{{asset('images/portada1.png')}}" >
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{asset('images/portada2.png')}}" >
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{asset('images/portada3.png')}}" >
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          @foreach ($productos as $item)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  {{$count=0}}
                  @foreach ($imagenes as $image)
              @if ($item->id==$image->product_id)
              
              
              
              
                <div class="carousel-item {{$count==0?'active' : ''}}">
                <img class="d-block w-100 img-thumbnail img-fluid" src="{{asset('images/')}}/{{$image->image}} " alt="First slide">
                
              </div>
              {{$count++}}
            
              @endif
              @endforeach
                
                </div>
              
              </div>


           
              
             
              <div class="card-body">
                <h4 class="card-title">
                <a href="#">{{$item->nombre}}</a>
                </h4>
                <h5>{{$item->precio}} $us</h5>
              <p class="card-text">{{$item->detalle}}</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          @endforeach
          

        

          

        

        

        

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset("templatemain/vendor/jquery/jquery.min.js")}}"></script>
  <script src="{{asset("templatemain/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

    </body>
</html>
