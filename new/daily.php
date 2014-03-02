<?php

// Daily Counter Script
// September 4, 2007
// Tim Antley - www.bayoumx.com

// For Use With SMF & TinyPortal

// Stores the day of week and hit count in a file.
// If current day is same as file's day-stamp, counter is incremented by one.
// If day is different, counter resets to 1.

// Specify 'silent' in URL will suppress output after incrementing count.
// Place a question mark between script name; ie. daily_counter.php?silent

// There is no error checking for the file.

$counter_file	= 'daily_counter.csv';	// can use your own filename here.

// Should not have to edit anything below this line.

$today	= getdate();					// Array for today's information

$handle	= @fopen($counter_file, "r");	// Read-only access

$data	= @fgetcsv($handle, 1000, ',');	// Reads file comma-separated values & places into array $data.

@fclose($handle);

$counter	= $data[1];

if($data[0]==$today['mday'])			// Check file's day-stamp against current day.
	{
		$counter++;
		error_reporting();
	}
	else
	{
		$counter=1;
	}

$output	= $today['mday'].', '.$counter;	// Format output into comma-separated values for file.

$handle	= @fopen($counter_file, "w");

@fwrite($handle, $output);

@fclose($handle);

if(!isset($_GET['silent']))				// Display output unless 'silent' appears in URL.
	{
		echo $counter;
	}

?>