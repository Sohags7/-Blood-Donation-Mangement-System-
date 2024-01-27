<?php 

	//include header file
	include ('include/header.php');

?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate the blood, save the life</h1>
						<p class="text-center">Donate the blood to help the others.</p>
						</div>


						<h1 class="text-center">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
				<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --<optgroup title="Dhaka Division" label="&raquo; Dhaka Division">
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
</optgroup>
</select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
									
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
							Blood donation is a selfless act that plays a pivotal role in maintaining the health and well-being of communities worldwide. The process of blood donation, when efficiently managed, forms the backbone of healthcare systems. In this article, we explore the significance of blood donation management and the compelling reasons behind why individuals choose to donate blood
						</p>
						<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Vission</h3>
								<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									"Empowering Lives, One Drop at a Time: Our vision is to create a world where every individual has seamless access to a sustainable and efficient blood donation management system. We envision a future where communities unite, donors are celebrated as heroes, and the act of giving blood becomes a powerful force in saving lives. 
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									One primary goal of our blood donation management system is to boost the overall number of blood donations. Within a specified timeframe, we aim to increase the percentage of individuals registering as donors and participating in blood donation events. we contribute to the availability of life-saving blood for medical treatments, emergencies, and other critical situations.
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									To revolutionize blood donation practices through innovation, compassion, and technology. Our mission is to create a seamless and inclusive platform that connects donors, recipients, and blood banks, fostering a community committed to saving lives.  Together, we are on a mission to ensure that no life is left in need of the life-saving gift of blood."
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>
