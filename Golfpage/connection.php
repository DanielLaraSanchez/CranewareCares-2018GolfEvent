<?php
$team_name= filter_input(INPUT_POST, 'team_name');
$player_name= filter_input(INPUT_POST, 'player_name');
$handicap= filter_input(INPUT_POST, 'handicap');
$transport= filter_input(INPUT_POST, 'transport');
$diet= filter_input(INPUT_POST, 'diet');
$email= filter_input(INPUT_POST, 'email');
$phone= filter_input(INPUT_POST, 'phone');


$message= "The new user is " . $player_name . "\n\n Their team is " . $team_name . "\n\n Their handicap is " .
 $handicap . "\n\nDo They need transport?" . $transport . "\n\nTheir Dietary Requirements are " . $diet . "\n\n Their Email is " . $email . "\n\n And Their Phone number is " . $phone;

$host= "localhost";
$dbusername= "root";
$dbpassword= "Mayusculas2";
$dbname= "register";

$key = md5('australia');
$salt = md5('australia');

// function encrypt($string, $key){
//   $string = rtrim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $string, MCRYPT_MODE_ECB)));
//     return $string;
// }





$team_name = md5($team_name);
$player_name = md5($player_name);
$handicap = md5($handicap);
$transport = md5($transport);
$diet = md5($diet);
$email = md5($email);
$phone = md5($phone);

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


$sql= "INSERT INTO users (team_name, player_name, handicap, transport, diet, email, phone)
VALUES ( '$team_name', '$player_name', '$handicap', '$transport', '$diet', '$email', '$phone')";

if ($conn->query($sql)){
  echo "new record recorded";
}
else {
  echo "Error: ". $sql ."<br>" . $conn->error;
}




    echo "<script>
                 alert('You have successfuly registered to the Craneware Cares Golf Event 2018');
                 window.history.go(-2);
         </script>";





         $to = 'daniellaraedinburgh@hotmail.com';
         $subject = 'Cranweare Cares Trump Turnberry 2018';
         if (mail($to, $subject, $message)){
             $success = "Message sent, thank you for contacting us!";

             $team_name = $player_name = $handicap = $transport = $diet = $email ='';




}




$conn->close();



?>
