<?php
    $serverName = "iotserver1.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "iot_db", // update me
        "Uid" => "iotuser", // update me
        "PWD" => "UOK@1234" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);

	if(isset($_POST["Device_ID"]) && isset($_POST["Date_Time"]) && isset($_POST["Channel_ID"])) {

		$xUnitID = $_POST["Device_ID"];
		$xdate = $_POST["Date_Time"];
		$xTime1 = $_POST["Channel_ID"];
	


    $tsql= "INSERT INTO bronze (DeviceID, Date_time, ChannelID)
  VALUES (".$xUnitID.", ".$xdate.", ".$xChanelID.")";

	}

    $getResults= sqlsrv_query($conn, $tsql);
    echo ("insert data to table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
   
    sqlsrv_free_stmt($getResults);
?>