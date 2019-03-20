
<?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "heros");   

    // Check connection

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
   // $first_name = mysqli_real_escape_string($link, $_POST['firstname']);
    $term = mysqli_real_escape_string($link, $_POST['term']);

    // attempt insert query execution
  /*  $sql = "INSERT INTO hero (name) VALUES ('$first_name')";

    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    } */

    if (!empty($_REQUEST['term'])) {

    $sql = "SELECT * FROM hero WHERE name LIKE '%".$term."%'"; 
    $r_query = mysqli_query($link, $sql); 

    //while ($row = mysqli_fetch_array($r_query)){  
        
   // echo 'My hero name: ' .$row['name'];  
     if($term == 'vijay')  {
    header('Location: index.php');
    }else{
        echo "wrong name";
    }
   // }  

    }

    // close connection
    mysqli_close($link);
?>

