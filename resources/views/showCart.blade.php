<!DOCTYPE html>
<html lang="en">

<head>

  <base href="/public" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

  <title>Klassy Cafe - Restaurant </title>

  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

  <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

  <link rel="stylesheet" href="assets/css/owl-carousel.css">

  <link rel="stylesheet" href="assets/css/lightbox.css">

  <style>
    #menu {
      padding: 20px;
    }

    .tableDiv h1 {
      font-size: 30px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .tableDiv {
      background-color: #55efc4;
      width: 90%;
      margin-top: 100px;
      padding: 20px;
      color: #000;
    }

    table {
      width: 70%;
      background-color: #FFF;


    }



    th {
      font-size: 22px;
      background-color: #0984e3;
      padding-left: 10px;
      font-weight: bold;
      color: #fff;
    }

    td {
      font-size: 18px;
      padding-left: 10px;
    }
    .remove{
      padding: 0px  5px;
    }

    tr:nth-child(odd) {
      background-color: #dfe6e9;
    }

    .actionTr {
      position: relative;
      top: -60px;
      right: -360px;
    }
  </style>

</head>

<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li>

              <li class="scroll-to-section"><a href="#menu">Menu</a></li>
              <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>

              <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
              <li class="scroll-to-section">

                @auth
                <a href="{{url('/showCart',Auth::user()->id)}}">
                  Cart[{{$count}}]
                </a>
                @endauth
                @guest
                Cart[0]
                @endguest
                </a>
              </li>
              <li>
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                  @auth
              <li>
                <x-app-layout> </x-app-layout>
              </li>
              @else
              <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

              @if (Route::has('register'))
              <li>
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
              </li>
              @endif
              @endauth
        </div>
        @endif
        </li>

        </ul>
        <a class='menu-trigger'>
          <!-- <span>Menu</span> -->
        </a>
        <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
    </div>
  </header>

  <center>
    <div class="tableDiv">
      <h1>All The Cart Items</h1>
      <table>
        <tr>
          <th>Food Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Action</th>
        </tr>
        @foreach($data as $x)
        <tr>
          <td>{{$x->title}}</td>
          <td>{{$x->price}}</td>
          <td>{{$x->quantity}}</td>
        </tr>
        @endforeach

        @foreach($delId as $y)

        <tr style="position: relative; top:-60px; right:-610px">
          <td>
            <a class="btn btn-danger remove" href="{{url('/removeCart',$y->id)}}">Remove</a>
          </td>
        </tr>


        @endforeach
      </table>
    </div>
  </center>



  <!-- jQuery -->
  <script src="assets/js/jquery-2.1.0.min.js"></script>
  <!-- Bootstrap -->
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- Plugins -->
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/accordions.js"></script>
  <script src="assets/js/datepicker.js"></script>
  <script src="assets/js/scrollreveal.min.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/imgfix.min.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/lightbox.js"></script>
  <script src="assets/js/isotope.js"></script>
  <!-- Global Init -->
  <script src="assets/js/custom.js"></script>

  <script>
    $(function() {
      var selectedClass = "";
      $("p").click(function() {
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
        $("#portfolio div").not("." + selectedClass).fadeOut();
        setTimeout(function() {
          $("." + selectedClass).fadeIn();
          $("#portfolio").fadeTo(50, 1);
        }, 500);

      });
    });
  </script>
</body>

</html>