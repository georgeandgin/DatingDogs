<?php include ('header.php');?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    
    <title>Dating Dogs</title>
    <?php include ('../components/config.php');?>
    <?php include ('../components/connect.php');?>
</head>

<body>
<div id="center">
<h2>This is a random dog picture.</h2><br>
<button id="dogPic" class="next" onClick="window.location.reload();">New dog please</button>


<?php
// GET RANDOM DOG PICTURE
isset($_GET['dogimg']);
  $url = "https://dog.ceo/api/breeds/image/random";
  $data = json_decode(file_get_contents($url), true);
  $image = $data['message'];
  echo "<img id='randomimg' src='$image'></img> </div>";
?>

<?php

// GET RANDOM DOG PICTURE
// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => "https://api.thedogapi.com/v1/images/search",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 30,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "GET",
//   CURLOPT_HTTPHEADER => array(
//     "x-api-key: 718b605c-479c-449d-b7ea-b0b011a51b87"
//   ),
// ));

// $response = curl_exec($curl);
// $err = curl_error($curl);
// curl_close($curl);


// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
// }

?>

<?php include ('../components/footer.php');?>


</body>