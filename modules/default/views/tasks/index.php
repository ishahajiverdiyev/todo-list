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
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control col-6" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <input type="textarea" class="form-control col-6"name="description" id="exampleInputPassword1" placeholder="Description">
      </div>
      <button type="submit" id="add_info" data-role="add-info" class="btn btn-success">Submit</button>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Created At</th>
          <th scope="col">Check</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody data-role="list-info">

      </tbody>
    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="<?= assets("js/master.js") ?>"></script>
  </body>
</html>
