<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sinf</title>
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
        <form action="/edit_save_clent/{{ $clent->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 style="text-align: center;">Edit_Clent</h1>
            <br>
            <br>
            <label for="">Color</label>
            <br>
            <input id="input1" type="text" name="color" value="{{ $clent->color }}">    
            <br>
            <br>
            <label for="">Price</label>
            <br>
            <input id="input1" type="number" name="price" value="{{ $clent->price }}">    
            <br>
            <br>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
        
    
        
        
        
    </div>
    </body>
    
    </html>
    