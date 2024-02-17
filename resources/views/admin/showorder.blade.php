<!DOCTYPE html>
<html lang="en">
  <head>
    
    @include('admin.css')

    <style>
        body {
            background-color: #f0f0f0;
            color: #2c3e50; 
            margin: 0; 
        }

        .table-wrapper {
            height: 83vh; 
            overflow-y: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            margin-top: 20px; 
            position: relative; 
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd; 
        }

        th {
            background-color: #3498db; 
            color: #fff; 
            position: sticky; 
            top: 0; 
            z-index: 1; 
        }

        tr:nth-child(even) {
            background-color: #ecf0f1;
        }

        tr:hover {
            background-color: #bdc3c7; 
        }

        .btn-success {
            background-color: #2ecc71; 
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-success:hover {
            background-color: #27ae60; 
        }
    </style>

  </head>
  <body>

        @include('admin.sidebar')
        @include('admin.navbar')
        
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <div class="table-wrapper">
                    <table>
                        <tr>
                            <th>Ime kupca</th>
                            <th>Broj</th>
                            <th>Adresa</th>
                            <th>Proizvod</th>
                            <th>Cijena</th>
                            <th>Status</th>
                            <th>Dostava</th>
                            <th>Izbriši</th>
                        </tr>
                        @foreach($order as $orders)
                        <tr>
                            <td>{{$orders->name}}</td>
                            <td>{{$orders->phone}}</td>
                            <td>{{$orders->address}}</td>
                            <td>{{$orders->product_name}}</td>
                            <td>${{$orders->price}}</td>
                            <td>{{$orders->status}}</td>
                            <td><a class="btn btn-success" href="{{url('updatestatus',$orders->id)}}">Isporučeno</a></td>
                            <td>
                                <form action="{{ route('delete.order', $orders->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="background-color: #dc3545;">Obriši</button>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

        @include('admin.script')
  </body>
 
</html>






