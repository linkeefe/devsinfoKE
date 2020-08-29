<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="A summary of developer communities in Kenya. "
    />
    <meta name="author" content="Lincoln Njogu, Technologist" />

    <title>Developer Communities Kenya</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="ico.png"/>
    
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-163468828-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-163468828-1');
</script>
  </head>

  <body style="font-family: 'Courier New', Courier, monospace">
    <!-- Navigation -->
    <div class="container">
      <div>
        <h1>Developer Communities Kenya</h1>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#"
                >Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <!-- Page Content -->
    <div class="container">
      <div class="row">

      <?php
      $string = file_get_contents("communities.json");
      $json_a = json_decode($string, true);
      
      foreach ($json_a as $key => $value) {
        ?>
        <div class="col-lg-12 p-4">
            <div class="card">
              <div class="card-body"> 
                <h5 class="card-title"><?php echo $value['Name'] ?></h5>
                <p class="text-muted">
                <?php echo $value['Desc'] ?>
                </p>
                <a href="<?php echo $value['Link'] ?>" target="_blank" class="card-link">Group Link</a>
                <a href="<?php echo $value['Events'] ?>" target="_blank" class="card-link">Community Events</a>
                <a href="<?php echo $value['Telegram'] ?>" target="_blank" class="card-link">Join Telegram</a>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
        </div>
      </div>
    </div>
    <footer class="bg-light fixed-bottom py-2">
      <div class="small text-center text-muted">Copyright &copy; 2020 - Developer Communities KE</div>
  </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
