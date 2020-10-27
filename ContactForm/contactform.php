<?php

include("contactform_email.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Merriweather+Sans:wght@500&family=Montserrat:ital,wght@1,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="contactform.css" />
  <link rel="stylesheet" type="text/css" href="contactform.css" />

  <title>RPH Applications and Designs</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark site-header">
    <a class="py-2" href="#" aria-label="Product">
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-globe2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539a8.372 8.372 0 0 1-1.198-.49 7.01 7.01 0 0 1 2.276-1.52 6.7 6.7 0 0 0-.597.932 8.854 8.854 0 0 0-.48 1.079zM3.509 7.5H1.017A6.964 6.964 0 0 1 2.38 3.825c.47.258.995.482 1.565.667A13.4 13.4 0 0 0 3.508 7.5zm1.4-2.741c.808.187 1.681.301 2.591.332V7.5H4.51c.035-.987.176-1.914.399-2.741zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5H7.5v2.409c-.91.03-1.783.145-2.591.332a12.343 12.343 0 0 1-.4-2.741zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696A12.63 12.63 0 0 1 7.5 11.91v3.014c-.67-.204-1.335-.82-1.887-1.855a7.776 7.776 0 0 1-.395-.872zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964a9.083 9.083 0 0 0-1.565.667A6.963 6.963 0 0 1 1.018 8.5h2.49a13.36 13.36 0 0 0 .437 3.008zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909c.81.03 1.577.13 2.282.287-.12.312-.252.604-.395.872-.552 1.035-1.218 1.65-1.887 1.855V11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5h-2.49a13.361 13.361 0 0 0-.437-3.008 9.123 9.123 0 0 0 1.565-.667A6.963 6.963 0 0 1 14.982 7.5zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343c-.705.157-1.473.257-2.282.287V1.077c.67.204 1.335.82 1.887 1.855.143.268.276.56.395.872z" />
      </svg>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav nav-fill mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../">RPH <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactform.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../home_page/comingsoon.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../home_page/comingsoon.html">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../home_page/comingsoon.html">Designs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="../home_page/comingsoon.html" tabindex="-1" aria-disabled="true">Support</a>
        </li>
      </ul>
    </div>
  </nav>



  <div class="container">
    <div class="container box">
      <div class="container box1">
        <h1 class="h1">Contact Us</h1>
        <div id="error">
          <?php echo $error.$successMessage; ?>
        </div>
        <form method="POST" class="c-form needs-validation" nonvalidate>
          <div class="form-row justify-content-center">
            <div class="form-group col-md-4">
              <div class="col-auto">
                <label class="labels" for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                <div class="invalid-feedback">Please provide a name.</div>
              </div>
            </div>
            <div class="form-group col-md-4">
              <div class="col-auto">
                <label class="labels" for="email">Email address</label>
                <input type="email" class="form-control forms" id="email" name="email" placeholder="Enter email">
                <div class="invalid-feedback">Please provide an Email.</div>
              </div>
            </div>
          </div>
          <div class="form-row justify-content-center">
            <div class="form-group col-md-4">
              <div class="col-auto">
                <label class="labels" for="product">Product</label>
                <select id="product" class="form-control" name="product">
                  <option selected>Select Product...</option>
                  <option>Blog</option>
                  <option>Business</option>
                  <option>Ecommerce</option>
                  <option>Personal</option>
                  <option>Resume</option>
                  <option>Web Application</option>
                </select>
                <div class="invalid-feedback">Please select a Product.</div>
              </div>
            </div>
            <div class="form-group col-md-4">
              <div class="col-auto">
                <label class="labels" for="service">Service</label>
                <select id="service" class="form-control" name="service">
                  <option selected>Select Service...</option>
                  <option>Build a new website</option>
                  <option>Update an existing website</option>
                  <option>Consoltation on a website or application</option>
                  <option>General Information</option>
                </select>
                <div class="invalid-feedback">Please select a Service.</div>
              </div>
            </div>
          </div>
          <div class="form-row justify-content-center">
            <div class="form-group col-md-8">
              <div class="col-auto">
                <label class="labels" for="message">Message</label>
                <input type="text" class="form-control" name="message" id="message">
              </div>
            </div>
          </div>
          <div class="form-row justify-content-center">
            <button type="submit" id="submit" name="submit" class="btn btn-secondary btn-lg justify-content-center">Submit</button>
          </div>
        </form>
      </div>
    </div>



  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  <script type="text/javascript">
    $("form").submit(function(e) {

      var error = "";
      if ($("#name").val() == "") {
        error += "Name is required.<br>";
      }
      if ($("#email").val() == "") {
        error += "Email address is required.<br>";
      }
      if ($("#product").val() == "Select Product...") {
        error += "Please select a Product.<br>";
      }
      if ($("#service").val() == "Select Service...") {
        error += "Please select a Service.<br>";
      }

      if (error !== "") {
        $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' +
          error + '</div');

        return false;

      } else {
        return true;
      }

    });
  </script>

</body>

</html>