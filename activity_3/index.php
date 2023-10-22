<!DOCTYPE html>`


<?php 
  try{
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
      echo "$conn->connect_error";
      die("Connection Failed : ". $conn->connect_error);
    } 
    else {
      try{
        $firstName = filter_input(INPUT_POST,'firstName');
        $lastName = filter_input(INPUT_POST,'lastName');
        $gender = filter_input(INPUT_POST,'gender');
        $email =filter_input(INPUT_POST,'email');
        $password = filter_input(INPUT_POST,'password');
        $number = filter_input(INPUT_POST,'number');
        if($conn->query("insert into registration(firstName, lastName, gender, email, password, number) values('".$firstName."','". $lastName."','".  $gender."','".  $email."','".  $password."',".  $number.")")){
                  echo "<script>alert('Registration successful!');</script> ";
                }
      }
      
      catch(Exception){
        echo "<script>console.log('Unable to data to table');</script>";
      }
	  }
  }
  catch(Exception $e){
    echo "<script>console.log('Unable to connect database');</script>";
  }
?>

<html>
  <head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  </head> <style>
        body {
            background-color: #f7f7f7;
        }
        .container {
            margin-top: 50px;
        }
        .panel {
            border: 1px solid #d1d1d1;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .panel-heading {
            background-image: linear-gradient(to bottom, #0003ff, #514aff, #7a75ff, #9f9dfd, #c3c3f5);
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        .panel-body {
            padding: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="password"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .radio-inline label {
            margin-right: 10px;
        }
        .btn-primary {
            background-color: #337ab7;
            border: none;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #235a9d;
        }
    </style>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Registration Form</h1>
          </div>
          <div class="panel-body">
            <form action="index.php" method="post">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                />
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                />
              </div>
              <div class="form-group">
                <label for="gender">Gender</label>
                <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="m"
                      id="male"
                    />Male</label
                  >
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="f"
                      id="female"
                    />Female</label
                  >
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="o"
                      id="others"
                    />Others</label
                  >
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                />
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input
                  type="number"
                  class="form-control"
                  id="number"
                  name="number"
                />
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>
  </body>
</html>