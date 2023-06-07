<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="/style.css">
</head>

<body>

  <div class="container" id="containerTable"></div>

  <table id="dynamicTable" class="table table-dark table-striped">
    <thead>
      <tr>
        <button id="newRow" class="btn btn-primary">Inserisci Persona</button>
      </tr>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">FirstName</th>
        <th scope="col">LastName</th>
        <th scope="col">Email</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <!-- body dinamico con chiamata ajax -->
    <tbody>
    </tbody>
  </table>

  <script src="/script.js" type="module"></script>

</body>

</html>