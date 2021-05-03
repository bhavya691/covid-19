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
      <tr>
        <th>S.No.</th>
        <th>Last Update Time</th>
        <th>State</th>
        <th>Confirmed</th>
        <th>Active</th>
        <th>Recovered</th>
        <th>Deaths</th>
      </tr>


<?php
$data = file_get_contents('https://api.covid19india.org/data.json');
$cd = json_decode($data,true);

$stateno =  count($cd['statewise']);
$i = 1;
while($i < $stateno){
?>
<tr>
  <td>
    <?php echo $i .'.'?>
  </td>
  <td>
    <?php  echo $cd['statewise'][$i]['lastupdatedtime'] ?>
  </td>
  <td>
    <?php  echo $cd['statewise'][$i]['state'] ?>
  </td>
  <td>
    <?php  echo $cd['statewise'][$i]['confirmed'] ?>
  </td>
  <td>
    <?php  echo $cd['statewise'][$i]['active'] ?>
  </td>
  <td>
    <?php  echo $cd['statewise'][$i]['recovered'] ?>
  </td>
  <td>
    <?php  echo $cd['statewise'][$i]['deaths'] ?>
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