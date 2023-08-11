<!DOCTYPE html>

<html>
    <head>
        <title>Manage Product</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
        <style>
            /* Global styles */
            body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            /* Container styles */
            .content-container {
                width: 80%; /* Adjust the width as needed */
                height: 100%;
                padding: 20px;
                background-color: #f8f9fa; 
                border: 1px solid #dee2e6;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            /* Form styles */
            form {
                margin-top: 20px;
            }

            .form-group {
                margin-bottom: 20px;
            }

            label {
                font-weight: bold;
            }

            input[type="text"],
            input[type="number"],
            select,
            textarea {
                width: 100%;
                height: 100%;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            input[type="file"] {
                padding: 5px;
            }

            textarea {
                resize: vertical;
            }

            .btn-primary {
                background-color: #007bff;
                color: #fff;
                border: none;
                border-radius: 5px;
                padding: 10px 20px;
                cursor: pointer;
            }

            .btn-primary:hover {
                background-color: #0056b3;
            }

            .alert-danger {
                background-color: #f8d7da;
                color: #721c24;
                border: 1px solid #f5c6cb;
                border-radius: 5px;
                padding: 8px;
                margin-top: 10px;
            }

            .alert-danger ul {
                margin: 0;
                padding-left: 20px;
            }

            /* Responsive styles */
            @media screen and (max-width: 768px) {
                input[type="text"],
                input[type="number"],
                select,
                textarea {
                    width: 100%;
                }
            }
        </style>
    </head>

    <body>
        <div class="content-container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Edit Product</h2>
                    </div>

                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                    </div>
                </div>
            </div>
    
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    
            <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $product->name }}">
                        </div>
                    </div>
        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Price:</strong>
                            <input type="number" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}">                    
                        </div>
                    </div>
                        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Category:</strong>
                            <select name="category" class="form-control">                            
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Image:</strong>
                                    <img src="{{ asset('image/product/'.$product->image) }}" alt="" border=3 height=150 width=200>
                                </div>
                            </div>
                                
                            <input type="file" class="form-control" placeholder="Image" value="" name="imageProduct" />
                        </div>
                    </div>
        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $product->description }}</textarea>
                        </div>
                    </div>
                            
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>