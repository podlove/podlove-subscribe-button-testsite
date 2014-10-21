<?php
	/*
	 * Podlove URI Checker
	 *
	 * The Podlove URI Checker is used to 
	 *
	 * Copyright 2014 Podlove.org
	 */
	
	$host = array(
			'ipv4' => "v4.http.feedtest.podlove.org/feed/mp3",
			'ipv6' => 'v6.http.feedtest.podlove.org/feed/mp3'
		);

?><!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<title>Podlove Subscribe Button Feed Testing Tool</title>

<link rel="stylesheet" type="text/css" href="stylesheets/screen.css">

<script src="javascripts/jquery-2.1.1.min.js"></script>
<script src="javascripts/podlove-uri-checker.js"></script>
</head>
<body>
<div id="wrapper">
	<h1>Podlove Subscribe Button Feed Testing Tool</h1>
	<h2>Description</h2>
	This tool adresses <strong>developers</strong> who want to test their Podcatcher <abbr title="Uniform Resource Identifier">URI</abbr> interaction.
	<p>
		Providing your <abbr title="Uniform Resource Identifier">URI</abbr>, will show you four links which make use of <code>IPv4</code>, <code>IPv6</code>, <code>http</code> and <code>https</code>.
	</p>

	<h2>Configuration</h2>
	Please provide your <abbr title="Uniform Resource Identifier">URI</abbr> scheme:
	<p id="provide-uri">
		<input id="provided-uri" placeholder="my-uri-scheme://" value="<?php echo ( ! empty($_GET['uri']) ? $_GET['uri'] : '' ); ?>" />
	</p>
	
	<h2>Test Links</h2>
	Use the provided Links to test your URL-Scheme with your client.
	<table>
		<thead>
			<tr>
				<th>URL</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="url-row" data-feed-url="http://<?php echo $host['ipv4']; ?>"><a href="http://<?php echo $host['ipv4']; ?>">http://<?php echo $host['ipv4']; ?></a></td>
				<td>IPv4, http</td>
			</tr>
			<tr>
				<td class="url-row" data-feed-url="http://<?php echo $host['ipv4']; ?>"><a href="https://<?php echo $host['ipv4']; ?>">https://<?php echo $host['ipv4']; ?></a></td>
				<td>IPv4, https</td>
			</tr>
			<tr>
				<td class="url-row" data-feed-url="http://<?php echo $host['ipv6']; ?>"><a href="http://<?php echo $host['ipv6']; ?>">http://<?php echo $host['ipv6']; ?></a></td>
				<td>IPv6, http</td>
			</tr>
			<tr>
				<td class="url-row" data-feed-url="http://<?php echo $host['ipv6']; ?>"><a href="https://<?php echo $host['ipv6']; ?>">https://<?php echo $host['ipv6']; ?></a></td>
				<td>IPv6, https</td>
			</tr>
		</tbody>
	</table>

	<h2>Bookmark</h2>
	Use the provided link if you want to quickly check the behaviour on other devices.
	<p><input id="share" value="" type="text" readonly /></p>
</div>
<span id="copyright">&copy; <a href="http://podlove.org">Podlove</a> <?php echo date("Y"); ?></span>
</body>
</html>