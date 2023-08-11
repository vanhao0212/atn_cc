<style>
    body {
        margin: 0;
        padding: 0;
        background: #642B73;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #ffffff, #ffffff);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #ffffff, #ffffff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        font-family: spotify-circular,Helvetica Neue,Helvetica,Arial,Hiragino Kaku Gothic Pro,Meiryo,MS Gothic,sans-serif;
    }

    .overlayer .fa-play-circle {
        color: #fff;
        font-size: 73px;
        margin-top: 53px;
        transition: 100ms ease-in-out;
    }
    .fa-play-circle:hover {
    transform: scale(1.1);
    }

    /* Reset default margin and padding */
    body, h1, h2, h3, h4, h5, h6, p {
        margin: 0;
        padding: 0;
    }

    .cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin-top: 20px;
    }

    .card {
        position: relative;
        width: calc(100% / 2 - 20px); /* Adjust the width as needed */
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
    }

    @media (min-width: 768px) {
        .cards {
            margin-top: 120px;
        }

        .card {
            width: calc(100% / 4 - 20px); /* Adjust the width as needed */
            margin-bottom: 0;
        }
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.2);
    }

    .card img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 10px 10px 0 0;
    }

    .overlayer {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 40px;
        color: #fff;
        opacity: 0;
        transition: opacity 0.3s;
        cursor: pointer;
        background-color: rgba(0, 0, 0, 0.4);
        border-radius: 50%;
        padding: 10px;
    }

    .card:hover .overlayer {
        opacity: 1;
    }

    .title {
        padding: 10px 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .title a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
        font-size: 18px;
        transition: color 0.3s;
        margin-bottom: 10px;
    }

    .title a:hover {
        color: #f39c12;
    }

    .title button {
        background-color: #5c0616;
        border: none;
        color: #fff;
        padding: 5px 15px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .title button:hover {
        background-color: #e67e22;
    }


    
</style>

<body>
    <div class="wrapper">
        <div class="section-title">
            <h2>Product</h2>
        </div>
        
        @foreach($products->chunk(7) as $productChunk)
            <div class="cards" style="margin-top: 120px;">
                @foreach($productChunk as $product)
                    <div class="card">
                        <div class="overlayer">
                            <i class="far fa-play-circle"></i>
                        </div>
                        <img src="{{ asset('image/product/'.$product->image) }}" alt="">
                        <br>
                        <br>
                        
                        <div class="title">
                            
                                <a href="{{ route('products.show',$product->id) }}">{{ $product->name }}</a>
                                <br>
                                <a>Price : {{ $product->price }}</a>
                                 <br>   
                                <button type="button" class="btn btn-primary">Add to cart</button>    
                        </div>
                    </div>	
                @endforeach
            </div>
            
        @endforeach
    </div>