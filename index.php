<?php
include('../include/navbar.php');
?>
<!-- Navbar -->
<div class="px-4 py-5  text-center back h-75">
    <h1 class="display-5 fw-bold text-body-emphasis">YouHotels</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum at fugit libero, dolores praesentium sed natus nobis nostrum tempora similique illo iste debitis quos vitae </p>

      <form class="d-flex mb-5" role="search" >
        <input class="form-control me-2" type="search" placeholder="City" aria-label="Search">
            <div class='input-group date' id='datetimepicker1'>
               <input type='date' class="form-control me-2" placeholder="checkin"/>
               </span>
              </div>
              <div class='input-group date' id='datetimepicker1'>
               <input type='date' class="form-control me-2" />
               </span>
              </div>
        <button class="btn gold" type="submit">Search</button>
      </form>
     
    </div>
  </div>
  <!-- MDB -->
  <h2 class="text-center my-5">suggestions</h2>
  
  <div class="carousel-wrapper ">
  <div class="carousel" data-flickity>
    <div class="carousel-cell  ">
      <h3>Product 1</h3>
      <a class="more" href="">Explore more</a>
      <img src="./img1.jpg" />
      <div class="line"></div>
      <div class="price">
        <span>225<sup>€</sup></span>
      </div>
    </div>
    <div class="carousel-cell  imag ">
      <h3>Product 2</h3>
      <a class="more" href="">Explore more</a>
      <img src="../assets/hotelpreview.jpg.jpg" />
      <div class="line"></div>
      <div class="price">
        <span>225<sup>€</sup></span>
      </div>
    </div>
    <div class="carousel-cell  imag ">
      <h3>Product 2</h3>
      <a class="more" href="">Explore more</a>
      <img src="../assets/hotelpreview.jpg.jpg" />
      <div class="line"></div>
      <div class="price">
        <span>225<sup>€</sup></span>
      </div>
    </div>
    <div class="carousel-cell  imag ">
      <h3>Product 2</h3>
      <a class="more" href="">Explore more</a>
      <img src="../assets/hotelpreview.jpg.jpg" />
      <div class="line"></div>
      <div class="price">
        <span>225<sup>€</sup></span>
      </div>
    </div>
    <div class="carousel-cell  imag">
      <h3>Product 3</h3>
      <a class="more" href="">Explore more</a>
      <img src="../assets/hotelpreview.jpg.jpg" />
      <div class="line"></div>
      <div class="price">
        <span>225<sup>€</sup></span>
      </div>
    </div>
  </div>
</div>
<!-- comments -->
<h3 class="mb-2">Comments</h3>
<div class="row d-flex justify-content-center mb-2">
  <div class="col-md-8 col-lg-11">
    <div class="card shadow-0 border" style="background-color: #f0f2f5;">
      <div class="card-body p-4">
        <div class="form-outline mb-4">
          <input type="text" id="addANote" class="form-control" placeholder="Type comment..." />
          <label class="form-label" for="addANote">+ Add a note</label>
        </div>

        <div class="card mb-4">
          <div class="card-body">
            <p>Type your note, and hit enter to add it</p>

            <div class="d-flex justify-content-between">
              <div class="d-flex flex-row align-items-center">
                <img src="../assets/comment.jpg.jpeg" alt="avatar" width="25"
                  height="25" />
                <p class="small mb-0 ms-2">Martha</p>
              </div>
              <div class="d-flex flex-row align-items-center">
                <p class="small text-muted mb-0">Upvote?</p>
                <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                <p class="small text-muted mb-0">3</p>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-4">
          <div class="card-body">
            <p>Type your note, and hit enter to add it</p>

            <div class="d-flex justify-content-between">
              <div class="d-flex flex-row align-items-center">
                <img src="../assets/comment.jpg.jpeg" alt="avatar" width="25"
                  height="25" />
                <p class="small mb-0 ms-2">Johny</p>
              </div>
              <div class="d-flex flex-row align-items-center">
                <p class="small text-muted mb-0">Upvote?</p>
                <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                <p class="small text-muted mb-0">4</p>
              </div>
            </div>
          </div>
        </div>

        <div class="card mb-4">
          <div class="card-body">
            <p>Type your note, and hit enter to add it</p>

            <div class="d-flex justify-content-between">
              <div class="d-flex flex-row align-items-center">
                <img src="../assets/comment.jpg.jpeg" alt="avatar" width="25"
                  height="25" />
                <p class="small mb-0 ms-2">Mary Kate</p>
              </div>
              <div class="d-flex flex-row align-items-center text-primary">
                <p class="small mb-0">Upvoted</p>
                <i class="fas fa-thumbs-up mx-2 fa-xs" style="margin-top: -0.16rem;"></i>
                <p class="small mb-0">2</p>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <p>Type your note, and hit enter to add it</p>

            <div class="d-flex justify-content-between">
              <div class="d-flex flex-row align-items-center">
                <img src="../assets/comment.jpg.jpeg" alt="avatar" width="25"
                  height="25" />
                <p class="small mb-0 ms-2">Johny</p>
              </div>
              <div class="d-flex flex-row align-items-center">
                <p class="small text-muted mb-0">Upvote?</p>
                <i class="far fa-thumbs-up ms-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include '../include/footer.php';
?>