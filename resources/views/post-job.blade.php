
<!doctype html>
<html lang="en">
  <head>
    <title>JobBoard &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link rel="stylesheet" href="{{asset('css/custom-bs.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/line-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/quill.snow.css')}}">
    

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">    
  </head>
  <body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
        <div class="site-logo col-6"><a href="{{url('index')}}">JobBoard</a></div>

<nav class="mx-auto site-navigation">
  <div class="ml-auto">
    <a href="{{url('post-job')}}" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span
        class="mr-2 icon-add"></span>Post a Job</a>
    <a href="{{url('index')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span
        class="mr-2 icon-lock_outline"></span>Jobs</a>
        <a href="{{url('posts')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block">Posts</a>
        <a href="{{url('dashboard')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block">Profile</a>
        <a href="{{url('reviewjob/user_id')}}" class="btn btn-primary border-width-2 d-none d-lg-inline-block">Review Posted Job</a>
        
  </div>
</nav>


        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Post A Job</h1>
            
          </div>
        </div>
      </div>
    </section>

    
    <section class="site-section">
      <div class="container">

        <div class="row align-items-center mb-5">
          
          
        </div>
        <div class="row mb-5">
          <div class="col-lg-12">
            <form class="p-4 p-md-5 border rounded" method="post" action="{{ url('jobs/store') }}">
              @csrf
              @if(session('success'))
              <p class="alert alert-success">
                {{session('success')}}
              </p>
              @endif
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                            </ul>
                          </div>
                          @endif
              <h3 class="text-black mb-5 border-bottom pb-2">Job Details</h3>
              
              

              <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="text" class="form-control" id="email" placeholder="you@yourdomain.com">
              </div>
              <div class="form-group">
                <label for="job-title">Job Title</label>
                <input name="title" type="text" class="form-control" id="job-title" >
              </div>
              <div class="form-group">
                <label for="job-location">Location</label>
                <input name="location" type="text" class="form-control" id="job-location" >
              </div>
              <div class="form-group">
                <label for="job-Description">Description</label>
                <input name="description" type="text" class="form-control" id="job-description" >
              </div>

              <button type="submit" class="btn btn-primary">Save Job</button>
              <br>
              <br>
              <div class="row">
              <div class="col-2">
                <a href="{{url('blog')}}" class="btn btn-block btn-light btn-md"><span class="icon-open_in_new mr-2"></span>Preview</a>
              </div>

            </div>

            </form>
          </div>

         
        </div>

        
      </div>
    </section>

    
    
    <footer class="site-footer">

      <a href="#top" class="smoothscroll scroll-top">
        <span class="icon-keyboard_arrow_up"></span>
      </a>

      
    </footer>
  
  </div>

    <!-- SCRIPTS -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/stickyfill.min.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/quill.min.js')}}"></script>
    
    
    <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
    
    <script src="{{asset('js/custom.js')}}"></script>
   
   
     
  </body>
</html>