<?php 
// this php script is for connecting with database 
// data have to fetched from local server 
$mysqli_host = 'localhost'; 
  
// user name is root 
$mysqli_user = 'root'; 
  
// function to connect with database having  
// argument host and user name 
// if (!@mysqli_connect ($mysqli_host, $mysqli_user)) 
// { 
//     die('Cannot connect to database'); 
// } 
// else
// { 
//     // database name is server 
//     if (@mysqli_select_db('server')) 
//     { 
//         echo "Connection Success"; 
//     } 
//     else
//     { 
//         die('Cannot connect to database'); 
//     } 
// } 

$connection = mysqli_connect("localhost","root","","bookofatlas") or die("Error " . mysqli_error($connection));
  
// printing column name above the data 

// sql query to fetch all the data 
$query = "SELECT * FROM `bookofatlas`"; 
// mysql_query will execute the query to fetch data 
if ($is_query_run = mysql_query($query)) 
{ 
    // echo "Query Executed"; 
    // loop will iterate until all data is fetched 
    while ($query_executed = mysql_fetch_assoc ($is_query_run)) 
    { 
        $arr[] = $query_executed;
        $jsonString = json_encode($arr);
        echo $jsonString;

        //  array_push(
        //     array(
        //         "country"=>$query_executed['country'] ,
        //         "capital" =>$query_executed['capital'],
        //         "area" =>$query_executed['area'],
        //         "population" =>$query_executed['population'],
        //     )
        // )
    } 
} 
else
{ 
    echo "Error in execution"; 
} 

?> 

