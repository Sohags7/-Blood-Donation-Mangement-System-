<?php 
	
	include 'include/header.php';

	



		

         if(isset($_POST['submit']))
  {

    
  		if(isset($_POST['name']) && !empty($_POST['name']) )
  		{
  			 if(preg_match('/^[A-Za-z\s]+$/',$_POST['name']))
  			 {
  				$name=$_POST['name'];
  		   }
  		else 
  				{
  					$nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>please fill Only Upper,Lower and Space are allow.</strong>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
               </button>
              </div>';
  	       }
  		}
  		else 
  		{
  			$nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Please fill the name field.</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
         </button>
         </div>';
  		}


  		if(isset($_POST['gender']) && !empty($_POST['gender']) )
  		{
  			$gender= $_POST['gender'];

  		}
  		else 
  		{
  			$genderError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Please select your gender.</strong>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
          </div>';
  		}

  		if(isset($_POST['day']) && !empty($_POST['day']) )
  		{
  			$day= $_POST['day'];
  		}
  		else 
  		{
  			 $dayError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Please select day input.</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>';
       }

  		if(isset($_POST['month']) && !empty($_POST['month']) )
  		{
  			$month= $_POST['month'];
  		}
  		else 
  		{
  			$monthError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Please select month input.</strong>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
         </button>
         </div>';
  		}


  		if(isset($_POST['year']) && !empty($_POST['year']) )
  		{
  			$year= $_POST['year'];
  		}
  		else 
  		{
  			$yearError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Please select month input.</strong>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
        </button>
         </div>';
  		}

  		if(isset($_POST['blood_group']) && !empty($_POST['blood_group']) )
  		{
  			$blood_group= $_POST['blood_group'];
  		}
  		else 
  		{
  			$blood_groupError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Please select blood group.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';
  		}

  		if(isset($_POST['city']) && !empty($_POST['city']) )
  		{
  			if(preg_match('/^[A-Za-z\s]+$/',$_POST['city']))
  			{
  				$city=$_POST['city'];
  			}
  			else 
  				{
  					$cityError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>please fill Only Upper,Lower and Space are allow.</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>';
      	  }
  		}
  		else 
  		{
  			$cityError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Please fill the city field.</strong>
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
       </button>
        </div>';

  		}

  		if(isset($_POST['contact_no']) && !empty($_POST['contact_no']) )
  		{
  			if(preg_match('/\d{11}/',$_POST['contact_no']))
  			{
  				$contact=$_POST['contact_no'];
  			}
  			else 
  				{
  					$contactError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>contact should consist of 11 digit  .</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
           </button>
           </div>';
      	  }
  		}
  		else 
  		{
  			$contactError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Please fill the contact field.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
         </div>';
  		}


  		

  		if(isset($_POST['email']) && !empty($_POST['email']) )
  		{
  			   $pattern ='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z]{2,3})$/';

  			if(preg_match($pattern,$_POST['email']))
  			{
  				 $check_email=$_POST['email'];
  				 $sql= "SELECT email  FROM donar WHERE email= '$check_email'";

  				   $result = mysqli_query($connection,$sql);
  				if(mysqli_num_rows($result)>0)
  				{
  					$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>This email is already exits.</strong>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
             </div>';
  				}
  				else 
  				{
  					$email=$_POST['email'];
  				}

  			}
  			else 
  				{
  					$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>please fill Only Upper,Lower,digit  are allow.</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
           </button>
           </div>';
      	  }

  		}
  		else 
  		{
  			$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Please fill the email field.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
        </button>
         </div>';
  		}

  		//insert data into database 
  		if(isset($name) && isset($blood_group) && isset($gender) && isset($day) &&
          isset($month) && isset($year) && isset($contact) && isset($email) &&
          isset($city) )
  		{
  			$DonnerDOB= $year."-".$month."-".$day;
  		  

  		// Prepare the SQL statement
$sql = "UPDATE donar SET name=?, gender=?, email=?, city=?, dob=?, contact_no=?, blood_group=? WHERE id=?";

// Prepare the statement
$stmt = mysqli_prepare($connection, $sql);

// Bind parameters
mysqli_stmt_bind_param($stmt, "sssssssi", $name, $gender, $email, $city, $DonnerDOB, $contact, $blood_group, $_SESSION['user_ID']);

// Execute the statement


if (mysqli_stmt_execute($stmt)) {
$UpdateSuccess = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data updated.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
        </button>
         </div>';

  ?>

<script>
	function myFunction() {
		location.reload();

	}
</script>



  <?php



} else {
    $updateError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data not updated try again.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
        </button>
         </div>';
}

// Close the statement
mysqli_stmt_close($stmt);


     }

	  //insert data into database 

	
   

}//end of submit

