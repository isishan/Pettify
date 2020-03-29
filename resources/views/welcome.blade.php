<html>
<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: green;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 1.8vw;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body style="background-image: url(https://metro.co.uk/wp-content/uploads/2016/09/167447202.jpg?quality=80&strip=all); background-position: center; background-repeat: no-repeat; background-size: cover;
">

    

<div style="text-align:center; height: 90%; width: 35%; float:right; background: rgba(0, 0, 0, 0.3);  margin: 40px; padding: 40px">

    <img src="https://i.ibb.co/KxGP7pT/Word-Art-3.png" class="text-center" style="height: 25vw; width: 25vw text-align:center;">

    <div style="margin-top: 100px; ">
        <div style="center">
            <button class="button" onClick="document.location.href = '/shop'">
                Look for Pets
            </button>
        </div>
        <div style="center">
            <button class="button" onClick="document.location.href = '/addItem'">
                Find a home
            </button>
        </div>
    </div>

</div>

</body>
</html>

