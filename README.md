TwitchEasyAPI
=============

Easy to use, simple API for acessing data from Twitch TV; data is acessible with php function calls instead of parsing through messy JSON files.

<br/>
##  Game

| Functions | Description |
| ---- | --------------- |
| name() | Get the Game's name. |
| viewers() | Get the number of viewers of channels where this Game is being played. |
| number_of_channels() | Get the number of channels where this Game is being played. |
| rank() | Get Game's rank in the top 10 Games by viewer count <br/> (returns -1 if game is not in top 10 by viewer count)|
| average_viewers_per_channel() | Get the average viewers per channel that is playing this Game |

<br/>

## Channel

| Functions | Description |
| ---- | --------------- |
| name() | Get the channel's name |
| viewers() | Get the Channel's viewer count |
| game() | Get the Channel's game being played |
| rank() | Get Channel's rank in the top 25 channels by viewer count <br/> (returns -1 if channel is not in top 25 by viewer count)|
| small_preview_image() | Get url to a 80x50 JPEG of Channel's preview image |
| medium_preview_image() | Get url to a 320x200 JPEG of Channel's preview image |
| large_preview_image() | Get url to a 640x400 JPEG of Channel's preview image |



## Useful Functions

| Functions | Description |
| ---- | --------------- |
| [top_n_Channels( <i>$n</i> )](/README.md#top_n_Channels) | Get the current top <i>n</i> channels by viewership <br/> (<i>n</i> must be [1:25])|
| [top_n_Games( <i>$n</i> )](/README.md#top_n_Games) | Get the current top <i>n</i> games by viewership <br/> (<i>n</i> must be [1:10])|


<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

##Function Details

#### `top_n_Channels()`
Returns a list of blocks objects on `:login`'s block list. List sorted by recency, newest first.

#### `top_n_Games()`
Returns a list of blocks objects on `:login`'s block list. List sorted by recency, newest first.
fgsgfsdfg
