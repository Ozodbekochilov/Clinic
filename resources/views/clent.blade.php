<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clent</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
    <style>


        #input
        {
            width:300px;
            height:40px;
            border-radius:10px;
        }

        #input1
        {
            width:300px;
            height:40px;
            border-radius:10px;
        }

        select
        {
            width:300px;
            height:40px;
            border-radius:10px;
        }


    </style>
<body>
    <div class="container">

        <br>
        <form action="/save_clent" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 style="text-align: center;">Clent</h1>
            <label for="">Name</label>
            <br>
            <select name="name" id="">
                @foreach ($car as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            <br>
            <br>
            <label for="">Color</label>
            <br>
            <input id="input1" type="text" name="color" >    
            <br>
            <br>
            <label for="">Price</label>
            <br>
            <input id="input1" type="number" name="price" >    
            <br>
            <br>
            <button type="submit" class="btn btn-success">BUY</button>
        </form>
        
        <br>
        <br>
        <table class="table table-hover" style="text-align: .center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clent as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->get_clent->name }}</td>
                    <td>{{ $item->color }}</td>
                    <td>{{ $item->price }}</td>
                    <td>
                        <a class="btn btn-danger" href="/delete_clent/{{ $item->id }}">Delete</a>
                        <a class="btn btn-primary" href="/edit_clent/{{ $item->id }}">Edit</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        
        
        
    </div>
    </body>
    
    </html>
    