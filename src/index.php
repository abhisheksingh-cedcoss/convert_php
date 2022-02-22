<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conv_php</title>
</head>
<body>
    <form action="" method ="post">
    <div class="main_content">
      <input id="input_num" type="text" name= "input_num" /><br /><br />

      <input type="radio" id="htom" name="htom" value= <?php   $_POST['htom'] ?> />
      <label for="htom">hours to mins</label> <br /><br />

      <input type="radio" id="htos" name="htom" value=<?php    $_POST['htos'] ?> />
      <label for="htos">hours to second</label> <br /><br />

      <div>

        <input type="submit" value= "Convert">
    </div>
    </div>




    </form>



<?php

$input1 = $_POST['input_num'];
// $check1 = $_POST['htom'];
// $check2= $_POST['htos'];

$result1 = '';
$result2 = '';

if(isset($_POST['htom'])){
    $result1 = $input1*60;
   
}
if(isset($_POST['htos'])){

    $result2= $input1*3600;

}

echo "  Answer is  $result1 $result2"; 











?>
</body>
</html>