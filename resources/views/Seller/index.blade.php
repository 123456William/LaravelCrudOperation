<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> -->
@include('header')

<body>
    <div class="card border-0 shadow-lg">
        <div class="card-body">
            <div class="col-md-9">

                @if($message = Session::get('updated'))
                <div class="alert alert-danger">
                    <p>{{$message}}</p>
                </div>
                @endif

                <!-- For Delete -->
                @if($message = Session::get('deleted'))
                <div class="alert alert-danger">
                    <p>{{$message}}</p>
                </div>
                @endif



                <table class="table table-striped">
                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    <?php $i = 1; ?>
                    @foreach($sellers as $seller)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$seller->Name}}</td>
                        <td>{{$seller->Email}}</td>
                        <td>{{$seller->Address}}</td>
                        <td>{{$seller->Contact}}</td>
                        <td><img src="/Image/{{$seller->Image}}" height="50" width="50" alt=""></td>
                        <td>
                          

                            <form action="{{route('Seller.destroy',$seller->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                  <a href="{{route('Seller.edit',$seller->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                <button type="delete" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @include('footer')
    <!-- </body>
</html> -->