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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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

            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
    
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Doctor</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <input type="text" id="edit-input" class="form-control">
                        </div>
                        <div class="modal-footer" id="edit-footer">
    
                        </div>
                    </div>
    
                </div>
            </div>
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
                                <button class="btn btn-danger" type="button"
                                    onclick="delete_patient({{ $item->id }})">Delete</button>
                                <button type="button" class="btn btn-info"
                                    onclick="open_edit('{{ $item->id }}','{{ $item->name }}')" data-toggle="modal"
                                    data-target="#myModal">Edit</button>
    
                            </td>
    
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
       



    </div>
</body>
<script>
    function save_doctor() {
        var form = new FormData();
        form.append("name", document.getElementById('input1').value);
        form.append("_token", '{{ csrf_token() }}');

        var settings = {
            "url": "http://clinic.loc/save_patient",
            "method": "POST",
            "timeout": 0,
            "processData": false,
            "mimeType": "multipart/form-data",
            "contentType": false,
            "data": form
        };

        $.ajax(settings).done(function(response) {
            document.getElementById('input1').value = '';
            let data = JSON.parse(response);
            set_data(data);
        });

    }

    function set_data(data) {
        $('#tbody').html('');
        for (const i of data) {
            $('#tbody').append(`
                    <tr>
                        <td>${i.id}</td>
                        <td>${i.name}</td>
                        <td>
                            <button class="btn btn-danger" type="button"
                                onclick="delete_patient(${i.id   })">Delete</button> 
                                <button type="button" class="btn btn-info"
                                onclick="open_edit('${i.id}','${i.name}')" data-toggle="modal"
                                data-target="#myModal">Edit</button>
                        </td>

                    </tr>

            `);

        }
    }

    function delete_patient(id) {
        var settings = {
            "url": "http://clinic.loc/delete_patient/" + id,
            "method": "GET",
            "timeout": 0,
        };

        $.ajax(settings).done(function(response) {
            set_data(response);
        });
    }


    function open_edit(id, name) {
        $('#edit-input').val(name);
        $('#edit-footer').html(`

        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline-success" data-dismiss="modal" onclick="save_edit(${id})">Save</button>

        `);

    }

    function save_edit(id) {
        var form = new FormData();
        form.append("name", document.getElementById('edit-input').value);
        form.append("_token", '{{ csrf_token() }}');

        var settings = {
            "url": "http://clinic.loc/save_edit_patient/" + id,
            "method": "POST",
            "timeout": 0,
            "processData": false,
            "mimeType": "multipart/form-data",
            "contentType": false,
            "data": form
        };

        $.ajax(settings).done(function(response) {
            let parsed = JSON.parse(response);
            set_data(parsed);
        });
    }
</script>
</html>
