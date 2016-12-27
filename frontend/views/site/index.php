<!-- <?php

/* @var $this yii\web\View */

//$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
--!>

<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<!-- Start Carousel -->
<div class="container" >
<div id="carousel" class="carousel slide" data-ride="carousel" style="width: 800px; margin: 0 auto">
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="images/carousel01.jpg" alt="First slide">
		</div>
		<div class="item">
			<img src="images/carousel02.jpg" alt="Second slide">
		</div>
		<div class="item">
			<img src="images/carousel03.jpg" alt="Third slide">
		</div>
	</div>
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
	</div>
<!-- End Carousel -->
<!-- Start Section -->
<div class="jumbotron" id="features" style="background:transparent;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center palette-headline">
				<h1 class="text-capitalize">Simple & Quick</h1>
					<h2>Generate your website, customize how you like <br> and publish whenever it's ready.</h2>
				<p>&nbsp;</p>
			</div>
			<div class="col-md-4 text-center">
                <div class="boxInner">
                    <p><img src="images/icons/Create.png" width="200" height="200" alt="benefit"> </p>
                    <p>&nbsp; </p>
                    <h3 class="text-capitalize">Create</h3>
                    <p class="text-muted"><small>Connect your School account to generate your School site in seconds.</small></p>
                    <p>&nbsp;</p>
                </div>
			</div>
			<div class="col-md-4 text-center">
                <div class="boxInner">
				<p><img class="animate zoomIn" src="images/icons/Customize.png" width="200" height="200" alt="benefit"></p>
				<p>&nbsp; </p>
				<h3 class="text-capitalize">Customize</h3>
				<p class="text-muted"><small>Customize as much or as little as you wish until you’re happy with your site.</small></p>
				<p>&nbsp;</p></div>
                
			</div>
			<div class="col-md-4 text-center">
				<p><img class="animate zoomIn" src="images/icons/Publish.png" width="200" height="200" alt="benefit"></p>
				<p>&nbsp; </p>
				<h3 class="text-capitalize">Publish</h3>
				<p class="text-muted"><small>Publish your site in seconds and cast your School across the internet.</small></p>
				<p>&nbsp;</p>
			</div>
		</div>
	</div>
</div>
<!-- End Section -->
<!-- Start Section -->
<div id="getStarted" class="jumbotron" style="background-color:#D7DEE0;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Get Started</h1>
				<p>Generate a fully customizable website <br> for your school in seconds. Get started for free!</p>

					<a href="/advancedzZ/frontend/web/index.php?r=site/signup" class="btn btn-primary btn-lg" role="button" style=""><i class="fa fa-empire"></i> Sign Up Now</a>

			</div>
		</div>
	</div>
</div>
<!-- End Section -->


