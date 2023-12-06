<?php
include "../include/connexion.php";
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
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
              RESERVATIONS
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <ul class="list-unstyled">
                <li><a class="dropdown-item my-4" href="service_reservations.php">CURRENT RESERVATIONS</a></li>
                <li><a class="dropdown-item my-4" href="#">RESERVATIONS REQUESTS</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style="background-color: #f6f6f6;">
              STATISTICS
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <ul class="list-unstyled">
                <li><a class="dropdown-item my-4" href="service_stats.php">STATISTICS</a></li>
                <li><a class="dropdown-item my-4" href="#">Another action</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" style="background-color: #f6f6f6;">
              RETOURS
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <ul class="list-unstyled">
              <li><a class="dropdown-item my-4" href="services_feedback.php">CLIENTS FEEDBACKS</a></li>
                <li><a class="dropdown-item my-4" href="service_retours.php">CONFIRMED INVOICES</a></li>
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
      <div class="d-flex justify-content-end align-items-center me-5 px-5 py-2">
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
            <li><a class="dropdown-item" href="dashboard_service.php">HOME</a></li>
            <li><a class="dropdown-item" href="#">PROFILE</a></li>
            <li><a class="dropdown-item" href="#">LOGOUT</a></li>
          </ul>
        </div>
      </div>
    </div>


    <div class="container my-4 w-75">
      <h1>DASHBOARD STATISTICS</h1>
      <h3 class="px-5">YOUR HOTEL RESERVATIONS TRENDS</h3>
      <p class="px-5">CLIENTS RESERVATIONS WITH MONTH STATS</p>
      <div>
        <canvas id="myChart">

        </canvas>
        <?php
        $sqlstats = "SELECT EXTRACT(MONTH FROM checkin) AS month, COUNT(*) AS count FROM reservation GROUP BY month";
        $result = mysqli_query($conn, $sqlstats);



        $labels = array();
        $data = array();

        while ($row = mysqli_fetch_assoc($result)) {
          $month = $row['month'];
          $count = $row['count'];
          echo "Month: $month . Reservations: $count <br>";
          $labels[] = $row['month'];
          $data[] = $row['count'];
        }

        ?>
      </div>

    </div>
  </div>




  </div>
  <script>
    const ctx = document.getElementById('myChart').getContext('2d');

    new Chart(ctx, {
      type: 'line',
      data: {
        labels: <?= json_encode($labels) ?>,
        datasets: [{
          label: 'Reservations By Month',
          data: <?= json_encode($data) ?>,
          borderColor: 'rgb(75, 192, 192)',
          borderWidth: 2,
          pointRadius: 5,
          fill: false
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>