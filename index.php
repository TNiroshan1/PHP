<?php
    $serverName = "iotserver1.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "iot_db", // update me
        "Uid" => "iotuser", // update me
        "PWD" => "UOK@1234" // update me
    );
    //Establishes the connection
	if( $conn === false )
     {
     echo "Could not connect.\n";
     die( print_r( sqlsrv_errors(), true));
     }
	
	$device_ID = $_POST['Device_ID'];
	$datetime = $_POST['Date_Time'];
	$channel = $_POST['Channel_ID'];

    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $sqlqurey= "INSERT INTO bronzelayer (DeviceID, Date_time, ChannelID)
  				VALUES (?, ?, ?)";
	
	$http_data = array($device_ID,$datetime,$channel);

    $getResults= sqlsrv_query($conn, $sqlqurey, $http_data);
    echo ("insert data to table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
   
    sqlsrv_free_stmt($getResults);

	sqlsrv_close($conn);
	?>