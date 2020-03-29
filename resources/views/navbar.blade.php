<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

.li {
  float: left;
}

.a {
    color: white !important;
    text-decoration: none !important;
}

.li .a {
  display: block;
  color: white;
  text-align: center;
  padding: 8px 16px;
  text-decoration: none;
  font-size: 1.5vw;
}

.li .a:hover:not(.active) {
  background-color: #0F69D9;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>
<body>

<ul class="ul">
  <li class="li"><a class="a" href="/welcome"><img src="https://i.ibb.co/rMWX76v/Word-Art-4.png" style="float:left; height:5vw !important;"><span style="font-size:3vw; font-family:Copperplate; padding-left:5px;">Pettify</span></a></li>
  <li class="li" style="float:right"><a class="a" style="padding: 25px;" href="/addItem">Find a home</a></li>
  <li class="li" style="float:right"><a class="a" style="padding: 25px;" href="/cart">My Cart</a></li>
  <li class="li" style="float:right"><a  class="a" style="padding: 25px;" href="/shop">Shop</a></li>
  <li class="li" style="float:right"><a  class="a" style="padding: 25px;" href="/about">About Us</a></li>
  
  
</ul>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><nav class="navbar navbar-default">
@yield('content')