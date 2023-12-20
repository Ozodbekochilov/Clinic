<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit_Car</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container">
        <h1>Edit_Car</h1>

        <form action="/edit_save_car" method="POST">
            @csrf
                <div class="col-sm-4">
                    <label for="">Name</label>
                    <br>
                    <input type="text" name="name" >                  
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>   
                
            </form>
        </div>

        
                
        
    </body>
    
    </html>
    