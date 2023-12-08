<?php
$id = $_GET["id"];
include '../include/navbar.php';
$sql="select * from hotel where id='$id' ";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
?>

<div class="container mt-5 mb-5">
    <div class="card dcard">
        <div class="row g-0">
            <div class="col-md-6 border-end">
                <div class="d-flex flex-column justify-content-center">
                    <div class="main_image"> <img src="../assets/hotelpreview.jpg" id="main_product_image" width="350"> </div>
                    <div class="thumbnail_images">
                        <ul id="thumbnail">
                            <li><img onclick="changeImage(this)" src="../assets/hotelpreview.jpg" width="70"></li>
                            <li><img onclick="changeImage(this)" src="../assets/hotelpreview.jpg" width="70"></li>
                            <li><img onclick="changeImage(this)" src="../assets/hotelpreview.jpg" width="70"></li>
                            <li><img onclick="changeImage(this)" src="../assets/hotelpreview.jpg" width="70"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 right-side">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3><?=$row['name']?></h3> <span class="heart"><i class='bx bx-heart'></i></span>
                    </div>
                    <div class="mt-2 pr-3 content">
                        <p><?=$row['description']?></p>
                    </div>
                    <h3><?=$row['category']?> etoile</h3>
                    <div class="ratings d-flex flex-row align-items-center">
                        <div class="d-flex flex-row"> <i class='bx bxs-star'></i> <i class='bx bxs-star'></i> <i class='bx bxs-star'></i> <i class='bx bxs-star'></i> <i class='bx bx-star'></i> </div> <span>441 reviews</span>
                    </div>
                    <div class="mt-5"> <span class="fw-bold">chambre pour reserver</span>
                        <div class="colors">
                            <ul id="marker">
                                <li id="marker-1">vvip</li>
                                <li id="marker-2">vip</li>
                                <li id="marker-3">normal</li>
                            </ul>
                        </div>
                    </div>
                    <div class="buttons d-flex flex-row mt-5 gap-3"> <a href="reservation_form.php?id=<?=$row['id']?>"><button class="btn btn-outline-dark">reserver une chambre</button></a></div>
                    <div class="search-option"> <i class='bx bx-search-alt-2 first-search'></i>
                        <div class="inputs"> <input type="text" name=""> </div><p>Feedback</p><i class='bx bx-share-alt share'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function changeImage(element) {

var main_prodcut_image = document.getElementById('main_product_image');
main_prodcut_image.src = element.src;


}
    </script>
<?php }
include '../include/footer.php';
?>