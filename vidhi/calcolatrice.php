<?php

class Calcolatrice{

    public $risultato;

    public function inizio($integer){

        $this->risultato=$integer;

    }
    public function somma($integer){
        $this->risultato += $integer;

    }
    public function sottrazione($integer){
        $this->risultato -= $integer;
    }
    public function moltiplicazione($integer){
        $this->risultato *= $integer;
    }
    public function divisione($integer){
        $this->risultato /= $integer;
    }
    public function risultato(){
        return $this->risultato;
    }
}
$calcolatrice = new Calcolatrice;
$calcolatrice->inizio(8);
$calcolatrice->somma(7);
$calcolatrice->moltiplicazione(8);
$calcolatrice->divisione(8);
$calcolatrice->sottrazione(8);
$risultato=$calcolatrice->risultato();
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
    <h3>CALCOLATRICE</h3>
    <div class="row">
        <div class="offset-3 col-6">
            <table class="table table-bordered text-centered">
                   <tr>
                      <td>9</td>
                      <td>8</td>
                      <td>7</td>
                      </tr>
                   <tr>
                      <td>6</td>
                      <td>5</td>
                      <td>4</td>
                   </tr>
                   <tr>
                      <td>1</td>
                      <td>2</td>
                      <td>3</td>
                   </tr>
            </table>
        </div>
    


        <div class="offset-3 col-6">
            <table class="table table-bordered text-centered">
                  <tr>
                     <td>+</td>
                     <td>-</td>
                     <td>X</td>
                     <td>/</td>
                   </tr>
     </div>
    <div class="row">
      <div class="col-4 offset-4">
           <input class="form-control" type="text" id="risultato" value="<?php echo $risultato ?? ''; ?>" />
      </div>
    </div>   
</div>

</html>
