@include('header')


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Product Form</h1>

            <form action="{{route('Product.update',$product->id)}}" method="POST">
                @csrf
                @method('PUT')


                <div class="form-group">
                    <label>Name</label>
                    <input type="text" value="{{$product->Name}}" class="form-control " id="Name" name="Name">
                    <span id="error"></span>
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="text" value="{{$product->Quantity}}" class="form-control " id="Quantity" name="Quantity">
                    </di~v>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" value="{{$product->Price}}" class="form-control" id="Price" name="Price">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
        </div>
    </div>

    @include('footer')