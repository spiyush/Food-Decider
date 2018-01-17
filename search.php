



<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="http://localhost/food/img/favicon.ico">

  <title>Search Recepie | FOOD DECIDER</title>

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
        <h1 class="display-3"> Search  Recepie  </h1>
        <h3> sddsa</h3>
      </div>

      <form >

        <label> Search Recepie</label>
        <input type="text" name="name" class="form-control" value="">
      </form>

      <?php
// Include config file

      require_once 'config.php';

// Attempt select query execution
      $sql = "SELECT * FROM recepie";
      if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
          echo "<table class='table table-bordered table-striped'>";
          echo "<thead>";
          echo "<tr>";
          echo "<th>Sr No</th>";
          echo "<th> Recepie Name</th>";
          echo "<th> Recepie Description</th>";
          echo "<th> Recepie Type</th>";
          echo "</tr>";
          echo "</thead>";
          echo "<tbody>";
          while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['recepie_id'] . "</td>";
            echo "<td>" . $row['recepie_name'] . "</td>";
            echo "<td>" . $row['recepie_desc'] . "</td>";
            echo "<td>" . $row['recepie_type'] . "</td>";
            echo "</tr>";
            }
            echo "</tbody>";                            
            echo "</table>";
// Free result set
            mysqli_free_result($result);
          } else{
            echo "<p class='lead'><em>No records were found.</em></p>";
          }
        } else{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

// Close connection
        mysqli_close($link);
        ?>


      </main>


      <?php include 'footer.php';?>


    </div> <!-- /container -->
  </body>
  </html>
