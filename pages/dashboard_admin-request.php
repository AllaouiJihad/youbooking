<?php
include('../include/connexion.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>YouHotels</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" /> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <style>
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
              hotel
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
            <ul class="list-unstyled">
            <li><a class="dropdown-item my-4" href="dashboard_admin-hotels.php">liste des hotel</a></li>
           
               
              </ul>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style="background-color: #f6f6f6;">
              utilisateur
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
            <ul class="list-unstyled">
            <li><a class="dropdown-item my-4" href="dashboard_admin-client.php">clients</a></li>
                <li><a class="dropdown-item my-4" href="dashboard_admin-proprietaire.php">proprietaire</a></li>
                <li><a class="dropdown-item my-4" href="dashboard_admin-responsabl.php">responsable</a></li>
              </ul>
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
            <ul class="list-unstyled">
                <li><a class="dropdown-item my-4" href="#">reserver</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour" style="background-color: #f6f6f6;">
              REQUEST
            </button>
          </h2>
          <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
            <ul class="list-unstyled">
                <li><a class="dropdown-item my-4" href="#">confermer requests</a></li>
              </ul>
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
    <div class="container mt-4">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h2 class="display-6 text-center"> confermation requests</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark border border-3  text-white">
                  <td>id</td>
                  <td>name</td>
                  <td>category</td>
                  <td>description</td>
                  <td>firstname</td>
                  <td>lastname</td>
                  <td>action</td>
                </tr>
                <?php
                
                $query = " SELECT hotel.*,users.id as id_pro, users.firstname, users.lastname FROM `hotel` JOIN users on users.id=hotel.idproprietaire where hotel.request=0; ";
                $result = mysqli_query($conn, $query);
                if ($result) {
                  while ($row = mysqli_fetch_assoc($result)) {

                ?>
                    <tr>
                      <td> <?= $row['id'] ?> </td>
                      <td> <?= $row['name'] ?> </td>
                      <td> <?= $row['category'] ?> </td>
                      <td> <?= $row['description'] ?> </td>
                      <td> <?= $row['firstname'] ?> </td>
                      <td> <?= $row['lastname'] ?> </td>
                      <td> 
                      <a type="button" class="fa-solid fa-check"  data-toggle="modal" data-target="#check_modal<?= $row['id']?>"></a>
                      <a type="button" class="fa-solid fa-trash" style="color:#d3a377" data-toggle="modal" data-target="#delete_modal<?= $row['id']?>"></a>
                       </td>
                      
                    </tr>
                    <div class="modal fade" id="delete_modal<?= $row['id'] ?>" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DELETE REQUEST</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



        <form method="post" action="dashboard_admin-delete.php">
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

<div class="modal fade" id="check_modal<?= $row['id'] ?>" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">confermer REQUEST</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



        <form method="post" action="dashboard_admin-update.php">
          <input type="hidden" name="id_pro" value="<?= $row['id_pro']?>">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>"/>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="update" class="btn btn-save border border-danger">confermer</button>
            </div>

        </form>


      </div>

    </div>
  </div>
</div>
                <?php
                  }
                }
                ?>
              </table>
            </div>
          </div>
        </div>
      </div>
     </di>
  </div>


  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>