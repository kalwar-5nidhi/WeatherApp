<!DOCTYPE html>
<html>
<head>
    <title>Weather Data Viewer</title>
</head>
<body>

<h1>Weather Data Viewer</h1>

<?php
// Database connection settings
$servername = "localhost";  // Change this to your database server
$username = "root";  // Change this to your database username
$password = "";  // Change this to your database password
$dbname = "weather_data";

// Create connection
$conn = mysqli_connect("sql108.infinityfree.com", "if0_34842570", "8HzEo4ni2gn", "if0_34842570_nidhi");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve weather data
$sql = "SELECT name, humidity, temp, windspeed, pressure, datetime FROM data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>Name</th>
    <th>Humidity</th>
    <th>Temperature</th>
    <th>Wind Speed</th>
    <th>Pressure</th>
    <th>Date and Time</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['humidity'] . "</td>";
        echo "<td>" . $row['temp'] . "</td>";
        echo "<td>" . $row['windspeed'] . "</td>";
        echo "<td>" . $row['pressure'] . "</td>";
        echo "<td>" . $row['datetime'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No weather data available.";
}

// Close connection
$conn->close();
?>

</body>
</html><!DOCTYPE html>
<html>
<head>
    <title>Weather Data Viewer</title>
</head>
<body>

<h1>Weather Data Viewer</h1>

<?php
// Database connection settings
$servername = "localhost";  // Change this to your database server
$username = "root";  // Change this to your database username
$password = "";  // Change this to your database password
$dbname = "weather_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve weather data
$sql = "SELECT name, humidity, temp, windspeed, pressure, datetime FROM data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>Name</th>
    <th>Humidity</th>
    <th>Temperature</th>
    <th>Wind Speed</th>
    <th>Pressure</th>
    <th>Date and Time</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['humidity'] . "</td>";
        echo "<td>" . $row['temp'] . "</td>";
        echo "<td>" . $row['windspeed'] . "</td>";
        echo "<td>" . $row['pressure'] . "</td>";
        echo "<td>" . $row['datetime'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No weather data available.";
}

// Close connection
$conn->close();
?>

</body>
</html><!DOCTYPE html>
<html>
<head>
    <title>Weather Data Viewer</title>
</head>
<body>

<h1>Weather Data Viewer</h1>

<?php
// Database connection settings
$servername = "localhost";  // Change this to your database server
$username = "root";  // Change this to your database username
$password = "";  // Change this to your database password
$dbname = "weather_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve weather data
$sql = "SELECT name, humidity, temp, windspeed, pressure, datetime FROM data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>Name</th>
    <th>Humidity</th>
    <th>Temperature</th>
    <th>Wind Speed</th>
    <th>Pressure</th>
    <th>Date and Time</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['humidity'] . "</td>";
        echo "<td>" . $row['temp'] . "</td>";
        echo "<td>" . $row['windspeed'] . "</td>";
        echo "<td>" . $row['pressure'] . "</td>";
        echo "<td>" . $row['datetime'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No weather data available.";
}

// Close connection
$conn->close();
?>

</body>
</html><!DOCTYPE html>
<html>
<head>
    <title>Weather Data Viewer</title>
</head>
<body>

<h1>Weather Data Viewer</h1>

<?php
// Database connection settings
$servername = "localhost";  // Change this to your database server
$username = "root";  // Change this to your database username
$password = "";  // Change this to your database password
$dbname = "weather_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve weather data
$sql = "SELECT name, humidity, temp, windspeed, pressure, datetime FROM data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>Name</th>
    <th>Humidity</th>
    <th>Temperature</th>
    <th>Wind Speed</th>
    <th>Pressure</th>
    <th>Date and Time</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['humidity'] . "</td>";
        echo "<td>" . $row['temp'] . "</td>";
        echo "<td>" . $row['windspeed'] . "</td>";
        echo "<td>" . $row['pressure'] . "</td>";
        echo "<td>" . $row['datetime'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No weather data available.";
}

// Close connection
$conn->close();
?>

</body>
</html>