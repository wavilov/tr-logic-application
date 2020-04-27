<!doctype html>
<html lang="en">
<head>
   <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>TR Login intro test</title>
</head>
<body style="background-color: darkgray; background: url(http://i.imgur.com/GHr12sH.jpg) no-repeat center center fixed;">

<div class="container-fluid" style="width: 500px; margin-top: 50px; background-color: lightgray; padding: 20px; border-radius: 5px;">
  <div style="height: 150px; background-image: url('https://itprojects.management/img/back1.jpg'); color: white; padding: 20px;">
      <h1>TR Logic</h1>
  <h3>web registration</h3>
  </div>
  <form style="padding-top: 50px;" method="post">
    <?php
    require 'classes/user.php';
    require 'classes/formControls.php';

    $user = new user();
    $formControls = new formControls();

    foreach ($user->properties as $property) {
      echo $formControls->{$property['type']}($property['description']['ru']);
    }
  ?>
  <input type="submit" class="btn-primary form-control" style="margin-top: 40px;">
  </form>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
