 <?php
 require 'conexion.php';

session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];

$query = "SELECT COUNT(*) as contar FROM `registro` WHERE `user` = '$user' AND `pass` = '$pass'";


$consulta = mysqli_query($conexion, $query); 

$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['username'] = $user;
    $_SESSION['autenticado'] = 'si';
    header("location: indexuser.php");
}else{
  echo "datos incorrectos";
}
  ?>
