<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online Library - Login Page">
    <title>Online Library - Login</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="STYLES/login.css">

    <!-- Google Fonts (Material Symbols) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

</head>
<body>

    <div class="main">
        <div class="form">
            <form action="">
                <img class="bg-img" src="ASSETS/IMAGES/Form_Side_Image.jpg" alt="">
                <h1>Welcome Back!</h1>
                <p>Read, learn, and grow — sign in to your library.</p>

                <div class="field-container">

                    <div class="form-field">
                        <span class="material-symbols-outlined">account_circle</span>
                        <input type="text" name="username_email" placeholder="Username or Email" required>
                    </div>

                    <div class="form-field">
                        <span class="material-symbols-outlined">vpn_key_alert</span>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>

                    <input type="submit" class="submit" value="Sign In">
                    <p class="redirect">Don`t have an account ? <a href="signup.php">Sign Up</a></p>
                </div>
            </form>
        </div>

        <div class="image-container">
            <img src="ASSETS/IMAGES/Form_Side_Image.jpg" alt="Library Image">
        </div>
    </div>

</body>
</html>
