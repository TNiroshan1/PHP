<?php
    $serverName = "iotserver1.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "iot_db", // update me
        "Uid" => "iotuser", // update me
        "PWD" => "UOK@1234" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "INSERT INTO bronze (DeviceID, Date_time, ChannelID, Duration)
  VALUES (11, 'Doe', 11,11)";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("insert data to table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
   
    sqlsrv_free_stmt($getResults);
?>