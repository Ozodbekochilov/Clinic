<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit_doctors</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<style>
    #input1 {
        width: 300px;
        height: 40px;
        border-radius: 10px;
    }
    a
    {
        color:white;
        text-decoration:none;
    }

    a:hover
    {
        color:white;
        text-decoration:none;
    }
</style>

<body>
    <div class="container">
        <h1 style="text-align: center">Edit_doctors</h1>
        <form action="/save_edit_doctor/{{ $doctor->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">Name</label>
            <br>
            <input id="input1" type="text" name="name" value="{{ $doctor->name }}">
            <br>
            <br>
            <button type="submit" class="btn btn-success">Save</button>

        </form>


    </div>
</body>

</html>
