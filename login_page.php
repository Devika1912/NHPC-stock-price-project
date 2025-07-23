<?php 
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $db_name = "NHPC_STOCK";  
    $conn = new mysqli($servername, $username, $password, $db_name, 3307);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo " ";
?>
<?php
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "select * from register where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location: index.html");
        }  
        else{  
            echo  '<script>
                        window.location.href = "login_page.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }     
    }
?> 
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link href="" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
                    *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background: linear-gradient(rgb(0, 101, 164) 0%,rgb(96, 151, 203) 35%,rgb(164, 239, 254)100%);
            font-family: 'Poppins',sans-serif;

        }
        form{
            width: 40%;
            background-color: white;
            padding: 50px;
            border-radius: 20px;
            margin-top: 150px;
            margin-left: 30%;
        }
        .btn-primary{
            width: 100%;
        }
        .container-fluid .d-inline-block align-text-top{
            margin-top: 30%;
        }
        .h4{
        }
        </style>
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container">
        <form name="form" action="login_page.php" onsubmit="return isvalid()" method="POST">
            <h4 class="text-center">Login</h4>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" id="user" name="user" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" id="pass" name="pass" class="form-control">
            </div>
            </br>
            <button type="submit" id="btn" value="Login" name = "submit" class="btn btn-primary">Login</button>
        </form>
    </div>
        <script>
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty!");
                    return false;
                }
                else if(user.length==""){
                    alert(" Username field is empty!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!");
                    return false;
                }
                
            }
        </script>
    </body>
</html>
