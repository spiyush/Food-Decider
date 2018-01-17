<?php
// Process delete operation after confirmation
if(isset($_POST["recepie_id"]) && !empty($_POST["recepie_id"])){
// Include config file
  require_once 'config.php';

// Prepare a delete statement
  $sql = "DELETE FROM recepie WHERE recepie_id = ?";

  if($stmt = mysqli_prepare($link, $sql)){
// Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "i", $param_id);

// Set parameters
    $param_id = trim($_POST["recepie_id"]);

// Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
// Records deleted successfully. Redirect to landing page
      header("location: allrecepie.php");
      exit();
    } else{
      echo "Oops! Something went wrong. Please try again later.";
    }
  }

// Close statement
  mysqli_stmt_close($stmt);

// Close connection
  mysqli_close($link);
} else{
// Check existence of id parameter
  if(empty(trim($_GET["recepie_id"]))){
// URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
  }
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

  <title> Delete Recepie | FOOD DECIDER</title>

  <!-- Bootstrap core CSS -->
  <link href="http://localhost/food/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>

  <!-- Custom styles for this template -->
  <link href="http://localhost/food/css/bootstrap.min.cssnarrow-jumbotron.css" rel="stylesheet">

  <link href="http://localhost/food/css/bootstrap.min.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="http://localhost/food/css/bootstrap.min.cssnarrow-jumbotron.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <?php include 'header.php';?>

    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h1>Delete Recepie</h1>
        </div>


        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="alert alert-danger fade in">
            <input type="hidden" name="recepie_id" value="<?php echo trim($_GET["recepie_id"]); ?>"/>
            <p>Are you sure you want to delete this record?</p><br>
            <p>
              <input type="submit" value="Yes" class="btn btn-danger">
              <a href="allrecepie.php" class="btn btn-default">No</a>
            </p>
          </div>
        </form>
      </div>
    </div> 


    <?php include 'footer.php';?>


  </div> <!-- /container -->
</body>
</html>