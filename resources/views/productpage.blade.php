<html>

  <head>

    <link href="{{ asset('css/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/css/ken-burns.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/css/animate.min.css') }}" type="text/css" media="all" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="ONLINE SHOPPING">
    <script type="application/x-javascript">
      addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
      }, false);

      function hideURLbar() {
        window.scrollTo(0, 1);
      }
    </script>
    <script src="{{ asset('js/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/js/jquery.min.js') }}"></script>


    <link href="//fonts.googleapis.com/css?family=Cagliostro" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
    <style type="text/css">
      body {
        background-color: #303030;
        /* fallback for old browsers */
        font-family: "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }

    </style>

  </head>

  <body bgcolor="#d6ebd9">
    <div class="header">
      <div class="container">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <div class="navbar-brand">
                <h1><a href="">Online Shopping</a></h1>
              </div>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <nav class="link-effect-4" id="link-effect-4">
                <ul class="nav navbar-nav">
                  <!--<li><a href="home.html"><span data-hover="Home">Home</span></a></li>-->
                  <!--<li><a href="sign-up.php"><span data-hover="Register">Register</span></a></li>-->
                  <li><a href="{{ url('logout') }}"><span data-hover="Login">Logout</span></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </nav>
      </div>
    </div>







    <title>Men's Wear</title>
    <style type="text/css">
      table,
      tr,
      td {
        border-style: solid;
        border-color: grey;
        border-collapse: collapse;
        padding: 10px;
        max-width: 1000px;
        background-color: #b3f3ef;
        font-family: Helvetica;
        font-weight: bold;
      }

      th {
        padding: 30px;
      }

      td input {
        margin-right: 5px;
        margin-left: auto;
      }

      td p {
        font-family: verdana;
        font-weight: normal;
        color: blue;
      }

      div.box {
        width: 350px;
        height: 350px;
        border-style: solid;
        border-radius: 15px;
        border-color: grey;
        padding: 25px;
        margin: 5px;
        text-align: center;
        background-color: #d6ebd9;
      }

      div.box img {
        width: 100%;
        height: 100%;
        -webkit-transition-duration: 0.4s;
        /* Safari */
        transition-duration: 0.5s;
      }

      div.box img:hover {
        transform: scale(1.5);
      }

      div.box input {
        text-align: center;
        align-content: center;
        float: center;
        background-color: #4CAF50;
        -webkit-transition-duration: 0.4s;
        /* Safari */
        transition-duration: 0.4s;
      }

      div.box input:hover {
        background-color: #367477;
        color: black;
      }

      div.re {
        font-family: verdana;
        font-weight: normal;
        color: black;
      }

    </style>


    <br><br>
    <!--<div class='page'>-->
    <!--<div class='content'>-->
    <form action="confirm-order.php?action=0" method="get">
      <input type="hidden" name="pid" value="11 ">
      <input type="hidden" name="username" value="sample">
      @foreach($product as $p)
      <table align="center">
        <tbody>
          <tr>
            <th rowspan="100">
              <div class="box"><img src="{{ asset('images/'.$men.'/'.$p->image.'') }}" alt="11 "></div>
              <h5 align="center">(hover over image to zoom in)</h5>
            </th>
          </tr>
          <tr>
            <td><b>Name</b></td>
            <td>{{$p->pname}}</td>
          </tr>
          <tr>
            <td><b>Price</b></td>
            <td><b>{{$p->price}}</b></td>
          </tr>
          <tr>
            <td><b>Details</b></td>
            <td>{{$p->info}}</td>
          </tr>
          <tr>
            <td>Rating</td>
            <td></td>
          </tr>
          <tr>
            <td>Quantity</td>
            <td>
              <input type="text" name="quantity">
              <input type="submit" class="btn btn-primary" name="submit" value="Place Order">
            </td>
          </tr>
          <tr>
            <td>Reviews</td>
            <td>


            </td>
          </tr>
        </tbody>
      </table>
      @endforeach
    </form>
    <br><br><br>
    <!--</div>-->
    <!--</div>-->


    <br>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style type="text/css">
      div.social {
        margin-bottom: 0px;
      }

      div.social a {
        width: 32px;
        height: 32px;
        background: #F58703;
        display: inline-block;
        margin: 0 0.2em;
        transition: 0.5s all;
        -webkit-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -o-transition: 0.5s all;
        -ms-transition: 0.5s all;
        border-radius: 20px;
      }

      div.social i {
        padding-top: 20%;
      }

    </style>



    <div class="copy-section">
      <div class="container">
        <div class="social">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-youtube"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
        </div>
      </div>
    </div>

  </body>

</html>
