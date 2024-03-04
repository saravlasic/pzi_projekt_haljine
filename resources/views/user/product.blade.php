<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Proizvodi</h2>

                    <form action="{{url('/search')}}" method="post" class="form-inline" style="float: right; padding: 10px;">
                    @csrf

                    <input class="form-control" type="search" name="search" placeholder="Pretraži"></input>
                    <input type="submit" value="Pretraži" class="btn btn-success">

                    </form>
                </div>
            </div>

            @foreach($data as $product)
                <div class="col-md-4" style="padding:10px">
                    <div class="product-item">
                        <a href="#"><img class="product-image" src="/productimage/{{$product->image}}" alt=""></a>
                        <div class="down-content">
                            <a href="#"><h4>{{$product->title}}</h4></a>
                            <h6>${{$product->price}}</h6>
                            <p>{{$product->description}}</p>
                            
                            <form action="{{url('addcart',$product->id)}}" method="POST">
                                @csrf

                               
                                
                                <br>

                                <button type="submit" class="btn btn-custom">
                                    Dodaj u košaricu
                                    <i class="fas fa-shopping-cart"></i>
                                </button>

                            </form>

                        </div>
                    </div>
                </div>
                <br><br>
            @endforeach

            @if(method_exists($data, 'links'))

            <div class="d-flex justify-content-center">
                {!! $data->links() !!}
            </div>

            @endif

        </div>
    </div>
</div>

<style>
    .btn-custom {
        background-color: #ffffff; 
        color: #f840cd; 
        border: 2px solid #f840cd; 
    }

    .btn-custom:hover {
        background-color: #f840cd; 
        color: #ffffff; 
    }
    .product-item {
        position: relative;
        height: 100%;
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
    }

    .product-image {
        width: 100%;
        height: 200px; 
        object-fit: contain; 
        display: block;
        margin: 0 auto;
        transition: transform 0.3s ease-in-out;
    }

    .down-content {
        flex-grow: 1;
        padding: 10px;
        background-color: rgba(255, 255, 255, 0.8);
        text-align: left;
        color: #000000;
        transition: transform 0.3s ease-in-out;
    }

    .product-item:hover .product-image {
        transform: scale(1.1);
    }

    .product-item:hover .down-content {
        transform: translateY(0);
    }
</style>