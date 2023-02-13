<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
		.error {
			color:red;
		}
	</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<br><br>
    <div class="container">
    <?php

        // Read the JSON file into a string
        $json_string = file_get_contents("data.json");

        // Decode the JSON string into an associative array
        $data = json_decode($json_string, true);

        // Access the data in the array
        echo 'Name: ' . $data['Student'][0]['Name'] . '<br>';
        echo 'Roll: ' . $data['Student'][0]['Roll'] . '<br>';
        echo 'Subject: ' . $data['Student'][0]['subject'] . '<br><br>';

        echo 'Name: ' . $data['Student'][1]['Name'] . '<br>';
        echo 'Roll: ' . $data['Student'][1]['Roll'] . '<br>';
        echo 'Subject: ' . $data['Student'][1]['subject'] . '<br>';

    ?>
    </div>
</body>
</html>