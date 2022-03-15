<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excel file</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-4 mx-auto mt-5">
                <div class="card">

                    <div class="card-header mb-2">
                        Import Excel Files
                    </div>

                    <div class="card-body">
                        <div class="form-group mt-3 ">

                            <form action="" method="post" enctype="multipart/form-data">

                                <div class="form-group mb-3">
                                    <input type="file" name="document" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">Import</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
