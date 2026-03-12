<?php
function gradeCheck(int $grade) {
    if ($grade < 0 || $grade > 100) {
        return "Grade INVALID";
    }
    
    if ($grade >= 60) {
        return "Grade is for First Division!";
    }
    else if ($grade < 60 && $grade >= 45) {
        return "Grade is for Second Division!";
    }
    else if ($grade <45 && $grade >= 33) {
        return "Grade is for Third Division";
    }
    else {
        return "You need to take the test again!";
    }
}
echo gradeCheck(50);
?>