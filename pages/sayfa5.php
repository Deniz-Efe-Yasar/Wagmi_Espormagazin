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

      $user5name = $_POST['user5name'];
      $user5surname = $_POST['user5surname'];
      $user5valonick = $_POST['user5valonick'];
      $user5discnick = $_POST['user5discnick'];

      $_SESSION['user5name'] = $user5name;
      $_SESSION['user5surname'] = $user5surname;
      $_SESSION['user5valonick'] = $user5valonick;
      $_SESSION['user5discnick'] = $user5discnick;

      if (!empty($user5name) && !empty($user5surname) && !empty($user5valonick) && !empty($user5discnick)) {

        header('location:sayfa6.php');
      } else {
        echo '<div class="alert alert-danger" role="alert">
Lütfen Boş Bırakmayın
</div>';
      }
    }


    ?>
    <h4 class="align-self-start">Wagmigg.com</h4>
    <p class="w-100 text-secondary">
      Tek platform, tam rekabet - Senden Wagmi ile turnuvalara katılarak
      performansını arttır!
    </p>
    <p class="align-self-start">5. Oyuncu Bilgileri</p>
    <form class="w-100 d-flex flex-column" method="post" action="">
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user5name'])){echo $_SESSION['user5name'];} ?>" id="user5name" name="user5name" placeholder="Adınız" /><br />
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user5surname'])){echo $_SESSION['user5surname'];} ?>" id="user5surname" name="user5surname" placeholder="Soyadınız" /><br />
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user5valonick'])){echo $_SESSION['user5valonick'];} ?>" id="user5valonick" name="user5valonick" placeholder="Valorant Nickiniz" /><br />
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user5discnick'])){echo $_SESSION['user5discnick'];} ?>" id="user5discnick" name="user5discnick" placeholder="Discord Nickiniz" />
      <br />
    
    <button class="btn btn-dark rounded-pill w-100">
      Devam<i class="fa-solid fa-arrow-right ms-2"></i>
    </button>
    </form>
  </div>
  <script src="../index.js"></script>
</body>

</html>