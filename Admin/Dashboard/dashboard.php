<?php
 include 'STD_Data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Admin Page</title>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
      body{
        font-family: 'Montserrat', sans-serif;
      }
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
            <span class="navbar-brand">Admin</span>
            <div class="justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <button class="btn btn-light">Sign Out</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>

    <!--STUDENTS DETAIL-->
    <div class="card bg-light">
        <div class="card-header">
        <h3 class="card-title m-0">Students</h3>
        </div>
        <div class="card-body">
            <div class="container col-12 col-sm-12 col-md-6 col-xxl-4">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Total Students
                        <span class="badge bg-primary rounded-pill"><?php echo $totalStudents; ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Passed
                        <span class="badge bg-primary rounded-pill"><?php echo NoOfPassedStds(); ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Failed
                        <span class="badge bg-primary rounded-pill"><?php echo NoOfFailedStds(); ?></span>
                    </li>
                </ul>
                <br>
            </div>
        </div>
        <div class="card-footer text-center">
            <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#StudentsDetails">Show Details</button>
            <div id="StudentsDetails" class="collapse">
                <table class="table table-stripped">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Score(out of 50)</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        <!--Enter data from the database-->
                        <?php
                        for($i = 0; $i < $maxSTDid; $i++){
                            echo "<tr>";
                            echo "<td>" . STD_Details($i, "id") . "</td>";
                            echo "<td>" . STD_Details($i, "name") . "</td>";
                            echo "<td>" . STD_Details($i, "score") . "</td>";
                            echo "<td>" . STD_Details($i, "status") . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <br>

    <!--Questions-->
    <div class="card bg-light">
        <div class="card-header">
        <h3 class="card-title m-0">Questions</h3>
        </div>
        <div class="card-body">
            <div class="container col-12 col-sm-12 col-md-6 col-xxl-4">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Total Questions
                        <span class="badge bg-primary rounded-pill">25</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-center align-items-center">
                        <button class="btn btn-primary">Add Question</button>
                    </li>
                </ul>
                <br>
            </div>
        </div>
        <div class="card-footer text-center">
            <table class="table table-stripped">
                <thead>
                    <th>Question</th>
                    <th>Detail</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                        <tr>
                            <td>
                                <span><!--Get questio from Database--></span>
                                <br>
                                <div id="QuestionDetails" class="collapse">
                                    <table class="table table-stripped">
                                        <thead>
                                            <th>Option A</th>
                                            <th>Option B</th>
                                            <th>Option C</th>
                                            <th>Option D</th>
                                            <th>Answer</th>
                                        </thead>
                                        <tbody>
                                            <!--Get question details from database-->
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="collapse" data-bs-target="#QuestionDetails">Details</button>
                            </td>
                            <td>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>


</body>
</html>