<?php include 'work-header.php' ?>
<section id="work" ng-app="workApp" ng-controller="WorkController">
	<section class="title-section">
		<div class="wrapper">
			<h3 class="title wow fadeInDown">My Work</h3>
			<span class=" subtitle wow fadeInDown" data-wow-delay="400ms">Things I've Done</span>
		</div>
	</section>
	<div class="wrapper">
		<section class="work-pieces">
			<h3>Portfolio</h3>
			<section class="work-piece" ng-repeat="work in works"></a>
				<a ng-href="work.php/{{work.name}}"><img ng-src="{{work.img}}" alt=""></a>
				<h4 class="title" ng-bind="work.name"></h4>
			</section>

			<div class="clear"></div>
		</section>


	</div>
</section>
<?php include 'footer.php' ?>