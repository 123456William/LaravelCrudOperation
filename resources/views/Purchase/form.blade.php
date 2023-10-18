<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Form</title>
</head> -->
@include('header')

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="mt-3">
                    <a href="{{route('Purchase.index')}}" class="btn btn-success">Purchase List</a>
                </div>
                <h1>Purchase Form</h1>

                <form action="{{route('Purchase.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="Name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="Email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="Address" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="text" class="form-control" name="Contact" placeholder="Enter Contact">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="Image" placeholder="Enter Image">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    @include('footer')
    <!-- </body>
</html> -->