$sql = "SELECT * FROM donar WHERE id=".$_SESSION['user_id'];
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) > 0)
        {
        	while ($row = mysqli_fetch_assoc($result)){
        		 $user_ID=$row['id'];

        		$name=$row['name'];
        		$blood_group=$row['blood_group'];
        		$gender=$row['gender'];
        		$email=$row['email'];
        		$contact=$row['contact_no'];
        		$city=$row['city'];

        		$dob=$row['dob'];

        		$date =explode("-", $dob);
        		$dbpassword=$row['password'];


        	}
        }



if(isset($_POST['update_pass']))
{
	if(isset($_POST['old_password']) && !empty($_POST['old_password']) && 
  		isset($_POST['c_password']) && !empty($_POST['c_password']) && 
  		isset($_POST['new_password']) && !empty($_POST['new_password']))
  		{
         $old_password=md5($_POST['old_password']);

         if($old_password==$dbpassword)
         {
         	if(strlen($_POST['new_password'])>=6)
  			{
  				if($_POST['new_password']==$_POST['c_password'])
  				{
  					$password=md5($_POST['new_password']);
  				}
  				else 
  				{
  					$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>Passwords are not same.</strong>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
             </div>';
  				}
  			}
  			else 
  			{
  				$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>The password should consist 6 characters.</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>';
  		  }

         }
         else 
         {
         	$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Please enter the  valid password.</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>';



         }


  			}

  		else 
  		{
  			 $passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Please fill the password field.</strong>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
          </button>
         </div>';
  		}


  		if(isset($password))

  		{


  			$sql = "UPDATE donar SET password='$password' WHERE id='$user_ID'";
    if(mysqli_query($connection, $sql)) {
    	 $UpdatePasswordSuccess = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Password updated.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
        </button>
         </div>';
    	
    	?>

<script>
	function myFunction() {
		location.reload();

	}
</script>



  <?php

    	

       
    } else {
        $passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data not inserted try again.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
        </button>
         </div>';
    }




  		}




}



include 'include/sidebar.php';

?>

<style>
	.form-group{
		text-align: left;
	}
	.form-container{

		padding: 20px 10px 20px 30px;

	}
