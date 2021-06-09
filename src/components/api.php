<?php include ('header.php');?>

<body>

This is a random dog picture.<br>
<button class="next" onClick="window.location.reload();">New dog please</button>


<?php
// GET RANDOM DOG PICTURE
isset($_POST['dogimg']);
  $url = "https://dog.ceo/api/breeds/image/random";
  $data = json_decode(file_get_contents($url), true);
  $image = $data['message'];
  echo "<img src='$image'></img>";
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