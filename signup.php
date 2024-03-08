<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <title>Signup- Paws and Whiskers</title>

    <style>
        body {
    background-image: url('img/cats2.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
    }

    .transparent-card {
    background-color: rgba(255, 255, 255, 0.7);
    }
    </style>

</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card transparent-card">
                <div class="card-body">
                    <a href="/" class="btn btn-light d-flex justify-content-center align-items-center" style="width: 40px; height: 40px; border-radius: 50%;"><i class="fas fa-home"></i></a>
                    <h2 class="text-center">Sign Up</h2>
                    <hr>

                    <form action="signup1.php" method="post">
                        
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="uname" placeholder="Enter your username" value="<?php echo (isset($_GET['uname'])) ? $_GET['uname'] : "" ?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="<?php echo (isset($_GET['email'])) ? $_GET['email'] : "" ?>">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="pass" placeholder="Enter your password" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <hr>
                    <p class="text-center">Already have an account? <a href="signin.php">Log in</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
