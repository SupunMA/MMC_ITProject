<!DOCTYPE html>
<html>
<title>Madushanka MicroCredit</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="romane_CSS/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
  * {
  box-sizing: border-box;
}

body, html {
  height: 100%;
  line-height: 1.8;
}

.bgimg-1 {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url("rom_pics\topL.jpg");
  min-height: 100%;
  background-position: center;
  background-size: cover;

}

body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

.w3-bar .w3-button {
  padding: 16px;
}

body {
  font-family: Arial;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #073e6b;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #073e6b;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

</style>
<body>


 <!-- ENTER YOUR BODY PART HERE   class="w3-center"      <div class="w3-col l3 m6">     !!!!!!!! --> <!-- ENTER YOUR BODY PART HERE!!!!!!!! -->

 <!-- Work Section -->

 <header class="bgimg-1 w3-display-container w3-grayscale-min">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Find Your</span><br>
    <span class="w3-large">Dream Land</span>  
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Contact Us</a></p>
  </div> 
</header>
 

 <div class="w3-container" style="padding:128px 16px" id="work">
      <h3 >Biggest Land Selling Website</h3>
<div>
      <form class="example" action="/action_page.php" style="margin:auto; max-width:300px">
        <input type="text" placeholder="Search.." name="search2">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
</div>


<div class="w3-row-padding" style="margin-top:64px">
          <div class="w3-col l3 m6">
       <img src="rom_pics\land1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="land">
          </div>
      
        <div class="w3-col l3 m6">
        <img src="rom_pics\land6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="land">
        </div>
     
        <div class="w3-col l3 m6">
        <img src="rom_pics\land3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="land">
        </div>
     
      <div class="w3-col l3 m6">
        <img src="rom_pics\land4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="land">
      </div>
 </div>
     
    <div class="w3-row-padding" style="margin-top:64px">
     
       <div class="w3-col l3 m6">
        <img src="rom_pics\land5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="land">
       </div>

    <div class="w3-col l3 m6">
      <img src="rom_pics\land6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="land">
    </div>
  
    <div class="w3-col l3 m6">
      <img src="rom_pics\land4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="land">
    </div>
  
      <div class="w3-col l3 m6">
        <img src="rom_pics\land4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="land">
      </div>
    


      </div>    
    
</div>        

   
    <!-- Footer -->
    <!-- give your page link to the "#home" to activate back to the top -->
<footer class="w3-center w3-black w3-padding-64">

    <p>Powered by <a href="/home" title="Madhushanka MicroCredit" target="_blank" class="w3-hover-text-green">Madhushanka MicroCredit</a></p>
  </footer>
  <script>
    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }
    
    
    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");
    
    function w3_open() {
      if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
      } else {
        mySidebar.style.display = 'block';
      }
    }
    
    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
    }
    </script>
    
    </body>
    </html>