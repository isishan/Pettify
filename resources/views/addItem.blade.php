@extends('navbar')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><nav class="navbar navbar-default">

    <body>
      

<div class="container" style="margin-top: 40px; ">
<form method="POST" action="/addItem">
{{ csrf_field()  }}
    <div class="form-group">
    <input name="itemName" placeholder="Give a name"  class="form-control" style="width: 800px">
    </div>
    <div>
    <input name="itemType" placeholder="Is it a Dog or a Cat " class="form-control">
    <br/>
    <div>
    <input name="itemImage" placeholder="Enter the URL of a cute pic" class="form-control">
    <br/>
    </div>
    <div>
    <input name="itemPrice" placeholder="Enter an amount if you want a reward" class="form-control">
    <br/>

    </div>
    <div>
    <input name="itemDescription" placeholder="Write something about him/her" class="form-control">
    <br/>

    </div>
    
    </div>
    <div>
        <button class="btn btn-success btn-block" style="background-color:#0F69D9" type="submit">Submit</button> 
    </div>
</form> 
</div>


@foreach($errors->all() as $error )
    <li>{{$error}}</li>
@endforeach
    </body>
</html>
@endsection