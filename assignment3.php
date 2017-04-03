<?php
  include 'ParentClass.php';
  include 'ChildClass.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Assignment 3</title>
    <link rel="stylesheet" type="text/css" href="css/assignment3.css"/>
  </head>
  <body>
    <h2>This is a simple calculator performing additoin, subtrction, multiplication and division</h2>
    <h2>Note this calculator only supports integer division. For instance, 5/2=2.</h2>
    <form action="assignment3.php" method="post">
      <label>Operand 1</label><br>
      <input name='num1' type='number'><br>
      <label>Operand 2</label><br>
      <input name='num2' type='number'><br>
      <input type="submit" value="+" name="add" class="button">
      <input type="submit" value="-" name="sub" class="button">
      <input type="submit" value="*" name="multiply" class="button">
      <input type="submit" value="/" name="divide" class="button"><br>
    </form>
    <?php
      if(isset($_POST["add"])){
        echo "<h2>Performing ".$_POST["num1"]." + ".$_POST["num2"]."...</h2>";
        $calc=new SimpleCalc();
        $calc->add($_POST["num1"], $_POST["num2"]);
        $calc->__toString();
      }
      if(isset($_POST['sub'])){
        echo "<h2>Performing ".$_POST["num1"]." - ".$_POST["num2"]."...</h2>";
        $calc=new SimpleCalc();
	$calc->sub($_POST["num1"], $_POST["num2"]);
	$calc->__toString();
      }
      if(isset($_POST['multiply'])){
	echo "<h2>Performing ".$_POST["num1"]." * ".$_POST["num2"]."...</h2>";
	$calc2 = new ComplexCalc();
	$calc2->multiply($_POST["num1"], $_POST["num2"]);
	$calc2->__toString();
      }
      if(isset($_POST['divide'])){
        if($_POST["num2"]==0){
	  echo "<h2>The second operand for division calculation cannot be 0.</h2>";
        }
	else{
	  echo "<h2>Performing ".$_POST["num1"]." / ".$_POST["num2"]."...</h2>";
	  $calc2 = new ComplexCalc();
	  $calc2->divide($_POST["num1"], $_POST["num2"]);
	  $calc2->__toString();
        }
      }
    ?>
  </body>
</html>
