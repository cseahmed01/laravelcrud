<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <div class="jumbotron">
      <h3>Update User Info</h3>
      @foreach ($editusers as $user)
          
      @endforeach
      <form class="form-horizontal" action="/updateuser" method="POST" >
        <input type="hidden" name="id" value="{{ $user->id }}" >
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Name:</label>
          <div class="col-sm-6">
            <input type="text" name="name" class="form-control" id="name" value=" {{ $user->name }}">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="phone">Phone:</label>
          <div class="col-sm-6">
            <input type="text"  name="phone" class="form-control" id="phone" value="{{ $user->phone }}">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-6">
            <input type="email" name="email" class="form-control" id="email" value="{{ $user->email }}">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Address:</label>
          <div class="col-sm-6">
            <input type="text" name="address" class="form-control" id="address" value="{{ $user->address}}" >
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Description:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" name="description" id="description" value="{{ $user->description }}" >
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" class="btn btn-default">Updated User</button>
          </div>
        </div>
      </form>      

    </div>    
  </div>
</body>
</html>
