<?php
 
 $menuArray= array ('Home', 'Notes', 'Report' , 'Submit') ;
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include('script.php');

?>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
	
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.ncbt.ac.nz">NCBT College</a>
    </div>
    <ul class="nav navbar-nav">
    <?php
	foreach ($menuArray as $menu){
    print "<li> <a href='" . $menu . ".php'> $menu </a> </li>";
	}
	?>
    
	
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
    </ul>
  </div>
</nav>
</body>
</html>