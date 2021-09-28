<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">>
</head>

<body>

    <div class="container p-4">
        <div class="row ">
            <div class="col-12 col-lg-8 mx-auto">
                <h1>Add a new Plant</h1>
            </div>
            </br> </br> </br>
        </div>
        <div class="col-12 col-lg-8 mx-lg-auto">
            <form method="post" action="/plants">
                @csrf

                <div class="col">
                    <div class="mb-3">
                        <label for="input-name" class="col-form-label col-form-label-lg">Name</label>
                        <input type="text" name="input-name" class="form-control form-control-lg" value="" />

                    </div>
                    </br>
                    <div class="mb-3">
                        <label for="input-sowing" class="col-form-label col-form-label-lg">Sowing Month </label>
                        <input type="text" name="input-sowing" class="form-control form-control-lg" value="" />
                    </div>
                    </br>
                    <div class="mb-3">
                        <label for="input-blooming" class="col-form-label col-form-label-lg">Blooming Month </label>
                        <input type="text" class="form-control form-control-lg" name="input-blooming" value="" />
                    </div>
                    </br>
                    <div class="mb-3">
                        <label class="col-form-label col-form-label-lg">Height</label>
                        <input type="text" class="form-control form-control-lg" name="input-height" value="" />
                    </div>
                    </br>
                    <div class="mb-3">
                        <label class="col-form-label col-form-label-lg">Type of Plant </label>
                        <input type="text" class="form-control form-control-lg" name="input-type" value="" />

                    </div>
                </div>

                <br />

                <div class="row justify-content-center">
                    <div class="col-12 col-lg-4 mb-2 mb-lg-0">
                        <button type="submit" value=" Save " title="save the new plant" class="btn btn-lg btn-success d-block w-100"> SAVE</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <br /> <br /> <br />
    <a href="/plants" class="btn btn-lg btn-primary">Go Back</a>
</body>

</html>