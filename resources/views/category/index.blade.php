<!DOCTYPE html>

<html>
    <head>
        <title>Manage Category</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
        
</head>

<body>
    <div id="wrapper">
        @include('product.sidebar')

        <div id="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Category Management</h2>
                        </div>

                        <div class="pull-right">
                            <a class="btn btn-success" href="{{ route('category.create') }}"> Create New Category</a>
                        </div>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th width="300px">Name</th>
                        <th width="400px">Details</th>
                        <th width="400px">Action</th>
                    </tr>
                    
                    @foreach($categories as $key => $category)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                <form action="{{ route('category.destroy',$category->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('category.show',$category->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('category.edit',$category->id) }}">Edit</a>
                                    <a class="btn btn-primary" href="{{ route('category.destroy',$category->id) }}">Delete</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
</body>