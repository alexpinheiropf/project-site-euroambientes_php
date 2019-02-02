<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="ISO-8859-1">
<title>Ambientes</title>
<link rel="shortcut icon" type="image/x-icon"
	href="style/images/favicon_euro.png" />
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" type="text/css" href="style/color/red.css"
	media="all" />
<link rel="stylesheet" type="text/css" media="screen"
	href="style/css/prettyPhoto.css" />
<link rel="stylesheet" type="text/css" href="style/type/museo.css"
	media="all" />
<link rel="stylesheet" type="text/css" href="style/type/ptsans.css"
	media="all" />
<link rel="stylesheet" type="text/css" href="style/type/charis.css"
	media="all" />
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all" />
<![endif]-->
<script type="text/javascript" src="style/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="style/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="style/js/transify.js"></script>
<script type="text/javascript" src="style/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="style/js/jquery.superbgimage.min.js"></script>
<script type="text/javascript" src="style/js/jquery.slickforms.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
	$('.forms').dcSlickForms();
});
</script>
<script type="text/javascript">
$(document).ready(function() {
	
      var 
        speed = 1000,   // animation speed
        $wall = $('#portfolio .items'),

        masonryOptions = {         // initial masonry options

          itemSelector: '.box:not(.invis)',
          animate: true,
          animationOptions: {
            duration: speed,
            queue: false
          }
        };
		
		$wall.imagesLoaded(function(){
			
			$wall.masonry(masonryOptions);
			
			// Create array of filters from link href
			var arrFilter = [];
			$('#filtering-nav a').each(function(){
				fhash = $(this).attr('href').replace('#','');
				if(fhash != 'all'){
					arrFilter.push(fhash);
				}
			});
			
			//  Get the parameter value after the # symbol
			var url=document.URL.split('#')[1];
			if(url == undefined){
				url = 'all';
			}
			$('#filtering-nav a.'+url).parent().addClass('active');
			
			if(jQuery.inArray(url, arrFilter) > '-1'){
				// set masonry options animate to false
				masonryOptions.animate = false;
				// hide boxes that don't match the filter class
				$wall.children().not('.'+url).toggleClass('invis').hide();
			}
		//	imageSetCss($(".box"));
			// run masonry again
			$wall.masonry(masonryOptions);
		//	imageFadeIn($(".box"));
		$wall.animate({opacity: 1},1000);
			
		});
		
		$('#filtering-nav a').click(function(e){
			var color = $(this).attr('class');
			filterClass = '.' + color;
			$('#filtering-nav li').removeClass('active');
			$(this).parent().addClass('active');
			
			if(filterClass=='.all') {
			  // show all hidden boxes
			  $wall.children('.invis').toggleClass('invis').fadeIn(speed);
			} else {
			  // hide visible boxes 
			  $wall.children().not(filterClass).not('.invis').toggleClass('invis').fadeOut(speed);
			  // show hidden boxes
			  $wall.children(filterClass+'.invis').toggleClass('invis').fadeIn(speed);
			}
			$wall.masonry({animate: true});
			// set hash in URL
			location.hash = color;
			e.preventDefault();
		});
});
$.fn.imagesLoaded = function(a) {
	var 
	b=this.find("img"),
	c=[],
	d=this,
	e=b.length;
	
	if(!b.length){
		a.call(this);
		return this
	}
	b.one("load error",function(){
		--e===0&&(e=b.length,b.one("load error",function(){
			--e===0&&a.call(d)}).each(function(){
				this.src=c.shift()
			})
		)}
	).each(function(){
		c.push(this.src),this.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="
	});
	return this
};
  </script>
</head>
<body>
<?php include_once 'componentes/background.php';?>
	<div id="wrapper">
		<?php include_once 'componentes/redes_sociais.php';?>
		<div class="clear"></div>
		<!-- Begin Menu -->
			<?php include_once 'componentes/menu.php';?>
		<!-- End Menu -->

		<!-- Begin Container -->
		<div id="container" class="opacity">
			<h2>Ambientes</h2>
			<p>O Repleto repertorio de ambientes mais sofisticados e com um 
			   belo acabamento de todos os tipos e gostos.</p>
			   <br>

			<!-- Begin Portfolio -->
			<div id="portfolio">
				<div class="clear"></div>
				<div class="items">
					<div class="box col4 cat2">
						<a href="banheiro.php"><span class="overlay details"> <marquee><br> <br><h9>Banheiro</h9> </marquee></span><img
							src="style/images/ambientes/banheiro.jpg" alt="" height="220px" /></a>
					</div>
					<div class="box col4 cat2">
						<a href="corporativo.php"><span class="overlay details"> <marquee><br> <br><h9>Corporativo</h9> </marquee></span><img
							src="style/images/ambientes/corporativo.jpg" alt=""  height="220px" /></a>
					</div>
					<div class="box col4 cat2">
						<a href="cozinha.php"><span class="overlay details"> <marquee><br> <br><h9>Cozinha</h9> </marquee></span><img
							src="style/images/ambientes/cozinha.jpg" alt=""  height="220px" /></a>
					</div>
					
					<div class="box col4 cat2">
						<a href="dormitorio.php"><span class="overlay details"> <marquee><br> <br><h9>Dormitório</h9> </marquee></span><img
							src="style/images/ambientes/dormitorio.jpg" alt=""  height="220px" /></a>
					</div>
					<div class="box col4 cat2">
						<a href="home_office.php"><span class="overlay details"> <marquee><br> <br><h9>Home Office</h9> </marquee></span><img
							src="style/images/ambientes/home_office.jpg" alt=""  height="220px" /></a>
					</div>
					<div class="box col4 cat2">
						<a href="home_theater.php"><span class="overlay details"> <marquee><br> <br><h9>Home Theater</h9> </marquee></span><img
							src="style/images/ambientes/home_theater.jpg" alt=""  height="220px" /></a>
					</div>
					<div class="box col4 cat2">
						<a href="lavanderia.php"><span class="overlay details"> <marquee><br> <br><h9>Lavanderia</h9> </marquee></span><img
							src="style/images/ambientes/lavanderia.jpg" alt=""  height="220px" /></a>
					</div>
				</div>
				<!-- .wrap -->
			</div>
			<!-- End Portfolio -->

			<div class="clear"></div>

		</div>
		<!-- End Container -->
  <?php include_once 'componentes/footer.php';?>
</div>
	<script type="text/javascript" src="style/js/scripts.js"></script>

</body>
</html>