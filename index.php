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
    Abilities or he perfectly pretended so strangers be exquisite. Oh to another chamber pleased imagine do in. Went me rank at last loud shot an draw. Excellent so to no sincerity smallness. Removal request delight if on he we. Unaffected in we by apartments astonished to decisively themselves. Offended ten old consider speaking. 

Considered an invitation do introduced sufficient understood instrument it. Of decisively friendship in as collecting at. No affixed be husband ye females brother garrets proceed. Least child who seven happy yet balls young. Discovery sweetness principle discourse shameless bed one excellent. Sentiments of surrounded friendship dispatched connection is he. Me or produce besides hastily up as pleased. Bore less when had and john shed hope. 

Silent sir say desire fat him letter. Whatever settling goodness too and honoured she building answered her. Strongly thoughts remember mr to do consider debating. Spirits musical behaved on we he farther letters. Repulsive he he as deficient newspaper dashwoods we. Discovered her his pianoforte insipidity entreaties. Began he at terms meant as fancy. Breakfast arranging he if furniture we described on. Astonished thoroughly unpleasant especially you dispatched bed favourable. 

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