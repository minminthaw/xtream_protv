<?php
    //open connection to mysql db
$servername = "cp.protvmm.live";
$username = "QnweqRPuP8zFzbUhGtZV3XfrbcyMVZHz";
$password = "mNPbVqr9vAqWtE5J8bt8CWP6BcMhN9CM";
$dbname = "xui";
 //Connect to MySQL
$mysql = mysqli_connect($servername, $username, $password, $dbname);

//This will contain a array of your data from database
$result_array = array();
$vod_id = $_POST["id"];
//This will select the specified columns-rows from the database
$sql = "SELECT movie_properties FROM streams WHERE type = 2 AND id = $vod_id";
    
    /* If there are results from database push to result array */
    $result = $mysql->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
echo "[".$row["movie_properties"]."]";
        }
	}
        else{
      	echo "<html>";
		echo "<head>";
		echo "</head>";
		echo "<body>";
		echo "</body>";
		echo "<head>Pro TV Network</head>";
		echo "<p>We don't allow cheating</p>";
		echo "</html>";
    
    }
    
    /*This will send a JSON encded array to client */
    $mysql->close();
    ?>
