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
    <title>Update Ink</title>
</head>
<body>
    <div class="container">
        <h1>Update Ink</h1>
        <div>
            <a href="{{ url('inks') }}" class="btn btn-primary">Back</a>
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
            <form action="{{ url('update-ink/'.$ink->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-3">
                    <div class="col-mb-3">
                        <label for="ink_img" class="form-label">Profile Image</label>
                        <input class="form-control" type="file" id="ink_img" name="ink_img" value="{{ $ink->ink_img }}">
                        <img src="{{ asset('public/image/'.$ink->ink_img) }}" width="70px" alt="">
                    </div>
                    <div class="col-mb-3">
                        <label for="ink_model" class="form-label">Model</label>
                        <input type="text" class="form-control" id="ink_model" placeholder="" name="ink_model" value="{{ $ink->ink_model }}">
                    </div>
                    <div class="col-mb-3">
                        <label for="ink_price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="ink_price" placeholder="RM 0.00" name="ink_price" value="{{ $ink->ink_price }}">
                    </div>
                    <div class="col-mb-3">
                        <label for="ink_commision" class="form-label">Commision</label>
                        <input type="text" class="form-control" id="ink_commision" placeholder="RM 0.00" name="ink_commision" value="{{ $ink->ink_commision }}">
                    </div>
                </div>
                <div class="g-3">
                    <button type="submit" name="inks" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>