<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="/style.css">
</head>

<body>

<div class="container" id="containerTable"></div>

  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <button id="newRow" class="btn btn-primary">Inserisci Persona</button>
      </tr>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">FirstName</th>
        <th scope="col">LastName</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>Mark@gmai.com</td>
        <td>
          <button class="btn btn-warning">Edit</button>
          <button class="btn btn-danger">Delete</button>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>jacob@gmail.com</td>
        <td>
          <button class="btn btn-warning">Edit</button>
          <button class="btn btn-danger">Delete</button>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>Bird</td>
        <td>larry@gmail.com</td>
        <td>
          <button class="btn btn-warning">Edit</button>
          <button class="btn btn-danger">Delete</button>
        </td>
      </tr>
    </tbody>
  </table>

  <script src="/script.js"></script>

</body>

</html>