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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptoms">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiaCoronaCases.php">IndiaCoronaCases</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiaDayWiseCases.php">IndiaDayWiseCases</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#prevention">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      
    </ul>
  </div>
</nav>


<section class="corona_update container-fluid">
  <div class="my-5">
    <h3 class="text-uppercase text-center mt-5">COVID-19 Live Updates Of The India</h3>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center">

<?php
$data = file_get_contents('https://api.covid19india.org/data.json');
$cd = json_decode($data,true);

$tn =  count($cd['cases_time_series']);
$i = 1;
while($i < $tn){
?>
<tr>
	<th>Date and Month</th>
	<th colspan="6"></th>
</tr>
<tr>
	<td colspan="6" class="text-left">
		<?php  echo $cd['cases_time_series'][$i]['date'] . "<br>" ?>
    </td>
</tr>
<tr class="text-capitalize text-white">
	<th style="color: #fff; background-color: #ffc107">total confirmed</th>
	<th style="color: #fff; background-color: #4ca550">daily confirmed</th>
	<th style="color: #fff; background-color: #e91e7f">total recovered</th>
	<th style="color: #fff; background-color: #008c76ff">daily recovered</th>
	<th style="color: #fff; background-color: #2196f3">total deceased</th>
	<th style="color: #fff; background-color: #ee2737ff">daily deceased</th>
</tr>
<tr>
  <td style="background-color: #ffe493">
    <?php  echo $cd['cases_time_series'][$i]['totalconfirmed'] ?>
  </td>
  <td style="background-color: #88d28b">
    <?php  echo $cd['cases_time_series'][$i]['dailyconfirmed'] ?>
  </td>
  <td style="background-color: #fc95c6">
    <?php  echo $cd['cases_time_series'][$i]['totalrecovered'] ?>
  </td>
  <td style="background-color: #9ed9ccff">
    <?php  echo $cd['cases_time_series'][$i]['dailyrecovered'] ?>
  </td>
  <td style="background-color: #bed2f3">
    <?php  echo $cd['cases_time_series'][$i]['totaldeceased'] ?>
  </td>
  <td style="background-color: #fb99a1">
    <?php  echo $cd['cases_time_series'][$i]['dailydeceased'] ?>
  </td>
<?php
  $i++; 
}

?>


    </table>
  </div>
</section>

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
</script>

</body>
</html>