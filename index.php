
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <form action="simplecalculator.php" method="POST">

        <input type="number" name="num1">
        <br>
        <select name="operator">
          <option value="+">+</option>
          <option value="-">-</option>\
          <option value="/">/</option>
          <option value="*">x</option>
        </select>
        <input type="number" name="num2">
        <br>
        <input type="submit" name="submit">


    </form>
    Answer:  <?php
    $num1=0;
    $num2=0;  
    // if(isset($_POST["num1"])){
    //
    // }
    // if(isset( $_POST["num2"])){
    //   $num2=$_POST["num2"];
    // }



    if(isset($_POST['submit'])){
      $num1=$_POST["num1"];
      $num2=$_POST["num2"];

      if($_POST['operator']=="+"){
        echo  $num1 + $num2;
      }
      else if($_POST['operator']=="-"){
        echo  $num1 - $num2;
      }
      else if($_POST['operator']=="/"){
        echo  $num1 / $num2;
      }
      else if($_POST['operator']=="*"){
        echo  $num1 * $num2;
      }
      else{
        echo "error";
      }



    }
?>
  </body>
</html>
