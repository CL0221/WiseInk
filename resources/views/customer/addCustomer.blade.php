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
    <title>Add Customer</title>
</head>
<body>
    <div class="container">
        <h1>Add Customer</h1>
        <div>
            <a href="{{ url('customers') }}" class="btn btn-primary">Back</a>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ url('add-cus') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-3">
                        <label for="customer_name" class="form-label">Customer Name: </label>
                        <input type="text" class="form-control" id="customer_name" placeholder="xxx" name="customer_name">
                    </div>
                    <div class="col-md-3">
                        <label for="customer_address" class="form-label">Customer Address: </label>
                        <input type="textarea" class="form-control" id="customer_address" placeholder="xxx" name="customer_address">
                    </div>
                    <div class="col-md-3">
                        <label for="customer_number" class="form-label">No.Phone: </label>
                        <input type="text" class="form-control" id="customer_number" placeholder="xxx" name="customer_number">
                    </div>
                    <div class="col-md-6">
                        <label for="model" class="form-label">Model: </label>
                        <select name="model" id="model" class="form-select">
                            <option value="selected" selected disabled>Selected</option>
                            @foreach ($ink as $item)
                            <option value="{{ $item->ink_model }}">{{ $item->ink_model }}</option>
                            @endforeach
                        </select>
                        <input type="number" class="form-control" name="quantity" id="quantity">
                    </div>
                    <div class="col-md-3">
                        <label for="status" class="form-label">Status: </label>
                        <input type="text" class="form-control" id="status" placeholder="xxx" name="status">
                    </div>
                    <div class="col-12">
                        <label for="remark" class="form-label">Remark: </label>
                        <input type="text" class="form-control" id="remark" placeholder="xxx" name="remark">
                    </div>
                </div>
                <div>
                    <button type="submit" name="customers" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
