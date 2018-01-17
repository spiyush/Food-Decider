<?php

// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
 
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="http://localhost/food/img/favicon.ico">

  <title>About | FOOD DECIDER</title>

  <!-- Bootstrap core CSS -->
  <link href="http://localhost/food/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="http://localhost/food/css/bootstrap.min.cssnarrow-jumbotron.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <?php include 'header.php';?>

    <main role="main">

      <div class="jumbotron">
        <h1 class="display-3">About us</h1>
        <h5> <p>Welcome to Genius Kitchen! We’ve rolled out the red velvet carpet just for you.</p>
          <p>First things first: What is Genius Kitchen anyway?</p>

          <p>Well, we like to think of it as edible entertainment 2.0 — meaning we’ve got everything you want to eat, plus endless ways to watch it. Intrigued? Here’s just a taste of what you can expect to enjoy:</p>

          <p>A SMORGASBORD OF RECIPES
          Starring all the classics, plus seriously genius new dishes from our original shows and users like you. Best of all, we’ve cooked up a clever way for you to find and save recipes from wherever you’re watching our content!</p>

          <p>NEW WAYS TO SPEAK UP + SHARE
          Got feedback? Make your voice heard by adding reviews, tweaks, questions and photos to our recipe pages that were designed with you in mind. It’s a great way to spark conversation with fellow cooks, and we’ve got even more community-focused fun on the way.</p>

          <p>YOUR WEEKLY SERVING OF FOOD NEWS
          All the news that’s fit to nom, courtesy of our show, GK Now. Here, our hosts Akilah and Mike recap the latest edible trends from the internet and beyond, complete with heaping sides of celeb cooking demos, outrageous games and the hottest food photos shared on social media (yours included!).</p>
          <p>A JUICY SHOW JUST FOR MEAT LOVERS
          Meet Carnivorous, your front row seat to Courtney Rada’s quest to find the country’s most exciting meat-centric dishes, straight from the best ranchers, farmers and butchers on the scene.</p>

          <p>AN EPIC FEAST WITH AN AUSSIE ACCENT
          Grab your skateboard and tail Dan Churchill as he discovers food inspiration all over New York City to bring back to his own kitchen in Feast with Friends.</p>

          <p>OUR MOST OBSESSION-WORTHY DISHES
          We can’t stop sharing these over-the-top, in-your-face favorites, like our Facebook-famous shrimp scampi potstickers, ice cream sandwich cake and giant cheesy arancini. One look, and you’ll be obsessed too.</p>

          <p>LOADS OF FRESH + FAMILIAR FACES
          Our hilarious hosts will make you belly-laugh into your breakfast, but we’ve also got some familiar faces from iconic cooking shows on tap, like Nigella Lawson, Anthony Bourdain and the culinary masters of Iron Chef Japan. We think you’ll be thrilled to find your good friends here while meeting new ones.</p>

          <p>Hungry for more? Check out Genius Kitchen’s full plate of content here or download the app to watch on all your favorite devices.</p>

          <p>Oh, and always save room for dessert — our Donut of the Day features the hot topics you need to know about, slathered in sweet frosting. Make sure you’re following us on Facebook, Instagram, Twitter and Pinterest too for even more genius updates on the daily!</p>
          <p>
            Cheers and rainbow sprinkles,
          Team Genius Kitchen.</p></h5>
        </div>



      </main>


      <?php include 'footer.php';?>


    </div> <!-- /container -->
  </body>
  </html>
