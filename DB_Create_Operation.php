<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            margin: 0px; padding: 0px;
            box-sizing: border-box;
        }
        body{
            background-color: rgb(171, 187, 187);
        }
        #outer-box{
            position: relative;
            border: 2px solid black;
            margin: auto;
            width: 800px;
            height: 500px;
            background-color: rgb(255, 255, 255);
        }
        h1{
            text-align: center;
            background-color: rgb(96, 183, 209);
            font-style: italic;
            padding: auto;
            color: rgb(0, 0, 0);
            padding: 5px 0px; 
        }
        h2{
            background-color: rgb(89, 90, 105);
            color: rgb(215, 215, 215);
            padding: 5px 0px;
            text-align: center;
        }

        #inner-box{
            position: absolute;
            top: 50%;
            left: 50%;
            background-color: rgb(180, 181, 189);
            width: 70%;
            height: 60%;
            transform: translate(-50%, -40%); 
            padding-top: 15px;
            border-radius: 8px;
        }
        .group-input{
            margin: 0 0 12px;
        }
        label{
            font-size: 18px;
            padding: 7px;
            display: inline-block;
            width: 30%;
            font-weight: 600;
        }
        input,select{
            width: 64%;
            font-size: 18px;
            display: inline-block;
            padding: 5px;
            border-radius: 5px;
        }
        #submit{
            font-size: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding: 5px 10px;
            color: #fff;
            background-color: #333;
            border: none;
            margin: 0 0 0 31%;
            cursor: pointer;
            transition: all 0.3s;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div id="outer-box">
        <h1>CRUD from Database</h1>
        <h2>Create Operation</h2>
            <form action=" <?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="inner-box">
                <div class="group-input">
                    <label for="firstname">First Name</label>
                    <input type="text" id="firstname" name="firstname" placeholder="Enter your first name">
                </div>
                <div class="group-input">
                    <label for="Lastname">Last Name</label>
                    <input type="text" id="Lastname" name="Lastname" placeholder="Enter your Last name">
                </div>
                <div class="group-input">
                    <label for="number">Number</label>
                    <input type="number" id="number" name="number" placeholder="Mobile #">
                </div>
                <div class="group-input">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age" placeholder="Age">
                </div>
                <div class="group-input">
                    <label for="course">Course</label>
                    <select name="course" id="courseS">
                        <option value="" selected disabled>Select Course</option>
                        <?php
                            $conn = mysqli_connect("localhost","root","","onlinelearningplateform");

                            $sql = "Select * from courses"; 

                            $result = mysqli_query($conn, $sql);

                            while($res = mysqli_fetch_assoc($result)){
                        ?>
                        
                            <option value="pf"><?php echo $res['cname'] ?></option>
                        
                        <?php } ?>   
                    </select>
                </div>
            
                <input type="submit" name="save" id="submit">

                <?php 
                    if(isset($_REQUEST['save'])){
                        
                        $fname = $_REQUEST['firstname'];
                        $lname = $_REQUEST['Lastname'];
                        $age = $_REQUEST['age'];
                        $number = $_REQUEST['number'];
                        $email = $_REQUEST['course'];

                        $sql = "INSERT INTO student (firstname,lastname,age,number,email) VALUES ('$fname','$lname','$age','$number','$email')";

                        mysqli_query($conn, $sql);
                        
                        mysqli_close($conn);
                    }

                ?>
            </form>
    </div>
</body>
</html>