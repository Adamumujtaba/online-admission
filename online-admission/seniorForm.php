<!DOCTYPE html>
<html>
<head>
<title>Model</title>    
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>
<body>
    
      
    <div class="container">
        <nav>
            
            <input type="checkbox" id="bars">
    <label for="bars" ><i class="fa fa-bars"></i></label>
            
            
    <div>
        <a href="./#home">
        <img src="images/schlog.png">
        </a>
    </div>

        
            
            <div>
            <ul>
                <a href="index.php"><li>Home</li></a>
                <a href="form.php"><li>Register</li></a>
                <a href="staff.php"><li>Staff</li></a>
                <a href="./#info"><li>Contact</li></a>
                <a href="admin.php"><li>Admin</li></a>
            
            </ul>  
            
            </div>
             
            
        </nav>
    
    </div>
        <!-------End Nav---->
    
    
    <div class="container">
        
        
        <form action="seniorAdmission.php" method="post">
                <h3>Senior Secondary School Form</h3>
             
            <table>
           
                <tr>
                    <th>First Name:</th>
                    <th><input type="text" name="firstName">
                   
                    </th>
                </tr>
            
                <tr>
                    <th>Last Name:</th>
                    <th><input type="text" name="lastName"></th>
                </tr>
            
                <tr>
                    <th>Other Name:</th>
                    <th><input type="text" name="middleName"></th>
                </tr>
            
                <tr>
                    <th>Section:</th>
                    <th><input type="radio" name="section" value="SSS-1"> SSS-1</th>
                </tr>
            
                
                <tr>
                    <th>Gender:</th>
                    <th>
                    <input type="radio" name="gender" value="Male"> Male
                    <input type="radio" name="gender" value="Female"> Female
                    </th>
                </tr>
            
                
                <tr>
                    <th>DOB:</th>
                    <th><input type="date" name="dob"></th>
                </tr>
             
                <tr>
                    <th>Phone Number:</th>
                    <th><input type="tel" min="11" max="14" name="phoneNumber"></th>
                </tr>
                
                <tr>
                    <th>From Which School:</th>
                    <th><textarea name="school"></textarea></th>
                </tr>
                
                
                <tr>
                    <th></th>
                    <th><input type="submit" name="submit" value="submit"></th>
                </tr>
                
                    
            
            </table>
        
        </form>
        
    
    </div>
    
    
    
    
    
    
</body>
</html>