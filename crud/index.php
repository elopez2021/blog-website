<?php
include 'action.php';


//Fetching values from the table
$query = "SELECT * FROM post";
$stmt=$conn->prepare($query);
$stmt->execute();
$result=$stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posts</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
  <link rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />
  

</head>
<body class="bg-light">
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header>


<!--add new post modal start -->
<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir Nuevo Post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="action.php" method="POST" id="add_employee_form" enctype="multipart/form-data">
        <div class="modal-body p-4 bg-light">
          <div class="row">
            <div class="col-lg">
              <label for="title">Title</label>
              <input type="text" name="title" class="form-control fname" placeholder="Title" required>
            </div>
            <div class="col-lg">
              <label for="content">Content</label>
              <textarea class="form-control" id="exampleFormControlTextarea3" name="content" rows="7" required></textarea>
            </div>
          </div>
        
          <div class="my-2">
            <label for="type">Category</label>
            <select class="form-control type" name="category" id="type" required>
              <option selected>----Select category----</option>
              <option value="externo-pc">Dispostivo externo de PC</option>
              <option value="interno-pc">Dispositivo interno de PC</option>
              <option value="externo-laptop">Dispositivo externo de Laptop</option>
              <option value="interno-laptop">Dispositivo interno de Laptop</option>
              <option value="ram">Tipos de RAM</option>
              <option value="disco">Tipos de Disco Duro</option>
              <option value="micro-pro">Tipos de Microprocesadores</option>
            </select>
          </div>
          <div class="my-2">
            <label for="avatar">Select Image</label>
            <input type="file" name="image" class="form-control avatar" required>
          </div>
          <div class="my-2">
            <label for="avatar">Created By</label>
            <input type="text" name="created_by" class="form-control avatar" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="add" id="add_employee_btn" class="btn btn-primary">Añadir Post</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- add new employee modal end -->

  <div class="container">
    <div class="row my-5">
      <div class="col-lg-12">
        <div class="card shadow">
          <div class="card-header bg-success d-flex justify-content-between align-items-center">
            <h3 class="text-light">Manage Posts</h3>
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i
                class="bi-plus-circle me-2"></i>Añadir Nuevo Post</button>
          </div>
          
        <div class="card-body">          

          <div style="overflow-x: auto;">
          <table id="data-table" class="table table-striped table-sm text-center align-middle">

            <thead>
              <tr>              
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Category</th>
                <th>Created by</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <tr>
              <?php 
              if ($result){
              while($row=$result->fetch_assoc()){?>          
                <td><?= $row['id']; ?></td>
                <td><?= $row['title']; ?></td>
                <td><?= $row['content']; ?></td>
                <td><img src="<?= $row['image']; ?>" width="50" class="img rounded-circle"></td>
                <td><?= $row['category']; ?></td>
                <td><?= $row['created_by']; ?></td>
                <td><?= $row['date']; ?></td>
                <td>

                
                  <a href="edit.php?edit=<?= $row['id']; ?>" id="" class="text-success mx-1 editIcon" ><i class="bi-pencil-square h4"></i></a>

                  <a href="action.php?delete=<?= $row['id']; ?>" id="" class="text-danger mx-1 deleteIcon" onclick="return confirm('Do you want to delete this post?');"><i class="bi-trash h4"></i></a>

                </td>
              </tr>
              <?php } } 
                      $stmt->close();
                      $conn->close(); 
              ?>
            </tbody>
          </table>
            </div>
        </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="//cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>

  <script>
     <?php if (isset($_SESSION['response'])) { ?>
      Swal.fire(
                '<?= $_SESSION['message']; ?>',
                '<?= $_SESSION['response']; ?>',
                '<?= $_SESSION['res_type']; ?>'
              )
    <?php } unset($_SESSION['response']); ?>   


    $(document).ready( function () {
      $("#data-table").DataTable({
              order: [0, 'desc']
              
            });
    } );

  </script>    
 
</body>
</html>