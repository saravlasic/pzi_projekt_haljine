<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public"></base>
    @include('admin.css')

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

        label {
            display: inline-block;
            width: 100px; /* Prilagodite željenu širinu */
            margin-bottom: 5px; /* Smanjite razmak između labela */
        }

        .card-container {
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow-x: auto;
            background-color: white; /* Bijela pozadina iza kartice */
        }

        .card-header {
            background-color: #343a40;
            color: white;
            padding: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            padding: 10px;
            margin-bottom: 10px; /* Smanjite razmak između grupa */
            margin-top:10px;
        }

        .form-group img {
            display: block;
            margin-bottom: 10px;
        }

        .form-group label {
            color: white; /* Bijela boja teksta */
            width: 150px; /* Prilagodite željenu širinu labela */
            display: inline-block;
        }

        .form-group input {
            color: black; /* Crna boja teksta */
            width: calc(100% - 160px); /* Prilagodite željenu širinu polja za unos */
            padding: 10px;
            box-sizing: border-box;
        }

        .form-group input[type="file"] {
            display: inline-block;
            width: calc(35% - 5px);
        }

        .form-group input[type="submit"] {
            width: calc(20% - 5px);
            margin-top: 5px;
            
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

            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        Uredi proizvod
                    </div>
                    <div class="card-body">
                        <form action="{{ url('updateproduct', $data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf 

                            <div class="form-group">
                                <label for="title">Naziv:</label>
                                <input type="text" id="title" name="title" value="{{ $data->title }}" required>
                            </div>

                            <div class="form-group">
                                <label for="price">Cijena:</label>
                                <input type="text" id="price" name="price" value="{{ $data->price }}" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Opis:</label>
                                <input type="text" id="description" name="description" value="{{ $data->description }}" required>
                            </div>

                            <div class="form-group">
                                <label for="oldImage">Stara slika:</label>
                                <img height="80" width="80" src="/productimage/{{ $data->image }}" alt="{{ $data->title }}">
                            </div>

                            <div class="form-group">
                                <label for="newImage">Odaberi novu sliku:</label>
                                <input type="file" id="newImage" name="file">
                            </div>

                            <div class="form-group">
                                <label></label> <!-- prazna oznaka kako biste dodali prostor između labela -->
                                <input class="btn btn-success" type="submit" name="Uredi" value="Uredi">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.script')
</body>
</html>
