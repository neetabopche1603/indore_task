<!doctype html>
<html lang="en">
  <head>
    <title>
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body><div class="container w-50 mt-4">
    <!-- Notification -->
 <div class="row mt-2">
      <div class="col-md-12">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show alert-custom" role="alert">
          <span class="font-weight-bold">{!! session()->get('success') !!}</span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @elseif (session()->has('faild'))
        <div class="alert alert-danger alert-dismissible fade show alert-custom" role="alert">
          <span class="font-weight-bold">{!! session()->get('faild') !!}</span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
      </div>
    </div>
    <!-- End Notification -->

<div class="card">
  <div class="card-header">
    <h1 class="text-center"><i>Login</i></h1>
    <a href="{{route('register')}}" class="float-right">Register</a>
  </div>
  <div class="card-body">
    <form action="{{route('login.post')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <label for=""><b>username</b></label>
            <input type="text" name="email" id="" class="form-control" placeholder="Enter Username" aria-describedby="helpId">
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <label for=""><b>Password</b></label>
            <input type="text" name="password" id="" class="form-control" placeholder="Enter Password" aria-describedby="helpId">
          </div>
        </div>
        <div class="col-2">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </div>
    </form>
  </div>
</div>


  </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>