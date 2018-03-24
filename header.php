<div class="topnav" id="myHeader">
  <a class="active" href="#logout">Logout</a>
  <p>Sir MVIT SIS system</p>


</div>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:  #101921;
  height: 100px;

}
.topnav p
{
  font-size: 50px;
  padding-right: 300px;


  color: #ffffff;
  text-align: center;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  height: 100px;
  width:150px;
  font-size:30px;
  padding-top: 25px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #138962;
  color: white;
  float: right;
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
</style>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
