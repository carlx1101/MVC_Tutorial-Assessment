<?php
    declare(strict_types = 1); // setting strict mode 1 = true, 0 = false
    include "includes/class-autoloader.inc.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>OOP Calculator</title>
  </head>
  <body>
    <div class="container">
  <form action = "includes/calc.inc.php" method = "POST">

  <div class="mb-3">
    <label for="firstNumber" class="form-label">First Number</label>
    <input type="number" class="form-control" id="firstNumber" name = "firstNumber">
  </div>

  <label for="firstNumber" class="form-label">Calculation Method</label>
  <select class="form-select form-select-lg mb-3" name = "operator" id = "operator"aria-label="Default select example">
  <option selected >Select Calculation Method</option>
  <option value="addition">Addition</option>
  <option value="substraction">Substraction</option>
  <option value="multiplication">Multiplication</option>
  <option value="division">Division</option>
  </select>

  <div class="mb-3">
  <label for="secondNumber" class="form-label">Second Number</label>
    <input type="number" class="form-control" id="secondNumber" name = "secondNumber">
  </div>
  
  <button type="submit" class="btn btn-primary">Calculate</button>

</form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>