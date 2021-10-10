<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Laravel Task</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><h2>Laravel Task<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              
              <li class="nav-item">
                <a class="nav-link" href="{{route('post.pages')}}">Pages</a>
              </li>
              
              @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('dashboard')}}">{{Auth::user()->name}}</a>
                    </li>
                    <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" >Log in</a>
                    </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        </li>                     
                        @endif
                    @endauth
            @endif

            </ul>
          </div>
        </div>
      </nav>
    </header>
    <section style="padding:130px;">
        <div class="main-banner header-text">
            <div class="container-fluid">
                <div class="item">
                    @if(Auth::check())
                    <a href="{{url('/create')}}">Create Page &rarr;</a>
                    @endif
                    @foreach($posts as $post)
                    <div class="">
                        <div>
                            <img src="{{asset('assets/images/post/'.$post->image)}}" width="200" alt="image">   
                        </div>
                        <div>
                            <h2 class="text-gray-700 font-bold text-5xl pb-5">
                                {{$post->title}}
                            </h2>
                            <span class="">
                                <!-- By,  -->
                                <span class="">                               
                                </span> Created on {{ date('D jS M Y', strtotime ($post->created_at))}}
                            </span>
                            <p class="">
                                {{$post->description}}
                            </p>
                            <a href="{{url('/page', $post->id )}}" class="btn btn-success">Keep reading..</a>
                            @if(isset(Auth::user()->id))
                                <span class="float-right">
                                    <a class="btn btn-primary ml-3" href="{{url('/edit', $post->id)}}">Edit Post</a>
                                </span>
                                <span class="float-right">
                                    <a class="btn btn-danger" href="{{url('/delete', $post->id)}}">Delete</a>
                                    <!-- <form action="{{url('/delete', $post->id)}}" method="post">
                                        @csrf
                               
                                        <button class="btn btn-danger" type="submit">
                                            Delete
                                        </button>
                                    </form> -->
                                </span>
                            @endif
                        </div>
                    </div>
                    <hr>
                    @endforeach
                    @if(method_exists($posts, 'links'))
                    <div class="d-flex justify-content-center">
                        {!! $posts->links() !!}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Behance</a></li>
              <li><a href="#">Linkedin</a></li>
              <li><a href="#">Dribbble</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>Copyright 2021Co.
                    
                 | Design: <a rel="nofollow" href="" target="_parent">Bijaya Majhi</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>