<?php
  include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Post</title>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
  <link rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />

    <style>

    </style>

</head>
<body>
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

<form class="p-3 row g-3" action="action.php" method="POST" id="edit_employee_form" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $id; ?>" id="id">
        <input type="hidden" name="oldimage" id="oldimage" value="<?= $image; ?>">
        <div class="modal-body p-4 ">
          <div class="row">
            <div class="col-lg">
              <label for="fname">Title</label>
              <input type="text" name="title" value="<?= $title; ?>" id="fname" class="form-control" placeholder="First Name" required>
            </div>
            <div class="col-lg">
              <label for="lname">Content</label>
              <textarea class="form-control" id="exampleFormControlTextarea3" value="<?= $content; ?>" placeholder="<?= $content; ?>" name="content" rows="7"></textarea>
            </div>
          </div>
          <div class="my-2">
            <label for="category">Category</label>
            <select class="form-control type" name="category" id="type" required>
              <option value="<?= $category; ?>" selected>----<?= $category; ?>----</option>
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
            <label for="avatar">Select Profile Picture</label>
            <input type="file" name="image" class="form-control">            
          </div>
          <div class="mt-2" id="avatar">
          <img src="<?= $image; ?>" width="120" class="img-fluid img-thumbnail">
          </div>
        </div>
        <div class="modal-footer">
        
          <button type="submit" name="update" id="edit_employee_btn" class="btn btn-success">Actualizar Post</button>

        </div>
      </form>
    
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>