<!-- @include('header')

<div class="card border-0 shadow-lg">
    <div class="card-body">
        <div class="col-md-9">
            <table class="table table-striped ">
                <tr>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Action</th>
                </tr>
                <?php $i = 1; ?>
                @foreach($records as $record)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$record->Name}}</td>
                    <td>{{$record->Email}}</td>
                    <td>{{$record->Address}}</td>
                    <td>{{$record->Contact}}</td>
                    <td>
                        <a href="{{route('edit',$record->id)}}" class="btn btn-primary btn-sm">Edit</a>

                        <form action="{{route('delete',$record->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="delete" class="btn btn-danger btn-sm">Delete</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@include('footer') -->

@include('header')
<div class="container">
    <div class="card-body">
        <div class="col-md-9">

            <!-- For Updated -->
            @if($message = Session::get('update'))
            <p>{{$message}}</p>
            @endif

            <!-- For Delete -->
            @if($message = Session::get('delete'))
            <div class="alert alert-danger">
                <p>{{$message}}</p>
            </div>
            @endif



            <table class="table table-striped   " border="5">
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Action</th>
                </tr>
                <?php $i = 1 ?>
                <tr>
                    @foreach($records as $record)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$record->Name}}</td>
                    <td>{{$record->Email}}</td>
                    <td>{{$record->Address}}</td>
                    <td>{{$record->Contact}}</td>
                    <td>
                      

                        <form action="{{route('delete',$record->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                              <a href="{{route('edit',$record->id)}}" class="btn btn-primary btn-sm">Edit</a>
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