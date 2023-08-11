<!DOCTYPE html>

<html>
    <head>
        <title>Manage Product</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
        
</head>
<body>
    <div id="wrapper">
        @include('product.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Product Management</h2>
                            </div>

                            <div class="pull-right">
                                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
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
                            <th>Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Details</th>
                            <th width="500px">Action</th>
                        </tr>

                        @foreach($product->reverse() as $key => $product)

                        <tr>

                            <td>{{$key+1}}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td><img src="{{ asset('image/product/'.$product->image) }}" alt="" border=3
                                    height=100 width=100></td>
                            <td>{{ $product->description }}</td>
                            <td>
                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                                    <a class="btn btn-primary" href="{{ route('products.destroy',$product->id) }}">Delete</a>

                                </form>
                            </td>
                        </tr>

                        @endforeach

                    </table>
                </div>
            </div>
            @include('layout.footer')


            @include('layout.js')
        </div>
    </div>
</body>
</html>