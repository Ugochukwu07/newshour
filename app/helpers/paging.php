<?php

//HOW many posts pre page
$results_per_page = 10;

//To check for set page
isset($_GET['page']) ? $page = $_GET['page'] : $page = 0;

//check for page 1
if ($page > 1) {
    $start = ($page * $results_per_page) - $results_per_page;
}else{
    $start = 0;
}
/* 
//Query db for TOTAL records
$resultSet = getPublishedpost();

//GET TOTAL RECORDS
$numRows = count($resultSet);

//Gets total number of pages
$totalPages = $numRows / $results_per_page;

//Qurey results
$resultSet = getPublishedpostpage($start, $results_per_page); */



?>

