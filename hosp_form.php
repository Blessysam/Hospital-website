<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registraion Form</title>
    <link rel="stylesheet" type="text/css" href="style_hosp.css">

    

    
</head>
<body>
    
        <fieldset id="f1">
            
            <form action="hosp_in.php" method="post">
                
                <h3>Doctor Appointment Form:</h3>
                
                <label for="name" id="name">Full Name: </label> <br>
                <input type="text" name="Full_Name" id="fullname"  placeholder="Enter full Name" ><br><br>

                <label for="age" id="name">Age: </label> <br>
                <input type="text" name="Age" id="age"  placeholder="Enter Your Age" ><br><br>
                
                <label for="email" id="name">Email ID: </label> <br>
                <input type="email" name="Email" id="email" placeholder="Enter Email ID"><br><br>

                <label for="contact" id="name">Contact No: </label> <br>
                <input type="text" name="Contact" id="contact" placeholder="Enter Contact No" ><br><br>

                <label for="app_date" id="name">Appointment Date: </label> <br>
                <input type="date" name="Date" id="app_date" placeholder="Enter The Date" ><br><br>

                <label for="gender" id="name">Gender: </label> <br>
                <input type="radio" name="Gender" value="male" id="gender">Male 
                <input type="radio" name="Gender" value="female" id="gender">Female 
                <input type="radio" name="Gender" value="other" id="gender">Other<br><br>

                

                <h3>Address Details:</h3>

                <label for="area_address" id="name">Area: </label> <br>
                <input type="text" name="Area" id="area_address" placeholder="Enter Area"><br><br>

                <label for="city_address" id="name">City: </label> <br>
                <input type="text" name="City" id="city_address" placeholder="Enter City"><br><br>

                <label for="state_address" id="name">State: </label> <br>
                <input type="text" name="State" id="state_address" placeholder="Enter State"><br><br>

                <label for="postal_code" id="name">Postal Code: </label> <br>
                <input type="text" name="Pincode" id="pincode" placeholder="Enter Postal Code"><br><br>



                <button value="submit" id="btn">Book Appointment</button>
            </form>

            
        </fieldset>
        
       
   
</body>
</html>