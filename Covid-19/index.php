<!DOCTYPE html>
<html>
<head>
	<title>Covid-19</title>
	<?php include 'links/links.php';?>
	<?php include 'css/style.php';?>
</head>
<body onload="fetch()">
	<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler nav_but" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link ml-3" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link ml-3" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link ml-3" href="#symptoms">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link ml-3" href="indiaCoronaCases.php">IndiaCoronaCases</a>
      </li>
      <li class="nav-item">
        <a class="nav-link ml-3" href="indiaDayWiseCases.php">IndiaDayWiseCases</a>
      </li>
      <li class="nav-item">
        <a class="nav-link ml-3" href="#prevention">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav_c ml-3" href="#contact">Contact</a>
      </li>
      
    </ul>
  </div>
</nav>

<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside h-100 w-100 d-flex justify-content-center align-items-center ml-5 mt-1">
				<img src="images/header.png" width="400" height="400" class="mr-5 mh_im">
			</div>	
		</div>
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside h-100 w-100 d-flex justify-content-center align-items-center">
				<h1>Let's stay safe and fight against cor<span class="c_rotate"><img src="images/virus.png" width="50" height="50"></span>na virus
				together.</h1>
		</div>
	</div>
</div>

<!-- ------------------corona latest updates-------------- -->
<section class="corona_update container-fluid">
	<div class="mb-5">
		<h3 class="text-uppercase text-center mt-5">COVID-19 Live Updates Of The World</h3>
	</div>
	<div class="table-responsive">
		<table class="table table-bordered table-striped text-center" id="tbval">
			<tr>
				<th>Country</th>
				<th>Total Confirmed</th>
				<th>Total Recovered</th>
				<th>Total Deaths</th>
				<th>New Confirmed</th>
				<th>New Recovered</th>
				<th>New Deaths</th>
			</tr>
		</table>
	</div>
</section>
<!-- -------------------about--------------- -->
<div class="container-fluid ab_section pt-5 pb-5 " id="about">
	<div class="section_header text-center mt-4 mb-5">
		<h1>ABOUT COVID-19</h1>		
	</div>
	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-5 im_about">
			<img src="images/co_about.jpg" class="img-fluid" >
		</div>
		<div class="col-lg-6 col-md-6 col-12 ml-5 ab_text">
			<h2>WHAT YOU NEED TO KNOW</h2>
			<p>COVID-19 is the disease caused by SARS-CoV-2, the coronavirus that emerged in December 2019.</p>
			<p>COVID-19 can be severe, and has caused millions of deaths around the world as well as lasting health problems in some who have survived the illness.</p>
			<p>The coronavirus can be spread from person to person. It is diagnosed with a laboratory test.</p>
			<p>COVID-19 vaccines have been authorized for emergency use by the U.S. Food and Drug Administration, and vaccination programs are in progress across the U.S. and in many parts of the world.</p>
		</div>
	</div>	
</div>


<!-- --------------corona symptoms-------------- -->

<div class="container-fluid pt-5 pb-5 " id="symptoms">
	<div class="section_header text-center mt-4 mb-5">
		<h1>Corona symptoms</h1>		
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/cough.png" class="img-fluid" width="130" height="130">
					<figcaption>
						Cough
					</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/headache.png" class="img-fluid" width="130" height="130">
					<figcaption>
						Headache
					</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/tired.png" class="img-fluid ml-4" width="130" height="130" >
					<figcaption>
						Tiredness
					</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/difficulty-breathing.png" class="img-fluid" width="130" height="130">
					<figcaption>
						Difficulty breathing
					</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/fever.png" class="img-fluid" width="130" height="130">
					<figcaption>
						Fever
					</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="images/running-nose.png" class="img-fluid" width="130" height="130">
					<figcaption>
						Running nose
					</figcaption>
				</figure>
			</div>
		</div>
	</div>
</div>

<!-- --------------Prevention against coronavirus-------------- -->

<div class="container-fluid ab_section pt-5 pb-5 " id="prevention">
	<div class="section_header text-center mt-4 mb-5">
		<h1>Prevention against Coronavairus</h1>		
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="images/handwash.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Wash your hands regularly for 20 seconds,with soap and water or alcohol-based hand rub.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="images/news.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Stay informed by news and follow the recommended practices.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="images/mask.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="images/house.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Stay home and self isolate from others in the household if you feel unwell .</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="images/patient.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>If you have fever,cough and difficulty in breathing,seek medical care early.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<img src="images/social-distancing.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Avoid close contact (2 meter or 6 feet) with people who are unwell.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- --------------Contact us-------------- -->

