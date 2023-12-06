<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    include '../include\navbar.php';
    ?>
    <div class ="container mt-5">
    <form method="post" action="../include\requestproprietaireaction.php">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">hotel name</label>
        <input type="text" name="hotelname" class="form-control" id="inputEmail4" placeholder="hotel name">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">hotel rate</label>
        <input type="number" class="form-control" name="rate" id="inputPassword4" placeholder="hotel rate">
        <input type="hidden" name="id_pro" value ="2">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">description</label>
        <textarea type="text" name="description" class="form-control" id="inputAddress" placeholder="description ..."></textarea>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputAddress">city</label>
        <input type="text" name="city" class="form-control" id="inputAddress" placeholder="city">

        </div>
        <div class="form-group col-md-6">
        <label for="inputAddress">country</label>
        <input type="text" name="country" class="form-control" id="inputAddress" placeholder="country">
        </div>
    </div>

    <div class="form-group">
        <label for="inputAddress">adresse</label>
        <textarea type="text" name="adresse" class="form-control" id="inputAddress" placeholder="adresse"></textarea>
    </div>
       
    <button type="submit" name="request" class="btn btn-primary">Request</button>
    </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <form>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
            </div>
            <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
</body>
</html>