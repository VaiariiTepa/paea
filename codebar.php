<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta charset="UTF-8" name="viewport" content="width=device-width" />
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h5 class="top-margin">Lire l'article sur : <a href="https://waytolearnx.com/2019/07/generateur-de-code-barre-en-php.html" target="_blank">Générateur de code barre en PHP</a></h5>
            </div>
        </div>

        <form class="form-horizontal" method="POST" id="barcode">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tapez votre code ici :</label>
                        <input type="text" name="string" class="form-control" value="">
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-6">
                    <input type="submit" name="submit" class="btn btn-success text-center form-controll" id="" value="Generate Barcode">
                    <?php
            if(isset($_POST['submit'])) {
               $string = trim($_POST['string']);
               if($string != '') {
                echo '<h6>Generated Barcode</h6>';
                echo "<center><img alt='testing' src='barcode.php?codetype=code39&size=50&text=".$string."&print=true'/></center>";  
               } else {
                 echo "S'il vous plaît entrer un code!";
               }
            }
          ?>
                </div>
            </div>
        </form>
    </div>
</body>
</html>