<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">

  <meta name="apple-mobile-web-app-title" content="CodePen">
  <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />
  <title></title>

  <style>
    /* Reset default margin and padding */
    body, h1, h2, h3, h4, h5, h6, p {
        margin: 0;
        padding: 0;
    }

    /* Slideshow container styling */
    .slideshow-container {
        position: relative;
        max-width: 100%;
        margin: 0 auto;
    }

    /* Image styling within slideshow */
    .slideshow-container img {
        width: 100%;
        height: auto;
    }

    /* Carousel indicators styling */
    .carousel-indicators li {
        background-color: #888;
        border-radius: 50%;
        display: inline-block;
        width: 12px;
        height: 12px;
        margin: 0 5px;
        cursor: pointer;
    }

    .carousel-indicators .active {
        background-color: #f39c12;
    }

    /* Carousel controls styling */
    .carousel-control {
        background-color: transparent;
        border: none;
        font-size: 24px;
        color: #888;
        opacity: 0.8;
        transition: opacity 0.3s;
    }

    .carousel-control:hover {
        color: #333;
        opacity: 1;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .carousel-indicators li {
            margin: 0 2px;
        }

        .carousel-control {
            font-size: 18px;
        }
    }

    .item{
      width: 100%;
      margin-top: 100px;

    }
  </style>

  <script>
    window.console = window.console || function(t) {};
  </script> 

<body translate="no">
  <div class="container-fluid">
  <div class="row-fluid">
  <div class="span12">

  <!-- Slideshow container -->
  <div class="slideshow-container">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>
  <div class="container">
    {{-- <h2>Carousel Example</h2>   --}}
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="https://www.greycom.com.cy/image/catalog/Front%20Banner/AppleWatchSEBan.jpg" alt="Los Angeles" style="width:100%;">
        </div>

        <div class="item">
          <img src="https://m.media-amazon.com/images/S/aplus-media-library-service-media/a47a3b1a-34e3-44e9-a667-c22e2c66b501.__CR0,0,1464,600_PT0_SX1464_V1___.png" alt="Chicago" style="width:100%;">
        </div>
    
        <div class="item">
          <img src="https://www.sunmobile.com.hk/TDWorld/r/cms/www/iPhone14_Web_Banner/iPhone_14_Pro_Web_Banner_eng.jpg?v=0909" alt="New york" style="width:100%;">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</body>

</html>