<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> -->
<!-- @include('header')

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="{{route('Product.index')}}" class="btn btn-success">Product Details</a>

                <form action="{{route('Product.store')}}" method="POST">
                    @csrf


                    <div class="mt-3">
                        <div class="form group">
                            <label>Name</label>
                            <input type="text" class="form control" placeholder="Name" name="Name">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="form group">
                            <label>Quantity</label>
                            <input type="text" class="form control" placeholder="Quantity" name="Quantity">
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="form group">
                            <label>Price</label>
                            <input type="text" class="form control" placeholder="Price" name="Price">
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="form group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    @include('footer')
    <!-- </body>

</html> -->


@include('header')


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="mt-3">
                <a href="{{route('Product.index')}}" class="btn btn-success">Product List</a>
            </div>
            <h1>Product Details</h1>

            <!-- For Submit -->
            @if($message = Session::get('submit'))
            <div class="alert alert-danger">
                <p>{{$message}}</p>
            </div>
            @endif

            <form action="{{route('Product.store')}}" method="POST" id="">
                @csrf


                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control " id="name" name="Name">
                    <span id="error"></span>
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="text" class="form-control " id="quantity" name="Quantity">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" id="price" name="Price">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </div>
    </div>
</div>

@include('footer')