<!DOCTYPE html>
  <html>
    <head>

		<title>

					SLYRO
		</title>

		<link rel="shotcut icon" type="images/png"  href="images/logo.png">


	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
    <link  rel="stylesheet" href="style/style.css">
	

  </head>

  <body bgcolor="#525f7f">

<!-----------navbar-------------------------------------->
    <nav class="nav-extended">

      <div class="nav-wrapper #006064 cyan darken-4">
        <a href="index.php" class="brand-logo">
		
		
		SLYRO</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>


            <ul id="dropdown1" class="dropdown-content">
              <li><a href="#!">Nadidad</a></li>
              <li><a href="#!">Vadodara</a></li>
              <li><a href="#!">Ahemdabad</a></li>
            </ul>

            <ul id="dropdown2" class="dropdown-content">
              <li><a href="#!">Nadidad</a></li>
              <li><a href="#!">Vadodara</a></li>
              <li><a href="#!">Ahemdabad</a></li>
            </ul>


        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="index.php">HOME</a></li>
          <li><a href="#contact">CONTACT</a></li>
          <li><a class="dropdown-button" href="#!" data-hover="true" data-beloworigin="true" data-activates="dropdown2" onmouseover="drop()">CITIES<i class="material-icons right">arrow_drop_down</i></a></li>
  	    <!-- <li><a href="collapsible.html">JavaScript</a></li> -->
        </ul>

        <ul class="side-nav" id="mobile-demo">
          <li><a href="index.php">HOME</a></li>
          <li><a href="#contact">CONTACT</a></li>
            <li><a class="dropdown-button" href="#!" data-hover="true" data-beloworigin="true"  data-activates="dropdown1" onmouseover="drop()">CITIES<i class="material-icons right">arrow_drop_down</i></a></li>
          <!-- <li><a href="collapsible.html">JavaScript</a></li> -->
        </ul>

      </div>



    </nav>



<!-----------navbar-------------------------------------->
<!-----------tab------------------------------>
<div class="row">
    <div class="col s12">
      <ul class="tabs #1a237e indigo darken-4" >
        <li class="tab col s4" ><a href="pg.php" target="_self" class="white-text text-white" >FIND PG</a></li>
        <li class="tab col s4"><a  href="postad.php" target="_self"  class="white-text text-white"   >POST PG</a></li>
        <li class="tab col s4 "><a href="about.php" target="_self"  class="white-text text-white">ABOUT US</a></li>
        <!-- <li class="tab col s3"><a href="#test4">Test 4</a></li> -->
      </ul>
    </div>
  </div>

<!-----------tabcomplete----------------->

<!----search window-------------------------------->

<div class="container">

<div class="row">

  <div class="col s12 m4 l8">


  <div class="search">

      <nav>


        <div class="nav-wrapper #fb8c00 orange darken-1">


      <form>



        <div class="input-field">

        <input id="search" type="search"    placeholder="Search" align="center" required>

               <label class="label-icon" for="search"><i class="material-icons">search</i></label>




                <i class="material-icons">close</i>

               </div>

      </form>


    </div>
  </nav>
  </div>
 </div>

<div class="gender">
 <div  class="input-field col s8 m4 l3 offset-s2  #fb8c00 orange darken-1" >
   <select class="icons">
     <option  value=""  disabled selected>Select Gender</option>
     <option  value="" data-icon="images/1.jpg" class="circle">Male</option>
     <option value="" data-icon="images/1.jpg" class="circle">Female</option>
     <option value="" data-icon="images/1.jpg" class="circle">Other</option>
   </select>
   </div>
 </div>





 </div>


   </div>
	<script src="js/script.js"></script>

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	     <script>

    $(document).ready(function()
{
    $(".button-collapse").sideNav();

    $('.slider').slider();

    autoplay();
		function autoplay() {
			$('.slider').slider('next');
		   setTimeout(autoplay, 5000);
     }

     function drop(){
$(".dropdown-button").dropdown();
   }


     $(document).ready(function(){
       $('ul.tabs').tabs();
     });

  $(document).ready(function(){
    $('ul.tabs').tabs('select_tab', 'tab_id');
  });

  $(document).ready(function() {
     $('select').material_select();
   });

   $('select').css("font-color", "white");
	    }

		);


      </script>
	  
	  <!-------------navbar complete------------------>


