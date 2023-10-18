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
                <!-- For Update -->
                @if($message = Session::get('updated'))
                <div class="btn btn-danger">
                    <p>{{$message}}</p>
                </div>
                @endif

                <!-- For Delete -->
                @if($message = Session::get('deleted'))
                <div class="btn btn-danger">
                    <p>{{$message}}</p>
                </div>
                @endif

                
                <table class="table table-striped ">
                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    <?php $i = 1; ?>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$product->Name}}</td>
                        <td>{{$product->Quantity}}</td>
                        <td>{{$product->Price}}</td>
                        <td>
                           

                            <form action="{{route('Product.destroy',$product->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                 <a href="{{route('Product.edit',$product->id)}}" class="btn btn-primary btn-sm">Edit</a>
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