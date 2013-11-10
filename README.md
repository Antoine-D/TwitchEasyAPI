TwitchEasyAPI
=============

Easy to use, simple API for acessing data from Twitch TV; data is acessible with php function calls instead of parsing through messy JSON files.

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Example of useage:&nbsp; <a href="http://www.antoinedahan.com/TwitchEasyAPI/test.php">test.php</a>

##  Game  <i>(Class)</i>

| Functions | Description |
| ---- | --------------- |
| <h4>name()</h4> | Get the Game's name. |
| <h4>viewers()</h4> | Get the number of viewers of channels where this Game is being played. |
| <h4>number_of_channels()</h4> | Get the number of channels where this Game is being played. |
| <h4>rank()</h4> | Get Game's rank in the top 10 Games by viewer count <br/> (returns -1 if game is not in top 10 by viewer count)|
| <h4>average_viewers_per_channel()</h4> | Get the average viewers per channel that is playing this Game |
| <h4>small_box_image()</h4> | Get url to a 52x72 JPEG of Games's box image |
| <h4>medium_box_image()</h4> | Get url to a 136x190 JPEG of Games's box image |
| <h4>large_box_image()</h4> | Get url to a 272x380 JPEG of Games's box image |
| <h4>small_logo_image()</h4> | Get url to a 60x36 JPEG of Games's logo image |
| <h4>medium_logo_image()</h4> | Get url to a 120x72 JPEG of Games's logo image |
| <h4>large_logo_image()</h4> | Get url to a 240x144 JPEG of Games's logo image |

## Channel <i>(Class)</i>

| Functions | Description |
| ---- | --------------- |
| <h4>name()</h4> | Get the channel's name |
| <h4>viewers()</h4> | Get the Channel's viewer count |
| <h4>game()</h4> | Get the Channel's game being played |
| <h4>rank()</h4> | Get Channel's rank in the top 25 channels by viewer count <br/> (returns -1 if channel is not in top 25 by viewer count)|
| <h4>small_preview_image()</h4> | Get url to a 80x50 JPEG of Channel's preview image |
| <h4>medium_preview_image()</h4> | Get url to a 320x200 JPEG of Channel's preview image |
| <h4>large_preview_image()</h4> | Get url to a 640x400 JPEG of Channel's preview image |


## Extra Functions

| Functions | Description |
| ---- | --------------- |
| <h4>[top_n_Channels( <i>$n</i> )](#topChannels)</h4> | Get the current top <i>n</i> channels by viewership <br/> (<i>n</i> must be [1:25])|
| <h4>[top_n_Games( <i>$n</i> )](#topGames)</h4> | Get the current top <i>n</i> games by viewership <br/> (<i>n</i> must be [1:10])|


<br /><br />

##Function Details <br />

### <a name='topChannels'>top_n_Channels( <i>$n</i> )
Returns an array of the top <b><i>n</i></b> Channels by viewership.

####Paramaters:
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th width="50">Type</th>
            <th width=100%>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>n</code></td>
            <td>integer</td>
            <td>Number of top Channels you want in return array. <b>Must be in [1:25] or empty array is returned.</b></td>
        </tr>
    </tbody>
</table> <br />



### <a name='topGames'>top_n_Games( <i>$n</i> )
Returns an array of the top <b><i>n</i></b> Games by viewership.

####Paramaters:
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th width="50">Type</th>
            <th width=100%>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>n</code></td>
            <td>integer</td>
            <td>Number of top Games you want in return array. <b>Must be in [1:10] or empty array is returned.</b></td>
        </tr>
    </tbody>
</table> <br />

