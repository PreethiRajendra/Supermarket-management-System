<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="qstyle.css">

</head>
<body>
<div class="carousel-container">
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item  carousel-image bg-img-1 active" id="img-1" data-bs-interval="10000">
        <!-- <img src="/Images/add expenses.png" class="d-block w-100" alt="sdd-expenses"> -->
        <div class="carousel-caption d-none d-md-block">
          <h2>QUERY 1</h2>
          <p>Offer effectiveness</p>
        </div>
      </div>
      <div class="carousel-item carousel-image bg-img-2" id="img-2"data-bs-interval="2000">
        <!-- <img src="/Images/manage expenses.png" class="d-block w-100" alt="manage-expenses"> -->
        <div class="carousel-caption d-none d-md-block">
          <h2>QUERY 2</h2>
          <p>Total sales and Total revenue</p>
        </div>
      </div>
      <div class="carousel-item carousel-image bg-img-3" id="img-3"data-bs-interval="3000" >
        <!-- <img src="/Images/insight.png" class="d-block w-100" alt="insight"> -->
        <div class="carousel-caption d-none d-md-block">
          <h2>QUERY 3</h2>
          <p>Top selling products</p>
        </div>
      </div>
      <div class="carousel-item carousel-image bg-img-4" id="img-4"data-bs-interval="4000" >
        <!-- <img src="/Images/insight.png" class="d-block w-100" alt="insight"> -->
        <div class="carousel-caption d-none d-md-block">
          <h2>QUERY 4</h2>
          <p>Sales trend and analysis</p>
        </div>
      </div>
      <div class="carousel-item carousel-image bg-img-5" id="img-5"data-bs-interval="5000" >
        <!-- <img src="/Images/insight.png" class="d-block w-100" alt="insight"> -->
        <div class="carousel-caption d-none d-md-block">
          <h2>QUERY 5</h2>
          <p>Gain valuable insights into your financial habits.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
  <script src="q.js"></script>
</body>
</html>