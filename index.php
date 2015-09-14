<!DOCTYPE html>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="css/mystyle.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
      <div class="navbar-fixed">
    <nav class="teal">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Kano Locations</a>
      </div>
    </nav>
  </div>

<button class="btn-floating btn-large waves-effect waves-light red right" onclick="getLocation()" style="top:5px;right:5px;"><i class="material-icons">my_location</i>
  </button>
    <br><br><br>

<form action="complete.php" method="post"> 

  <div class="row">

   <div class="input-field col s6">    
    <select name="group" class="browser-default">
      <option value="" disabled selected>Choose Category</option>
      <option value="Bank">Bank</option>
            <option value="Barbers">Barbers</option>
      <option value="Food">Food</option>
      <option value="Government">Government</option>
      <option value="Hospital">Hospital</option>
       <option value="Hotel">Hotel</option>
       <option value="Internet Cafe">Internet Cafe</option>
        <option value="Other">Other</option>
         <option value="Petrol Station">Petrol Station</option>
          <option value="Photo/Editing Studio">Photo/Editing Studio</option>
           <option value="Recharge Card">Recharge Card</option>
            <option value="Saloon">Saloon</option>
            <option value="School">School</option>
              <option value="Shop">Shop</option>
    </select>
  </div>
      <div class="input-field col s6">
      <input value="Seasweet" name="place" type="text" class="validate">
      <label class="active" for="place">Place Name</label>
    </div>
    <div class="input-field col s12">
      <input value="Burgers, Softdrinks" name="services" type="text" class="validate">
      <label class="active" for="services">services</label>
    </div>
     <div class="input-field col s12">
      <input value="4" name="rating" type="text" class="validate">
      <label class="active" for="rating">Rating 1-5 </label>
    </div>
    <div class="input-field col s6">
      <input value="Use the 'click the location button'" id="lati" name="lati" type="text" class="validate">
      <label class="active" for="lat">Lat</label>
      </div>
         <div class="input-field col s6">
      <input value="Use the 'click the location button'" id="long" name="long" type="text" class="validate">
      <label class="active" for="lon">Lon</label> 
    </div>
   
  </div>
  
    <button class="btn waves-effect waves-light blue" type="submit" name="action" style="left: 120px;">Submit
    <i class="material-icons">send</i>
  </button>

  </form>

  <br>
    


<script>
var x = document.getElementById("lati");
var y = document.getElementById("long");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
    x.value =position.coords.latitude;
    y.value =position.coords.longitude;  
}
</script>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

</body>

</html>
