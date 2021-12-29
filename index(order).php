<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chowdhury Restaurant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
        />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="style(order).css">

    <link rel="icon" href="icon.ico" type="image/ico" siz="16x16">


    
    <script src="script(preload).js"></script>
    <link rel="stylesheet" href="style(onload).css">
</head>
<body>
    <div class="text-center" id="loader">
        <img src="loding.jpg"  alt="" id="img-1">
    </div>
    <div id="content">
    <header>
        <div class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" id="menu">
            <a href="#" class="navbar-brand" id="ttl"><i class='fas fa-hamburger ml-5'></i><br>Quick Deliver</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#abc">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container">
                <div class="collapse navbar-collapse" id="abc">
                    <ul class="navbar-nav animated slideInDown ml-auto">
                        <li class="nav-item"><a class="nav-link " href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="index(about).html">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown">Menu</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index(vegthali).html">Veg Thali</a></li>
                                <li><a class="dropdown-item" href="index(nonvegthali).html">Non Veg Thali</a></li>
                                <li><a class="dropdown-item" href="index(ckm).html">Chicken kabab & Momo</a></li>
                                <li><a class="dropdown-item" href="index(nonvegthali).html">Pizza Burger & Sandwich</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link active" href="index(order).php">Order</a></li>
                        <li class="nav-item "><a class="nav-link" href="index(contact us).html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <br><br><br><br>
    <br>
    <br>
    <main>
        <h1 class="text-center">Enter order Details</h1>
        <hr>
        <br>
        <div class="container">
            <form action="" method="POST">
                <label>Name :</label>
                <br>
                <input class="form-control" name="name" type="text" placeholder="Enter your name" required>
                <br><br>
                <label>Email:</label>
                <br>
                <input class="form-control" name="email" type="email" placeholder="Enter your email" required>
                <br><br>
                <label>Mobile No :</label>
                <br>
                <input class="form-control" name="mobileno" type="number" placeholder="Enter your ph number" required>
                <br><br>
                <label>Item Name:</label>
                <br>
                <input class="form-control" name="itemname" type="text" placeholder="Enter your item  name" required>
                <br><br>
                <label>Quantity :</label>
                <br>
                <select name="quentity" id="select">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                <br><br>
                <label>Address</label>
                <br>
                <textarea id="address" name="address" placeholder="Please enter your address"></textarea>
                <br><br>
                <a href="#"><input type="submit" name="submit" value="submit"></a>
            </form>

        </div>
    </main>
    <br>
    <br>
    <footer>
        <!--code for footer-->
        <div class="footer">
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-center">Address</h5>
                        <br>
                        <ul class="footer-div text-center ">
                            <li><a class="footer-l" href="#">Address:</a></li>
                            <li><a class="footer-l" href="#">kolkata, Salt Lake,S-5</a></li>
                            <li><a class="footer-l" href="#">Email:chowdhurysachin4@gmail.com</a></li>
                            <li><a class="footer-l" href="#">Mobile:6296991633</a></li>
                            <li><a class="footer-l" href="#">Time:9:00 AM to 10 PM</a></li>
                        </ul>
    
                    </div>
                    <div class="col-md-6 text-center">
                        <h5 class="ml-4">Find Us</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.86841719152!2d88.34605451418626!3d22.546601339608195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02773e20252f7b%3A0xb1d56e110173fa8a!2sGanguram%20Sweets!5e0!3m2!1sen!2sin!4v1634725503684!5m2!1sen!2sin" width="200" height="200" id="map" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$n=$_POST['name'];
$e=$_POST['email'];
$m=$_POST['mobileno'];
$i=$_POST['itemname'];
$q=$_POST['quentity'];
$a=$_POST['address'];
if($n!="" && $e!=""  && $m!=""&&  $i!="" && $q!="" && $a!="")//empty check
{
$query="INSERT INTO DATAENTRY VALUES ('$n','$e','$m','$i','$q','$a')";
$data=mysqli_query($conn,$query);
if($data)
{
    //echo "data entry into database successfull";
}
}
else
{
    echo "data entry into database faield";
}
}
?>