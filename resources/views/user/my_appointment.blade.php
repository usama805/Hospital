<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> usamakhan@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html"   style="color: dodgerblue"  >Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html"  style="color: dodgerblue"  >About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html"   style="color: dodgerblue"  >Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html"  style="color: dodgerblue"  >News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html" style="color: dodgerblue"  >Contact</a>
            </li>
            @if(Route::has('login'))
            @auth

            <li class="nav-item">
                <a class="nav-link"  style="background-color:dodgerblue; color:white"  href="{{ url('myappointment') }}">My Appointment</a>
              </li>
            <x-app-layout>

            </x-app-layout>

            @else




            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login </a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register </a>
              </li>
              @endauth
              @endif




          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div  align="center" style="padding: 70px;" >
    <table cellspacing="0"  >
        <tr style="background-color: black;" >
            <th  style="padding: 10px; font-size:20px; color:white">Doctor Name</th >
            <th  style="padding: 10px; font-size:20px; color:white">Date</th  >
            <th  style="padding: 10px; font-size:20px; color:white">Message</th  >
            <th  style="padding: 10px; font-size:20px; color:white">Status</th>
            <th  style="padding: 10px; font-size:20px; color:white">Cancel Appointment</th>
        </tr>

        @foreach ( $appoint as $appoints)

        <tr  style="background-color: black"  align="center" >
            <td style="padding: 10px;  color:white">{{ $appoints->doctor }}</td>
            <td style="padding: 10px;  color:white">{{ $appoints->date }}</td>
            <td style="padding: 10px;  color:white">{{ $appoints->message }}</td>
            <td style="padding: 10px;  color:white">{{ $appoints->status }}</td>
            <td><a  class="btn btn-danger"   onclick="return confirm('Are You Sure To Delete This')"  href="{{ url('cancel_appoint',$appoints->id) }}">Cancle</a></td>
        </tr>
        @endforeach
    </table>
  </div>



<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>