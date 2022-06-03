<?php

include 'example.php';
echo "\e[1;36m";
$chosenOption = "no Answer";

printf("Enter your name: ");
$handle = fopen ("php://stdin","r");
$std_name = fgets($handle);
$std_score = 0;

while($noOfQuesDone !== $noOfRows){
    getQues();
    showQues($ques, $optA, $optB, $optC, $optD, $answ);
}

//To clear screen---cannot use "cls" idk why
echo "\e[H\e[J";
printf("\nQuiz Complete");
addStdDataToDB($std_name, $std_score);
printf("\nName: %s", $std_name);
printf("Marks: %d / %d", $std_score, $totalMarks);


function showQues($ques, $optA, $optB, $optC, $optD, $answ){

    //To clear screen---cannot use "cls" idk why
    echo "\e[H\e[J";

    global $chosenOption, $noOfQuesDone, $marksPerQues, $std_score;
    $noOfQuesDone++;

    printf("%s", $ques);

    printf("\nA) %s", $optA);printf("\tB) %s", $optB);
    printf("\nC) %s", $optC);printf("\tD) %s", $optD);

    printf("\n\nPress A/B/C/D on your keyboard to choose an answer\n");
    $getIn = fopen ("php://stdin","r");
    $answIn = fgets($getIn);

    switch(trim($answIn)){
        case "A":
        case "a":
            $chosenOption = $optA;
            break;
        case 'B':
        case 'b':
            $chosenOption = $optB;
            break;
        case 'C':
        case 'c':
            $chosenOption = $optC;
            break;
        case 'D':
        case 'd':
            $chosenOption = $optD;
            break;
        default:
            $chosenOption = "Invalid Input.";
    }

    if($chosenOption == $answ){
        $std_score += $marksPerQues;
    }

    //To pause for 2 seconds
    sleep(1);
    printf("\n3.");
    sleep(1);
    printf("\t2.");
    sleep(1);
    printf("\t1.");
    sleep(1);

}

?>