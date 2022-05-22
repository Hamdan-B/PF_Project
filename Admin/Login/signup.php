<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Bootstrap/js/bootstrap.js"></script>
    <title>Admin Page</title>
</head>
<body>
    <div class="alert alert-info alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Welcome Admin!</strong> This must be your first time, kindly enter your name and a strong password to continue.
    </div>

    <div class="container">
    <div class="card bg-light">
        <div class="card-header text-center">
            <h1 class="display-6">Signup Form</h1>
        </div>
        <div class="card-body">
        <form action="signupVerify.php" method="post">
            <div class="container">
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                <label for="name">Fullname</label>
            </div>
            <div class="form-floating mt-3 mb-3">
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                <label for="pwd">Password</label>
            </div>
            <input type="submit" id="submit" value="Signup" class="btn btn-outline-primary btn-lg">
            </div>
            
        </form>
        </div>
    </div>
    </div>

</body>
</html>