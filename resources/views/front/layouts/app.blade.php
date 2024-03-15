<!DOCTYPE html>
<html class="no-js" lang="en_AU" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>careerHUB | Find Best Jobs</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="pinterest" content="nopin" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/ui/trumbowyg.min.css" integrity="sha512-Fm8kRNVGCBZn0sPmwJbVXlqfJmPC13zRsMElZenX6v721g/H7OukJd8XzDEBRQ2FSATK8xNF9UYvzsCtUpfeJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
	<!-- Fav Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="#" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body data-instant-intensity="mousedown">
<header>
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-warning shadow py-3">
		<div class="container">
			<a class="navbar-brand" href="{{ route('home') }}">careerHUB</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-0 ms-sm-0 me-auto mb-2 mb-lg-0 ms-lg-4">
					<li class="nav-item">
						<a class="nav-link text-black" aria-current="page" href="{{ route('home') }}">Home</a>
					</li>	
					<li class="nav-item">
						<a class="nav-link text-black" aria-current="page" href="{{ route('jobs') }}">Find Jobs</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link text-black" aria-current="page" href="{{ route('about') }}">About Us</a>
					</li>										
				</ul>		
        
        @if (!Auth::check())
          <a class="btn btn-outline-success me-2" href="{{ route('account.login') }}" type="submit">Login</a>
          @else
            @if (Auth::user()->role == 'admin')
              <a class="btn btn-outline-success me-2" href="{{ route('admin.dashboard') }}" type="submit">Admin</a>
            @endif
            <a class="btn btn-outline-success me-2" href="{{ route('account.profile') }}" type="submit">My Account</a>
        @endif

				<a class="btn btn-success" href="{{ route('account.createJob') }}" type="submit">Post a Job</a>
			</div>
		</div>
	</nav>
</header>
<br>
@yield('content')


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title pb-0" id="exampleModalLabel">Change Profile Picture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="profilePicForm" name="profilePicForm" action="" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Profile Image</label>
                <input type="file" class="form-control" id="image"  name="image">
                <p class="text-danger" id="image-error"></p>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mx-3">Update</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            
        </form>
      </div>
    </div>
  </div>
</div>

<footer class="footer bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 mt-4 col-lg-3 text-center text-sm-start">
                <div class="information">
                    <h6 class="footer-heading text-uppercase text-white fw-bold">Information</h6>
                    <ul class="list-unstyled footer-link mt-4">
                        <li class="mb-1"><a href="https://codepen.io/Gaurav-Rana-the-reactor" class="text-white text-decoration-none fw-semibold">Events</a></li>
                        <li class="mb-1"><a href="https://codepen.io/Gaurav-Rana-the-reactor" class="text-white text-decoration-none fw-semibold">Our Team</a></li>
                        <li class="mb-1"><a href="https://codepen.io/Gaurav-Rana-the-reactor" class="text-white text-decoration-none fw-semibold">Upcoming Sale</a></li>
                        <li class=""><a href="https://codepen.io/Gaurav-Rana-the-reactor" class="text-white text-decoration-none fw-semibold">New Launches</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 mt-4 col-lg-3 text-center text-sm-start">
                <div class="resources">
                    <h6 class="footer-heading text-uppercase text-white fw-bold">Resources</h6>
                    <ul class="list-unstyled footer-link mt-4">
                        <li class="mb-1"><a href="#" class="text-white text-decoration-none fw-semibold">ADMIN PANEL</a></li>
                        <li class="mb-1"><a href="#" class="text-white text-decoration-none fw-semibold">R&D</a></li>
                        <li class="mb-1"><a href="#" class="text-white text-decoration-none fw-semibold">Third Party</a></li>
                        <li class=""><a href="#" class="text-white text-decoration-none fw-semibold">Videos</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 mt-4 col-lg-2 text-center text-sm-start">
              <div class="social">
                  <h6 class="footer-heading text-uppercase text-white fw-bold">Social</h6>
                  <ul class="list-inline my-4">
                    <li class="list-inline-item"><a href="https://codepen.io/Gaurav-Rana-the-reactor" class="text-white btn-sm btn btn-primary mb-2"><i class="bi bi-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="https://codepen.io/Gaurav-Rana-the-reactor" class="text-danger btn-sm btn btn-light mb-2"><i class="bi bi-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="https://codepen.io/Gaurav-Rana-the-reactor" class="text-white btn-sm btn btn-primary mb-2"><i class="bi bi-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="https://codepen.io/Gaurav-Rana-the-reactor" class="text-white btn-sm btn btn-success mb-2"><i class="bi bi-whatsapp"></i></a></li>
                </ul>
              </div>
          </div>
            <div class="col-sm-6 col-md-6 mt-4 col-lg-4 text-center text-sm-start">
              <div class="contact">
                  <h6 class="footer-heading text-uppercase text-white fw-bold">Contact Us</h6>
                  <address class="mt-4 m-0 text-white mb-1"><i class="bi bi-pin-map fw-semibold"></i> GEC, Chattogram</address>
                  <a href="tel:+" class="text-white mb-1 text-decoration-none d-block fw-semibold"><i class="bi bi-telephone"></i>  +8801707352034</a>
                  <a href="mailto:" class="text-white mb-1 text-decoration-none d-block fw-semibold"><i class="bi bi-envelope"></i> info@careerhub.com</a>
              </div>
            </div>
        </div>
    </div>
    <div class="text-center bg-warning text-black mt-4 p-1">
        <p class="mb-0 fw-bold">2024 © careerHUB, All Rights Reserved</p>
    </div>
  </footer> 
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.5.1.3.min.js') }}"></script>
<script src="{{ asset('assets/js/instantpages.5.1.0.min.js') }}"></script>
<script src="{{ asset('assets/js/lazyload.17.6.0.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/trumbowyg.min.js" integrity="sha512-YJgZG+6o3xSc0k5wv774GS+W1gx0vuSI/kr0E0UylL/Qg/noNspPtYwHPN9q6n59CTR/uhgXfjDXLTRI+uIryg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

<script>
  $('.textarea').trumbowyg();

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
		}
	});

  $("#profilePicForm").submit(function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    $.ajax({
      url: '{{ route("account.updateProfilePic") }}',
      type: 'post',
      data: formData,
      dataType: 'json',
      contentType: false,
      processData: false,
      success: function(response) {
        if (response.status == false) {
          var errors = response.errors;
          if (errors.image) {
            $("#image-error").html(errors.image)
          }
        } else {
          window.location.href = '{{ url()->current() }}'
        }
      }
    })
  })
</script>

@yield('customJs')

</body>
</html>