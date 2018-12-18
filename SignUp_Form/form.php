
<?php
            

            $name=$phone=$email=$password=" ";
            $nameErr=$phoneErr=$emailErr=$passwordErr=" ";

            if(isset($_POST["name"])){
                echo $name;
            }else{
                echo " ";
            }
            if($_SERVER['REQUEST_METHOD']=='POST'){

                // Validate Name

                $name=$_POST["name"];
                $name = htmlspecialchars($_REQUEST['name']);
                if(empty($_POST["name"])){
                    $nameErr="Should write a name!";
                }else{
                    $name = test_input($_POST["name"]);
                    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                        $nameErr = "Only letters and white space allowed"; 
                      }
                }

                // Validate Email

                $email=$_POST["email"];
                //$filter_email=filter_var($email,FILTER_SANITIZE_EMAIL);
                if(empty($_POST["email"])){
                    $emailErr="Email is required";
                }else{
                    $email = test_input($_POST["email"]);;
                    if(!filter_var($email,FILTER_VALIDATE_EMAIL) || !filter_var($email,FILTER_SANITIZE_EMAIL)){
                        $emailErr="Invalid email format";
                    }
                }
               
                // Validate Password

                $password=$_POST["password"];
                if(empty($_POST["password"])){
                    $passwordErr="Password is important";
                }else{
                    $password = test_input($_POST["password"]);;                    
                }

                // Validate Phone

                $phone=$_POST["phone"];
                if(empty($_POST["phone"])){
                    $emailErr="Phone is required";
                }else{
                    $phone = test_input($_POST["phone"]);;
                    if(!filter_var($email,FILTER_VALIDATE_INT) || !filter_var($email,FILTER_SANITIZE_NUMBER_INT)){
                        $emailErr="Invalid phone format";
                    }
                }
            }  

            function test_input($data){
                $data=trim($data);
                $data=stripcslashes($data);
                $data=htmlspecialchars($data);
                return $data;
            }

?>
        


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html>
<head><title>SignUp Form</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
    <body>

        <div class="page-container">        
            <form action="users.php" method="post">
                <h1>Sign Up</h1>
                <input type="text" name="name" class="form-control" placeholder="Name" >
                <input type="text" name="phone" class="form-control" placeholder="Number Phone" >
                <input type="text" name="email" class="form-control" placeholder="Email" >
                <input type="password" name="password" class="form-control" placeholder="Password" >
                <button type="submit" value="Add" name="submit">Submit</button>
            </form>
        </div>
        

    </body>
</html>   