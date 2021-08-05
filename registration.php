<?php
session_start();
if(!isset($_SESSION['is_access'])){
    
    header('Location: login.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cf4c8f7518.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>registration Page</title>
  </head>
  <body>
    <section id="reg_main" class="">
        <div class="container">
            <div class="row alert alert-dark">
                <div class="col-md-8 offset-md-2">
                <div class="regis_page">
                <h1 class="text-center mb-4">Create Account</h1> 
                    <form class= "mb-3" action="" method="">
                        <h4>Get Start with</h4>
                        <div class="row mt-3 text-center">
                            <div class="col bg-primary p-2 ml-3">
                                <a class="text-white font-weight-bold" href="https://www.facebook.com"><i class="fab fa-facebook-square"></i> Facebook</a>
                            </div>
                            <div class="col bg-warning p-2 mr-3">
                                <a class="text-white font-weight-bold" href="https://www.facebook.com"><i class="fab fa-google-plus-square"></i> Google+</a>
                            </div>
                        </div>
                        <div class="row mt-3 text-center">
                            <div class="col">
                                <p>or</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="First name" Required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Last name" Required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address" Required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Mobile Number" Required>
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Telephone Number">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="City" Required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Country" Required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="password" class="form-control" placeholder="Password" Required>
                            </div>
                            <div class="col">
                                <input type="password" class="form-control" placeholder="Confirm Password" Required>
                            </div>
                        </div>
                        <div class="row mt-3">
                        <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                        
                    </form>
                </div>
                </div>
            </div>
        </div>


    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>