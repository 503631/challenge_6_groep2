<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/6488e6347e.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/style.css" />
  <title>v!st@CARS</title>
</head>
<?php include_once("inc/connectien.inc.php"); ?>
<body>
  <img class="logovista" src="images/logovista.webp" alt="">
  <!-- #region Navbar-->
  <div id="navbar">
    <script>
      $("#navbar").load("common/navbar.html");
    </script>
  </div>
  <!-- #endregion -->

  <div class="container">
  <img src="images/index.jpeg" alt="Car" id="home_img">
  <div class="top_img">V!ST@CARS</div>
  <div class="centered">lorem ipsum is slechts een proefdruck</div>
  </div>

  <div class="bolk">
    <div class="bolk_text">
    <div class="bolk_text_text">
        hallo
    </div>  
    </div>    
  </div>
    <div class="sowe_recauto">
    recenten auto,s
    <div class="sowe_recenteauto">
<?php    include_once("inc/autosow.inc.php");   ?>
    </div>
    <a href="showroom.php">bekijk showroom</a>
    </div>

    <div class="ons_team">
      <div class="text_ons_team">
      ons team
      </div>
<?php include_once("inc/ons_team.inc.php") ?>
    </div>


    <!-- #region Footer-->
    <div id="footer">
  <script>
    $("#footer").load("common/footer.html");
  </script>
  </div>
  <!-- #endregion -->
</body>

</html>