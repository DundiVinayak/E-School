<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
/* @var $this yii\web\View */

$this->title = '';
?>

<div><?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?></div>

<div class="site-index">
        <center><h1 class="text-uppercase"><?= $this->title = $model->name; ?></h1></center>
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

      <!--  <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>
    -->
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2 class="text-center">About</h2>

                <p style="word-wrap: break-word;"><?= $model->about ?></p>

                
            </div>
            <div class="col-lg-4">
                <h2 class="text-center">Latest News</h2>

                <p style="word-wrap: break-word;"></p>

                
            </div>
            <div class="col-lg-4">
                <h2 class="text-center">Contact Information</h2>
                <strong style="word-wrap: break-word;">Mobile : </strong><?= $model->contact_number ?><br/>
                <strong style="word-wrap: break-word;">Address : </strong><?= $model->address ?>

                
            </div>
        </div>

    </div>
</div>
