<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Calcolatrice</title>
    <style>

.pushed { background-color:#000!important}

</style>

<script>

$(document).ready(function() {
    
    $(document).on("click","button",function(){

        if(
            $(this).val() == "sum" ||
            $(this).val() == "sub" ||
            $(this).val() == "mol" ||
            $(this).val() == "div"
        ) {

            $("button").removeClass("pushed");
            $(this).addClass("pushed");

        } else {

            if($("button.pushed").length > 0 && $(this).val() == "act") {

                $.ajax({
                    method: "POST",
                    url: "ajax.php",
                    data: { actual: $("#risultato").val(), operator: $("button.pushed").val(), integer: $(this).val() }
                })
                .done(function( response ) {
                    $("#risultato").val(response);
                    
                });
            }

            if($("button.pushed").length > 0) {
                $("#risultato").val($(this).val());
            } else {
                $("#risultato").val($("#risultato").val() + $(this).val());
            }
            
            
            $("button").removeClass("pushed");
            

        }

    });

});

</script>
</head>

<div class="container">
    <h3>Calcolatrice</h3>
    <p>La mia calcolatrice artiginale</p>

    <div class="row">
        <div class="offset-3 col-6">
            <table class="table table-bordered text-center">
                <tr>
                    <td><button class="btn btn-primary" value="7">7</button></td>
                    <td><button class="btn btn-primary" value="8">8</button></td>
                    <td><button class="btn btn-primary" value="9">9</button></td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary" value="4">4</button></td>
                    <td><button class="btn btn-primary" value="5">5</button></td>
                    <td><button class="btn btn-primary" value="6">6</button></td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary" value="1">1</button></td>
                    <td><button class="btn btn-primary" value="2">2</button></td>
                    <td><button class="btn btn-primary" value="3">3</button></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><button class="btn btn-primary" value="0">0</button></td>
                    <td><button class="btn btn-success" value="act">=</button></td>
                </tr>
            </table>
        </div>

        <div class="offset-3 col-6">
            <table class="table table-bordered text-center">
                <tr>
                    <td><button class="btn btn-danger" value="sum">+</button></td>
                    <td><button class="btn btn-danger" value="sub">-</button></td>
                    <td><button class="btn btn-danger" value="mol">x</button></td>
                    <td><button class="btn btn-danger" value="div">÷</button></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-4 offset-4">
            <input class="form-control" type="text" id="risultato" value="<?php echo $risultato ?? ''; ?>" />
        </div>
    </div>
</div>

</html>