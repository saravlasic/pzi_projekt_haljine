<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f0f0f0;
            color: #ffffff;
            margin: 0;
        }
        .table-wrapper {
            height: 83vh;
            overflow-y: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4); 
            margin-top: 20px;
            position: relative;
            background-color: #f0f0f0;
        }

        .product-image {
            max-width: 100%;
            max-height: 100%;
            width: 100px;
            height: 120px;
            object-fit: cover;
            border-radius: 0;
            display: block;
            margin: 0 auto;
        }

        .table-wrapper {
            height: 83vh;
            overflow-y: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            position: relative;
            background-color: #f0f0f0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
            color: black;
        }

        th {
            background-color: #3498db;
            color: white;
            position: sticky;
            top: 0;
            z-index: 1;
        }

        tbody {
            max-height: 300px; 
            overflow-y: auto; 
        }

        tr:nth-child(even) {
            background-color: #e0e0e0;
        }

        tr:hover {
            background-color: #c0c0c0;
        }
    </style>
</head>

<body>
    @include('admin.sidebar')
    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session()->get('message') }}
            </div>
            @endif

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Naziv</th>
                            <th>Cijena</th>
                            <th>Opis</th>
                            <th>Slika</th>
                            <th>Uredi</th>
                            <th>Izbriši</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $product)
                        <tr>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->description }}</td>
                            <td><img class="product-image" src="/productimage/{{ $product->image }}" alt="{{ $product->title }}"></td>
                            <td>
                                <a class="btn btn-primary" href="{{ url('updateview', $product->id) }}">Uredi</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" onclick="return confirm('Jeste li sigurni?')" href="{{ url('deleteproduct', $product->id) }}">Izbriši</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('admin.script')
</body>

</html>
