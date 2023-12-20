<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Avto-Salon</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container">
        <h1 style="text-align:center;">Avto-Salon</h1>

        <form action="/save_car" method="POST">
            @csrf
                <div class="col-sm-4">
                    <label for="">Name</label>
                    <br>
                    <input type="text" name="name" >                  
                    <button class="btn btn-primary" type="submit">Ok</button>
                </div>   
            </div>
           
            </form>

            <br>
            <br>
            <br>
            <div class="container">

                <table class="table table-hover" style="text-align: center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($car as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <a class="btn btn-danger" href="/delete_car/{{ $item->id }}">Delete</a>
                                <a class="btn btn-primary" href="/edit_car/{{ $item->id }}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        
            </div>
        
                
        
    </div>
    </body>
    
    </html>
    