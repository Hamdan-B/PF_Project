<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <script src="Bootstrap/js/bootstrap.js"></script>
    <title>Admin Page</title>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
      body{
        background-color: #4b4b4b;
        font-family: 'Montserrat', sans-serif;
      }
    </style>

</head>
<body>
        <nav class="navbar text-light navbar-expand-sm bg-dark navbar-dark">
          <div class="container-fluid">
            <p class="navbar-brand m-0">Admin</p>
            <ul class="navbar-nav text-right nav justify-content-end">
              <li class="nav-item">
                <button class="btn btn-dark">Dashboard</button>
              </li>
              <li class="nav-item">
                <button class="btn btn-dark"><small>Sign Out</small></button>
              </li>
            </ul>
          </div>
        </nav>
    <br>
    <div class="container text-center text-light">
      <h1 class="display-5">Add Question</h1>
    </div>
    <br>
    <form action="functions.php" method="post" class="needs-validation text-light" novalidate>
      <div class="container">
        <input type="text" name="question" id="ques" class="form-control bg-dark" placeholder="Enter Question">
      </div>
      <br><br>
      <div class="container">
        <div class="row">
          <div class="col-6">
          <input type="text" name="optA" id="optA" class="form-control bg-dark" placeholder="Option A">
          </div>
          <div class="col-6">
          <input type="text" name="optB" id="optB" class="form-control bg-dark" placeholder="Option B">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-6">
          <input type="text" name="optC" id="optC" class="form-control bg-dark" placeholder="Option C">
          </div>
          <div class="col-6">
          <input type="text" name="optD" id="optD" class="form-control bg-dark" placeholder="Option D">
          </div>
        </div>
      </div>
      <br><br>
      <div class="container d-flex justify-content-center">
        <div class="col-6">
        <input type="text" name="answer" id="answ" class="form-control bg-dark" placeholder="Enter Correct Answer">
        </div>
      </div>
      <br>
      <div class="container d-flex justify-content-center">
        <div class="col-6 d-flex justify-content-center">
        <button class="btn text-light border-light" type="submit">Submit</button>
        </div>
      </div>
    </form>
</body>
</html>