
	 
	 <?php
	 include_once('navbar.php');
	 ?>
	 <style>

	body{
		color:white;
	}
	  .tabs .indicator {
    position: absolute;
    bottom: 0;
    height: 2px;
    background-color: teal;
    will-change: left, right;
  }
.tabs .tab a:focus, .tabs .tab a:focus.active {
    background-color: transparent;
}

blockquote{
	border-left:5px solid blue;
}


</style>



</head>
<body>

		<section class="section #3e2723 brown darken-4">
			<div class="container">
				<div class="row">
					<div class="col s12">
				      	<ul class="tabs">
					        <li class="tab col s6"><a href="#purpose" class="active teal-text text-darken-2">Our Purpose</a></li>
					        <li class="tab col s6"><a href="#team" class="teal-text text-darken-2">Our Team</a></li>
					        <!-- <li class="tab col s4"><a href="#about_me" class="teal-text text-darken-2">About Me</a></li> -->
				    	</ul>
			    	</div>
				</div>

			    <div class="purpose" id="purpose">
						<div class="row">
							<div class="col s12 l6">
									<h5 class="light"><blockquote>Our Purpose</blockquote></h5>
		                  			<p class="grey-text text-lighten-4 flow-text">Focus on manufacturing quality instruments, continuous improvement
			                        and adding value to our products and services. Build long lasting and rewarding
			                        relationships with the people we do business with. Build a strong Hi Temp Solutions
			                        brand and reputation in the industrial markets where we compete. Maintain an enjoyable,
			                        fulfilling work environment for our employees. Achieve planned, sustained growth
			                        in our target markets both in the US and internationally</p>
			                </div>
                            <div class="col s12 l6">
                            	<img src="images/1.jpg" alt="Heaven Solar Logo" class="responsive-img">
                                <p class="grey-text text-lighten-4 footer-description"><b>Malgadi</b> is a subsidiary company of <b><a href="http://hitempsolutions.com/" target="_BLANK">Hitempsolution <i class="fa fa-external-link" aria-hidden="true"></i></a></b>.</p>
                            </div>
		    			</div>
		    	</div>

		    	<div class="team" id="team">
		    		<div class="row">
		    			<div class="col s12 l6">
                            <h5 class="light"><blockquote>Our Team</blockquote></h5>
                            <img src="images/1.jpg" alt="Heaven Solar Logo" class="responsive-img">
                    	</div>
                    	<div class="col s12 l6">
                    		<p class="grey-text text-lighten-4 flow-text">Malgadi is a for the students, by the student's venture.
							It is a non-profitable organization started by the college students to provide better quality electronic components at a reasonable rate.
							Along with this, we also organize workshops and seminars in colleges to impart technical knowledge to students. We intend to d
							evelop this platform and extend
							its reach to as many students as possible, hence making technical education a bit more interesting. This is the platform which made us t
							echnically potent along
							with an experience of entrepreneurship.</p>
                    	</div>
		    		</div>

		    	</div>

		    </div>
		</section>


		<div class="statics">
		<section id="things we have done so far">
           <div class="container">
					<div class="row counters">
						<div class="col s12 center">
							<h4 id="views">Things We Have Done So Far</h4>
						</div>
						<div class="col s12 m4 center count"><span id="videoCount"></span>5 <br>Web-Development</div>
						<div class="col s12 m4 center count"><span id="designProject"></span> 5 <br>Moblie-Development</div>
						<div class="col s12 m4 center count"><span id="clientCount"></span>  5 <br>Data-Analytics</div>
					</div>
		</div>
		</section>
		</div><br><br>








	<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.tabs').tabs();
		});
    </script>
	
	
	 <?php
	 include_once('footer.php');
	 ?>
    </body>
  </html>
