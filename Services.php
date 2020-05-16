<?php include('header.php');?>
	<link rel="stylesheet" type="text/css" href="css/Services8.css">
		<script>

	$(document).ready(function(){
		  $("#learn").click(function(){
		    $("#show").slideToggle("slow");
		  });
		});
		</script>

		<style type="text/css">
		#learn {
			font-family: aries;
			font-style: italic;
			max-height: 20px;
			width: 100px;
		padding: 5px;
		text-align: center;
			text-decoration: none;
			font-size: 12px;
		background-color: #e5eecc;
		border-radius:2px;
		margin-left: 60%;
			margin-bottom: 8px;
		}
		#learn:hover {
			font-family: aries;
			height: 20px;
			width: 100px;
			padding: 5px;
			text-align: center;
			text-decoration: none;
			font-size: 12px;
			font-weight: bold;
			background-color: #e5eecc;
			margin-bottom: 8px;
			border-radius:2px;
			margin-left: 60%;
		}
		#show {
			max-width: 1050px;
		padding-left:55px;
		padding-top: 50px;
		display: none;
			text-decoration: none;
			font-size: 1em;
			font-family: arial;
		}
</style>
<main>

    <div class="container">

        <div class="main-top">

            <nav>
                <ul>
                    <li>
                        <a href="MainPage.php">
                            HOME
                        </a>
                    </li>
                    <li>
                        <a href="Company.php">COMPANY</a>
                    </li>

                    <li class="active">

                        <a href="Services.php">SERVICES</a>
                    </li>
                    <li>
                        <a href="Staff.php">STAFF</a>
                    </li>



                </ul>

            </nav>
        </div>
        <!-- ==================================2========================================= -->

        <!-- **********************************3***************************************** -->
        <div class="maintop1">

            <div class="maintop2">
                <h1 id="logo" title="Crystalized Mind">CrystalizedMind</h1>
                <p>
                    <u>Meditation</u>
                </p>
            </div>


        </div>

</div></main>

				<!-- ===========================================this webs part====================================== -->


				<img class="fotoja1" src="Images/showcase.jpg" alt="tastiere" height="460px" width="1200px" >

				<section class="shkrimi">
					<h3><b>Crystalized Mind services</b></h3>
					<p>You can try Crystalized Mind for yourself and learn the essentials of meditation and mindfulness with our free Basics course. If you enjoy it, then it’s time to subscribe. Once you do, you’ll have bite-sized minis for when you’re short on time, exercises to add extra mindfulness to your day, and hundreds of meditations on everything from stress to sleep.</p>
					
					</section>
				</div>
			</div>
				<div class="krejtlista">
					<div class="ourservices">
						<h3><i>Our services</i></h3>
					</div>
					<ul list-style="none" id="lista1" >
						<li>Concentrating on the breath </li>
						<li>Emptying your mind </li>
						<li>Movement</li>
						<li>Grounding and <abbr title="mindfulness">Mindfulness</abbr></li>
					</ul>
					<br><br>
					<div class="comunication">
						<h3><i>Comunication with our staff<i></h3>
					</div>
					<ul id="lista2">
						<li>Cooperative staff</li>
						<li>Personalized products</li>
						<li>Recommendations for your health</li>
						<li>Premier Support</li>
					</ul>
				</div>
				<canvas id="katrorat" width="50" height="50"></canvas>
				<div class="warranty">
					<figure>
						<img src="Images/tool1.jpg" width="480" height="247.5">
						<figcaption>Meditation Warranty</figcaption>
					</figure>
					<article>
						<h4>Warranty</h4>
						<p>&raquo With our warranty policy you can achieve maximum uptime and productivity. For every problem with your product, within one year of time, we encourage you to call us. Within a few days one of our responsible people will arrive on-site.  <br>	
						&raquo Before handing out your tools for repairments to our staff, you are entitled to keep them therefore
						<u>all your data will be unshared.</u> </p>
						<div id="learn" style="min-height: 20px">Learn more</div>
						<div id="show">
							<p> &raquo These are some of the products that we have a warranty policy for. There are a lot more, but just to give you an idea, refer to the table below.</p><br>		
						</div>
					</article>
				</div>

				
				
			<p></p>


			</main>
			<?php include('footer.php');?>
			
			</body>
		</html>
