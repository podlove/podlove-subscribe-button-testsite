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
<title>Podlove Subscription URL Testing Tool</title>

<link rel="stylesheet" type="text/css" href="stylesheets/screen.css">

<script src="javascripts/jquery-2.1.1.min.js"></script>
<script src="javascripts/podlove-uri-checker.js"></script>
</head>
<body>
<div id="wrapper">
	<form name="podlove-button-feed-test" id="podlove-button-feed-test-form" method="POST">
	<h1>Subscription URL Testing Tool</h1>
	<h2>Description</h2>
	<p>
	This tool adresses <strong>developers</strong> who want to test their Podcast Client's <abbr title="Uniform Resource Locator">Subscription URL</abbr> behaviour to make it work together with the <a href="http://podlove.org/podlove-subscribe-button/">Podlove Subscribe Button</a>.
	</p>
	<p>
		Enter your <abbr title="Uniform Resource Identifier">URI</abbr> scheme below and responding links will be created. There are three basic URL syntax variants: a <code>http</code> feed with and without explicit mentioning of the protocol and an <code>https</code> feed. All three are also available in a version pointing to a URL that can only be accessed via IPv6.
	</p>

	<h2>Configuration</h2>
	Please provide your <abbr title="Uniform Resource Identifier">URI</abbr> scheme / subscription <abbr title="Uniform Resource Locator">URL</abbr> prefix:
	<p id="provide-uri">
		<input name="provided" id="provided" placeholder="my-uri-scheme://" value="<?php echo ( ! empty($_GET['uri']) ? $_GET['uri'] : '' ); ?>" />
	</p>
	<p id="">
		<input type="checkbox" id="perform_post_request" <?php echo (isset($_GET['post']) ? 'checked' : ''); ?>/><label for="perform_post_request">Perform <code>POST</code> request</label>
		<input type="hidden" name="url" value="" />
		<input type="hidden" name="title" value="Podlove" />
		<input type="hidden" name="subtitle" value="Personal Media Development" />
		<input type="hidden" name="image" value="http://metaebene.me/podlove/files/2013/01/podlove-logo-1.2-600x600.png" />
	</p>
	
	<h2>Test Links</h2>
	<p>
	Use the provided subscription URLs to test your URL-Scheme with your client. Please note the https feed is currently secured by a self-signed certificate only so it might produce an error message.
	</p>
	<table>
		<thead>
			<tr>
				<th>URL</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="url-row" data-feed-url="<?php echo $host['ipv4']; ?>"><a href="https://<?php echo $host['ipv4']; ?>"><?php echo $host['ipv4']; ?></a></td>
				<td>No protocol included (IPv4 only)</td>
			</tr>
			<tr>
				<td class="url-row" data-feed-url="http://<?php echo $host['ipv4']; ?>"><a href="http://<?php echo $host['ipv4']; ?>">http://<?php echo $host['ipv4']; ?></a></td>
				<td>with http protocol (IPv4 only)</td>
			</tr>
			<tr>
				<td class="url-row" data-feed-url="https://<?php echo $host['ipv4']; ?>"><a href="https://<?php echo $host['ipv4']; ?>">https://<?php echo $host['ipv4']; ?></a></td>
				<td>with https protocol (IPv4 only)</td>
			</tr>
			<tr>
				<td class="url-row" data-feed-url="<?php echo $host['ipv6']; ?>"><a href="https://<?php echo $host['ipv6']; ?>"><?php echo $host['ipv6']; ?></a></td>
				<td>No protocol included (IPv6 only)</td>
			</tr>
			<tr>
				<td class="url-row" data-feed-url="http://<?php echo $host['ipv6']; ?>"><a href="http://<?php echo $host['ipv6']; ?>">http://<?php echo $host['ipv6']; ?></a></td>
				<td>with http protocol (IPv6 only)</td>
			</tr>
			<tr>
				<td class="url-row" data-feed-url="https://<?php echo $host['ipv6']; ?>"><a href="https://<?php echo $host['ipv6']; ?>">https://<?php echo $host['ipv6']; ?></a></td>
				<td>with https protocol (IPv6 only)</td>
			</tr>
		</tbody>
	</table>

	<h2>Bookmark</h2>
	Use the provided link if you want to quickly check the behaviour on other devices.
	<p><input id="share" value="" type="text" readonly /></p>
	</form>
</div>
<span id="copyright">&copy; <a href="http://podlove.org">Podlove</a> <?php echo date("Y"); ?></span>
</body>
</html>