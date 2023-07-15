<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  </head>
  <body>

    <div class="form-group">
      <label for="exampleInputEmail1">First Number</label>
      <input type="number" class="form-control col-6" data-role="number1" name="num1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Number">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Second Number</label>
      <input type="number" class="form-control col-6" data-role="number2" name="num2" id="exampleInputPassword1" placeholder="Second Number">
    </div>
    <div class="">
      <h3 data-role="addition_result"></h3>
      <h3 data-role="subtraction_result"></h3>
      <h3 data-role="multiplication_result"></h3>
      <h3 data-role="division_result"></h3>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="<?= assets("js/master.js") ?>"></script>
  </body>
</html>
