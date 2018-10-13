<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="keywords" content="touchscreen, touchscreen design, web API, how to">
<meta name="description" content="Introduction to touchscreen design and web API use.">
<meta name="author" content="Benjamin L. Knier">
<meta name="robots" content="index, follow">
<title>Intro to Touchscreen Design & APIs | Benknier.com</title>
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/scss/styles.css" />
<link rel="apple-touch-icon" href="apple-touch-icon.png" />
<link rel="apple-touch-startup-image" href="images/marvel-background.jpg" />
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>

<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=513502019060630&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<div data-role="page" class="page" id="one">
	<div data-role="header" id="header">
		<a id="hamburger" href="#mypanel" class="ui-btn ui-shadow ui-corner-all ui-icon-bars ui-btn-icon-notext">Bars</a>
	</div>
	<script>$( "#mypanel" ).trigger( "updatelayout" );</script>
    <div data-role="panel" id="mypanel" data-display="overlay">
    <a href="#mypanel" class="ui-btn ui-shadow ui-corner-all ui-icon-delete ui-btn-icon-notext">Delete</a>
		<p ><a href="#one" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Home</a></p>
		<p ><a href="#two" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Pixel Width</a></p>
		<p ><a href="#three" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Touchscreen Design</a></p>
		<p><a href="#four" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Facebook API</a></p>
		<p><a href="#five" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">reCAPTCHA API</a></p>
    </div><!-- /panel -->
	<main>
		<h1>Touchscreen Design and APIs</h1>

		<section data-role="collapsible-set" data-content-theme="b">
			<h2>Table of Contents</h2>
				<div data-role="collapsible">
					<h4>Table of Contents</h4>
					<p ><a href="#two" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Pixel Width</a></p>
					<p ><a href="#three" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Touchscreen Design</a></p>
					<p><a href="#four" class="ui-btn ui-shadow ui-corner-all" data-rel="dialog" data-transition="flow">Facebook API</a></p>
					<p><a href="#five" class="ui-btn ui-shadow ui-corner-all" data-rel="dialog" data-transition="flow">reCAPTCHA API</a></p>
				</div>
				<div data-role="collapsible">
					<h4>References</h4>
					<p>Apple. (2018). <span style="font-style:italic">App Icon - Icons and Images - iOS - Human Interface Guidelines - Apple Developer.</span> Retrieved from Apple Developer: https://developer.apple.com/design/human-interface-guidelines/ios/icons-and-images/app-icon/</p>
					<p>Facebook. (2018). <span style="font-style:italic">Page Plugin - Social Plugins.</span> Retrieved from Facebook for Developers: https://developers.facebook.com/docs/plugins/page-plugin/</p>
					<p>T, A. (2012, February 21). <span style="font-style:italic">Finger-Friendly Design: Ideal Mobile Touchscreen Target Sizes - Smashing Magazine.</span> Retrieved from Smashing Magazine: https://www.smashingmagazine.com/2012/02/finger-friendly-design-ideal-mobile-touchscreen-target-sizes/</p>
					<p>Toland, J. (2016, October 13). <span style="font-style:italic">User Interface Design for Touch Screen Displays.</span> Retrieved from New Vision Display: http://newvisiondisplay.com/ui-design-touch-screen-displays/</p>
				</div>
				<div data-role="collapsible">
					<h4>Reflection</h4>
					<p>The devices that I used to test this website are a PC with Microsoft 10 and the Google Chrome browser and an iPhone 7 using Google Chrome and Safari browsers.</p>
					<p>This site has been optimized for SEO through the use of meta tags for the page and alt tags for images. The meta tags that I used and filled out are the viewport, apple-mobile-web-app-capable, keywords, description, author, and robots. The viewport is set to adjust to the screen size, and the robots tag is set so that search index bots can crawl the site.</p>
					<p>Overall, this was kind of a grueling task. I've built quite a few pages at this point in my career already, but I've had very little experience using APIs up until now. It was definitely a steep learning curve. However, perseverance always prevails, and I was able to get the Facebook and reCAPTCHA APIs figured out after some further research, and I'm pretty happy with the results. It will come in very handy for future projects.</p>
				</div>

		</section>
	</main>
	<footer><h4>&copy; <?= date(Y);?> Code Creative Web Development</h4></footer>
