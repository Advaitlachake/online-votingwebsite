<?php 

require_once "db_connect.php"; 

//initialize with empty values 

$username = $id = $newpass = ""; 

$username_err = $id_err = $newpass_err = ""; 



// Processing form data 
if($_SERVER["REQUEST_METHOD"] == "POST"){ 

    if(empty(trim($_POST["username"]))){ 

        $username_err = "Please enter username."; 
        
        } else{ 
        
        $username = trim($_POST["username"]); 
        
        } 

        if(empty(trim($_POST["id"]))){ 

            $id_err = "Please enter ID."; 
            
            } else{ 
            
            $id = trim($_POST["id"]); 
            
            } 
 
    
    $check_id = mysqli_query($conn, "SELECT `id` FROM `users` WHERE `username` = '".$_POST['username']."'") or exit(mysqli_error($conn));
    if(! mysqli_num_rows($check_id)) {
        $email_err = 'This voter has not registered for voting. Please contact admin';
    }
    else{
        $sql = "SELECT id FROM users WHERE `username` = '".$_POST['username']."'";
        $stmt = mysqli_query($conn, $sql);
        $row=mysqli_fetch_assoc($stmt);
        $correct_id=$row['id'];

    if( trim($correct_id) != trim($id)) {
        $id_err = 'Incorrect ID';
    }
    }
    

// Validate password
if(empty(trim($_POST["newpass"]))){
    $newpass_err = "Please enter a password.";     
} 
else{
    $newpass = trim($_POST["newpass"]);
}

if(empty($username_err) && empty($id_err) && empty($newpass_err)){
    $sql1 = "UPDATE users SET password = ? WHERE id = ?";

    if($stmt = mysqli_prepare($conn,$sql1)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ss", $param_pass, $param_id);
        // Set parameters
        $param_pass = $newpass;
        $param_id = $id;
        if(mysqli_stmt_execute($stmt)){
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
        mysqli_stmt_close($stmt);

        echo '<div style="font-size:2em;color:red">Password Change Successfully </div>';
    }
}

// Close connection
 mysqli_close($conn); 

} 

?> 

<!DOCTYPE html> 

<html lang="en"> 

<head> 

<meta charset="UTF-8"> 

<title>Reset Password</title> 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.css"> 

 <style type="text/css"> 

body{ font: 14px sans-serif; } 

.wrapper{ width: 350px; padding: 20px;

            font-family: "Open Sans", Sans-serif;
  text-transform: uppercase;
  font-weight: 700;
  
  letter-spacing: 0.1em;
  margin-bottom: 10px;  
  position: relative;
 }  

body{
            background-image: url("forgot_back.jpg");
            background-repeat: no-repeat;
             background-size: 1600px,900px;
        }
        }

</style> 

</head> 

<body> 

<div class="wrapper"> 

<h2>Reset Password</h2> 

<p>Please fill in the following to reset the Password</p> 

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 

<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>"> 

<label style="color:black;background-color: #FFFFFF;">Username</label> 

<input type="text" name="username" class="form-control" value="<?php echo $username; ?>"> 

<span class="help-block"><?php echo $username_err; ?></span> 

</div> 

<div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : ''; ?>"> 

<label style="color:black;background-color: #FFFFFF;" >ID</label> 

<input type="int" name="id" class="form-control"> 

<span class="help-block"><?php echo $id_err; ?></span> 

</div>

<div class="form-group <?php echo (!empty($newpass_err)) ? 'has-error' : ''; ?>"> 

<label style="color:black;background-color: #FFFFFF;">New Password</label> 

<input type="password" name="newpass" class="form-control"> 

<span class="help-block"><?php echo $newpass_err; ?></span> 

</div>

<div class="form-group"> 

<input type="submit" class="btn btn-primary" value="Change Password"> 

</div> 
<br>
<p style="color:black">Know the password? <a style="color:red;" href="login.php">Login</a>.</p> 
<br>
<p style="color:black">If New to the Page?<br> Contact Admin.</p> 

</form> 



</div> 
<p style="font-size: 30px; font-style: italic;color:white; background-color: black; text-align: center; width: 500px;margin-left: 550px; margin-top: -330px; padding-top: 30px; padding-bottom: 30px;"><b>DID YOU KNOW?</b><br> 78 out of every 100 people forget their password!</p>

</body> 

</html>