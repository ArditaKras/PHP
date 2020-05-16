
<?php include('header.php');
?>
<link rel="stylesheet" type="text/css" href="css/MainPage10.css">

<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
}
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.container {
    padding: 2px 16px;
}
#admin {
    margin: 5%;
    border: 1px solid gray;
    padding: 8px;
}
h1 {
    text-align: center;
    text-transform: uppercase;
    opacity: 0.9;
    color: #088A4B;
}
p {
    letter-spacing: 3px;
}
#formstyle{
    height: 50px;
    width: 500px;
    background-color: #ccc;
    color: #2e2e2e;
    font-size: 22px;
    text-align: center;
    font-family: 'Teko', sans-serif;
}
.personeli{
    font-size: 14px;
    background-color: white;

}
</style>


   <script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } else {
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>

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
                    <li>
                        <a href="Services.php">SERVICES</a>
                    </li>
                    <li class="active">
                        <a href="Staff.php">STAFF</a>
                    </li>
                </ul>
            </nav>


        <div class="maintop1">
            <div class="maintop2">
                <h1 id="logo" title="Crystalized Mind">Crystalized Mind</h1>
                <p><u>Meditation</u></p>
            </div>
        </div>
    </div>
    <br>
</div>
    <section class="small-banner partners-banner">
       
    <section class="our-costumers text-center section-padding grey-background">
        <div class="container">
             <section class="our-team-section text-center">
                    <div class="container">
                        <h1 class="main-title">𝓜𝓔𝓔𝓣 𝓞𝓤𝓡 𝓣𝓔𝓐𝓜</h1>
                        <p class="about-us-p">𝑾𝒆 𝒉𝒂𝒗𝒆 𝒂𝒏 𝒂𝒎𝒂𝒛𝒊𝒏𝒈 𝒂𝒏𝒅 𝒗𝒆𝒓𝒚 𝒄𝒓𝒆𝒂𝒕𝒊𝒗𝒆 𝒕𝒆𝒂𝒎</p>
                        <div class="our-team">

                             <div class="team-member text-center">
                                <div class="member-image">
                                    <img src="Images/ardita.jpg">
                                </div>
                                <div class="member-info">
                                    <h4>Ardita Krasniqi</h4>
                                    <p class="position">Founder & CEO</p>
                                </div>
                            </div>

                            <div class="team-member text-center">
                                <div class="member-image">
                                    <img src="Images/rajmonda.jpg">
                                </div>
                                <div class="member-info">
                                    <h4>Rajmond&#235; Shllaku</h4>
                                    <p class="position">Products Specialist</p>
                                </div>
                            </div>

                             <div class="team-member text-center">
                                <div class="member-image">
                                    <img src="Images/rina.jpg">
                                </div>
                                <div class="member-info">
                                    <h4>Rina Bajra</h4>
                                    <p class="position">Content Marketer</p>
                                </div>
                            </div>

                           
                              <div class="team-member text-center">
                                <div class="member-image">
                                    <img src="Images/albina.jpg">
                                </div>
                                <div class="member-info">
                                    <h4>Albina Zekaj</h4>
                                    <p class="position">Recreation Specialist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


        </div>
<div id="admin">
<form>
<select name="users" id="formstyle" onchange="showUser(this.value)">
<option class="personeli" value="">𝑶𝒖𝒓 𝑺𝒕𝒂𝒇𝒇:</option>
<option class="personeli" value="1000">Ardita Krasniqi</option>
<option class="personeli" value="1001">Rajmondë Shllaku</option>
<option class="personeli" value="1002">Rina Bajra</option>
<option class="personeli" value="1003">Albina Zekaj</option>


</select>
</form>
<br>
<div id="txtHint"><b>You can find here the information for our Staff</b></div>
</div>
</center>


<!-- </section> -->
</main>
 <?php include('footer.php');?>
</body>
</html>
