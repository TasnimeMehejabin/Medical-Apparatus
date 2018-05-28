<html>
<head>
<title>Message Box</title>
<link href="search.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="total">
<div id="sidebar">
<div class="toggle-btn" onclick="toggleSidebar()">
<script>
function toggleSidebar(){
document.getElementById("sidebar").classList.toggle('active');
}
</script>
<span></span>
<span></span>
<span></span>
</div>
<ul>
<li><a href="index.html">HOME</a></li>
<li><a href="about us.html">ABOUT</a></li>
<li><a href="registration.php">Registration</a></li>
<li><button id="myBtn">COMMENT BOX</button></li>
</ul>
</div>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
	
    <p>Some text in the Modal..</p>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>