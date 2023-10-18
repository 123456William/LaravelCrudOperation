<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head> -->
@include('header')

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 style="color: green;"> Registration Form</h1>

                <!-- For Submit -->
                @if($message = Session::get('success'))
                <div class="alert alert-danger">
                    <p>{{$message}}</p>
                </div>
                @endif


                <form action="{{route('regStore')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control " id="name" name="Name">
                        <span id="error"></span>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" id="Email" name="Email">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" id="Address" name="Address">
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="text" class="form-control" id="Contact" name="Contact">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('footer')