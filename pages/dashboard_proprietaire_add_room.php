<?php
include '../include/connexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>YouHotels</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <style>
    /* *{
        border: 1px solid red;
    } */
    body {
      font-family: "Poppins";
    }
  </style>
</head>

<body>
  
  <div class="col-2 position-fixed d-flex flex-column justify-content-between" style="background-color: #f6f6f6; height: 100vh">
    <div>
      <img src="../assets/logo.png" class="img-fluid ml-5" style="width: 60%" />
      <hr class="mx-3" />
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: #f6f6f6;">
              HOME
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <a href="../index.php">Home page</a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style="background-color: #f6f6f6;">
               ROOMS
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <a href="dashboard_proprietaire_add_room.php">Add room</a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" style="background-color: #f6f6f6;">
              RESERVATIONS
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
            <a href="dashboard_proprietaire_confermation.php">Confimation</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>

    </div>
  </div>
  <div class="col-10" style="margin-left: 18%;">
    <div class="row">
      <div class="d-flex justify-content-end align-items-center me-5 px-5">
        <div class="d-flex me-2 w-25" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-gray" type="submit">
            <span class="material-symbols-outlined"> search </span>
          </button>
        </div>

        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            USER
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div>
      </div>
    </div>
    <button type="button" class="btn btn-save mb-3 border border-dark" data-toggle="modal" data-target="#exampleModalLong">
        ADD ROOM
    </button>
    <div class="container col-10 mt-4">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h2 class="display-6 text-center"> ROOMS</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark border border-3  text-white">
                  <td>id</td>
                  <td>Quantity</td>
                  <td>type</td>
                  <td>price</td>
                  <td>action</td>
                </tr>
                <?php

                $query = "SELECT * FROM room where idHotel= 2";
                $result = mysqli_query($conn, $query);
                if ($result) {
                  while ($row = mysqli_fetch_assoc($result)) {

                ?>
                    <tr>
                      <td> <?= $row['id'] ?> </td>
                      <td> <?= $row['quantity'] ?> </td>
                      <td> <?= $row['type'] ?> </td>
                      <td> <?= $row['price'].' DH'; ?> </td>
                      <td> 
                      <a type="button" class="fa-solid fa-trash" style="color:#d3a377" data-toggle="modal" data-target="#delete_modal<?= $row['id']?>">
                        
                      </a>
                      <a type="button" class="fa-solid fa-pen-to-square border-white bg-white" style="color: #000000"; data-toggle="modal" data-target="#update_modal<?= $row['id']?>">
                        
                      </a>
                  </a>
                      </td>

                    </tr>

                     <!-- Modal update room -->
<div class="modal fade" id="update_modal<?php echo $row['id'] ?>" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">UPDATE ROOM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
        
        
        <form method="post" action="../include\updateroom.php">
            <div class="txt_field">
                <label >quantity:</label>
                <input type="text" name="quantity" value="<?php echo $row['quantity']; ?>" required>
            </div>
            <div class="txt_field">
                <label class="pr-4">type  :</label>
                <input name="type" type="text" value="<?php echo $row['type']; ?>" required>
            </div>
            <div class="txt_field">
                <label class="pr-4">price  :</label>
                <input name="price" type="number" value="<?php echo $row['price']; ?>" required>
                <input type="hidden" name="idHotel" value="2">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="update" class="btn btn-save border border-dark">Save changes</button>
            </div>

        </form>
        
    
      </div>
      
    </div>
  </div>
</div>
<!--fin modal update -->
 <!-- Modal delete room -->
 <div class="modal fade" id="delete_modal<?php echo $row['id'] ?>" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DELETE ROOM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
        
        
        <form method="post" action="../include\deleteroom.php">
                <input type="hidden" name="idHotel" value="2">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>"/>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="delete" class="btn btn-save border border-danger">DELETE</button>
            </div>

        </form>
        
    
      </div>
      
    </div>
  </div>
</div>
<!--fin modal delete -->

                 <?php
                  }
                }
                ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

   
  </div>


  <!-- Modal add room -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ADD ROOM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
        
        
        <form method="post" action="../include\addroom.php">
            <div class="txt_field">
                <label >quantity:</label>
                <input type="text" name="quantity" required>
            </div>
            <div class="txt_field">
                <label class="pr-4">type  :</label>
                <input name="type" type="text" required>
            </div>
            <div class="txt_field">
                <label class="pr-4">price  :</label>
                <input name="price" type="number" required>
                <input type="hidden" name="idHotel" value="2">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="addroom" class="btn btn-save border border-dark">Save changes</button>
            </div>

        </form>
        
    
      </div>
      
    </div>
  </div>
</div>
<!--fin modal ajout -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>