</style>
			<div class="container" style="padding: 60px 0;">
			<div class="row">
				
				<div class=" card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					
					<!-- Error Messages -->	
					<?php

					if(isset($updateError))echo $updateError;
					if(isset($UpdateSuccess))echo $UpdateSuccess;



					?>


						<form class="form-group" action="" method="post" >
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control" value="<?php if(isset($name))echo $name; ?>">

						<?php if(isset($nameError))echo $nameError; ?>

					</div><!--full name-->

					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">---Select Your Blood Group---</option>
               
                <?php if(isset($blood_group)) echo '<option selected="" value="'.$blood_group.'">'.$blood_group.'</option>';?>

                ?>


                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O+</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
              <?php if(isset($blood_groupError))echo $blood_groupError; ?>
            </div><!--End form-group-->
            

					<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>

				              		Female<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;"<?php if(isset($gender))
				              		{
				              			if($gender=="Female")echo "checked";
				              		} ?>>


				              		 <?php if(isset($genderError))echo $genderError; ?>
				    </div><!--gender-->
				   

				    <div class="form-inline">
              <label for="name">Date of Birth</label><br>
              <select class="form-control demo-default" id="date" name="day" style="margin-bottom:10px;" required>
                <option value="">---Date---</option>

                 <?php
                  if(isset($date[2])) echo '<option selected="" value="'.$date[2].'">'.$date[2].'</option>';?>

                ?>

                <option value="01" >01</option><option value="02" >02</option><option value="03" >03</option><option value="04" >04</option><option value="05" >05</option><option value="06" >06</option><option value="07" >07</option> <option value="08" >08</option><option value="09" >09</option><option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" >30</option><option value="31" >31</option>
              </select>
              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
               <option value="">---Month---</option>
               <?php
                  if(isset($date[1])) echo '<option selected="" value="'.$date[1].'">'.$date[1].'</option>';?>

                ?>


                <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>
              </select>
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>

                <option value="">---Year---</option>
                <?php
                  if(isset($date[0])) echo '<option selected="" value="'.$date[0].'">'.$date[0].'</option>';?>

                ?>
                <option value="1957" >1957</option><option value="1958" >1958</option><option value="1959" >1959</option><option value="1960" >1960</option><option value="1961" >1961</option><option value="1962" >1962</option><option value="1963" >1963</option><option value="1964" >1964</option><option value="1965" >1965</option><option value="1966" >1966</option><option value="1967" >1967</option><option value="1968" >1968</option><option value="1969" >1969</option><option value="1970" >1970</option><option value="1971" >1971</option><option value="1972" >1972</option><option value="1973" >1973</option><option value="1974" >1974</option><option value="1975" >1975</option><option value="1976" >1976</option><option value="1977" >1977</option><option value="1978" >1978</option><option value="1979" >1979</option><option value="1980" >1980</option><option value="1981" >1981</option><option value="1982" >1982</option><option value="1983" >1983</option><option value="1984" >1984</option><option value="1985" >1985</option><option value="1986" >1986</option><option value="1987" >1987</option><option value="1988" >1988</option><option value="1989" >1989</option><option value="1990" >1990</option><option value="1991" >1991</option><option value="1992" >1992</option><option value="1993" >1993</option><option value="1994" >1994</option><option value="1995" >1995</option><option value="1996" >1996</option><option value="1997" >1997</option><option value="1998" >1998</option><option value="1999" >1999</option>
              </select>
              
            </div><!--End form-group-->
            <?php if(isset($dayError))echo $dayError; ?>
            	<?php if(isset($monthError))echo $monthError; ?>
            	<?php if(isset($yearError))echo $yearError; ?>
            	

				    <div class="form-group">
						<label for="fullname">Email</label>
						<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control" value="<?php if(isset($email))echo $email; ?>">
						<?php if(isset($emailError))echo $emailError; ?>
					</div>
					  	

					<div class="form-group">
              <label for="contact_no">Contact No</label>
              <input type="text" name="contact_no"  placeholder="+880********" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11" value="<?php if(isset($contact))echo $contact; ?>">
              <?php if(isset($contactError))echo $contactError; ?>
            </div><!--End form-group-->

              	

					<div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" required>

	<option value="">-- Select --</option>
              
              <?php
                if(isset($city)) echo '<option selected="" value="'.$city.'">'.$city.'</option>';?>
                ?>

	<optgroup title="Dhaka Division" label="&raquo; Dhaka Division">
  <option value="Dhaka">Dhaka</option>
  <option value="Faridpur">Faridpur</option>
  <option value="Gazipur">Gazipur</option>
  <option value="Gopalganj">Gopalganj</option>
  <option value="Kishoreganj">Kishoreganj</option>
  <option value="Madaripur">Madaripur</option>
  <option value="Manikganj">Manikganj</option>
  <option value="Munshiganj">Munshiganj</option>
  <option value="Narayanganj">Narayanganj</option>
  <option value="Narsingdi">Narsingdi</option>
  <option value="Rajbari">Rajbari</option>
  <option value="Shariatpur">Shariatpur</option>
  <option value="Tangail">Tangail</option>
</optgroup>

<!-- Continue with other divisions similarly -->
</option><!-- Chittagong Division -->
<optgroup title="Chittagong Division" label="&raquo; Chittagong Division">
  <option value="Brahmanbaria">Brahmanbaria</option>
  <option value="Chandpur">Chandpur</option>
  <option value="Chittagong">Chittagong</option>
  <option value="Comilla">Comilla</option>
  <option value="CoxsBazar">Cox's Bazar</option>
  <option value="Feni">Feni</option>
  <option value="Khagrachari">Khagrachari</option>
  <option value="Lakshmipur">Lakshmipur</option>
  <option value="Noakhali">Noakhali</option>
  <option value="Rangamati">Rangamati</option>
</optgroup>

