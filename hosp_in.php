<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Form</title>
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost","root","","hospital");

        if($conn===false){
            die("Error Could not connect. " .mysqli_connect_error());
        }

        $Full_name= $_REQUEST['Full_Name'];
        $Age= $_REQUEST['Age'];
        $Email= $_REQUEST['Email'];
        $Contact= $_REQUEST['Contact'];
        $Date= $_REQUEST['Date'];
        $Gender= $_REQUEST['Gender'];
        $Area= $_REQUEST['Area'];
        $City= $_REQUEST['City'];
        $State= $_REQUEST['State'];
        $Pincode= $_REQUEST['Pincode'];
        

        $sql= "INSERT INTO appointments VALUES ('$Full_name','$Age','$Email','$Contact','$Date','$Gender','$Area','$City','$State','$Pincode')";

        if(mysqli_query($conn,$sql)){
            echo "Data Stored Successfully";
        }
        else{
            echo "Error: Failed to stored the data" .mysqli_error($conn);
        }

        mysqli_close($conn);

    
    
    
    ?>
</body>
</html>