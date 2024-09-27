<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grado Smartphone</title>
</head>
<body>
    
    <?php
        $model = "ZTE";
        $grade = "C";
        $msg = "";

        switch($grade) {
            case "A":
                $msg = $msg."<h2> $model in condizioni perfette, pari al nuovo";
                break;
            case "B":
                $msg = $msg."<h2>$model in ottime condizioni";
                break;  
            case "C":
                $msg = $msg."<h2>$model in condizioni perfette, pari al nuovo";
                break;  
            default:
                $msg = $msg."<h2 style='color:red'> Grado non riconosciuto";
        }
        $msg = $msg."</h2>";
        echo $msg;
    ?>  

</body>
</html>