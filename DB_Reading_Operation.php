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
            border: 2px solid black;
            margin: auto;
            width: 800px;
            height: auto;
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
        th{
            color: white;
            background-color: rgb(89, 90, 105);
            border: 1px solid black;
            border-radius: 15px;
            padding: 8px;
        }
        table{
            margin: 10px auto;
            padding: 10px;
            width: 85%;
            text-align: center;
            border: 2px solid black;
            background-color: white;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div id="outer-box">
        <h1>CRUD from Database</h1>
        <h2>Reading Operation</h2>
        <?php
            $conn = mysqli_connect("localhost","root","","onlinelearningplateform");

            $sql = "Select * from student"; 

            $result = mysqli_query($conn, $sql);
        ?>
            <table>
                <thead>
                    <tr>
                        <th>sid</th>
                        <th>firstname</th>
                        <th>lastname</th>
                        <th>age</th>
                        <th>number</th>
                        <th>email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($res = mysqli_fetch_assoc($result)){  ?>
                    <tr>
                        <td><?php echo $res["sid"] ?></td>
                        <td><?php echo $res["firstname"] ?></td>
                        <td><?php echo $res["lastname"] ?></td>
                        <td><?php echo $res["age"] ?></td>
                        <td><?php echo $res["number"] ?></td>
                        <td><?php echo $res["email"] ?></td>
                    </tr>
                    <?php } mysqli_close($conn); ?>
                </tbody>
            </table>
    </div>
</body>
</html>