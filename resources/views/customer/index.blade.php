<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Customer</title>
</head>
<body>
    <div class="container">
        <h1>Customer Detail</h1>
        <div>
            <a href="{{ url('add-cus') }}" class="btn btn-primary">New Customer</a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>No.Phone</th>
                    <th>Model</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Remark</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->customer_name }}</td>
                        <td>{{ $item->customer_address }}</td>
                        <td>{{ $item->customer_number }}</td>
                        <td>{{ $item->model }}</td>
                        <td>{{ $item->quantity}}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->remark }}</td>
                        <td>
                            <a href="{{ url('edit-cus/'.$item->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ url('delete-cus/'.$item->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
