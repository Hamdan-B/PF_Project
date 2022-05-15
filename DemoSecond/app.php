<?php

include 'example.php';

$chosenOption = "no Answer";

printf("\n\n\n\nEnter your ID: ");
$handle = fopen ("php://stdin","r");
$line = fgets($handle);

printf("\n\nStudent ID: %s", $line);

while($noOfQuesDone !== $noOfRows){
    getQues();
    showQues($ques, $optA, $optB, $optC, $optD, $answ);
}

function showQues($ques, $optA, $optB, $optC, $optD, $answ){
    global $chosenOption;
    global $noOfQuesDone;
    $noOfQuesDone++;

    printf("\n\n%s", $ques);

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
    sleep(2);

    //To clear screen---cannot use "cls" idk why
    echo "\e[H\e[J";
}



?>