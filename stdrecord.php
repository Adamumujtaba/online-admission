<?php 
require 'connection.php';
$select = "SELECT * FROM model";
$result = mysqli_query($connect, $select);
?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>All Student Records</title>
     <link rel="stylesheet" href="style.css">
 </head>
 <body>
    
     <div class="container">
         <div class="record">
     
     
            <table border="1">
                <t>
                    <th>S/N</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Middle Name</th>
                    <th>Gender</th>
                    <th>Section</th>
                    <th>Date of Birth</th>
                    <th>Phone Number</th>
                   <th>School</th>
 
                </t>

             <?php 
            while($rows = mysqli_fetch_array($result)){

              ?>

            <tr>
                <td><?php echo $rows['id']; ?>	</td>
                <td><?php echo $rows['Firstname']; ?></td>
                <td><?php echo $rows['Lastname']; ?></td>
                <td><?php echo $rows['Middlename']; ?></td>
                <td><?php echo $rows['Gender']; ?></td>
                <td><?php echo $rows['Section']; ?></td>
                <td><?php echo $rows['DOB']; ?></td>
                <td><?php echo $rows['Phonenumber']; ?></td>
                <td><?php echo $rows['School']; ?></td>

            </tr>

            <?php } ?>
 
            
             </table>
           
         </div>
     </div>

 </body>
 </html>