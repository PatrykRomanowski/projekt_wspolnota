<!DOCTYPE html>
<html lang="pl">

<?php
include("../Functions.php");
head();
script(); ?>

<body>
   <?php homePageMenu(); ?>
   <div class="w3-content w3-theme-light" style="max-width:2000px; margin-top:46px; min-height:700pt;">
      <div class="w3-container w3-container-padding  w3-section w3-theme">
         <h1>Wspólnota Mieszkaniowa Pro-Elo</h1>
      </div>
      <div class="w3-container w3-container-padding w3-section w3-theme-light w3-row">
         <div class="w3-col l3 m5 s12 w3-theme-l4">
            <h4>Kontakt</h4>
            <!-- kontakty w karuzeli -->
         </div>
         <div class="w3-col l9 m7 s12 w3-theme-l1 w3-border w3-container w3-round ">
            <h4>Aktualności:</h4>
            <!-- newsy z bazy danych -->
         </div>
      </div>
   </div>
   <?php footer(); ?>
</body>

</html>