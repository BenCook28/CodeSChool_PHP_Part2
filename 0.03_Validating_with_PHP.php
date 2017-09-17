<?php
empty($date) // checks to see if date exists
trim($_POST['date']) // removes leading or trailing whitespace
htmlspecialchars($description) // removes HTML markup or code, but encodes special
// characters into HTML entities

//We validate email addresses as shown below:
if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo $email;
}

// FILTER_VALIDATE_EMAIL is a PHP filter constant.
strtotime($date) // converts most any dates to a Unix timestamp

// date() converts a UNIX time stamp into a human readable date
date('F js Y', $time); // September 16th 2017
date('m/d/Y') // 09/16/2017

// The docs cover more date options.