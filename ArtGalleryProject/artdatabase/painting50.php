<?php
include('artserver100.php');
// echo "helloooooooo"."<br>";
// echo $tanmay;
// echo "helloooooooo";
// $result=mysqli_query($db,"SELECT * from user");
// // $data=mysqli_fetch_assoc($result);
// // $abs = $data['image'];
// // echo $abs;
// // echo "<img src='../images/".$abs."' >";
// while($data=mysqli_fetch_assoc($result)){
//  $abs = $data['image'];
// echo $abs;
// echo "<img src='../images/".$abs."' >";
// }

?>

<html lang="en">
<head>
  <title>painting50</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="painting1.css">
</head>

<body style="background-color:    #F5F5DC;">
<h1>Hey</h1>
<div class="container-fluid">
  <h1>Browse Art for Sale by Style</h1>
<h4><p>See what's selling to collectors all over the world.</p></h4>

</div>





<div class="row" style="">

<?php
$result=mysqli_query($db,"SELECT * from user");
// $data=mysqli_fetch_assoc($result);
// $abs = $data['image'];
// echo $abs;
// echo "<img src='../images/".$abs."' >";
while($data=mysqli_fetch_assoc($result)){
 $abs = $data['image'];
echo "<div class='col-lg-6'>";
echo "<img src='../images/".$abs."' height=500px width=500px>";
echo "<h1>".$data['artname']."   ".$data['cost']."<h1></div>";
}

?>


        
</div>
<!-- 
<div class="col-md-4">
  <a target="_blank" href="art2.html">
    <img src="/images/art2.jpeg" alt="art1" width="600" height="380">
     <div class="desc"><h3>$170</h3></div>
  </a>
 
     <br>  <br><br>

</div>


<div class="row" style="margin: 15px">
<div class="col-md-6">
  <a target="_blank" href="art3.html">
    <img src="/images/art3.jpeg" alt="art1" width="600" height="410">
     <div class="desc"><h3>$200</h3></div>
  </a>
 
       
</div>

 <div class="col-md-4">
  <a target="_blank" href="art4.html">
    <img src="/images/art4.jpeg" alt="art1" width="600" height="410">
     <div class="desc"><h3>$210</h3></div>

  </a>
 
       
</div>
  <br>  <br><br>

<div class="col-md-6">
  <a target="_blank" href="art5.html">
    <img src="/images/art5.jpeg" alt="art1" width="600" height="410">
     <div class="desc"><h3>$225</h3></div>

  </a>
 
       
</div>

<div class="col-md-4">
  <a target="_blank" href="art8.html">
    <img src="/images/art8.jpeg" alt="art1" width="600" height="410">
     <div class="desc"><h3>$150</h3></div>

  </a>
 
       
</div>





<div class="row" style="margin: 15px">
      <div class="col-md-6">
  <a target="_blank" href="art9.html">
    <img src="/images/art9.jpeg" alt="art1" width="600" height="380">
     <div class="desc"><h3>$335</h3></div>
  </a>
 
        
</div>

<div class="col-md-4">
  <a target="_blank" href="art10.html">
    <img src="/images/art10.jpeg" alt="art1" width="600" height="380">
     <div class="desc"><h3>$265</h3></div>
  </a>
 
     <br>  <br><br>

</div>

<div class="row" style="margin: 15px">
      <div class="col-md-6">
  <a target="_blank" href="art11.html">
    <img src="/images/art11.jpeg" alt="art1" width="600" height="380">
     <div class="desc"><h3>$380</h3></div>
  </a>
 
        
</div>

<div class="col-md-4">
  <a target="_blank" href="art12.html">
    <img src="/images/art12.jpeg" alt="art1" width="600" height="380">
     <div class="desc"><h3>$295</h3></div>
  </a>
 
     <br>  <br><br>

</div>
<div> -->
  <?php
  // $db=mysqli_connect("localhost","root","","artdatabase");
  // $query="SELECT * FROM user  ";
  // $result=mysqli_query($db,$query);
  // while($row = mysqli_fetch_assoc($result)){
  //   echo $row["artname"].$row["cost"].$row["category"];
  // }

  ?>







</div>
</body>	
</head>
</html>