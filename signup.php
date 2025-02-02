<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sign up for your online library account to read, learn, and grow.">
    <title>Online Library - Sign Up</title>
    <link rel="stylesheet" href="STYLES/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <style>
        .form{
            order:1;
        }
        .main{
            gap:20px;
        }
        .image-container{
            img{
                width:90%;
                height:70%;
            }
        }
        .bg-img{
            width:70%;
            height:auto;
        }
    </style>
</head>
<body>
    <main class="main">
        <section class="form">
            <form action="signup.php" method="POST">
                <img class="bg-img" src="ASSETS/IMAGES/signup_side_image.gif" alt="">
                <h1>Join Us Today!</h1>
                <p>Create your library account to start your journey.</p>
                
                <div class="field-container">
                    <div class="form-field">
                        <span class="material-symbols-outlined">account_circle</span>
                        <input type="text" name="full_name" placeholder="Full Name" required>
                    </div>
                    
                    <div class="form-field">
                        <span class="material-symbols-outlined">mail</span>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    
                    <div class="form-field">
                        <span class="material-symbols-outlined">vpn_key_alert</span>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                 
                    <input type="submit" class="submit" value="Sign Up">

                    <p class="redirect">Already have an account ? <a href="login.php">Login</a></p>
                </div>
            </form>
        </section>
        
        <section class="image-container">
            <img src="ASSETS/IMAGES/signup_side_image.gif" alt="Library Image">
        </section>
    </main>
    
  
</body>
</html>
