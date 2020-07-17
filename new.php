<?php 

    require_once("connection.php");
    $query = " select * from records WHERE User_Name= 'home' ";
    $result = mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($result))
    {
    $UserEmail = $row['User_Email'];
    echo $UserEmail; 
    }  
?>                                                                    
                                   

                       
                  