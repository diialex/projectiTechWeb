<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Register</title>
</head>
<body>
    <h1>Welcome to the best psycho social network</h1>
    <h2>be psychotic!</h2>
    <div class="container">
        <div class="box form-box">
            <?php
                include("php/config.php");
                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $age = $_POST['age'];
                    $password = $_POST['password'];
                
                    //verifyng the unique email
                    $verify_query=mysqli_query($con,"SELECT Email FROM users WHERE Email=$email")

                    if(mysqli_num_row($verify_query) !=0){
                        echo "<div class='mess'>
                            <p> This email is used,try another one please!</p>
                            </div> <br>";
                        echo "<a href='javascript:self.history.back()'><button class=btn>Go Back</button";  
                    }
                    else{
                        mysqli_query($con, "INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$age','$password')") or die("Error Ocurred");
                        
                        echo "<div class='mess'>
                                <p> Registration successfull</p>
                            </div> <br>";
                        echo "<a href='index.php'><button class=btn>Login Now</button"; 
                    }
                }else{
                      
            ?>
            <header>Registrate!</header>
            <form action="" method="POST">
                <div class="field input">
                    <label for="username">Username  </label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age  </label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password  </label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="link">
                   Ya tienes cuenta listillo? :O <a href="index.html"> Logeate ahora prro</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>