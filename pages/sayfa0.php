<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Takımını Oluştur</title>
  <style>
    * {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body class="vh-100 d-flex justify-content-center align-items-center">
  <div class="col-9 col-lg-3">
    <?php

    session_start();

    if ($_POST) {

      $teamname = $_POST['teamname'];

      if (!empty($teamname)) {

        if (isset($_POST['checkbox'])) {

          $_SESSION['teamname'] = $teamname;

          header('location:sayfa1.php');
        }

        echo '<div class="alert alert-danger" role="alert">
      Lütfen Turnuva Kurallarını Okuyun
    </div>';

      } else {
        echo '<div class="alert alert-danger" role="alert">
      Lütfen Boş Bırakmayın
    </div>';
      }
    }

    ?>
    <h4 class="align-self-start">Wagmigg.com Hoş Geldin</h4>
    <p class="w-100 text-secondary">
      Tek platform, tam rekabet - Senden Wagmi ile turnuvalara katılarak
      performansını arttır!
    </p>
    <p class="align-self-start">Takım Adını Girin</p>
    <form class="w-100 d-flex flex-column" method="post" action="">
      <input class="form-control rounded-pill text-dark" type="text" id="teamname" value="<?php if(isset($_SESSION['teamname'])){echo $_SESSION['teamname'];} ?>" name="teamname" placeholder="Takım Adı Giriniz" />
      <br />
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="checkbox" id="terms" />
        <label class="form-check-label text-secondary" for="terms">
          <a class="text-dark" href="#">Turnuva Kurallarını</a> okudum,
          onaylıyorum
        </label>
      </div>
      <br />

      <button class="btn btn-dark rounded-pill w-100" type="submit">
        Devam<i class="fa-solid fa-arrow-right ms-2"></i>
      </button>
    </form>
  </div>
  <script src="../index.js"></script>
</body>

</html>