<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcolatrice</title>
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>
        body {
            color: #1a1a1a;
            background-color: #fefefe;
        }
    </style>

</head>

<body>

    <div class="container border border-primary p-5">

        <div class="row border border-primary text-center">
            <h1>Calcolatrice</h1>
            <h3>La mia calcolatrice artiginale.</h3>
        </div>

        <div class="row border border-primary justify-content-center mt-3">

            <div class="col-6 border border-primary p-4">

                <div class="row border border-primary justify-content-center">
                    <div class="col-12">
                        <label for="input-display" class="col-form-label col-form-label-lg">Display</label>
                        <input type="text" class="form-control form-control-lg text-end" id="input-display" value="0" placeholder="0" readonly>
                    </div>
                </div>

                <div class="row border border-primary mt-4">
                    <div class="col-3">
                        <button type="button" class="col-12 btn btn-primary btn-lg"><strong><span class="fs-3">&#55;</span></strong></button>
                    </div>
                    <div class="col-3">
                        <button type="button" class="col-12 btn btn-primary btn-lg"><strong><span class="fs-3">&#56;</span></strong></button>
                    </div>
                    <div class="col-3">
                        <button type="button" class="col-12 btn btn-primary btn-lg"><strong><span class="fs-3">&#57;</span></strong></button>
                    </div>
                    <div class="col-3">
                        <button type="button" class="col-12 btn btn-primary btn-lg"><strong><span class="fs-3">&#43;</span></strong></button>
                    </div>
                </div>

                <div class="row border border-primary mt-1">
                    <div class="col-3">
                        <button type="button" class="col-12 btn btn-primary btn-lg"><strong><span class="fs-3">&#52;</span></strong></button>
                    </div>
                    <div class="col-3">
                        <button type="button" class="col-12 btn btn-primary btn-lg"><strong><span class="fs-3">&#53;</span></strong></button>
                    </div>
                    <div class="col-3">
                        <button type="button" class="col-12 btn btn-primary btn-lg"><strong><span class="fs-3">&#54;</span></strong></button>
                    </div>
                    <div class="col-3">
                        <button type="button" class="col-12 btn btn-primary btn-lg"><strong><span class="fs-3">&#45;</span></strong></button>
                    </div>
                </div>

                <div class="row border border-primary mt-1">
                    <div class="col-3">
                        <button type="button" class="col-12 btn btn-primary btn-lg"><strong><span class="fs-3">&#49;</span></strong></button>
                    </div>
                    <div class="col-3">
                        <button type="button" class="col-12 btn btn-primary btn-lg"><strong><span class="fs-3">&#50;</span></strong></button>
                    </div>
                    <div class="col-3">
                        <button type="button" class="col-12 btn btn-primary btn-lg"><strong><span class="fs-3">&#51;</span></strong></button>
                    </div>
                    <div class="col-3">
                        <button type="button" class="col-12 btn btn-primary btn-lg"><strong><span class="fs-3">&#120;</span></strong></button>
                    </div>
                </div>

                <div class="row border border-primary mt-1">
                    <div class="col-3">
                        <button type="button" class="col-12 btn btn-primary btn-lg"><strong><span class="fs-3">&#46;</span></strong></button>
                    </div>
                    <div class="col-3">
                        <button type="button" class="col-12 btn btn-primary btn-lg"><strong><span class="fs-3">&#48;</span></strong></button>
                    </div>
                    <div class="col-3">
                        <button type="button" class="col-12 btn btn-primary btn-lg"><strong><span class="fs-3">&#61;</span></strong></button>
                    </div>
                    <div class="col-3">
                        <button type="button" class="col-12 btn btn-primary btn-lg"><strong><span class="fs-3">&#247;</span></strong></button>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>