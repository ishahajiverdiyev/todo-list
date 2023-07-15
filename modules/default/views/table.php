<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  </head>
  <body>
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
  <tbody>

  <?php foreach ($data as $key => $item): ?>
    <tr data-id="<?= $item["id"] ?>">
      <td><?= $key + 1; ?></td>
      <td><?= $item["title"]; ?></td>
      <td><?= $item["description"]; ?></td>
      <td><?= $item["created_at"]; ?></td>
      <td>
        <?php if($item["is_checked"] === "1"): ?>
           Completed
        <?php else: ?>
          <input class="form-check-input" type="checkbox" name="status_complete">
             Complete
        <?php endif; ?>
      </td>
      <td>
        <a href="<?= base_url("edit/{$item["id"]}"); ?>" class="btn btn-warning">Update</a>
        <a href="<?= base_url("deleteItem/{$item["id"]}"); ?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
  <?php endforeach; ?>
</tbody>
</table>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <script type="text/javascript" src="<?= assets("js/master.js") ?>"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  </body>
</html>
