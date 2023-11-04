<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
    <title>{{ $title ?? 'Blog Project App' }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="This is meta description">
	<meta name="author" content="Themefisher">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">
    
	<!-- # Google Fonts -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    @livewireStyles
</head>

<body>

<!-- navigation -->
<section class="header">
    <nav class="navbar bg-dark navbar-expand-lg navbar-dark">
        <div class="container container-fluid">
          <a class="navbar-brand" href="{{ route('home')}}"><h3>Ts Blog</h3></a>
          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon outline-primary"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav  fs-6">
              <li class="nav-item">
                <a wire:navigate class="nav-link active" aria-current="page" href="{{ route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a wire:navigate class="nav-link" href="{{route('aboutUs')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a wire:navigate class="nav-link" href="{{route('blogPage')}}">Blog</a>
              </li>
              <li class="nav-item">
                <a wire:navigate class="nav-link" href="{{ route('servicesPage')}}">Services</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
                <li class="nav-item">
                  <a class="nav-link text-dark px-3 rounded" wire:navigate href="{{route('contractPage')}}">Contract</a>
                </li>
              </ul>
          </div>
        </div>
      </nav>
</section>
<!-- /navigation -->
{{-- main/body section --}}
{{ $slot }}

<!-- Footer -->
<div class="footer bg-dark text-white">
	<footer>
	  <!-- Grid container -->
	  <div class="container p-4 pb-0">
		<!-- Section: Links -->
		<section class="">
		  <!--Grid row-->
		  <div class="row">
  
			<!-- Grid column -->
			<div class="col-md-5">
				<div class="footer-widget text-white">
					<h5 class="mb-4 font-secondary">Service</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a href="service-details.html">Digital Marketing</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Web Design</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Logo Design</a>
						</li>
						<li class="mb-2"><a href="service-details.html">Graphic Design</a>
						</li>
						<li class="mb-2"><a href="service-details.html">SEO</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- Grid column -->
  
			<hr class="w-100 clearfix d-md-none" />
  
			<!-- Grid column -->
			<div class="col-md-4">
				<div class="footer-widget">
					<h5 class="mb-4 font-secondary">Quick Links</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a wire:navigate href="{{ route('aboutUs') }}">About Us</a>
						</li>
						<li class="mb-2"><a wire:navigate href="{{ route('contractPage') }}">Contact Us</a>
						</li>
						<li class="mb-2"><a wire:navigate href="{{ route('blogPage') }}">Blog</a>
						</li>
						<li class="mb-2"><a wire:navigate href="{{ route('teamPage') }}">Team</a>
						</li>
					</ul>
				</div>
			</div>
  
			<!-- Grid column -->
			<hr class="w-100 clearfix d-md-none" />
  
			<!-- Grid column -->
			<div class="col-md-3">
				<div class="footer-widget">
					<h5 class="mb-4 font-secondary">Other Links</h5>
					<ul class="list-unstyled">
						<li class="list-inline-item me-4"><a class="text-black" href="privacy-policy.html">Privacy Policy</a>
                        </li>
						<li class="list-inline-item me-4"><a class="text-black" href="terms.html">Terms &amp; Conditions</a>
                        </li>
					</ul>
				</div>
			</div>
			<!-- Grid column -->
		  </div>
		  <!--Grid row-->
		</section>
		<!-- Section: Links -->
  
		<hr class="my-3">
  
		<!-- Section: Copyright -->
		<section class="p-3 pt-0">
		  <div class="row d-flex align-items-center">
			<!-- Grid column -->
			<div class="col-md-7 col-lg-8 text-center text-md-start">
			  <!-- Copyright -->
			  <div class="p-3">
				<p>© 2020 Copyright | toufiqur@blog</p>
			  </div>
			  <!-- Copyright -->
			</div>
			<!-- Grid column -->
  
			<!-- Grid column -->
			<div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
			  <!-- Facebook -->
			  
			  <a href="https://www.facebook.com/mdtowfequrrahman.sobuj/"
				 class="btn btn-outline-light btn-floating m-1 text-white"
				 role="button"
				 ><i class="fab fa-facebook-f"></i
				></a>
  
			  <!-- linkedin -->
			  <a href="https://www.linkedin.com/in/toufiqur9493/"
				 class="btn btn-outline-light btn-floating m-1 text-white"
				 role="button"
				 ><i class="fa-brands fa-linkedin"></i
				></a>
  
			  <!-- github -->
			  <a href="https://github.com/toufiqur19"
				 class="btn btn-outline-light btn-floating m-1 text-white"
				 role="button"
				 ><i class="fa-brands fa-github"></i
				></a>
			</div>
			<!-- Grid column -->
		  </div>
		</section>
		<!-- Section: Copyright -->
	  </div>
	  <!-- Grid container -->
	</footer>
	<!-- Footer -->
  </div>
  <!-- End of .container -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="{{ asset('assets/js/script.js') }}"></script>

@livewireScripts
</body>
</html>