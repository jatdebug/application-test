<!doctype html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
			<script src="//ajax.googleapis.com/ajax/libs/mootools/1.5.2/mootools.min.js"></script>
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script src="ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
			<script>
				
			  function informationAlert(firstName, lastName, emailAddress)
			  {
				  var message = "Name :"+ firstName +" " + lastName +" Email Address: "+ emailAddress;
				  alert(message);
			  }
			  
			</script>
		  <style>
			 table, td, th {border: 0.5px #3e467f;}
			 th{text-align: center;font-size: 20px; background-color:#857ded; padding: 15px; color:#ffffff;}
			 td{text-align: left; background-color:#ded7f2; padding: 11px;}
		  </style>
  </head>
  <body>
        <h2>Jason Thompson<h2>
        <h3>Application Test Solution</h3>
		</br>
		<?php
		$people = array(
		   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
		   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
		   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
		   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
		   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
		);
		?>
		<table>
		   <tr>
			   <th>ID</th><th>First Name</th><th>Last Name</th><th>Email Address</th><th>Additional Information</th>
		   </tr>
		   <?php
			   
			   foreach( $people as $key => $value )
			   {
				  echo("<tr><td>".$value['id']."</td><td>".$value['first_name']."</td><td>".$value['last_name']."</td><td>".$value['email']."</td><td>"."<button id='button' onclick =\"informationAlert('".$value['first_name']."','".$value['last_name']."','".$value['email']."')\">Show Alert</button></td></tr>");
			   }
			   
		   ?>
		</table>
	
	
   </body>
</html>





Place your code here