<!-- Khulna Division -->
<optgroup title="Khulna Division" label="&raquo; Khulna Division">
  <option value="Bagerhat">Bagerhat</option>
  <option value="Chuadanga">Chuadanga</option>
  <option value="Jessore">Jessore</option>
  <option value="Jhenaidah">Jhenaidah</option>
  <option value="Khulna">Khulna</option>
  <option value="Kushtia">Kushtia</option>
  <option value="Magura">Magura</option>
  <option value="Meherpur">Meherpur</option>
  <option value="Narail">Narail</option>
  <option value="Satkhira">Satkhira</option>
</optgroup>

<!-- Rajshahi Division -->
<optgroup title="Rajshahi Division" label="&raquo; Rajshahi Division">
  <option value="Bogura">Bogura</option>
  <option value="Joypurhat">Joypurhat</option>
  <option value="Naogaon">Naogaon</option>
  <option value="Natore">Natore</option>
  <option value="Pabna">Pabna</option>
  <option value="Rajshahi">Rajshahi</option>
  <option value="Sirajganj">Sirajganj</option>
</optgroup>

<!-- Barisal Division -->
<optgroup title="Barisal Division" label="&raquo; Barisal Division">
  <option value="Barisal">Barisal</option>
  <option value="Bhola">Bhola</option>
  <option value="Jhalokathi">Jhalokathi</option>
  <option value="Patuakhali">Patuakhali</option>
  <option value="Pirojpur">Pirojpur</option>
</optgroup>

<!-- Sylhet Division -->
<optgroup title="Sylhet Division" label="&raquo; Sylhet Division">
  <option value="Habiganj">Habiganj</option>
  <option value="Moulvibazar">Moulvibazar</option>
  <option value="Sunamganj">Sunamganj</option>
  <option value="Sylhet">Sylhet</option>
</optgroup>

<!-- Rangpur Division -->
<optgroup title="Rangpur Division" label="&raquo; Rangpur Division">
  <option value="Dinajpur">Dinajpur</option>
  <option value="Gaibandha">Gaibandha</option>
  <option value="Kurigram">Kurigram</option>
  <option value="Lalmonirhat">Lalmonirhat</option>
  <option value="Nilphamari">Nilphamari</option>
  <option value="Panchagarh">Panchagarh</option>
  <option value="Rangpur">Rangpur</option>
  <option value="Thakurgaon">Thakurgaon</option>
</optgroup>

<!-- Mymensingh Division -->
<optgroup title="Mymensingh Division" label="&raquo; Mymensingh Division">
  <option value="Jamalpur">Jamalpur</option>
  <option value="Mymensingh">Mymensingh</option>
  <option value="Netrokona">Netrokona</option>
  <option value="Sherpur">Sherpur</option>
</optgroup></select>
 <?php if(isset($cityError))echo $cityError; ?>
            </div><!--city end-->

           

					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">Update</button>
					</div>
				</form>



					</div>
				</div>
				<div class="card col-md-6 offset-md-3">
					<div class="panel panel-default" style="padding: 20px;">
					

					<!-- Messages -->	

						<form action="" method="post" class="form-group form-container" >
							<?php 
				if(isset($passwordError)) echo $passwordError;
				if(isset($UpdatePasswordSuccess)) echo $UpdatePasswordSuccess;
				
					 ?>
							
							<div class="form-group">
								<label for="oldpassword">Current Password</label>
								<input type="password" required name="old_password" placeholder="Current Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="newpassword">New Password</label>
								<input type="password" required name="new_password" placeholder="New Password" class="form-control">
							</div>
							<div class="form-group">
								<label for="c_password">Confirm Password</label>
								<input type="password" required name="c_password" placeholder="Confirm Password" class="form-control">
							</div>
							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update_pass">Update Password</button>
							</div>
						</form>
					</div>
				</div>

							


				<div class="card col-md-6 offset-md-3">
					
					<!-- Display Message -->


					<div class="panel panel-default" style="padding: 20px;">
						<form action="" method="post" class="form-group form-container" >
						
							<div class="form-group">
								<label for="oldpassword">Password</label>
								<input type="password" required name="account_password" placeholder="Current Password" class="form-control">
							</div>

							<div class="form-group">
								<button class="btn btn-lg btn-danger center-aligned" type="submit" name="delete_account">Delete Account</button>
							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
	
<?php
include 'include/footer.php'; 
 ?>
