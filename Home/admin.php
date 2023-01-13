<!DOCTYPE html>
<head>
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>    

</head>



<html lang="pl">

<?php
include("../Functions.php");
head();
script(); ?>

<body>
   <?php homePageMenu(); ?>
   <div class="w3-content w3-theme-light" style="max-width:2000px; margin-top:46px; min-height:700pt;">
      <div class="w3-container w3-container-padding  w3-section w3-theme">
         <h1>Wspólnota Mieszkaniowa Pro-Elo  Strona Administratora</h1>
         <input type="button"  class="button" value="Lokatorzy">
         <input type="button" class="button" value="Opłaty">
         <input type="button" class="button" value="Zarządzanie danymi">
         <input type="button" class="button" value="Informacje">
         <input type="button" class="button" value="Wyloguj">
         <input type="button" class="button" value="Input Button" onclick="https://localhost/projGitPAI/projekt_wspolnota/login.php">




      </div>
      <div class="w3-container w3-container-padding w3-section w3-theme-light w3-row">
         <div class="w3-col l3 m5 s12 w3-theme-l4">
            <h4><input type="button" class="button" value="Input Button"></h4>
            <h4><input type="button" class="button" value="Input Button"></h4>
            <h4><input type="button" class="button" value="Input Button"></h4>
            <h4><input type="button" class="button" value="Input Button"></h4>
            <h4><input type="button" class="button" value="Input Button"></h4>
            <h4><input type="button" class="button" value="Input Button"></h4>
            <!-- kontakty w karuzeli -->
         </div>
   
         








      </div>
   </div>
  
   <h4>Kontakt  ---------------- </h4>
  
   <?php footer(); ?>


   
</body>

</html>