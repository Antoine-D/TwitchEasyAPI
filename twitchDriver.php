<?php
	/*Error Reporting On*/
	ini_set('display_errors',1); 
 	error_reporting(E_ALL);

	require_once("twitchEasyAPI.php");

	/** 	Table of top 14 Channels 	  **/
	/***********************************/
	$topChannels = top_n_Channels(14);

	echo "<table border=\"1\">";
		echo "<tr>";
			echo "<th>Rank</th>";
			echo "<th>Channel Name</th>";
			echo "<th>Game Played</th>";
			echo "<th>Viewer Count</th>";
		echo "</tr>";

	foreach($topChannels as $channelElement) {
		echo "<tr>";
		echo "<td>" . $channelElement->rank() . "</td>";
		echo "<td>" . $channelElement->name() . "</td>";
		echo "<td>" . $channelElement->game() . "</td>";
		echo "<td>" . $channelElement->viewers() . "</td>";
		echo "</tr>";
	}

    echo "</table>";


    echo "<br><br><br>";

    /** 	Table of top 10 games 	  **/
	/***********************************/
	$topGames = top_n_Games(10);

	echo "<table border=\"1\">";
		echo "<tr>";
			echo "<th>Rank</th>";
			echo "<th>Game Name</th>";
			echo "<th>Channel Count</th>";
			echo "<th>Viewer Count</th>";
			echo "<th>Average Viewers per Channel</th>";
		echo "</tr>";

	foreach($topGames as $gameElement) {
		echo "<tr>";
		echo "<td>" . $gameElement->rank() . "</td>";
		echo "<td>" . $gameElement->name() . "</td>";
		echo "<td>" . $gameElement->number_of_channels() . "</td>";
		echo "<td>" . $gameElement->viewers() . "</td>";
		echo "<td>" . $gameElement->average_viewers_per_channel() . "</td>";
		echo "</tr>";
	}

    echo "</table>";

?>