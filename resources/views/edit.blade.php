<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head> -->

@include('header')

<body>

    <div class="container">
        <div class="col-md-6">
            <h1>Registration Form</h1>
            <form action="{{route('update',$record->id)}}" method="POST">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="Name">Name</label>
                    <input type="text" value="{{$record->Name}}" class=" form-control" id="Name" placeholder="Enter Name" name="Name">
                </div>

                <div class="mb-3">
                    <label for="Email">Email</label>
                    <input type="text" value="{{$record->Email}}" class="form-control" id="Email" placeholder="Enter Email" name="Email">
                </div>
                <div class="mb-3">
                    <label for="Address">Address</label>
                    <input type="text" value="{{$record->Address}}" class="form-control" id="Address" placeholder="Enter Address" name="Address">
                </div>
                <div class="mb-3">
                    <label for="Contact">Contact</label>
                    <input type="text" value="{{$record->Contact}}" class="form-control" id="Contact" placeholder="Enter Contact" name="Contact">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    </div>

    @include('footer')

    <!-- </body>

</html> -->