<html lang="pl">
  <head> </head>

  <?php
    require_once "config.php";
    include("../Functions.php");
    head();
    script(); 

    $sql = 'SELECT tytul_rachunki, oplata_lokal  FROM tab_rachunki';
    $data = mysqli_query($link,$sql)


    // ?>

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  <link
    rel="stylesheet"
    href="https://www.w3schools.com/lib/w3-theme-deep-orange.css"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com" /><link
    rel="preconnect"
    href="https://fonts.gstatic.com"
    crossorigin
  /><link
    href="https://fonts.googleapis.com/css2?family=Anton&family=Montserrat:wght@300;500&display=swap"
    rel="stylesheet"
  />

  <!-- font-family: 'Anton', sans-serif;
    font-family: 'Montserrat', sans-serif; -->

  <style>
    .nav {
      text-transform: uppercase;
      padding: 30px;
      font-weight: 600;
    }

    .nav:hover {
      background-color: #37161d;
    }

    .navContainer {
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }

    .grow {
      flex-grow: 1;
    }

    .payment {
      display: flex;
      width: 80%;
      height: 100px;
      margin-top: 30px;
      border-radius: 12px;
      box-shadow: 0 20px 30px 0 rgba(0, 0, 0, 0.11);
    }

    .title {
      display: flex;
      flex-direction: column;
      width: 70%;
      height: 100%;
    }

    .cost {
      display: flex;
      flex-direction: column;
      flex-grow: 1;
      height: 100%;
    }

    .paymentTitle {
      margin-left: 10px;
      margin-top: 10px;
    }

    .coastTitle {
      margin-top: 10px;
    }

    .paymentValue,
    .costValue {
      display: flex;
      flex-grow: 1;
      align-self: center;
      align-items: center;
      font-weight: 600;
    }
  </style>

  <body>
    <div class="w3-column" style="font-family: 'Montserrat', sans-serif">
      <div
        class="w3-container w3-col"
        style="
          width: 100%;
          height: 9%;
          font-size: 30px;
          text-transform: uppercase;
          padding: 20px;
          font-weight: 500;
          color: #ec8d73;
          background-color: #37161d;
        "
      >
        Witaj w panelu użytkownika
      </div>
      <div class="w3-column" style="height: 100%">
        <!-- <div class="w3-col" style="height: 10%">
          <p class="w3-col" style="width: 20%">XD</p>
          <p class="w3-col" style="width: 20%">XD</p>
        </div> -->

        <div
          class="w3-bar w3-col navContainer"
          style="width: 20%; height: 91%; background-color: #f19277"
        >
          <a href="#" class="w3-bar w3-row w3-button nav">Opłaty</a>
          <a href="#" class="w3-bar w3-row w3-button nav">informacje</a>
          <a href="#" class="w3-bar w3-row w3-button nav">dane osobowe</a>
          <div class="grow"></div>
          <a href="#" class="w3-bar w3-row w3-button w3-row-bottom nav"
            >wyloguj</a
          >
        </div>
        <div class="newContainer w3-col" style="width: 80%; height: 91%">
          <div
            style="
              display: flex;
              flex-direction: column;
              margin-top: 20px;
              align-items: center;
            "
          >
            <?php foreach ($data as $row) 
                {
                    ?>
            <div class="payment">
              <div class="title">
                <div class="paymentTitle">Nazwa płatności</div>
                <div class="paymentValue">
                  <?php echo $row['tytul_rachunki'] ?>
                </div>
              </div>
              <div class="cost">
                <div class="coastTitle">do zapłaty</div>
                <div class="costValue">
                  <?php echo $row['oplata_lokal'] ?>
                  zł
                </div>
              </div>
            </div>
            <!-- <tr>
                            <td><?php echo $row['tytul_rachunki'] ?></td>
                            <td><?php echo $row['oplata_lokal'] ?></td>
                        </tr> -->

            <?php
                }
                ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