<div class="container-fluid sub_section pt-5 pb-5 " id="contact">
	<div class="section_header text-center mt-4 mb-5">
		<h1>Contact Us ASAP</h1>		
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">
				<form action="" method="POST">
					<div class="form-group">
					   <label>Username</label>
					   <input type="text" class="form-control" name="username" placeholder="Enter your name" autocomplete="off" required>
					 </div>
					 <div class="form-group">
					   <label>Mobile no.</label>
					   <input type="number" class="form-control" name="mobile" placeholder="Enter your mobile number" autocomplete="off" required>
					 </div>
					<div class="form-group">
					   <label for="exampleFormControlInput1">Email address</label>
					   <input type="email" class="form-control" name="email" id="exampleFormControlInput1"placeholder="Enter your email address" autocomplete="off" required>
					 </div>
					 <div class="form-group">
					 	<label>Select Symptoms</label><br>
					 	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
					 		<input type="checkbox" class="custom-control-input" id="customcheckbox1"
					 		name="coronasym[]" value="fever">
					 		<label class="custom-control-label" for="customcheckbox1">Fever</label>
					 	</div>
					 	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
					 		<input type="checkbox" class="custom-control-input" id="customcheckbox2"
					 		name="coronasym[]" value="cold">
					 		<label class="custom-control-label" for="customcheckbox2">Cold</label>
					 	</div>
					 	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
					 		<input type="checkbox" class="custom-control-input" id="customcheckbox3"
					 		name="coronasym[]" value="tired">
					 		<label class="custom-control-label" for="customcheckbox3">Feeling weak</label>
					 	</div>
					 	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
					 		<input type="checkbox" class="custom-control-input" id="customcheckbox4"
					 		name="coronasym[]" value="breath">
					 		<label class="custom-control-label" for="customcheckbox4">Difficulty in breathing</label>
					 	</div>
					 </div>
					 <div class="form-group">
					   <label for="exampleFormControlTextarea1">Message</label>
					   <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
					 </div>
					 <button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>

</div>

<!-- ------------------go to top------------ -->
<div class="container scrollTop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="gototop()" id="mybtn"></i>
</div>



<!-- --------------footer----------- -->
<footer class="mt-5">
	<div class="footer_style text-center text-white container-fluid">
		<p>copyright by Bhavya Raj Deora</p>
	</div>
</footer>

<script type="text/javascript">
$('.count').counterUp({
	delay:10,
	time:5000
})
myButton = document.getElementById("mybtn");
window.onscroll = function() {scrollbtdis()};
function scrollbtdis(){
	if(document.body.scrollTop > 90 || document.documentElement.scrollTop > 90){
		myButton.style.display = "block";
	}else{
		myButton.style.display = "none";
	}
}
function gototop(){
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}
function fetch(){
	$.get("https://api.covid19api.com/summary" , 
		function (data){
			console.log(data['Countries'].length)
			var table = document.getElementById('tbval');
			for (var i = 1; i<(data['Countries'].length); i++) {
				var a = tbval.insertRow();
				a.insertCell(0);

				table.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
				table.rows[i].cells[0].style.background = '#7a4a91';
				table.rows[i].cells[0].style.color = '#fff';

				a.insertCell(1);
				table.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
				table.rows[i].cells[1].style.background = '#4bb7d8';

				a.insertCell(2);
				table.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
				table.rows[i].cells[2].style.background = '#9cc850';

				a.insertCell(3);
				table.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
				table.rows[i].cells[3].style.background = '#f36e23';

				a.insertCell(4);
				table.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
				table.rows[i].cells[4].style.background = '#4bb7d8';

				a.insertCell(5);
				table.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
				table.rows[i].cells[5].style.background = '#9cc850';

				a.insertCell(6);
				table.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
				table.rows[i].cells[6].style.background = '#f36e23';

			}
			}
		);
}
</script>

</body>
</html>

<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$symptoms = $_POST['coronasym'];
	$msg = $_POST['msg'];

	$check = "";
	foreach ($symptoms as $check1) {
		$check .= $check1."," ;
	}

	$insert = "insert into coronacases(username, email, mobile, symp, message) values('$username','$email','$mobile','$check','$msg')"; 
	$query = mysqli_query($con,$insert);

	if($query){
	?>
	<script>
		alert("Inserted Properly")
	</script>
	<?php
}else{
	?>
	<script>
		alert("Not Inserted Properly")
	</script>
	<?php
}

}

?>