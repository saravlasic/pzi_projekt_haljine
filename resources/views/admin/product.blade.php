<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap">
    <style type="text/css">
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f0f0f0;
            color: #ffffff;
            margin: 0;
        }

        .title {
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }

        .card {
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #343a40;
            color: white;
            font-size: 24px;
            border-bottom: none;
        }

        .card-body {
            padding: 20px;
        }

        label {
            display: inline-block;
            width: 100px; /* Prilagodite prema potrebi */
            margin-bottom: 5px;
        }

        input[type="text"], input[type="file"] {
            width: calc(100% - 12px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            color: black;
        }

        input[type="submit"] {
            background-color: #2ecc71;
            color: white;
            padding: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>

    @include('admin.sidebar')
    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
            <div class="card">
                <div class="card-header">
                    Dodaj proizvod
                </div>
                <div class="card-body">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{ session()->get('message') }}
                    </div>
                    @endif

                    <form action="{{ url('uploadproduct') }}" method="post" enctype="multipart/form-data">
                        @csrf 

                        <label>Naziv</label>
                        <input type="text" name="title" placeholder="Unesite naziv proizvoda" required="">

                        <label>Cijena</label>
                        <input type="text" name="price" placeholder="Unesite cijenu proizvoda" required="">

                        <label>Opis</label>
                        <input type="text" name="description" placeholder="Unesite opis proizvoda" required="">

                        <label>Slika</label>
                        <input type="file" name="file">

                        <input type="submit" name="Dodaj" value="Dodaj">
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('admin.script')
</body>
</html>
