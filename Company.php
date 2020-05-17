<?php include('header.php');?>
<link rel="stylesheet" type="text/css" href="css/Company7.css">

		<script>
		$(document).ready(function(){
		$("h2").click(function(){
		$(this).hide();
		});
		});
		$(document).ready(function(){
		$("#button1").click(function(){
			$("#div1").animate({right: '30px'});
		});
		});
		$(document).ready(function(){
		$("#button2").click(function(){
		$("#div2").animate({right: '30px'});
		});
		});
		$(document).ready(function(){
		$("#button3").click(function(){
		$("#div3").animate({right: '30px'});
		});
		});
		</script>
	</head>
	<body>






<!-- ****************************************2************************************************* -->

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

                    <li  class="active">
                        <a href="Company.php">COMPANY</a>
                    </li>
                    <li>
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
                <h1 id="logo" title="Exoy">CrystalizedMind</h1>
                <p>
                    <u>Meditation</u>
                </p>
            </div>


        </div>

				<h1 class="box2" style="margin-left: 15px; padding-top:10px" ><div style="background:#9fcfb0 ;height:50px;width:1112px; margin-left:20px">Location of Crystalized Mind places</div></h1>
				<div style="padding: 30px">
					<button id="button1"><a href="#epara" style="text-decoration:none">
						</br><p class="box1">Kosovo &#9658;</p></a>
						</button>
						<button id="button2"><a href="#edyta" style="text-decoration:none">
							</br><p class="box1a">Japan &#9658;</p></a>
							</button>
							<button id="button3"><a href="#treta" style="text-decoration:none">
								</br><p class="box1b">Germany &#9658;</p></a>
								</button>
							</div>
							<h1  style="margin-left: 15px; padding-top:10px" ><div style="background:lightgrey ;height:50px;width:620px;position: absolute; "  id="div1"><a  name="epara">Medication Management We Serve in Kosovo</a></div></h1>
							</br>
							<h2>
							<div class="rendi1">
								<img src="Images\meditationtools.jpg" class="foto">
								<ul class="ul">
							        <p>Opioids </p>
									<p> Neuromodulators</p>
									<p>Topical Medications</p>
									<p>Personal Training </p>
									<p>Mindful Exercises </p>
									
									
						<p>  <p style="font-weight: bold; padding-top:20px">Location of our locals in Kosovo &#9658; </p>
										<p><img src="Images\lokKos.jpg" alt="Kosovo"  class="foto1"><p></p>
									</ul>
						</div>
						</h2>
						<h1  style="margin-left: 15px; padding-top:10px" ><div style="background:lightgrey ;height:50px;width:620px;position: absolute;" id="div2"><a name="edyta">Medication Management We Serve in Japan</div></h1>
						</br>
						<h2>
						<div class="rendi1">
							<img src="Images\japanmeditation.jpg" class="foto">
							<ul class="ul">
								 <p>Opioids </p>
									<p> Neuromodulators</p>
									<p>Topical Medications</p>
									<p>Personal Training </p>
									<p>Mindful Exercises </p>
									
								<p>  <p style="font-weight: bold; padding-top:20px">Location of our locals in Japan &#9658;</p>
							<p><img src="Images\Japan.png" alt="Japan"  class="foto1"><p></p>
						</ul>
					</div>
					</h2>
					<h1  style="margin-left: 15px; padding-top:10px" ><div style="background:lightgrey ;height:50px;width:660px;position: absolute;" id="div3"><a name="treta">Medication Management We Serve in Germany</a></div></h1>
					</br>
					<h2>
					<div class="rendi1">
						<img src="Images\germanymeditation.jpg" class="foto">
						<ul class="ul">
							        <p>Opioids </p>
									<p> Neuromodulators</p>
									<p>Topical Medications</p>
									<p>Personal Training </p>
									<p>Mindful Exercises </p>
							<p><p style="font-weight: bold; padding-top:20px">Location of our locals in Germany</p>
						<p><img src="Images\GERMANY.jpg" alt="Germany"  class="foto1"><p></p>
					</ul>
				</div>
				</h2>
			<?php
			include ('FileReader.php');
			$emrifile = 'FileReader.txt';
      		$File=new FileReader( $emrifile);
      		$File->shtoTekst("FileReader.txt","Ne jemi grupi qe ka krijuar Website per Meditation!");
			?>
			</main>
			<?php include('footer.php');?>
			</body>
		</html>
