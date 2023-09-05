<?php
// create the connection
$conn = mysqli_connect("sql108.infinityfree.com", "if0_34842570", "8HzEo4ni2gn", "if0_34842570_nidhi");
if (!$conn) {
    die("Error in connection: " . mysqli_connect_error());
}
else{
    echo "connected";
}

$apiKey = "39856be6a95ec37d516174d366a392c8";


if(isset($_POST['cityname'])) {
    // Fetches the cityname passed through POST method
    $cityname = $_POST['cityname'];
    // fetch from API
    $apiUrl = "https://api.openweathermap.org/data/2.5/weather?units=metric&q=${cityname}&appid=${apiKey}"; // Replace with the actual API URL
    $json_data = file_get_contents($apiUrl);
    if (!$json_data) {
        die("Error fetching data from API");
    }

    // convert JSON to array
    $data = json_decode($json_data, true);
    if (!$data) {
        die("Error decoding JSON data");
    }

 // Access the data
$city_name = isset($data['city_name']) ? mysqli_real_escape_string($conn, $data['city_name']) : '';
$temperature = isset($data['main']['temperature']) ? floatval($data['main']['temperature']) : 0.0;
$humidity = isset($data['main']['humidity']) ? intval($data['main']['humidity']) : 0;
$wind_speed = isset($data['wind']['wind_speed']) ? floatval($data['wind']['wind_speed']) : 0.0;
$description = isset($data['main']['description']) ? mysqli_real_escape_string($conn, $data['main']['description']) : '';
$icon = isset($data['icon']['icon']) ? mysqli_real_escape_string($conn, $data['icon']['icon']) : '';
$timestamp = isset($data['date']) ? intval($data['date']) : 0;
$date = gmdate("Y-m-d H:i:s", $timestamp);

// Prepare and run the query
$sql = "INSERT INTO weather_records (city_name, temperature, humidity, wind_speed, description, icon, date) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
if (!$stmt) {
    die("Error preparing query: " . mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sdddsss", $city_name, $temperature, $humidity, $wind_speed, $description, $icon, $date);
$result = mysqli_stmt_execute($stmt);

if ($result) {
    echo "Data inserted successfully.";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}

mysqli_close($conn);

    if (!$result) {
        die("Error executing query: " . mysqli_error($conn));
    }

    echo "Weather data inserted successfully";


}

// close the connection
mysqli_stmt_close($stmt);


?>