<?
    include 'config.php';
    include 'filewriter.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>file writer</h1>
    <?php
    function a(){

        $f = new filewriter();
        echo $f->getOneRow(1);
        echo '<pre>';

        echo $f->getOneSimbol(0,4);
        echo '<pre>';

        echo 'это масив по 1 строке';
        echo '<pre>';
        
        $count = $f->getCount();

        for($i = 0; $i < $count; $i++){
           echo $f->getOneRow($i);
           echo '<pre>';
        }
        echo 'это масив по 1 символу';
        echo '<pre>';

        for($i = 0; $i < $count; $i++){
           
            $lenght = strlen($f->getOneRow($i));
            
            for($j = 0; $j<$lenght; $j++){
                echo " ".$f->getOneSimbol($i,$j);
            }
         }

         $f->updateRow('141414',4);
         echo 'это масив по 1 строке с новым значением';
         echo '<pre>';

        for($i = 0; $i < $count; $i++){
           echo $f->getOneRow($i);
           echo '<pre>';
        }

        $f->updateOneSimbol('W',1,3);
        echo 'это масив по 1 символу c замененным сиволом';
        echo '<pre>';

        for($i = 0; $i < $count; $i++){
           
            $lenght = strlen($f->getOneRow($i));
            
            for($j = 0; $j<$lenght; $j++){
                echo " ".$f->getOneSimbol($i,$j);
            }
         }
        }
        a();
        // unset($f);

        // echo $f->saveFile();
    ?>
</body>
</html>