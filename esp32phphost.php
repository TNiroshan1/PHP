<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:iotserver1.database.windows.net,1433; Database = iot_db", "iotuser", "{UOK@1234}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

/* // SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "iotuser", "pwd" => "{UOK@1234}", "Database" => "iot_db", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:iotserver1.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo); */

echo "Database connection is OK<br>"; 

if(isset($_POST["Device_ID"]) && isset($_POST["Date_Time"]) && isset($_POST["Date_Time"]) && $_POST["Channel_ID"])) {

	$xUnitID = $_POST["Device_ID"];
	$xdate = $_POST["Date_Time"];
	$xTime1 = $_POST["Date_Time"];
	$xChanelID = $_POST["Channel_ID"];

	$sql = "INSERT INTO [dbo].[bronze_layer] 
								
			([UnitID]
            ,[Date1]
            ,[Time1]
            ,[ChanelID])
        VALUES
            (".$xUnitID.", ".$xdate.",".$xTime1.", ".$xChanelID.")"; 

	/* if (mysqli_query($conn, $sql)) { 
		echo "\nNew record created successfully"; 
	} else { 
		echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
	}
} */




?>