<!DOCTYPE html>
<html>
  <head>
    <title>GoonWorx Web Development
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GoonWorx specializes in web development, programming, and graphic design. We are located in the Fraser Valley, BC, Canada. We work with HTML5, CSS3, JavaScript, Less, MySQL, and PHP. We also can work with languages that do not target the web such as Java and C#">
    <meta name="keywords" content="GoonWorx, Web Development, Programming, Andrew McGowan, Graphic Design, HTML5, CSS3, JavaScript, Java, MySql, PHP, Less, Fraser Valley, Lower Mainland, Abbotsford, BC, Canada, British Columbia, Abbotsford Web Developer">
    <meta name="author" content="Andrew McGowan">
    <!-- Bootstrap -->
    <link href="styles/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="styles/mcgowan.css" rel="stylesheet" media="screen">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	 
  	<div class="container">
  		<div class="masthead">
  			<h3 class="text-muted">GoonWorx</h3>
  		</div>
  		<div class="jumbotron">
  			
	  		<h1>Hello!</h1>
	  		<p class="lead">
		  		Welcome to GoonWorx! We develop web things from personal blogs to sophisticated custom web applications. We are currently building a site to list our services in detail. However, we would be happy to put that on hold if you have a great idea that needs to be on the web right away. 
	  		</p>
	  		<a class="btn btn-lg btn-success" href="mailto:andrew@goonworx.com">Contact Us</a>
	  	</div>
	  	<div class="footer">
	  		<p>&copy; <a href="http://www.goonworx.com/" target="_blank">GoonWorx</a> <?= date('Y'); ?></p>
	  	</div>
  	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="js/Chart.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	function runCharts(charts) {
	    	charts.each(function(i,o) {
		    	var chart = $(o),
		    		options = {
		    			segmentShowStroke: false,
			    		percentageInnerCutout : 90,	
		    		},
		    		data = [
		    			{
			    			value: parseInt(chart.attr('data-value'), 10),
			    			color: "red"	    			
		    			},
		    			{
		    				value: 100 - parseInt(chart.attr('data-value'), 10),
		    				color: "silver"
		    			}

		    		],
		    		canvas = chart.find('canvas'),
		    		ctx = canvas.get(0).getContext('2d');
		    		ctx.clearRect(0, 0, canvas.width(), canvas.height());
		    		setTimeout(function() {
		    			new Chart(ctx).Doughnut(data,options);
		    		}, 1500);
	    	});
    	}
    	function scrollTo(element) {
	    	$('html, body').animate({
		    	scrollTop: element.offset().top - 50
	    	}, 500);
    	}
    	$(document).ready(function(e) {
	    	$('.btn.slide').click(function() {
		    	var btn = $(this),
		    		slider = btn.closest('.slider');
		    	btn.closest('.row')
		    		.addClass('slide-left')
		    		.parent()
		    		.addClass('slide')
		    		.find('.' + btn.attr('data-target'))
		    		.removeClass('slide-right');
		    	runCharts(btn.closest('.container').find('.' + btn.attr('data-target') + ' .chart'));
		    	
		    	setTimeout(function() {
		    		scrollTo(slider);
		    	}, 500);
	    	});
	    	$('a.slide-back').click(function() {
		    	var btn = $(this);
		    	btn.tooltip('hide');
		    	btn.closest('.row')
		    		.addClass('slide-right')
		    		.parent()
		    		.removeClass('slide')
		    		.find('.slide-left')
		    		.removeClass('slide-left');
	    	});
	    	$('.hint').tooltip({
		    	container: 'body'
	    	});
    	});
    </script>
  </body>
</html>