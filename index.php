<?
namespace main;
error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once 'class.listR.php';
use listR\ListR as ListR;

$x = new ListR(); //instazio la classe listR

$rows=($x->random());

?>

<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="http://casaalmada.hostinggratis.it/doc/css/reset.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous'/>
<link rel="stylesheet" href="css/style.css">


<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Test lista</title>


<body>

<div class="container p-5">
    <ul class="list-group d-flex justify-content-center">    
<?
foreach ($rows as $key => $row)
    echo "      <li class='rows d-flex justify-content-center list-group-item list-group-item-info ' id='".$key."'><a href='#' onClick='clicked(this)'>".$row."</a></li>";
?>
    </ul>


</div>
<script src="js/script.js"></script>
</body>
</html>

