<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- custom login & regirter CSS -->
    <link rel="stylesheet" href="custom.css">
</head>

<body>
<?php include './nav.php' ?>

<main class="form-signin w-100 m-auto">
  <form>

    <h1 class="h3 mb-3 fw-normal m-2">Sign up</h1>

    <div class="form-floating my-2">
      <input type="text" class="form-control" id="username" placeholder="Enter your username">
      <label for="username">Username</label>
    </div>

    <div class="form-floating my-2">
      <input type="email" class="form-control" id="ConfirmPassword" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating my-2">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating my-2">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password">
      <label for="floatingPassword">Confirm Password</label>
    </div>

    <button class="btn btn-outline-primary w-100 py-2" type="submit">Sign up</button>
    <p class="mt-5 mb-3 text-body-secondary">Already have an account? <a href="login.php">Click here</a> to sing in </p>
  </form>
</main>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<?php include './footer copy.php' ?>
</body>
</html>