<?php

	class Game {

		private $game_name = "";
		private $game_viewers = -1;
		private $channel_count = -1;
		
		private $game_rank = -1;

		/*Game Box*/
		private $smallBoxImageURL = "";
		private $mediumBoxImageURL = "";
		private $largeBoxImageURL = "";

		/*Game Logo*/
		private $smallLogoImageURL = "";
		private $mediumLogoImageURL = "";
		private $largeLogoImageURL = "";

		function __construct($gameName, $viewerCount, $channelCount) {
			$this->game_name = $gameName;
			$this->game_viewers = $viewerCount;
			$this->game_channels = $channelCount;
		}

		function name() {
			return $this->game_name;
		}

		function viewers() {
			return $this->game_viewers;
		}

		function number_of_channels() {
			return $this->game_channels;
		}

		function set_rank($gameRank) {
			$this->game_rank = $gameRank;
		}

		function rank() {
			return $this->game_rank;
		}

		function average_viewers_per_channel() {
			if($this->game_channels < 0 && $this->game_viewers < 0) {
				return 0;
			}

			else {
				return number_format(bcdiv($this->game_viewers, $this->game_channels, 3), 2);
			}
		}



				/* Box Images */
		function small_box_image() {
			return $this->smallBoxImageURL;
		}

		function medium_box_image() {
			return $this->mediumBoxImageURL;
		}

		function large_box_image() {
			return $this->largeBoxImageURL;
		}

		function setBoxImages($small, $medium, $large) {
			$this->smallBoxImageURL = $small;
			$this->mediumBoxImageURL = $medium;
			$this->largeBoxImageURL = $large;
		}



				/*Logo Images */
		function small_logo_image() {
			return $this->smallLogoImageURL;
		}

		function medium_logo_image() {
			return $this->mediumLogoImageURL;
		}

		function large_logo_image() {
			return $this->largeLogoImageURL;
		}

		function setLogoImages($small, $medium, $large) {
			$this->smallLogoImageURL = $small;
			$this->mediumLogoImageURL = $medium;
			$this->largeLogoImageURL = $large;
		}

	}

	class Channel {

		private $channel_name = "";
		private $channel_game = "";
		private $channel_viewers = -1;

		private $channel_rank = -1; //Rank from the last top_n_Channels() call.

		private $smallPreviewImageURL = "";
		private $mediumPreviewImageURL = "";
		private $largePreviewImageURL = "";

		function __construct($channelName, $channelGame, $channelViewers) {
			$this->channel_name = $channelName;
			$this->channel_game = $channelGame;
			$this->channel_viewers = $channelViewers;
		}

		function name() {
			return $this->channel_name;
		}

		function viewers() {
			return $this->channel_viewers;
		}

		function game() {
			return $this->channel_game;
		}

		function set_rank($rankNumber) {
			$this->channel_rank = $rankNumber;
		}

		function rank() {
			return $this->channel_rank;
		}

		function setImages($small, $medium, $large) {
			$this->smallPreviewImageURL = $small;
			$this->mediumPreviewImageURL = $medium;
			$this->largePreviewImageURL = $large;
		}

		function small_preview_image() {
			return $this->smallPreviewImageURL;
		}
		
		function medium_preview_image() {
			return $this->mediumPreviewImageURL;
		}

		function large_preview_image() {
			return $this->largePreviewImageURL;
		}

	}


	/*
	 * Pre: 0 < n <= 25 (OTHERWISE: return empty array)
	 * Returns top n channels
	 */
	function top_n_Channels($n) {
		if($n > 0 && $n <= 25) {
			$incrementor = 0;
			$streams = json_decode(file_get_contents("https://api.twitch.tv/kraken/streams"));
			$topChannels;

			while($incrementor < $n) {
				$topChannels[$incrementor] = new Channel($streams->streams[$incrementor]->channel->name, $streams->streams[$incrementor]->channel->game, $streams->streams[$incrementor]->viewers);
				$topChannels[$incrementor]->set_rank($incrementor + 1);
				$topChannels[$incrementor]->setImages($streams->streams[$incrementor]->preview->small, $streams->streams[$incrementor]->preview->medium, $streams->streams[$incrementor]->preview->large);

				$incrementor++;
			}

			return $topChannels;
		}

		else {
			return array(); //Invalid paramater n --> so return an empty array
		}
	}


	/**
	 * Pre: 0 < n <= 10
	 * Returns top n games.
	 */
	function top_n_Games($n) {
		if($n > 0 && $n <= 10) {
			$incrementor = 0;
			$games = json_decode(file_get_contents("https://api.twitch.tv/kraken/games/top"));
			$topGames;

			while($incrementor < $n) {
				$topGames[$incrementor] = new Game($games->top[$incrementor]->game->name, $games->top[$incrementor]->viewers, $games->top[$incrementor]->channels);
				$topGames[$incrementor]->set_rank($incrementor + 1);
				$topGames[$incrementor]->setBoxImages($games->top[$incrementor]->game->box->small, $games->top[$incrementor]->game->box->medium, $games->top[$incrementor]->game->box->large);
				$topGames[$incrementor]->setLogoImages($games->top[$incrementor]->game->logo->small, $games->top[$incrementor]->game->logo->medium, $games->top[$incrementor]->game->logo->large);
				
				$incrementor++;
			}

			return $topGames;
		}

		else {
			return array(); //Invalid paramater n --> so return an empty array
		}
	}

?>