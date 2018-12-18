<?php

     $name=" ";
    if(isset($_POST['name'])){
        echo $name;
    }else{
        echo "You haven't signed! ";
    }
       

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html>
<head><title>SignUp Form</title>
<link href="css/users.css" rel="stylesheet" type="text/css" />

</head>
    <body>

  
            
            <div class="alert alert-success page-alert" id="alert-1">
                <button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <strong>Well done <cite><?php echo $_POST["name"]; ?>!</cite></strong> You successfully signed Up.
            </div>
        
    
    </body>
</html>   