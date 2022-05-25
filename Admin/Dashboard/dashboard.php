<?php
 include 'STD_Data.php';
 include 'Question_Data.php';

 session_start();
 if(!isset($_SESSION['userlogin'])){
     header('location:../Login/login.php');
 }

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
                    <button class="btn btn-light"><a href="../Login/signout.php" class="nav-link">SignOut</a></button>
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
                        //1000 is the offset, because IDs are starting from 1000
                        for($i = 0; $i < $maxSTDid - 1000; $i++){
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
                        <span class="badge bg-primary rounded-pill"><?php echo $totalQuestions; ?></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-center align-items-center">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddQues">Add Question</button>
                    </li>
                </ul>
                <br>
            </div>
        </div>
        <!--Add Question Modal-->
        <div class="modal fade" id="AddQues">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Question</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <form action="AddQues.php" method="post" class="needs-validation text-light" novalidate>
                            <div class="container">
                                <input type="text" name="question" id="ques" class="form-control bg-light" placeholder="Enter Question">
                            </div>
                            <br><br>
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" name="optA" id="optA" class="form-control bg-light" placeholder="Option A">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="optB" id="optB" class="form-control bg-light" placeholder="Option B">
                                    </div>
                                </div>
                            <br>
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" name="optC" id="optC" class="form-control bg-light" placeholder="Option C">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="optD" id="optD" class="form-control bg-light" placeholder="Option D">
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="container d-flex justify-content-center">
                                <div class="col-6">
                                    <input type="text" name="answer" id="answ" class="form-control bg-light" placeholder="Enter Correct Answer">
                                </div>
                            </div>
                            <br>
                            <div class="container d-flex justify-content-center">
                                <div class="col-6 d-flex justify-content-center">
                                    <button class="btn btn-primary" type="submit">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
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
                    <?php
                    for($i = 0; $i < count($all_ques_ID); $i++){
                        //This is the table row
                        echo '<tr>';
                            echo '<td>';
                                echo '<span>' . Ques_Details($i, "question") . '</span>';
                            echo '</td>';
                            echo '<td>';
                                echo '<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal'.$i.'">Details</button>';
                            echo '</td>';
                            echo '<td>';
                                echo '<form action="deletePage.php" method="post">';
                                    echo '<input type="hidden" name="I_ID" value="'.Ques_Details($i, "id").'">';
                                    echo '<input type="submit" value="Delete" class="btn btn-danger">';
                                echo '</form>';
                            echo '</td>';
                        echo '</tr>';

                        //This is the Modal of details that will popUp
                        //myModal$i --- myModal0 then myModal1......
                        echo '<div class="modal fade" id="myModal'.$i.'">';
                            echo '<div class="modal-dialog modal-xl">';
                                echo '<div class="modal-content">';

                                    //Modal Header
                                    echo '<div class="modal-header">';
                                        echo '<h4 class="modal-title">Question details</h4>';
                                        echo '<button type="button" class="btn-close" data-bs-dismiss="modal"></button>';
                                    echo '</div>';

                                    //Modal Body
                                    echo '<div class="modal-body">';
                                        //This is the card which contains all the question details
                                        echo '<div class="card">';
                                            //Card Header (Question here)
                                            echo '<div class="card-header">' . Ques_Details($i, "question") . '</div>';
                                            //Card Body (Options here)
                                            echo '<div class="card-body">';
                                                echo '<ul class="list-group">';
                                                    echo '<li class="list-group-item">A) ' . Ques_Details($i, "A") . '</li>';
                                                    echo '<li class="list-group-item">B) ' . Ques_Details($i, "B") . '</li>';
                                                    echo '<li class="list-group-item">C) ' . Ques_Details($i, "C") . '</li>';
                                                    echo '<li class="list-group-item">D) ' . Ques_Details($i, "D") . '</li>';
                                                echo '</ul>';
                                            echo '</div>';
                                            //Card Footer (Answer here)
                                            echo '<div class="card-footer">Answer: ' . Ques_Details($i, "answer") . '</div>';
                                        echo '</div>';
                                    echo '</div>';

                                    //Modal Footer
                                    echo '<div class="modal-footer">';
                                        echo '<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>';
                                    echo '</div>';

                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>