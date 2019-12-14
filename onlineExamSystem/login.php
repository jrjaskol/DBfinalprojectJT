<?php
        
        session_start();

        
    
        if (isset($_POST["logout"])) {
            session_destroy();
            echo "user logged out";
            return;
        }
        
        if (isset($_POST["username"])) {
            if ($_POST["username"] == "Teukka" && $_POST["password"] = "teukka" && $_POST["loginOption"] = "student") {
                $_SESSION["loggedin"] = true;
                echo "You logged in now!";
                return;
            } else {
                echo "incorrect username and password";
            }
        }
        
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="stylesheetLogin.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Online Exam System</title>

  </head>
  <body>

        

        <div class="container-fluid">
            
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-3" id="loginContent">
                        <h2 id="loginText">Login</h2>
                        
                        <form method="post" action="login.php">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username">
                                
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div>
                                <label for="selectType">Select your login type</label>
                                <select class="form-control" name="loginOption">
                                    <option value="student">Student</option>
                                    <option value="instructor">Instructor</option>
                                </select>
                            </div>
                            <br/>
                            <button type="submit" value="login" name="login" class="btn btn-light btn-md">Login</button>
                        </form>
                </div>
                <div class="col-md-4">

                </div>
            </div>
                
        </div>
    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
