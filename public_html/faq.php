<!DOCTYPE html>
<html lang="en-US">
<head>
	<link rel="stylesheet" href="/css/style.css" />
	<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
	<title>Map all spaces - FAQ</title>
</head>
<body>
    <div id="header">
    <nav class="menu">
        <ul >
          <li><a href="/" >Home</a></li>
          <li><a href="faq.html" class="active">FAQ</a></li>
          <li style="float:right"><a href="about.html">About</a></li>
        </ul>
     </nav>
	</div>
	<main id="content">
		<div class="container">
			<h1>FAQ</h1>
			<h2>What is this site?</h2>
			<div>A dynamic map of all hacker/maker spaces and fablabs. There is already some map out there, but you have to register. After a while the map wil be outdated, so for this map there are several 'live' sources used to be always up todate. </div>
			<h2>What sources are used?</h2>
			<div>There are tree main sources of data :  
				<ul>
					<li><a href="https://spaceapi.io/directory/">SpaceApi</a> directory
						<div>Read API directory and check every hackerspace json (if space is open or closed). Updated every hour. (Last update 
							<?php echo date("F d Y H:i:s.",  filemtime("./api.geojson")); ?>)</div>
					</li>
					<li><a href="https://fablabs.io/">fablabs.oi</a> FabLab list
						<div>Fablab should have status 'active'. Updated weekly. (Last update 
							<?php echo date("F d Y H:i:s.",  filemtime("./fablab.geojson")); ?>)</div>
					</li>
					<li><a href="https://wiki.hackerspaces.org">hackerspace.org</a> semantic data<div>Only added to map when space is active, has more then 1 member and site is online. Extra check if a wiki entry is als added by API or Fablab, if so remove wiki entry from map. (Dupe = 2 entrys are less then 200m apart and name match for 45% or more) Updated weekly. (Last update 
							<?php echo date("F d Y H:i:s.",  filemtime("./wiki.geojson")); ?>)</div></li>
				</ul> 
			</div>
			Every 1th of the month the database and logfiles are removed and fill again from the sources.<br>
			If a site couldn't load (http error etc.) it wil be skipped till next monthly update.<br>
			Still don't see why your site is not included? Check our <a href="/errorlog.txt">error log</a> if we encountered some kind of error.
			<h2>Can you update my entry?</h2>
			<div>I don't keep a database of your data, I update this every day from the mentioned datasources. If you want to see where I got your data from, click on your icon and select 'source'. That should bring you to the data source where you can change your data. Allow at least 24 hours to update on this map.
			</div>
			<h2>Can i help you?</h2>
			<div>Cool, thats nice of you. You could help me several ways :
				<ul>
					<li>If you like it consider a small (<a href="https://paypal.me/zeno4ever?locale.x=nl_NL">paypal (user zeno4ever)</a> or <a href="https://bunq.me/daveborghuis">iDeal (Bunq)</a>) donation. This will be used to cover hosting cost and drink a <a href="https://nl.wikipedia.org/wiki/Club-Mate">Club-Mate</a> to keep this site running.... </li>
					<li>If an entry is invalid (e.g. hackerspace close) edit this at the source. You can easily find this to click on the icon and select 'source', this will redirect you straigt to source of the data.</li>
					<li>Contribute with your knowledge, sourcecode of this project can be found at <a href="https://github.com/zeno4ever/map-all-spaces">Github</a></li>
				</ul> 
			</div>
		</div>
	</main>
</body>