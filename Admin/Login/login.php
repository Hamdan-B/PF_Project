<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Bootstrap/js/bootstrap.js"></script>
    <title>Admin Page</title>
</head>
<body>
    <br>
<div class="container">
    <div class="card bg-light">
        <div class="card-header text-center">
            <h1 class="display-6">Login Form</h1>
        </div>
        <div class="card-body">
        <form action="loginVerify.php" method="post">
            <div class="container">
            <div class="form-floating mt-3 mb-3">
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                <label for="pwd">Password</label>
            </div>
            <input type="submit" id="submit" value="Login" class="btn btn-outline-primary btn-lg">
            <?php 
                if(isset($_GET['err'])){
                    if($_GET['err'] == 1){
                        echo '<br>';
                        echo '<div class="alert alert-danger alert-dismissible fade show">';
                        echo '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
                        echo '<strong>WRONG PASSWORD</strong>';
                        echo '</div>';
                    }
                }
            ?>
            </div>
        </form>
        </div>
    </div>
    </div>
</body>
</html>