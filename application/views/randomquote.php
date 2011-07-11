<?php
// Select how many to show, and add you quotes
$count = 3;
$quotes[] = "<div class='quote'><p>I actually can't believe it. I thought i'd have to wait months but now i'm booked for a test next week! Thank  you for making this!</p><span class='bottom'><strong>Lucy, Blackpool</strong></span></div>";
$quotes[] = "<div class='quote'><p>I've saved over &#163;200 thanks to DriveLTD. Didn't even know anything like this existed. Lucky i found it BEFORE my test.</p><span class='bottom'><strong>Bob, Manchester</strong></span></div>";
$quotes[] = "<div class='quote'><p>Trust me, this is a bargain! More than worth the money!</p><span class='bottom'><strong>Ade, London</strong></span></div>";

// Do not edit if you dont know what you are doing.
shuffle($quotes); $i = 0;
foreach($quotes as $quote) {
	if($i != $count) {
		echo $quote;
	} else { break; }
	$i++;
}
?>
