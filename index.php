<?php
include('db.php');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Form with Ajax, basic validation in jQuery, database request MySQL</title>
    <meta name="description" content="Form">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script src="jquery.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
      <header>
          <h1>JS, PHP, AJAX - dobre praktyki</h1>
          <h2>Pozostaw recenzję</h2>
      </header>
      <section class="review">
      <form action="" method="POST">
        <fieldset>
             <h2>Pozostaw opinię</h2>
              <div class="row">
                  <label for="fname">Imię:</label>
                  <input type="text" name="fname" id="fname" placeholder="Joanna" autofocus autocomplete="name" >
                  <div class="error error-fname"></div>
              </div>
              <div class="row">
                  <label for="lname">Nazwisko:</label>
                  <input type="text" name="lname" id="lname" placeholder="Kowalska" autocomplete="lname">
                  <div class="error error-lname"></div>
              </div>
              <div class="row">
                  <label for="email">Adres email:</label>
                  <input type="email" name="email" id="email" placeholder="ktos@adres.com" autocomplete="email">
                  <div class="error error-email"></div>
              </div>
              <div class="row gender">
                  <label for="gender">Płeć:</label>
                  <input type="radio" name="gender" id="w" value="w">Kobieta
                  <input type="radio" name="gender" id="m" value="m">Mężczyzna
                  <input type="radio" name="gender" id="q" value="q">Queer
                  <div class="error error-gender"></div>
              </div>
        </fieldset>
          <fieldset>
             <h2>Opinia o książce:</h2>
              <textarea name="message" id="message" cols="30" rows="10" placeholder="Twoja opinia"></textarea>
               <div class="error error-message"></div>
          </fieldset>
          <button type="submit" name="send" id="send">Prześlij</button>
      </form>
      <section class="review-list">
          <h2>Spis recenzji</h2>
          <div id="opinions"></div>
      </section>
</section>
</body>
</html>