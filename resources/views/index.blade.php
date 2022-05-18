<!doctype html>
<html lang="en">

<head>
    <title>Registration Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<style>
    label {
        font-weight: 700;
    }
</style>

<body>
    <div class="container mt-4 w-75">
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
                <div class="text-center">
                    <h1>Registration Form</h1>
                    <a href="{{route('login')}}" class="float-right">Login</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('register.post')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Name :</label>
                                <input type="text" name="name" id="" class="form-control" placeholder="">
                                @if($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Username :</label>
                                <input type="email" name="username" id="" class="form-control" placeholder="">
                                @if($errors->has('username'))
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Password :</label>
                                <input type="password" name="password" id="" class="form-control" placeholder="">
                                @if($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Refer By (Optional) :</label>
                                <input type="text" name="refer_by" id="" class="form-control" placeholder="">
                                @if($errors->has('refer_by'))
                                <span class="text-danger">{{ $errors->first('refer_by') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-2">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>