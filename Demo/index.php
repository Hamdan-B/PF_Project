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
    <div class="container-fluid bg-dark">
        <nav class="navbar text-light">
          <p class="navbar-brand m-0">Admin</p>
          <ul class="text-right">

          </ul>
        </nav>
    </div>
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

    <!-- <form action="functions.php" method="post" class="row g-3 needs-validation text-light" novalidate>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Question</label>
        <input type="text" name="question" class="form-control bg-dark border-0" id="validationCustom01" placeholder="Question" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Option A</label>
        <input type="text" name="optA" class="form-control bg-dark border-0" id="validationCustom02" placeholder="Option A" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Option B</label>
        <input type="text" name="optB" class="form-control bg-dark border-0" id="validationCustom03" placeholder="Option B" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom04" class="form-label">Option C</label>
        <input type="text" name="optC" class="form-control bg-dark border-0" id="validationCustom04" placeholder="Option C" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom05" class="form-label">Option D</label>
        <input type="text" name="optD" class="form-control bg-dark border-0" id="validationCustom05" placeholder="Option D" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom06" class="form-label">Answer</label>
        <input type="text" name="answer" class="form-control bg-dark border-0" id="validationCustom06" placeholder="Answer" required>
      </div>
      <div class="col-12 mt-2">
        <button class="btn btn-primary" type="submit">Submit</button>
      </div>
    </form> -->

    <?php
    ?>
</body>
</html>