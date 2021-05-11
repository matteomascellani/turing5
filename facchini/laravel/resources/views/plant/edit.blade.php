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
                <h3>Edit a Plant</h3>
            </div>
            </br> </br> </br>
        </div>
        <div class="col-12 col-lg-8 mx-lg-auto">
            <form method="put" action="/plants/{{$item->id}}">
                @csrf
                @method('PUT')

                <div class="col">
                    <div class="mb-3">
                        <label for="name" class="col-form-label col-form-label-lg">Name</label>
                        <input type="text" name="name" class="form-control form-control-lg" value="{{ $item->name }}" />
                    </div>
                    <div class="mb-3">
                        <label for="sowing_month" class="col-form-label col-form-label-lg">Sowing Month</label>
                        <input type="text" class="form-control form-control-lg" name="sowing_month" value="{{ $item->sowing_month }}" />
                    </div>
                    <div class="mb-3">
                        <label for="blooming_month" class="col-form-label col-form-label-lg">Blooming Month</label>
                        <input type="text" class="form-control form-control-lg" name="blooming_month" value="{{ $item->blooming_month }}" />
                    </div>
                    <div class="mb-3">
                        <label for="height" class="col-form-label col-form-label-lg">Height</label>
                        <input type="text" class="form-control form-control-lg" name="height" value="{{ $item->height }}" />
                    </div>
                    <div class="mb-3">
                        <label for="type_of_plant" class="col-form-label col-form-label-lg">Type of Plant</label>
                        <input type="text" class="form-control form-control-lg" name="type_of_plant" value="{{ $item->type_of_plant}}" />
                    </div>
                </div>
                <br />
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-4 mb-2 mb-lg-0">
                        <button type="submit" value=" Save " title="save the changes" class="btn btn-lg btn-success d-block w-100"> SAVE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br /> <br /> <br />
    <a href="/plants" class="btn btn-lg btn-primary">Go Back</a>
</body>

</html>