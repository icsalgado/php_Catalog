<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <!--BOOTSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>

  <body>
    <!--Navigation bar - simple for now-->
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Collection Catalog</span>
      </div>
    </nav>

    <!--Collection list-->
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Manufacturer</th>
            <th scope="col">Model</th>
            <th scope="col">Color</th>
            <th scope="col">Year</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach(getItem() as $item) : ?>
            <tr>
              <th scope="row"><?= $item["manufacturer"] ?></th>
              <td><?= $item["model"] ?></td>
              <td><?= $item["color"] ?></td>
              <td><?= $item["year"] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!--BOOTSTRAP JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
