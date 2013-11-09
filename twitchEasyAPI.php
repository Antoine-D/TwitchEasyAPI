<?php
	class Game {
		private $game_name = "";
		private $viewer_count = -1;
		private $channel_count = -1;

		function Game($gameName, $viewerCount, $channelCount) {
			$game_name = $gameName;
			$viewer_count = $viewerCount;
			$channel_count = $channelCount;
		}

	}

	class Channel {
		private $channelName = "";
		private $channelViewers = -1;
		private $channelGame = "";

		private $smallPreviewImageURL = "";
		private $mediumPreviewImageURL = "";
		private $largePreviewImageURL = "";
	}


	/*
	 * Pre: 0 < n_Channels <= 25
	 * Returns top n_Channels channels
	 */
	function top_n_Channels($n_Channels) {

	}


	/**
	 * Pre: 0 < n_Games <= 10
	 * Returns top n games.
	 */
	function top_n_Games($n_Games) {
		
	}




		$streams = json_decode(file_get_contents("https://api.twitch.tv/kraken/streams"));

		foreach ($streams->streams as &$streamElement) {
			echo "Name: <b>" . $streamElement->channel->name . "</b> Game: <b><i>" . $streamElement->channel->game . "</i></b> <br/><br/>";
		}

?>