@extends('navbar')
@section('content')
<html>
<head>
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .social-link {
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            border-radius: 50%;
            transition: all 0.3s;
            font-size: 0.9rem;
        }

        .social-link:hover,
        .social-link:focus {
            background: #ddd;
            text-decoration: none;
            color: #555;
        }

        .flexbox{
            display: flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            padding-left: 4vw;
        }

        
    </style>
</head>
<body>

<!--nav begin-->
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
    <div class="container"><a href="#" class="navbar-brand d-flex align-items-center"> <i class="fa fa-snowflake-o fa-lg text-primary mr-2"></i><strong>Snowflake</strong></a>
      <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
      <div id="navbarSupportedContent" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="#" class="nav-link font-italic"> Home </a></li>
          <li class="nav-item active"><a href="#" class="nav-link font-italic"> About </a></li>
          <li class="nav-item active"><a href="#" class="nav-link font-italic"> Services </a></li>
          <li class="nav-item active"><a href="#" class="nav-link font-italic"> Contact</a></li>
        </ul>
      </div>
    </div>
  </nav> -->

  <!--nav end-->
<div class="flexbox">  
  <div class="bg-light">
    <div class="container py-5">
      <div class="row h-100 align-items-center py-5">
        <div class="col-lg-6">
          <h1 class="display-4">About us page</h1>
          <p class="lead text-muted mb-0">If you’re among those who adore animals, let us convince you to choose one of your favourite Animal here.</p>
          <p class="lead text-muted">Visit : <a href="#" class="text-muted"> 
                      <u>pettify.com</u></a>
          </p>
        </div>
        <div class="col-lg-6 d-none d-lg-block"><img src="https://www.dropbox.com/s/02okbk2wzmsfbe0/cute%20puppy%20transparent_4371291.png?raw=1" alt="" class="img-fluid"></div>
      </div>
    </div>
  </div>
  
  <div class="bg-white py-5">
    <div class="container py-5">
      <div class="row align-items-center mb-5">
        <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
          <h2 class="font-weight-light">
            Pets are fun to be around</h2>
          <p class="font-italic text-muted mb-4">Having pets not only improves the frame of mind but also act as an antidote for loneliness. A good company to socialize with, the unconditional love that pets shower upon us is a huge reason behind stress reduction..</p>
        </div>
        <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://www.dropbox.com/s/8uih10m2mpzcn6h/little%20fresh%20girl%20and%20cat_4208730.png?raw=1" alt="" class="img-fluid mb-4 mb-lg-0"></div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-5 px-5 mx-auto"><img src="https://www.dropbox.com/s/25i1q7u7jhy39ir/animal%20puppy%20little%20golden%20hair_3821500.png?raw=1" alt="" class="img-fluid mb-4 mb-lg-0"></div>
        <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
          <h2 class="font-weight-light">Pettify is all about</h2>
          <p class="font-italic text-muted mb-4">We love pets and wanted to create a safe place for selling pets, but also pet services, with the convenience of online access where we know buyers, sellers and of course the pets themselves, will all be safe and secure. The best way to accomplish this is by ensuring there is a barrier to entry that puts the scammers off, but we also didn't want just another high-priced ad site that few could afford to use frequently. So, we have developed our site to avoid the scammers, but also make sure that it is affordable for anyone wanting to sell a pet or provide a pet service, even if it's a one-person dog grooming business.
            With prices that meet customer¡¯s budgets, this is an online pet sales environment with integrity, where buyers and sellers, businesses and customers can trust each other with confidence.</p>
        </div>
      </div>
    </div>
  </div>

<!--Team Begin-->
  
  <div class="bg-light py-5">
    <div class="container py-5">
      <div class="row mb-4">
        <div class="col-lg-5">
          <h2 class="display-4 font-weight-light">Our team</h2>
          <p class="font-italic text-muted">Alone we can do so little. together we can do so much.</p>
        </div>
      </div>
  
      <div class="row text-center">
        <div class="col-xl-3.5 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://avatars1.githubusercontent.com/u/31372157?s=460&u=fb017f9d8ad744a4011f2b7bfa94823a38023155&v=4" alt="" width="130" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Abhinav Akhil</h5><span class="small text-uppercase text-muted">Team - Member</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item"><a href="https://github.com/abhinavakhil/" class="social-link" target="_blank"><i class="fa fa-github"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-xl-3.5 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://avatars1.githubusercontent.com/u/31386681?s=460&u=ce338445590b1e06c1c1ff2054b68270d2296ba9&v=4" alt="" width="130" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Ishan Singh</h5><span class="small text-uppercase text-muted">Team - Member</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item"><a href="https://github.com/isishan" class="social-link" target="_blank"><i class="fa fa-github"></i></a></li>
            </ul>
          </div>
        </div>
        
        <div class="col-xl-3.5 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://avatars2.githubusercontent.com/u/45836736?s=460&u=616f5457c771ed7a89443c6298a06cd5d23a5739&v=4" alt="" width="130" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Chinaga Rajesh</h5><span class="small text-uppercase text-muted">Team - Member</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item"><a href="https://github.com/chrajesh167" class="social-link" target="_blank"><i class="fa fa-github"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-xl-3.5 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://avatars2.githubusercontent.com/u/47394575?s=460&u=ab95cea5e2807bcdfb0a49979212fb8b5338c4ce&v=4" alt="" width="130" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0">Abhishek Kumar</h5><span class="small text-uppercase text-muted">Team - Member</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item"><a href="https://github.com/Abhishek4813" class="social-link" target="_blank"><i class="fa fa-github"></i></a></li>
            </ul>
          </div>
        </div> 
      </div>
    </div>
  </div>
</div>
<!--Team End-->
  </body>
  </html>
@endsection