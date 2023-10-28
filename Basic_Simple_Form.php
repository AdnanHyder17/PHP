<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      legend{
        font-size: 25px;
        font-weight: bolder;
      }
      
      div{
        margin: 10px;
      }

      label{
        text-decoration: rgb(52, 238, 20) underline;
        font-size: 20px;
      }

      input, select{
        outline: none;
        border: 2px solid rgb(52, 238, 20);
        font-size: 13px;
      }

      input:hover, select:hover{
        font-size:16px ;
        border: 2px solid rgb(38, 0, 255);
      }

    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <!-- action contains php file thats supposed to recieve data and 
        access that data using $_GET variable in that file -->
    <!--In this we are giving data to this same php form file itself-->
    <fieldset>
        <legend>Student Form</legend>
    <div>
        <label for="name">Name: </label>
        <input type="text" id="name" name="name" placeholder="Enter your name">
    </div>
    <div>
        <label for="number">Number: </label>
        <input type="number" id="number" name="number" placeholder="Mobile #">
    </div>
    <div>
        <label for="course">Course: </label>
        <select name="course" id="courseS">
            <option value="pf">Programming Fundamental</option>
            <option value="cal">Calculus</option>
            <option value="DB">Database</option>
        </select>
    </div>

    <div>
        <label for="ft">Football </label>
        <input type="radio" name="sport" id="ft" value="football">
        <label for="cr">Cricket </label>
        <input type="radio" name="sport" id="cr" value="cricket">
    </div>

    <input type="submit" name="save">
    
    </fieldset>
    </form>

    <?php
      if(isset($_REQUEST['save'])){
        echo "<br> Form has been submitted <br>";
      }
      echo "<pre>";
      print_r($_REQUEST); //$_request can be used with method get or post both
      echo "</pre>";

      echo "<br> <pre>";
      print_r($_SERVER); //$_server gives additional info 
      echo "</pre>";
    ?>

</body>
</html>