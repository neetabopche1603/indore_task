@if (!session()->get('user_name'))
<script>
    window.location = "{{route('login')}}";
</script>
@endif
<!doctype html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h1>Hi <span class="text-primary text-center">{{Auth()->user()->name}}</span> Dashboard</h1>


        <div class="row">
            <div class="col-md-4 col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="text-center">Total Earning</h4>
                        <span class="text-warning">&#8377; {{$earning->amount}}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="btn">
            <a href="{{url('logout')}}" class="btn btn-danger">Logout</a>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>