</div>
	<!--end of home page-->

	<!--Begin Page #two-->
	<div data-role="page" class="page" id="two" data-theme="a">

	<div data-role="header">
		<a id="hamburger" href="#mypanel2" class="ui-btn ui-shadow ui-corner-all ui-icon-bars ui-btn-icon-notext">Bars</a>
	</div><!-- /header -->
	<script>$( "#mypanel2" ).trigger( "updatelayout" );</script>

	<div data-role="panel" id="mypanel2" data-display="overlay">
	<a href="#mypanel2" class="ui-btn ui-shadow ui-corner-all ui-icon-delete ui-btn-icon-notext">Delete</a>
	<p ><a href="#one" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Home</a></p>
	<p ><a href="#two" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Pixel Width</a></p>
	<p ><a href="#three" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Touchscreen Design</a></p>
	<p><a href="#four" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Facebook API</a></p>
	<p><a href="#five" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">reCAPTCHA API</a></p>
	</div><!-- /panel -->


	<div role="main" class="ui-content">
		<h2>Pixel Width</h2>
			<p>The average adult index finger pixel width is between 45-57 pixels, and I've taken that into account with the clickable objects on this site. For instance, my hamburger icon is 47 x 47 pixels, as shown in this screen capture:</p>
		<div class="img_container">
			<img id="arrow" src="images/hamburger.jpg" alt="picture of hamburger menu icon">
			<img src="images/width_code.jpg" alt="picture of code used to create hamburger icon width">
		</div>
			<p>Along with the hamburger, the rest of my buttons are at least 47 pixels tall and wide, making them easy for users to press. Go ahead and try it!</p>
	</div><!-- /content -->

	<footer><h4>&copy; <?= date(Y);?> Code Creative Web Development</h4></footer>
</div><!-- /page two -->

<!--Begin Page #three-->
<div data-role="page" class="page" id="three" data-theme="a">

<div data-role="header">
	<a id="hamburger" href="#mypanel3" class="ui-btn ui-shadow ui-corner-all ui-icon-bars ui-btn-icon-notext">Bars</a>
</div><!-- /header -->
<script>$( "#mypanel3" ).trigger( "updatelayout" );</script>

<div data-role="panel" id="mypanel3" data-display="overlay">
<a href="#mypanel3" class="ui-btn ui-shadow ui-corner-all ui-icon-delete ui-btn-icon-notext">Delete</a>
<p ><a href="#one" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Home</a></p>
<p ><a href="#two" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Pixel Width</a></p>
<p ><a href="#three" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Touchscreen Design</a></p>
<p><a href="#four" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Facebook API</a></p>
<p><a href="#five" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">reCAPTCHA API</a></p>
</div><!-- /panel -->


<div role="main" class="ui-content">
	<h2>Touchscreen Design Components</h2>
		<p>The components of design for touchscreens that I decided to focus on for this project are animation, navigation, and having an app icon.</p>
		<h3>Transitions</h3>
		<p>To provide users with a pleasant and consistent experience, I decided to use the jQuery mobile framework to create page transitions. The transition I chose looks like what you would expect when navigating from one portion of an app to another. You may not have realized it, but you saw this animation when you navigated to this page. To utilize transitions from jQuery mobile, you need to set a data-transition property on the element that you want to animate, as shown here:</p>
	<div class="img_container">
		<img id="animation" src="images/animation.gif" alt="gif animation of screen transition">
		<img id="trans-code" src="images/data-transition.jpg" alt="picture of the code used for data transitions">
	</div>
	<h3>Navigation</h3>
		<p>For the navigation aspect of things, I decided to use a panel that overlays the main content when you click on the hamburger icon. Both the panel and hamburger are components of touchscreen navigation that users have come to expect and are therefore important to include. The panel was, again, built using the jQuery mobile framework, and is accomplished by creating a div container with data-role, data-display, and id attributes as shown here:</p>
		<div class="img_container2">
			<img id="panelpic" src="images/panel.jpg" alt="picture of the overlay panel opened on page">
			<img src="images/panel_code.jpg" alt="picture of the code used to build the overlay navigation panel">
		</div>
		<h3>App Icon</h3>
		<p>The app icon is something that touchscreen users are intimately familiar with, and is something you should include even if you don't intend to have your page be an app because users can choose to add the page to their home screens. On top of that, it couldn't be easier to set up. All you need to do is add a link with a rel attribute, and give it a value of "apple-touch-icon". Here's an example of the code and how the icon that you choose can display on devices:
			<div class="img_container2">
				<img id="icon" src="images/photo.png" alt="picture of the app icon">
				<img src="images/touch_icon_code.jpg" alt="picture of the code used to create app icon">
			</div>
</div><!-- /content -->

<footer><h4>&copy; <?= date(Y);?> Code Creative Web Development</h4></footer>
</div><!-- /page three -->


<!--Begin Page #four-->
<div data-role="page" class="page" id="four" data-theme="a">

<div data-role="header">
	<a id="hamburger" href="#mypanel4" class="ui-btn ui-shadow ui-corner-all ui-icon-bars ui-btn-icon-notext">Bars</a>
