<?php
	/*Error Reporting On*/
	ini_set('display_errors',1); 
 	error_reporting(E_ALL);

	require_once("twitchEasyAPI.php");

	/** 	Table of top 14 Channels 	  **/
	/***********************************/
	$topChannels = top_n_Channels(14);

	echo "<br/><br/><br/><br/><br/>";

	echo "<table border=\"1\">";
		echo "<tr>";
			echo "<th>Rank</th>";
			echo "<th>Channel Name</th>";
			echo "<th>Game Played</th>";
			echo "<th>Viewer Count</th>";
			echo "<th>Channel Preview</th>";
		echo "</tr>";

	foreach($topChannels as $channelElement) {
		echo "<tr>";
		echo "<td><center>" . $channelElement->rank() . "</center></td>";
		echo "<td><center>" . $channelElement->name() . "</center></td>";
		echo "<td><center>" . $channelElement->game() . "</center></td>";
		echo "<td><center>" . $channelElement->viewers() . "</center></td>";
		echo "<td><center>" . "<img src=\"" . $channelElement->small_preview_image() . "\" alt=\"Nope\">" . "</center></td>";
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
			echo "<th>Box Image</th>";
			echo "<th>Logo Image</th>";
		echo "</tr>";

	foreach($topGames as $gameElement) {
		echo "<tr><center>";
		echo "<td><center>" . $gameElement->rank() . "</td>";
		echo "<td><center>" . $gameElement->name() . "</td>";
		echo "<td><center>" . $gameElement->number_of_channels() . "</td>";
		echo "<td><center>" . $gameElement->viewers() . "</td>";
		echo "<td><center>" . $gameElement->average_viewers_per_channel() . "</td>";
		echo "<td><center>" . "<img src=\"" . $gameElement->small_box_image() . "\" alt=\"Nope\">" . "</td>";
		echo "<td><center>" . "<img src=\"" . $gameElement->small_logo_image() . "\" alt=\"Nope\">" . "</td>";
		echo "</tr>";
	}

    echo "</table>";

    echo "<br/><br/><br/><br/><br/>";

?>