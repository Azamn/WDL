<?php

function fix_name($sname){
    $sname=trim($sname);
    $sname=  ucfirst($sname);
    $sname=  addslashes($sname);
    return $sname;
}

function fix_email($semail){
    $semail=trim($semail);
    $semail=  strtolower($semail);
    $semail=  addslashes($semail);
    return $semail;
}

function fix_address($address){
    $address=trim($address);
    $address=  strtoupper($address);
    $address=  addslashes($address);
    return $address;
}

function fix_rollno($rollno){
    $rollno=trim($rollno);
    $rollno=  strtoupper($rollno);
    return $rollno;
}
?>