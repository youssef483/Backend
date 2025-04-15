<?php
$employees = 
    [ 
        ["name" => "Ahmed", "salary" => 5000, "age" => 30, "insurance" => "Yes"],
        ["name" => "Sara", "salary" => 6000, "age" => 28, "insurance" => "No"], 
        ["name" => "Ali", "salary" => 4500, "age" => 35, "insurance" => "Yes"] 
    ];
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
  <h1>Employees</h1>
  <table class="table ml-5">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Salary</th>
      <th scope="col">Age</th>
      <th scope="col">Insurance</th>
    </tr>
  </thead>
  <tbody>

<?php foreach($employees as $employee){?>
    <tr>
      <th ><?= $employee["name"]?></th>
      <td><?= $employee["salary"]?></td>
      <td><?= $employee["age"]?></td>
      <td><?= $employee["insurance"]?></td>
    </tr>
<?php }?>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>