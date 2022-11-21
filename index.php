<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Robbin_The_Bank</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- bootstrat cdn -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/8bdbf5ddef.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@500&family=Ubuntu&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php include 'spin.php'; ?>

    <section id="top">
      <nav class="navbar navbar-expand-sm justify-content-center mx-auto">
        <div class="container-fluid">
          <a class="navbar-brand mx-auto" href="#">RobbinTheBank</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="send_money.php">Transfer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="view_cust.php">view customers</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <section id="mainbody">
      <div class="container">
        <div class="row">
          <div class="col lg-6 fixed" style="padding: 3%">
            <img
              class="img-1 img-fluid"
              src="images/2.png"
              alt="bankillustration"
            />
          </div>
          <div class="col lg-6" style="padding: 3%">
            <h1 style="font-size: 5rem; padding: 10%">
              Payments with Security
              <i class="fa-solid fa-lock" style="font-size: 70%"></i>
            </h1>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
