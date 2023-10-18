@include('header')


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Seller Form</h1>

    
            <!-- For Submit -->
            @if($message = Session::get('submit'))
            <div class="alert alert-danger">
                <p>{{$message}}</p>
            </div>
            @endif

            <form action="{{route('Seller.update',$seller->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <div class="form-group">
                    <label>Name</label>
                    <input type="text" value="{{$seller->Name}}" class="form-control " id="Name" name="Name">
                    <span id="error"></span>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" value="{{$seller->Email}}" class="form-control " id="Email" name="Email">
                    </di~v>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" value="{{$seller->Address}}" class="form-control" id="Address" name="Address">
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="text" value="{{$seller->Contact}}" class="form-control" id="Contact" name="Contact">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <img src="/Image/{{$seller->Image}}" height="100" width="100" alt="">
                        <input type="file" name="Image" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
        </div>
    </div>

    @include('footer')