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
    <script src="https://kit.fontawesome.com/80a4ad522e.js" crossorigin="anonymous"></script>
	<!-- # Google Fonts -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<script src="https://cdn.tailwindcss.com"></script>

    @livewireStyles
</head>

<body>

<!-- navigation -->
@include('header.header')
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
			<div class="col-md-5 ">
				<div class="footer-widget text-white">
						<!-- Facebook -->
						<a class="navbar-brand m-1 text-white" href="{{ route('home')}}"><h3>Ts Blog</h3></a>
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
			</div>
			<!-- Grid column -->
  
			<hr class="w-100 clearfix d-md-none mt-2 mb-3" />
  
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
			<hr class="w-100 clearfix d-md-none mb-3" />
  
			<!-- Grid column -->
			<div class="col-md-3">
				<div class="footer-widget">
					<h5 class="mb-4 font-secondary">Other Links</h5>
					<ul class="list-unstyled">
						<li class="list-inline-item me-4 pb-3"><a class="text-black" href="privacy-policy.html">Privacy Policy</a>
                        </li>
						<li class="list-inline-item me-4"><a class="text-black" href="#">Terms &amp; Conditions</a>
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
			<div class="col-md-12 col-lg-12 text-center text-md-start">
			  <!-- Copyright -->
			  <div class="">
				<p>© 2020 Copyright | toufiqur@blog</p>
			  </div>
			  <!-- Copyright -->
			</div>
			<!-- Grid column -->
  
			<!-- Grid column -->
			
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