<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta name="description" content="JQuery Related Pages Demo developed using jSlideRelatedPages jQuery Plugin which loads related web pages/posts in a cool slider animation on mouse scroll." />
	<meta name="keywords" content="jquery related demo,related pages demo,jQuery related slider demo" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
</script><script src="jsliderelatedpages.js" type="text/javascript" language="JavaScript"></script>
<script type="text/javascript" src="../script.js"></script>

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="../styles.css">

<title>jQuery4u Demo - jSlideRelatedPages Plugin</title>

<style>
.large { font-size:22px; }
.orange { color:orange; }
.italic { font-style:italic }
.textmiddle {vertical-align:middle;}
.padout { padding-left:25px; padding-right:25px; }
.rounded-corners {
     -moz-border-radius: 40px;
    -webkit-border-radius: 40px;
    -khtml-border-radius: 40px;
    border-radius: 40px;
}
h2 {
    padding-bottom: 15px;
}
.scrolldown {
    padding-left:20px; margin-bottom:20px;  color:#FD5927; font-size:40px; font-weight:bold; vertical-align:middle;
    display: inline-block;
 }
 ul {
    padding-left: 25px;
 }
 #contentpadding { background-color:white; padding:15px; }
 #jsrp_related { text-align:left; }
</style>

<script type="text/javascript">
  $().ready(function() {
     //$('#jsrp_related').jsliderelatedposts();
	 $('#jsrp_related').jsliderelatedposts({
		 speed: 1000,
		 scrolltrigger: 0.75,
		 smartwidth: true
	 });
   });
</script>

</head>
<body>
<div id="page-wrap">

	<?php include("../header.php"); ?>

<div id="content">
<h2>Demo:</h2> <span class="scrolldown"> Scroll down! </span><img class="textmiddle" src="arrow.png" />
<h2>Plugin Info:</h2>
<p class="padout">
<strong>Plugin Name:</strong> jSlideRelatedPages<br/>
<strong>Plugin Author:</strong> <a href="http://jquery4u.com">jQuery4u</a><br/>
<strong>Plugin Version:</strong> 1.0<br/>
<strong>Plugin Page url:</strong> <a href="http://jquery4u.com/plugins/jSlideRelatedPages/">http://jquery4u.com/plugins/jSlideRelatedPages/</a><br/>
<strong>Official Plugin url:</strong> <a href="http://plugins.jquery.com/project/jSlideRelatedPages">http://plugins.jquery.com/project/jSlideRelatedPages</a>
</p>

<h2>What it does:</h2>
<p class="padout">Shows related web pages in a Slick Sliding Animation with Fade in/out when the user scrolls down the page the related webpages slide out from the bottom right of the screen!
When they scroll back up the page it dissapears! ;) Awesome.</p>
<h2>Options:</h2>
<ul>
<li><strong>Speed</strong> - <span class="italic">[1-5]</span> - Choose Animation Speed (default: 1 second) 5 seconds is pretty slow slide!</li>
<li><strong>Scroll Trigger</strong> - <span class="italic">[55-100%]</span> -  Choose % of page scrolled before it appears (default: 75%) 1.0 (makes it stick to bottom until close button is clicked).</li>
<li><strong>Width</strong> - <span class="italic">[true/false]</span> -   Use Smart Width or Full Width (fits to screen width)</li>
</ul>
</p>
<h2>Download:</h2>
<ul>
<li><a href=""><strong>jSlideRelatedPages.zip (5kb)</strong></a>
	<ul>
		<li><a href="script.js">jsliderelatedpages.js</a></li>
		<li><a href="style.css">style.css</a></li>
		<li><a href="index.html">index.html</a></li>
		<li><a href="close_button.gif">close_button.gif</a></li>
	</ul>
</li>
</ul>

<p>
<a class="seelivedemo" href="http://jquery4u.com/plugins/jsliderelatedpages/">Tutorial</a>
<a class="seelivedemo" href="http://jquery4u.com/demos/jsliderelatedpages/">Download</a>
</p>

</div>


<!-- demo html -->
<div id="jsrp_related">
		<a href="#" id="jsrp_related-close"><img id="close_btn" src="close_button.gif" alt="Close"></a>
		<h3>You might also like:</h3>
	<ul>
		<li><a href="http://blogoola.com/australia/" ><img src="http://blogoola.com/images/country-flags/australia-bigflag.png" alt="australia" title="australia" width="70" height="50" border="0" class="jsrp_thumb" /></a> <a href="http://blogoola.com/australia/" rel="bookmark" class="jsrp_title">Blogs From Australia</a></li>
		<li><a href="http://blogoola.com/united-kingdom/" ><img src="http://blogoola.com/images/country-flags/united-kingdom-bigflag.png" alt="united-kingdom" title="united-kingdom" width="70" height="50" border="0" class="jsrp_thumb" /></a> <a href="http://blogoola.com/united-kingdom/" rel="bookmark" class="jsrp_title">Blogs From United Kingdom</a></li>
		<li><a href="http://blogoola.com/india/" ><img src="http://blogoola.com/images/country-flags/india-bigflag.png" alt="india" title="india" width="70" height="50" border="0" class="jsrp_thumb" /></a> <a href="http://blogoola.com/india/" rel="bookmark" class="jsrp_title">Blogs From India</a></li>
	</ul>
