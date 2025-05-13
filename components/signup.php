<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up - ChefHive</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(to top, #ff7e5f, #feb47b);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            height: 95vh;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #ff5722;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .signup-btn {
            width: 100%;
            padding: 0.75rem;
            background-color: #ff5722;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .signup-btn:hover {
            background-color: #e64a19;
        }

        .register-link {
            text-align: center;
            margin-top: 1rem;
            font-size: 0.9rem;
        }

        .register-link a {
            color: #ff5722;
            font-weight: bold;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        h3 {
            text-align: center;
            margin-top: 20px;
            color: #333333ce;
        }

        .login {
            text-align: center;
            margin: 30px auto;

        }

        .login a {
            background: #e64a19;
            padding: 10px 15px;
            border-radius: 50%;
            color: #fff;
            text-decoration: none;
            font-size: 20px;
            transition: 0.3s ease;
            margin: 0 10px;
        }

        .login a i {
            font-size: 20px;
        }

        .login a:hover {
            background: #fff;
            color: #e64a19;
            transform: scale(1.1);
        }

        @media (max-width: 600px) {
            .login-container {
                width: 90%;
                padding: 1rem;
            }

        }
    </style>
</head>


<body>
    <div class="login-container">
        <h2>ChefHive</h2>

        <form>
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" placeholder="John Doe" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" placeholder="you@example.com" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" placeholder="Re-enter your password" required>
            </div>
            <button type="submit" class="signup-btn">SignUp</button>
            <div class="register-link">
                Already have an account? <a href="login.html">Login</a>
            </div>
        </form>



        <div class="login">

            <a href="#"><i class="fa-brands fa-tiktok"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-google"></i></a>

        </div>
    </div>
</body>

</html>