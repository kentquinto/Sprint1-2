<?php
function gradeCheck(int $grade) {
    if ($grade <=100 && $grade >= 60) {
        return "Grade is for First Division!";
    }
    else if ($grade < 60 && $grade >= 45) {
        return "Grade is for Second Division!";
    }
    else if ($grade <45 && $grade >= 33) {
        return "Grade is for Third Division";
    }
    else if ($grade < 33 && $grade >=0) {
        return "You need to take the test again!";
    }
    else {
        return "GRADE INVALID";
    }
}
echo gradeCheck(-1);
?>