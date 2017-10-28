<?php include'header.php'; ?>

<div class="container" style="height:400px; overflow:hidden;">
	<img class="img-responsive" src="Images/banner3.jpg" alt="">
</div>

  <?php include'search.php';?>
	<div class="container">
<!-- Slider-starts-Here -->
				<script src="js/responsiveslides.min.js"></script>
				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: true,
				        nav: false,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>
			<!--//End-slider-script -->
			<div  id="top" class="callbacks_container wow fadeInUp" data-wow-delay="0.5s" >
				<ul class="rslides" id="slider3">
					<li>
                    		<h3> HOME RENTING </h3>
					  <img src="Images/p4.jpg" alt="" height="200px" width="100px"></img>
							
					</li>
					<li>
                    		<h3>HOME RENTING </h3>
					  <img src="Images/p5.jpg" alt="" height="200px" width="100px"></img>
					</li>
					<li>
                    		<h3> HOME RENTING </h3>
					  <img src="Images/p6.jpg" alt="" height="200px" width="100px" ></img>
					</li>
				</ul>
			</div>

	</div>
	<?php include'footer.php'?>
	
	</body>
</html>