</div><!-- /header -->
<script>$( "#mypanel4" ).trigger( "updatelayout" );</script>

<div data-role="panel" id="mypanel4" data-display="overlay">
<a href="#mypanel4" class="ui-btn ui-shadow ui-corner-all ui-icon-delete ui-btn-icon-notext">Delete</a>
<p ><a href="#one" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Home</a></p>
<p ><a href="#two" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Pixel Width</a></p>
<p ><a href="#three" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Touchscreen Design</a></p>
<p><a href="#four" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Facebook API</a></p>
<p><a href="#five" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">reCAPTCHA API</a></p>
</div><!-- /panel -->


<div role="main" class="ui-content">
	<h2>Facebook API</h2>
		<p>Using the Facebook API to incorporate your page's feed is quite simple. Finding the information on how to do it is a downright pain in the butt. However, I'll break it down for you here so you can halt your search. First, follow <a href="https://developers.facebook.com/docs/plugins/page-plugin/" target="_blank">this link</a> to be taken to the Facebook plugins page. You may have to login, but it will otherwise automatically populate the information for pages that you manage. Next, you'll need to include the JavaScript SDK into your code. Facebook says it works best if it's right after the opening "body" tag. Lastly, you'll have to copy and paste a chunk of code (automatically generated by the tool) and paste it into your code where you want the timeline to display. The end result is directly below: </p>
		<div class="feed_container">
				<div class="fb-page" data-href="https://www.facebook.com/TeamTonedBeachbodyCoach/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/TeamTonedBeachbodyCoach/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/TeamTonedBeachbodyCoach/">Team Toned- Ben Knier&#039;s Beachbody Coach Page</a></blockquote></div>
		</div>
<p>Here is an example of what the different pieces of code look like:</p>
<div class="img_container fb_images">
	<img src="images/fbjs.jpg" alt="picture of the JavaScript needed to integrate Facebook feed">
	<img src="images/fbdiv.jpg" alt="picture of the div element that displays the Facebook feed">
</div>
</div><!-- /content -->

<footer><h4>&copy; <?= date(Y);?> Code Creative Web Development</h4></footer>
</div><!-- /page four -->

<!--Begin Page #five-->
<div data-role="page" class="page" id="five" data-theme="a">

<div data-role="header">
	<a id="hamburger" href="#mypanel5" class="ui-btn ui-shadow ui-corner-all ui-icon-bars ui-btn-icon-notext">Bars</a>
</div><!-- /header -->
<script>$( "#mypanel5" ).trigger( "updatelayout" );</script>

<div data-role="panel" id="mypanel5" data-display="overlay">
<a href="#mypanel5" class="ui-btn ui-shadow ui-corner-all ui-icon-delete ui-btn-icon-notext">Delete</a>
<p ><a href="#one" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Home</a></p>
<p ><a href="#two" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Pixel Width</a></p>
<p ><a href="#three" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Touchscreen Design</a></p>
<p><a href="#four" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">Facebook API</a></p>
<p><a href="#five" class="ui-btn ui-shadow ui-corner-all" data-transition="flow">reCAPTCHA API</a></p>
</div><!-- /panel -->


<div role="main" class="ui-content">
	<h2>reCAPTCHA API</h2>
		<p>Using the reCAPTCHA API to incorporate the security measure to your forms is surprisingly simple. First, you'll need an API key, which you can retrieve (if you're logged into a Google account) from <a href="https://www.google.com/recaptcha/admin" target="_blank">here</a>. To do that, simply add a label and the domains you wish to add a reCAPTCHA to. Once you have your domain registered, a site key will be automatically generated along with the necessary HTML and JavaScript to populate the reCAPTCHA. Copy and paste the JavaScript into the bottom of your HTML document and paste the HTML where you would like the reCAPTCHA to appear. The results can be seen in the basic form below.</p>
		<form action="" method="post">

	<label for="name">Name:</label>
	<input name="name" aria-label="name" required><br />

	<label for="email">Email:</label>
	<input name="email" type="email" aria-label="email" required><br />
<div class="feed_container">
	<div class="g-recaptcha" data-sitekey="6LdJ4nQUAAAAAKvufoi2hkgrtIvPdkCi3ZQYfad1"></div>
	</div>

	<input type="submit" value="Submit" />

</form>

<p>Here's a look at the code that built this form:</p>
<div class="img_container">
	<img id="captcha" src="images/recaptcha_code.jpg" alt="picture of the code needed to create reCAPTCHA">
</div>
</div><!-- /content -->

<footer><h4>&copy; <?= date(Y);?> Code Creative Web Development</h4></footer>
</div><!-- /page five -->

<script src='https://www.google.com/recaptcha/api.js?hl=en'></script>
</body>
</html>
