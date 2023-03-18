<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link href ="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">  


    <!-- Coding With Nick -->
    <title>Login Form</title>
    
</head>

<body>

    <div class="wrapper login">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <h2>Welcome Back</h2>
                    <p>To login In.<br>It's School Account.</p>
                    <a href="{{route('Register')}}" class="btn">Register</a>
                </div>
            </div>

            <div class="col-right">
                <div class="login-form">
                    <h2>Login</h2>
                    <form>
                        <p>
                            <label>Username or email address<span>*</span></label>
                            <input type="text" name="email" placeholder="Username or Email" required>
                        </p>
                        <p>
                            <label>Password<span>*</span></label>
                            <input type="password" name="password" placeholder="Password" required>
                        </p>
                        <p>
                            <a href="{{route('Admin.index')}}"><input type="submit" value="Log in"></a>
                            {{-- <button type="button" class="btn btn-primary" name="login">Log in</button> --}}
                        </p>
                        <p>
                            <a href="{{route('Admin.index')}}">Forget password?</a>
                        </p>

                    </form>

                    <?php
                        $msg = "";
                        if(isset($_POST['login']) && !empty($_POST['email'])
                            && !empty($_POST['password'])){
                            $email = $_POST["email"];
                            $password = $_POST["password"];

                            if($email == "Admin@mail.com" && 
                            $password == "123"){
                                $_SESSION['valid'] = time();
                                $_SESSION['email'] = 'Admin@mail.com';

                                echo "Success";
                            }else{
                                $msg = 'Wrong username or password';
                            }
                        }
                    ?>
                </div>
              
            </div>

        </div>
    </div>

</body>

</html>