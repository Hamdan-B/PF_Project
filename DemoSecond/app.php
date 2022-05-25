<?php

include 'example.php';

$chosenOption = "no Answer";

printf("\nEnter your name: ");
$handle = fopen ("php://stdin","r");
$std_name = fgets($handle);
$std_score = 0;
$std_status = "Failed";

while($noOfQuesDone !== $noOfRows){
    getQues();
    showQues($ques, $optA, $optB, $optC, $optD, $answ);
}

printf("Quiz Ended...");

function showQues($ques, $optA, $optB, $optC, $optD, $answ){

    //To clear screen---cannot use "cls" idk why
    echo "\e[H\e[J";

    global $chosenOption;
    global $noOfQuesDone;
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
            printf("you chose option A");
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


    printf("\n\nYour answer: %s", $chosenOption);
    printf("\n\nCorrect answer: %s", $answ);

    if($chosenOption == $answ){
        printf("\n\n\tCORRECT!");
    }else{
        printf("\n\n\tWRONG!");
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