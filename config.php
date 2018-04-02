<?php
// If this script was accessed in some other way than requiring it in index.php (such as visiting it in the browser),
// an error will be displayed.
if(!defined("IN_DGLOAD"))
{
	die("This file cannot be run from outside of DGLoad");
}
$Config = array();

// The title of the page. This won't show up in-game, but it doesn't hurt to change it.
$Config["title"] = "CURE RAIN";

// Steam Web API key. This is needed to request info from the Steam API from users. 
$Config["steam_api_key"] = "A8431B26369EE74B832CD99097F05346";

// Gamemode IDs to names mapping.
$Config["gamemode_names"] = array(
	"sandbox" => "Sandbox",
	"darkrp" => "DarkRP",
	"ttt" => "Trouble in Terrorist Town",
	"deathrun" => "Deathrun",
	"murder" => "Murder",
	"guesswho" => "Guess Who",
	"stopitslender" => "Stop it, Slender!",
	"fnafgm" => "Five Nights at Freddy's",
	"thehidden" => "The Hidden",
	"cinema" => "Cinema",
	"prophunt" => "Prop Hunt",
	"underdone" => "Underdone",
	"gungame" => "GunGame",
	"zombiesurvival" => "Zombie Survival",
	"finalfrontier" => "Final Frontier",
	"awesomestrike" => "Awesome Strike: Source",
	"garryware" => "GarryWare"
);

// Whether or not to show the titlebar of widgets.
// This can be overridden on a per-widget basis.
$Config["show_titlebar"] = false;

// Whether or not to put modules in cards by default.
// A card contain a background and a titlebar.
$Config["card"] = false;

// If true, the loading screen will be centered vertically in the window.
$Config["vertical_center"] = false;

// Background audio settings. 
$Config["audio"] = array(
	"disable" => false,
	// The name of a folder to find OGG files in. 
	"folder" => "",
	// Alternatively, a list of filenames or YouTube URLs.
	"urls" => array("https://www.youtube.com/watch?v=urV8MIcLDFk"),
	"volume" => 100,
	"extract_metadata" => true
);

// Background settings.
$Config["background"] = array(
	"source" => "image",
	"options" => array(
		"images" => array("https://i.imgur.com/YHtfw5W.png"),
		"slideshow" => false,
		"shuffle" => false,
		"fade" => false,
		"delay" => 5
	)
);

// The accent color to use. This will be used for the titlebars. 
$Config["accent"] = "orange";
// If true, title text will be white. If false, it will be black.
$Config["light_title"] = false;

// Layout options start here.
// The general layout of the page. Options: 2-column, 3-column, 4-column
$Config["page_layout"] = "4-column";

// The modules at the top of the page, before the columns.
$Config["modules_before"] = array(
	array(
		"module" => "progress",
		"show_titlebar" => false,
		"card" => false,
		"accent_override" => "none",
	),
);

// The actual modules on the page.
$Config["modules"] = array(
	// Column 1
	array(
	),
	// Column 2
	array(
	),
	// Column 3
	array(
	),
	// Column 4
	array(
	)
);

// The modules at the end of the page, after the columns.
$Config["modules_after"] = array(
	array(
		"module" => "player",
		"show_titlebar" => false,
		"card" => true,
		"size" => "small",
	),
);

/*
This is the share code. You can use this to share this configuration with other people, or you can use it to load this configuration after you've saved it. To use it, copy everything from here until the * /, put it in the "Share Code" box at the bottom of the editor, and click "Load":
	pmgp1eYg-CPHqI+oPQlZgkHLRD5Gc0u216V9hL0tA3cxKVZRIeGNBu6nedNGLxftwsJTuXoOSqksaGPRb9ekWK4DsKIghNzFO+IHaei5QnIMVgaQS4Wh4yOc6uEKFtamIA0gJ3mPYaDErH1+jmsy5jZsKD/ivwJO2mRgB2RFOW9Z2BZxAYVm7LBycQWx3XBy7j/KjxdwjY51/dAA2z6gGUTRup3/Wfsm4PnrVERgTqr64WrWvlh3NoAGj7L9BhWLWteaMaF3eit0Zb+yqkPD1kVvPTMd9G35jA2AUY5FHcPJiZyJw8gQ5x6iKzPJXOPIRTey8QxJLzOApVnYxUGIifDx1VOgWAKIH/IiNrLIi9xi3WQCwDAJhMCqazzaRUNMyurolCPGXKgj/rAvNNZd8WPenkhPGJPbCJYwbg+BZ0qtN/9OlUI21NrsmETAxLd6EKZsqRto0pGzK9Wba8LEIuScbQW8Vda6C0ej2sdUkItdPZYiyRmoPTIQwlzNLBW31vVuc7wx3i/S9o513LnU3sMWg0F7Aq0d5O6odD60F+dQSZM7VumEiNh+VXYSJHHqn7qRniagIC/E6oaEQYX5ZZPpbbjQkqPDY7vyX9dxydDvPRUvDVTohLw1UskBoxjMJvTKXKcjVVEgSj17rFoHRXCcoKwj+Nc+lHPPVqLombaQdCN3RhnZn/bD/0SFtDjCa8JQnGHRReQU1rktzZN3kracUPbNtjd4+mEdVJLIKOj3pDX4KIlaP+rGWrPkRCtbonOJbQNhID22A60P0
*/