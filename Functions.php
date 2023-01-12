<?php
function head()
{
echo
    '<head>
        <meta charset="utf-8">
        <title> Internetowe Bazy Danych Maciej Sobieszczyk </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../Style/myStyle.css">
        <script src="https://www.w3schools.com/lib/w3.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css">
    </head>';
};
function menu()
{
echo'
<div class="w3-top">
    <div class="w3-bar w3-theme w3-card w3-text-grey ">
        <a                                   style="width:50px; height:50px"; class="menuButtonContainer w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction(); burgerToXToggle(this)"  title="Toggle Navigation Menu">  
            <div class="menuButtonbar1"></div>
            <div class="menuButtonbar2"></div>
            <div class="menuButtonbar3"></div>
        </a>
        <a href="../index.php"                class="w3-bar-item w3-button w3-padding-large w3-theme-action w3-hide-small">Home</a>
        <a href="../Zadanie1/index.php"       class="w3-bar-item w3-button w3-padding-large w3-theme-action w3-hide-small">Zadanie 1</a>
        <a href="../Zadanie2/index.php"       class="w3-bar-item w3-button w3-padding-large w3-theme-action w3-hide-small">Zadanie 2</a>
        <a href="../Zadanie3/index.php"       class="w3-bar-item w3-button w3-padding-large w3-theme-action w3-hide-small">Zadanie 3</a>
        <a href="../ZadanieProjekt/index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-action w3-hide-small">Projekt</a>
    </div>
</div>
<style>
.menuButtonContainer {
    display: inline-block;
    cursor: pointer;
    padding-top:4px;
    padding-left:4px;
  }
  .menuButtonbar1, .menuButtonbar2, .menuButtonbar3 {
    width: 35px;
    height: 5px;
    background-color: #333;
    margin: 6px 0;
    transition: 0.4s;
  }
  .change .menuButtonbar1 {
    transform: translate(0, 11px) rotate(-45deg);
  }
  .change .menuButtonbar2 {opacity: 0;}
  .change .menuButtonbar3 {
    transform: translate(0, -11px) rotate(45deg);
  }
</style>

<div id="navDemo" class="w3-bar-block w3-theme w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">

  <a href="../index.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HOME</a>
  <a href="../Zadanie1/index.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Zadanie1</a>
  <a href="../Zadanie2/index.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Zadanie2</a>
  <a href="../Zadanie3/index.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Zadanie3</a>
  <a href="../ZadanieProjekt/index.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Projekt</a>
</div>';
};

function homePageMenu() {
  // $cookie_name = 'Login';
  // $cookie_value = "User1";
  // setcookie($cookie_name, $cookie_value, time() + (10 * 30), "/"); // 86400 = 1 day
  echo '<style>
.menuButtonContainer {
    display: inline-block;
    cursor: pointer;
    padding-top:4px;
    padding-left:4px;
  }
  .menuButtonbar1, .menuButtonbar2, .menuButtonbar3 {
    width: 35px;
    height: 5px;
    background-color: #333;
    margin: 6px 0;
    transition: 0.4s;
  }
  .change .menuButtonbar1 {
    transform: translate(0, 11px) rotate(-45deg);
  }
  .change .menuButtonbar2 {opacity: 0;}
  .change .menuButtonbar3 {
    transform: translate(0, -11px) rotate(45deg);
  }
</style>';


  
  if(!isset($_COOKIE["Login"])) {
    echo '
      <div class="w3-top">
        <div class="w3-bar w3-theme w3-card w3-text-grey ">
          <a style="width:50px; height:50px"; class="menuButtonContainer w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction(); burgerToXToggle(this)"  title="Toggle Navigation Menu">  
            <div class="menuButtonbar1"></div>
            <div class="menuButtonbar2"></div>
            <div class="menuButtonbar3"></div>
          </a>
          <div class="w3-right ">
            <a href="../login.php" class="w3-bar-item w3-button w3-padding-large w3-theme-action w3-hide-small ">Zaloguj</a>
          </div>
        </div>
      </div>

      <div id="navDemo" class="w3-bar-block w3-theme w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
        <a href="../logout.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Zaloguj</a>
      </div>';
  } else {
    $LoginButtonCaption = $_COOKIE["Login"];
    echo '
    <div class="w3-top">
      <div class="w3-bar w3-theme w3-card w3-text-grey ">
        <a style="width:50px; height:50px"; class="menuButtonContainer w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction(); burgerToXToggle(this)"  title="Toggle Navigation Menu">  
            <div class="menuButtonbar1"></div>
            <div class="menuButtonbar2"></div>
            <div class="menuButtonbar3"></div>
        </a>
        <div class="w3-right ">
          <a href="../logout.php" class="w3-bar-item w3-button w3-padding-large w3-theme-action w3-hide-small ">Wyloguj '.$LoginButtonCaption.'</a>
        </div>
      </div>
    </div>

    <div id="navDemo" class="w3-bar-block w3-theme w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="../logout.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Wyloguj '.$LoginButtonCaption.'</a>
    </div>';
  };



};

function footer()
{
echo ' 
    <div id="footer" class=" footer w3-container w3-padding-64 w3-center w3-text-theme w3-theme-d5 w3-large">
        Programowanie Aplikacji Internetowych  - Projekt  <br>
        Grupa_9  Patryk Romanowski D3 Maciej Sobieszczyk D3 Jerzy Goś D3 <br>
        PUW 2022/2023
    </div>';
};
function script(){
    echo ' 
    <script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById("ticketModal");
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
function burgerToXToggle(x) {
    x.classList.toggle("change");
  }
</script>
    ';
};
?>