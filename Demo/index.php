<?php $reg = 0; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <title>Admin Page</title>
</head>
<body>
        <!-- <form action="functions.php" method="post">
        <input type="text" name="question" placeholder="Enter Question"><br><br>
        <input type="text" name="optA" placeholder="Option A">
        <input type="text" name="optB" placeholder="Option B">
        <input type="text" name="optC" placeholder="Option C">
        <input type="text" name="optD" placeholder="Option D"><br><br>
        <input type="text" name="answer" placeholder="Correct Answer"><br><br>
        <input type="submit" value="submit">
    </form>

    <table>
        <thead>
            <th>Questions</th>
            <th>Option A</th>
            <th>Option B</th>
            <th>Option C</th>
            <th>Option D</th>
            <th>Answer</th>
        </thead>
        <tbody>

        </tbody>
    </table> -->

    <form action="functions.php" method="post" class="row g-3 needs-validation" novalidate>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Question</label>
        <input type="text" name="question" class="form-control" id="validationCustom01" placeholder="Question" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Option A</label>
        <input type="text" name="optA" class="form-control" id="validationCustom02" placeholder="Option A" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Option B</label>
        <input type="text" name="optB" class="form-control" id="validationCustom03" placeholder="Option B" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom04" class="form-label">Option C</label>
        <input type="text" name="optC" class="form-control" id="validationCustom04" placeholder="Option C" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom05" class="form-label">Option D</label>
        <input type="text" name="optD" class="form-control" id="validationCustom05" placeholder="Option D" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom06" class="form-label">Answer</label>
        <input type="text" name="answer" class="form-control" id="validationCustom06" placeholder="Answer" required>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit</button>
      </div>
    </form>

    <?php
        if(isset($_GET['reg']) && $_GET['reg'] == 1){
            echo "<script>alert('Content Added to the database')</script>";
        }
    ?>
</body>
</html>