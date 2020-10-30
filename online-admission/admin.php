<?php 
error_reporting(0);
$msg = '';
require 'connection.php';

if(isset($_POST['delete'])){
$idnumber = $_POST['id'];

$select = "SELECT * FROM model WHERE id = $idnumber LIMIT 1";
$result = mysqli_query($connect, $select);

if(mysqli_num_rows($result) > 0){
	$delete = "DELETE FROM model WHERE id = $idnumber";
	mysqli_query($connect, $delete) or die('Failed to DELETE');
	$msg =  "Record with ID Number $idnumber was Deleted SUCCESSFULLY";
}else if (empty($result)){
		$msg = "Empty No ID was SET";
}else{
	$msg = "No RECORD Found";
	}
 
}
mysqli_close($connect);
 
?>

 <!DOCTYPE html>
<html>
<head>
<title>Model</title>    
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
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
    
    
     
    
    
    
	<div class="container" id="admin">
        
		<div class="admin">
          
			<form action="stdrecord.php" method="post">
                <div> <h2>All Student Record</h2></div>
                <div><i class="fa fa-user"></i></div>
                <div><input type="submit" name="printAll" value="All Records"></div>

			</form>
		</div>



			<div class="admin">
			<form action="admin.php" method="post">
                <div><h2>Delete Student by ID</h2></div>
                <div><i class="fa fa-user-times"></i></div>
                <div><input type="number" name="id"></div>
                <div><input type="submit" name="delete" value="Delete"></div>
			<span id="msg"><?php echo $msg;  ?></span>	

			</form>
		</div>
 



			<div class="admin">
				<form action="admin.php" method="post">
                <h3>Search Student By ID</h3>


	<?php 
	require 'connection.php';

	if(isset($_POST['search'])){
	$msg1 = '';
	$id = $_POST['id'];
	$search = "SELECT * FROM model WHERE id = $id  LIMIT 1";
 	
 	if(empty($id)){
			echo "<span id='msg1'>".$msg1 = "Empty NO ID was SET"."</span>";
	}else{ 


	$result = mysqli_query($connect, $search);

			
 
		if(mysqli_num_rows($result) > 0){ 

            	while($rows = mysqli_fetch_array($result)){
            		$id = $rows['id'];
            		$fname = $rows['Firstname'];
            		$lname = $rows['Lastname'];
 		 	 		$mname = $rows['Middlename'];
 		 	 		$section = $rows['Section'];
 		 	 		$gender = $rows['Gender'];
 		 	 		$dob = $rows['DOB'];
 		 	 		$phonenumber = $rows['Phonenumber'];
 		 	 		$school = $rows['School'];
 		 	 	} 
 		 	 	
 		 	 } else{
 		 	 		echo "<span id='msg1'>".$msg1 = "Undefined ID"."</span>";
 		 	 		$fname = "";
 		 	 		$lname = "";
 		 	 		$mname = "";
 		 	 		$section = "";
 		 	 		$gender = "";
 		 	 		$dob = "";
 		 	 		$phonenumber = "";
 		 	 		$school = "";
 		 	 	}
 		 	 }
 		 	 
} //end of submit if statement       
else{
 		 	 		$fname = "";
 		 	 		$lname = "";
 		 	 		$mname = "";
 		 	 		$section = "";
 		 	 		$gender = "";
 		 	 		$dob = "";
 		 	 		$phonenumber = "";
 		 	 		$school = "";
 		 	 	}



?>

 
 
             <table>

           		<tr>
           			<th>ID Number</th>
           			<th><input type="number" name="id" value="<?php echo $id; ?>"></th>
           		</tr>

                <tr>
                    <th>First Name:</th>
                    <th><input type="text" name="firstName" value="<?php echo $fname;?>"></th>
                </tr>
            
                <tr>
                    <th>Last Name:</th>
                    <th><input type="text" name="lastName" value="<?php echo $lname;?>"></th>
                </tr>
            
                <tr>
                    <th>Other Name:</th>
                    <th><input type="text" name="middleName" value="<?php echo $mname;?>"></th>
                </tr>
            
                <tr>
                    <th>Section:</th>
                    <th><input type="text" name="section" value="<?php echo $section; ?>" ></th>
                </tr>
                
                <tr>
                    <th>Gender:</th>
                    <th>
                
                    <input type="text" name="gender" value="<?php echo $gender;?>">
                    </th>
                </tr>
            
                
                <tr>
                    <th>DOB:</th>
                    <th><input type="date" name="dob" value="<?php echo $dob;?>"></th>
                </tr>
             
                <tr>
                    <th>Phone Number:</th>
                    <th><input type="tel" min="11" max="14" name="phoneNumber" value="<?php echo $phonenumber;?>"></th>
                </tr>
                
                <tr>
                    <th>From Which School:</th>
                    <th><textarea value="<?php echo $school; ?>"><?php echo $school; ?> </textarea></th>
                </tr>
                
                
                <tr>
                    <th></th>
                    <th><input type="submit" name="search" value="SEARCH"></th>
                </tr>
            </table>
         </form>
   
		</div>
 	</div>
 
 
</body>
</html>



