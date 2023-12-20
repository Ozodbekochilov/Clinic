<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patients</title>
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

    select {
        width: 300px;
        height: 40px;
        border-radius: 10px;
        color: black:
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
        <h1 style="text-align: center">Patients</h1>
        <form action="/save_patient" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">Name</label>
            <br>
            <input id="input1" type="text" name="name">
            <br>
            <br>
            <label for="">Doctor</label>
            <br>
            <select id="" name="doctor_id">
                @foreach ($doctor as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            <br>
            <br>
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-info"><a href="http://clinic.loc/doctor">Doctor</a></button>
        </form>

        <br>
        <br>
        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Patient Table</button>
        <div id="demo" class="collapse">
            <table class="table table-hover" style="text-align: center">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Doctor_id</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($patient as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->doctor_id}}</td>
                            <td>
                                <a class="btn btn-danger" href="/delete_patient/{{ $item->id }}">Delete</a>
                                <a class="btn btn-primary" href="/edit_patient/{{ $item->id }}">Edit</a>
                            </td>
    
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
       



    </div>
</body>

</html>
