<?php

include_once('navbar.php');
?>



	<!-- ----------------------------------------------navigation---------------------------------->


  <!-----------------------------------------nav complete ---------------------------------------------------------->


	<!---------------------------------------cart-------------------------------------------------------------------->


  <div class="container">

	<div class="adform">

 <div class="row">

<div class="z-depth-5 #e0e0e0 grey lighten-2">
    <form class="col s12 ">

		<div class="container-fluid">
		
			<h3 align="center"> <U><i> Enter Deatails Here </i></U> </h3>
		</div>
<!-------------------------first row-------------------------------------------->
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input name="owner_name" id="owner_name" type="text" pattern="[A-Za-z]+" autofocus required>
          <label for="icon_prefix"  class="black-text text-black">Owner Name</label>
        </div>


        <div class="input-field col s6">
          <i class="material-icons prefix"   >phone</i>
          <input name="phone" name="phone" id="phone" type="number" pattern="^\d{10}$"title="10 numeric characters only" required>
          <label for="icon_telephone"  class="black-text text-black">Telephone</label>
        </div>
      </div>
<!-------------------------first row-------------------------------------------->

<!-------------------------second row-------------------------------------------->
<div class="row">
  <div class="input-field col s12">
    <i class="material-icons prefix">home</i>
    <input name="address" type="text"  name="address" id="address" required>
    <label for="icon_assistant"  class="black-text text-black">Address</label>
  </div>
</div>
<!-------------------------second row-------------------------------------------->


<!-------------------------Third row-------------------------------------------->
	   <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input name="email" name= "email" id="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
          <label for="icon_email"  class="black-text text-black">email</label>
        </div>




        <div class="input-field col s6">
          <i class="material-icons prefix">face</i>
              <select>
                 <option value="" disabled selected type="hidden" id="gender">Ideal For</option>
                 <option value="1" id="gender">Male</option>
                 <option value="2"  id="gender">Female</option>
              </select>
        <label for="icon_bubble_chart"></label>
        </div>
      </div>

<!-------------------------Third row-------------------------------------------->



	     <div class="row">



        <div class="input-field col s6">
          <i class="material-icons prefix">location_on</i>
          <input name="city" type="text" id="city" required>
          <label for="icon_cloud_done"  class="black-text text-black">City</label>
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">directions_bike</i>
          <input name="distance" type="number" id="distance" required>
          <label for="icon_cloud_done" class="black-text text-black"> DistanceformCollege</label>
        </div>



      </div>
      <!-------------------------Third row-------------------------------------------->

      <!-------------------------fourth row-------------------------------------------->

	 <div class="row">


     <div class="input-field col s6">
       <i class="material-icons prefix">settings_overscan</i>
           <select>
              <option value="" disabled selected type="hidden" id="ac">AC facility</option>
              <option value="1" id="ac">Yes</option>
              <option value="2"  id="ac">No</option>
           </select>
     <label for="icon_bubble_chart"></label>
     </div>

     <div class="input-field col s6">
       <i class="material-icons prefix">wifi</i>
           <select>
              <option value="" disabled selected type="hidden" id="wifi">Wifi facility</option>
              <option value="1" id="wifi">Yes</option>
              <option value="2"  id="wifi">No</option>
           </select>
     <label for="icon_bubble_chart"></label>
     </div>


      </div>
      <!-------------------------fourth row-------------------------------------------->



      <!-------------------------fifth row-------------------------------------------->

<div class="row">


      <div class="input-field col s6">
        <i class="material-icons prefix">local_dining</i>
            <select>
               <option value="" disabled selected type="hidden" id="meal">Meal facility</option>
               <option value="1" id="meal">Yes</option>
               <option value="2"  id="meal">No</option>
            </select>
      <label for="icon_bubble_chart"></label>
      </div>

      <div class="input-field col s6">
        <i class="material-icons prefix">information</i>
        <input name="extra" type="text" id="extra">
        <label for="icon_cloud_done" class="black-text text-black">Extra Information</label>
      </div>

</div>
<!-------------------------fifth row-------------------------------------------->

<div class="row">


  <div class="input-field col s6">
    <i class="material-icons prefix">rooms</i>
    <input name="rooms" type="number" id="rooms" required>
    <label for="icon_cloud_done"  class="black-text text-black"> No Of Rooms</label>
  </div>


 <div class="input-field col s6">
   <i class="material-icons prefix">data_usage</i>
   <input name="toilets" type="number" id="toilets" required>
   <label for="icon_cloud_done" class="black-text text-black"> No of Toilets</label>
 </div>



</div>

<!-------------------------6 row-------------------------------------------->

<div class="row">

  <div class="input-field col s6">
    <i class="material-icons prefix">monetization_on</i>
    <input name="distance" type="number" id="rent" maxlength="4" pattern="\d{4}" required>
    <label for="icon_cloud_done" class="black-text text-black">Expected Rent Per Month</label>
  </div>


        <div class="input-field col s6">
          <i class="material-icons prefix">table</i>
          <input name="resource" type="text" id="resource">
          <label for="icon_cloud_done"  class="black-text text-black">Can you provide resources like. studytableetc</label>
        </div>




</div>

<!-------------------------6 row-------------------------------------------->

<!-------------------------7 row-------------------------------------------->

    <div class="row">

<div class="input-field col s12">
      <form action="#">
          <div class="file-field input-field">
            <div class="btn #4e342e brown darken-3">
              <span>Upload Photos</span>
              <input type="file" multiple>
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text"  placeholder="Upload one or more photos">
            </div>
          </div>
        </form>
</div>
</div>

<!-------------------------7 row-------------------------------------------->

<!-------------------------8 row-------------------------------------------->

<div class="row">


<div class=" input-field col s6">
  <input  type="checkbox" class="filled-in" id="filled-in-box" checked="checked"></input>

    <label></label>

<!-- <div class="input-field col s6"> -->

  <a class="  modal-trigger" href="#modal1" for="filled-in-box"> <span class="black-text text-black"> Terms and Conditions </span></a>

   <!-- Modal Structure -->
   <div id="modal1" class="modal">

     <div class="modal-content" class="black-text text-black" >
       <h4>Modal Header</h4>
       <p>A bunch of text</p>
     </div>

     <div class="modal-footer" >
       <a href="#!"   class="modal-action modal-close waves-effect waves-green btn-flat" >Agree</a>
     </div>


   </div>

</div>


	  <div class="input-field col s6" >
				<button class="btn waves-effect waves-light #4e342e brown darken-3" onclick="direct()" class="black-text text-black" id="postsubmit" type="submit" name="submit">Submit
				<i class="material-icons right">send</i>
				</button>
		</div>

</div>

<!-------------------------8 row-------------------------------------------->


      <!-------------------------submit row-------------------------------------------->






    <!-------------------------submit row-------------------------------------------->



    </form>
  </div>



</div>


</div>

</div>

<!---------------------------------cartcomplete----------------------------------------------->


<!-----------------------------------footer----------------------------------------->
<?php

include_once('footer.php');
?>

<!---------------------------------footer complete-------------------------------------------------------->






      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

      <script>
        $(document).ready(function()

		{

          // Init Slider
          $('.slider').slider();
		  $(".button-collapse").sideNav();


        }



		);
    $(document).ready(function(){
      // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
      $('.modal').modal();
    });
  $(document).ready(function() {
    $('select').material_select();

  });
    $('select').material_select('destroy');
	
	function direct(){
		
		window.location.href = "thankyou.php";
	}

      </script>
    </body>
  </html>