</div>

<br /><hr><br />

<div id="contentpadding">
<p>Content Padding:</p>
<p>Eum aliquam hendrerit lobortis et illum in facilisis eu, tation odio iriure consectetuer iusto dignissim exerci dolore facilisis esse ex qui ut molestie, ut, aliquam praesent. Zzril in, diam quis luptatum lobortis lorem eros nibh dolore tation, commodo suscipit ad ut delenit, augue sed velit ullamcorper augue aliquip vel iusto laoreet. Minim nisl vel aliquip et eros te aliquip euismod vel praesent dolore dolore dolor hendrerit eu ad delenit dolor.</p>
<p>Qui vero blandit in blandit vel nulla eum vulputate in in duis in blandit ut exerci minim delenit wisi at accumsan illum praesent dolore vero te. Vel nostrud duis wisi hendrerit at ea veniam ut dolore dolore vulputate enim, elit tincidunt tation. Laoreet duis consequat ut feugait zzril qui feugiat iusto dignissim. Duis vero illum, consequat dolor consectetuer, eum luptatum, amet iusto ullamcorper odio. Facilisis blandit nulla volutpat at ut odio consequat feugiat ea dolore ad ex feugait eum nulla, duis wisi suscipit. Praesent zzril in, erat amet molestie velit elit nulla vulputate, zzril augue suscipit, exerci, vel et accumsan minim nulla, esse ex et ipsum.</p>
<p>Suscipit laoreet facilisi nisl vel aliquip et eros te aliquip euismod vel praesent dolore dolore dolor hendrerit. Nisl ad delenit dolor commodo qui iusto commodo consequat consequat feugiat augue facilisis lorem veniam velit. In accumsan te, adipiscing nulla luptatum qui vel facilisi eu ea feugait eros sit tation vel. Duis dignissim ut hendrerit sit, consequat, velit enim enim at, autem nulla ad dolor lobortis laoreet iriure. Ut vero esse iriure eu consequat veniam, quis duis dolor eros nostrud in delenit aliquam hendrerit lobortis et illum in facilisis eu, tation odio iriure. Odio iusto dignissim exerci dolore facilisis esse ex qui.</p>
<p>Eum aliquam hendrerit lobortis et illum in facilisis eu, tation odio iriure consectetuer iusto dignissim exerci dolore facilisis esse ex qui ut molestie, ut, aliquam praesent. Zzril in, diam quis luptatum lobortis lorem eros nibh dolore tation, commodo suscipit ad ut delenit, augue sed velit ullamcorper augue aliquip vel iusto laoreet. Minim nisl vel aliquip et eros te aliquip euismod vel praesent dolore dolore dolor hendrerit eu ad delenit dolor.</p>
<p>Qui vero blandit in blandit vel nulla eum vulputate in in duis in blandit ut exerci minim delenit wisi at accumsan illum praesent dolore vero te. Vel nostrud duis wisi hendrerit at ea veniam ut dolore dolore vulputate enim, elit tincidunt tation. Laoreet duis consequat ut feugait zzril qui feugiat iusto dignissim. Duis vero illum, consequat dolor consectetuer, eum luptatum, amet iusto ullamcorper odio. Facilisis blandit nulla volutpat at ut odio consequat feugiat ea dolore ad ex feugait eum nulla, duis wisi suscipit. Praesent zzril in, erat amet molestie velit elit nulla vulputate, zzril augue suscipit, exerci, vel et accumsan minim nulla, esse ex et ipsum.</p>
<p>Suscipit laoreet facilisi nisl vel aliquip et eros te aliquip euismod vel praesent dolore dolore dolor hendrerit. Nisl ad delenit dolor commodo qui iusto commodo consequat consequat feugiat augue facilisis lorem veniam velit. In accumsan te, adipiscing nulla luptatum qui vel facilisi eu ea feugait eros sit tation vel. Duis dignissim ut hendrerit sit, consequat, velit enim enim at, autem nulla ad dolor lobortis laoreet iriure. Ut vero esse iriure eu consequat veniam, quis duis dolor eros nostrud in delenit aliquam hendrerit lobortis et illum in facilisis eu, tation odio iriure. Odio iusto dignissim exerci dolore facilisis esse ex qui.</p>
<p>Eum aliquam hendrerit lobortis et illum in facilisis eu, tation odio iriure consectetuer iusto dignissim exerci dolore facilisis esse ex qui ut molestie, ut, aliquam praesent. Zzril in, diam quis luptatum lobortis lorem eros nibh dolore tation, commodo suscipit ad ut delenit, augue sed velit ullamcorper augue aliquip vel iusto laoreet. Minim nisl vel aliquip et eros te aliquip euismod vel praesent dolore dolore dolor hendrerit eu ad delenit dolor.</p>
</div>

	<!-- footer (includes analytics) -->
	<?php include("../footer.php"); ?>
</div> <!-- end page wrap -->
</body>
</html>