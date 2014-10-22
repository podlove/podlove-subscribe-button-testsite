<?php 
	header('Content-type: text/xml');
	$url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?><?xml version="1.0" encoding="UTF-8"?>
<rss xmlns:atom="http://www.w3.org/2005/Atom" xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" xmlns:psc="http://podlove.org/simple-chapters" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:fh="http://purl.org/syndication/history/1.0" xmlns:feedburner="http://rssnamespace.org/feedburner/ext/1.0" version="2.0">

<channel>
	<title>Podlove Test</title>
	<link>http://podlove.org</link>
	<description>Podlove wants to push the limits of podcasting by pushing new software solutions and open formats.</description>
	<lastBuildDate>Wed, 01 Oct 2014 17:02:19 +0000</lastBuildDate>
	<atom:link rel="next" href="<?php echo $url; ?>/?page=2" />
	<atom:link rel="first" href="<?php echo $url; ?>/m4a/" />
	<atom:link rel="last" href="<?php echo $url; ?>/?page=2" />
	<language>de-DE</language>
	<atom:contributor>
		<atom:name>Tim Pritlove</atom:name>
		<atom:uri>http://tim.pritlove.org/</atom:uri>
	</atom:contributor>
	<generator>Podlove Subscribe Button Testsite</generator>
		<itunes:author>Podlove</itunes:author>
		<itunes:summary>Podlove wants to push the limits of podcasting by pushing new software solutions and open formats.</itunes:summary>
	<itunes:category text="Technology" />	
	<itunes:owner>
		<itunes:name>Podlove</itunes:name>
		<itunes:email>info@podlove.org</itunes:email>
	</itunes:owner>
	<itunes:image href="http://metaebene.me/podlove/files/2013/01/podlove-logo-1.2-600x600.png" />
	<itunes:subtitle>Der Interview-Podcast mit Tim Pritlove</itunes:subtitle>
	<itunes:keywords />
	<itunes:block>no</itunes:block>
	<itunes:explicit>no</itunes:explicit>

	<?php if ( isset($_GET['page']) ) : ?>
	<item>
		<title>PL002</title>
		<link>http://podlove.org</link>
		<pubDate>Mon, 02 Jun 2014 15:54:39 +0000</pubDate>
		<guid isPermaLink="false">podlove-2014-06-02t13:38:56+00:00-a40dfb2cb46eb65</guid>
		<description><![CDATA[Podlove wants to push the limits of podcasting by pushing new software solutions and open formats.]]>
		</description>
		<psc:chapters version="1.2">
		  <psc:chapter start="00:00:00.000" title="Intro" />
		  <psc:chapter start="00:00:56.455" title="Vorstellung Stefan Brill" />
		  <psc:chapter start="00:07:30.989" title="Elektrochemie und das Ohr" />
		  <psc:chapter start="00:12:25.605" title="Das Außenohr" />
		  <psc:chapter start="00:36:57.598" title="Der Gehörgang" />
		  <psc:chapter start="00:40:40.893" title="Trommelfell und das Mittelohr" />
		  <psc:chapter start="01:04:46.841" title="Der Gleichgewichtssinn" />
		  <psc:chapter start="01:28:38.788" title="Die Hörschnecke" />
		  <psc:chapter start="01:59:22.493" title="Kommunikation in der Hörschnecke" />
		  <psc:chapter start="02:27:11.527" title="Hördefekte" />
		  <psc:chapter start="02:33:59.132" title="Hörgeräte" />
		  <psc:chapter start="02:42:17.909" title="Das Cochlea-Implantat" />
		  <psc:chapter start="03:23:50.790" title="Einbau und Inbetrienahme" />
		  <psc:chapter start="03:57:30.292" title="Weitergehende Implantate" />
		  <psc:chapter start="04:03:40.642" title="Ausblick" />
		</psc:chapters>
		<itunes:duration>04:09:15</itunes:duration>
		<itunes:author>Podlove</itunes:author>
		<itunes:subtitle>Personal Media Development</itunes:subtitle>
		<itunes:summary>Podlove wants to push the limits of podcasting by pushing new software solutions and open formats.</itunes:summary>
		<itunes:image href="http://metaebene.me/podlove/files/2013/01/podlove-logo-1.2-600x600.png" />
	</item>
	<?php else : ?>
	<item>
		<title>PL001</title>
		<link>http://podlove.org</link>
		<pubDate>Mon, 02 Jun 2014 15:54:39 +0000</pubDate>
		<guid isPermaLink="false">podlove-2014-06-02t13:38:56+00:00-a40dfb2cb46eb65</guid>
		<description><![CDATA[Podlove wants to push the limits of podcasting by pushing new software solutions and open formats.]]>
		</description>
		<psc:chapters version="1.2">
		  <psc:chapter start="00:00:00.000" title="Intro" />
		  <psc:chapter start="00:00:56.455" title="Vorstellung Stefan Brill" />
		  <psc:chapter start="00:07:30.989" title="Elektrochemie und das Ohr" />
		  <psc:chapter start="00:12:25.605" title="Das Außenohr" />
		  <psc:chapter start="00:36:57.598" title="Der Gehörgang" />
		  <psc:chapter start="00:40:40.893" title="Trommelfell und das Mittelohr" />
		  <psc:chapter start="01:04:46.841" title="Der Gleichgewichtssinn" />
		  <psc:chapter start="01:28:38.788" title="Die Hörschnecke" />
		  <psc:chapter start="01:59:22.493" title="Kommunikation in der Hörschnecke" />
		  <psc:chapter start="02:27:11.527" title="Hördefekte" />
		  <psc:chapter start="02:33:59.132" title="Hörgeräte" />
		  <psc:chapter start="02:42:17.909" title="Das Cochlea-Implantat" />
		  <psc:chapter start="03:23:50.790" title="Einbau und Inbetrienahme" />
		  <psc:chapter start="03:57:30.292" title="Weitergehende Implantate" />
		  <psc:chapter start="04:03:40.642" title="Ausblick" />
		</psc:chapters>
		<itunes:duration>04:09:15</itunes:duration>
		<itunes:author>Podlove</itunes:author>
		<itunes:subtitle>Personal Media Development</itunes:subtitle>
		<itunes:summary>Podlove wants to push the limits of podcasting by pushing new software solutions and open formats.</itunes:summary>
		<itunes:image href="http://metaebene.me/podlove/files/2013/01/podlove-logo-1.2-600x600.png" />
		<enclosure url="FOO.m4a" length="156431572" type="audio/mp4" />
	</item>
	<?php endif; ?>

</channel>
</rss>