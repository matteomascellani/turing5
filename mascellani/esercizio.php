<?php


class Calcolatrice {

    function somma() {

    }

    function sottrazione() {
        
    }

    function moltiplicazione() {
        
    }

    function divisione() {
        
    }

}


?>

<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<style>



</style>
<script>

</script>
</head>

<div class="container">
    <h3>Calcolatrice</h3>
    <p>La mia calcolatrice artiginale</p>

    <div class="row">
        <div class="offset-3 col-6">
            <table class="table table-bordered text-center">
                <tr>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                </tr>
            </table>
        </div>

        <div class="offset-3 col-6">
            <table class="table table-bordered text-center">
                <tr>
                    <td>+</td>
                    <td>-</td>
                    <td>x</td>
                    <td>÷</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-4 offset-4">
            <input class="form-control" type="text" id="risultato" value="" />
        </div>
    </div>
</div>

</html>