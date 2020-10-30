<?php 
require 'connection.php';

if(isset($_POST['submit'])){

	$fname =addslashes(htmlspecialchars(strtoupper($_POST['firstName'])));
	$lname =addslashes(htmlspecialchars(strtoupper($_POST['lastName'])));
 	$mname =addslashes(htmlspecialchars(strtoupper($_POST['middleName'])));
 	$section = $_POST['section'];
 	$gender = $_POST['gender'];
 	$dob = $_POST['dob'];
 	$phNo = $_POST['phoneNumber']; 
 	$school =addslashes(htmlspecialchars(strtoupper($_POST['school'])));


 	if(empty($fname)){
 		exit("First Name REQUIRED");
 	}else if (empty($lname)) {
 		 exit("Last Name REQUIRED");
 	}else if(empty($dob)){
		exit("Date of Birth REQUIRED");
 	}else if(empty($school)){
 		exit("School Name REQUIRED");
 	}

 	$insert = "INSERT INTO model(Firstname, Lastname, Middlename, Gender, Section, DOB, Phonenumber, School) VALUES ('$fname', '$lname', '$mname', '$gender', '$section', '$dob', '$phNo', '$school')";
 	
 	mysqli_query($connect, $insert) or die('Failed to Execute the query');


 	$select = "SELECT * FROM model order by id desc LIMIT 1";
 	$result = mysqli_query($connect, $select);

 	if(mysqli_num_rows($result)>0){
 		while($rows = mysqli_fetch_array($result)){
 			$adminNumber = $rows['id'];
 		}
 	}


 	mysqli_close($connect);

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMISSION into SS1</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="container">
		<div class="admission">
			<center>
				<h1>BRILLIANT SCIENCE  JSS-1</h1>
				<h3>ACADEMIC</h3><hr/>
			</center>
				<p>ADDMISSION LETTER</p>

				<p>Following the performance of your Child/ward in the recently conducted B.E.C Examination. We are pleased to inform you that he/she has been admitted into this school for the 2015/2016 academic session In view of that, you are expected to provide him/her with the following:</p>

				<b>ACCEPTANCE LETTER</b>

				<p>This is to indicate my acceptance to ALL the conditions laid down by the school as pre-requisite for the admission of my child/ward into Atiku Abubakar center for Arabic and Islamic Studies, Ganye</p>

				<p>
					I <?php 
					echo "<b>". stripslashes($lname)." ".stripslashes($fname)."</b>"; ?> with admission Number <?php echo '<b>'.$adminNumber.'</b>';  ?> do hereby accept to operate within the rules and regulation of the school as stated in the admission letter.
					Thank you. 
					Sign:_____________________ Phone Number: <?php echo"<b>".$phNo."</b>"; ?>
					
				</p>
				<button>Print</button>
				<button>Download</button>

		</div>		

	</div>
 
</body>

<script type="text/javascript">
		alert("Congratulation You have been offered provisional Admission into AACAIS Ganye");
	</script>
</html>


 