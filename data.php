<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Retreive Data From Database</title>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
    }
</style>
</head>
<body>

<h2>Retreive Data From Database</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Step 1: Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "portfolio";

        $conn = new mysqli('localhost','root','','portfolio');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Step 2: Execute SQL query to fetch data
        $sql = "SELECT id, name, email, message FROM contactme";
        $result = $conn->query($sql);

        // Step 3: Fetch and process the data
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // Step 4: Display the data in an HTML table
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["message"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }

        // Step 5: Close connection
        $conn->close();
        ?>
    </tbody>
</table>

</body>
</html>
