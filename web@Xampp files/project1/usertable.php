<html>
    <head>
        <title> User Login and Registration </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container">
            <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                    <h2> Login Here </h2>
                    <from action="validity.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </from>
                </div>

                <div class="col-md-6 login-right">
                    <h2> Register Here </h2>
                    <from action="register.php" method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </from>
                </div>

            </div>
            </div>
        </div>
    </body>
</html>