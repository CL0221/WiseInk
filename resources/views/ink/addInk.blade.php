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
    <title>Add Ink</title>
</head>
<body>
    <div class="container">
        <h1>Add Ink</h1>
        <div>
            <form action="{{ route('addInk.add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-mb-3">
                        <label for="ink_img" class="form-label">Profile Image</label>
                        <input class="form-control" type="file" id="ink_img">
                    </div>
                    <div class="col-mb-3">
                        <label for="ink_model" class="form-label">Model</label>
                        <input type="text" class="form-control" id="ink_model" placeholder="">
                    </div>
                    <div class="col-mb-3">
                        <label for="ink_price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="ink_price" placeholder="RM 0.00">
                    </div>
                    <div class="col-mb-3">
                        <label for="ink_commision" class="form-label">Commision</label>
                        <input type="text" class="form-control" id="ink_model" placeholder="RM 0.00">
                    </div>
                </div>
                <div class="g-3">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>