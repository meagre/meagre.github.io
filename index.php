<!DOCTYPE html> 
<html dir="ltr" lang="en-US">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- Title: Change the title and description to suit your needs. -->
        <title>The Launch Template</title>
        <meta name="description" content="A simple “Coming Soon” template including the perfect mix of design, information and social options.">

        <!-- Viewport Meta: Just taming mobile devices like iPads and iPhones. -->
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0"/>

        <!-- Google Fonts: The default font for this template. -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">

        <!-- Styles: The primary styles for this template. -->
        <link rel="stylesheet" type="text/css" href="assets/styles/normalize.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/main.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/responsive.css">
        <link rel="stylesheet" type="text/css" href="assets/styles/theme.css">

        <!-- Favicon: Change to whatever you like within the "assets/images" folder. -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
    </head>

    <body>
        <!-- Status: Shows if the subscription succeeded or not. -->
        <div id="loading">
            <span class="status icon"></span>
        </div>
        
        <!-- Header: Your site logo, tagline and project status. -->
        <header class="row" id="header">
            <div class="content">
                <!-- Logo & Tagline: Delete "class="logo"" to remove the logo or upload your own logo to "assets/images". -->
                <span class="logo">The <strong>Launch</strong> Template</span>
            </div>

            <!-- Status: Change the numbers below to reflect your project status. -->
            <div class="status" style="width: 75%;">
                <span>75%</span>
            </div>
        </header>

        <!-- Intro: Your intro text and MailChimp form. -->
        <div class="row" id="intro">
            <div class="content">
                <!-- Pre-Submission: This is what's displayed before the subscription form has been submitted. -->
                <div id="pre-subscribe">
                    <div class="row" id="copy">
                        <h1>Something <strong>really good</strong> is coming <strong>very soon</strong>.</h1>
                        <p>If you have something new you’re looking to launch, you’re going to want to start building a community of people interested in what you’re launching. The Launch template by is the best way to do just that.</p>
                    </div>

                    <div class="row" id="subscribe">
                        <!-- Subscription Form: Configure your MailChimp settings within settings.php. -->
                        <form class="row" id="mailchimp" action="assets/helpers/post-subscribe.php" method="post">
                        	<input type="email" name="email" id="email" placeholder="you@youremail.com">
                        	<button type="submit" name="subscribe" class="button icon submit"></button>
                        </form>
                    </div>
                </div>

                <!-- Post Subscription: This is what’s displayed after the subscription form has been submitted.  -->
                <div id="post-subscribe">
                    <div class="row" id="copy">
                        <h1>Thanks for <strong>signing up</strong>. Check your email to <strong>confirm</strong> your subscription.</h1>
                    </div>
                </div>

                <!-- Social Links: Add or remove your social links here. -->
                <div class="row" id="social">
                    <a class="icon twitter" href="http://twitter.com/yourid"></a>
                    <a class="icon facebook" href="http://facebook.com/yourid"></a>
                    <a class="icon email" href="mailto:you@yourmail.com"></a>
                </div>
            </div>
        </div>

        <!-- Required Scripts: Not too much needed for Launch. -->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="assets/scripts/main.js"></script>
    </body>
</html>