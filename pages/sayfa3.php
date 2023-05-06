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

      $user3name = $_POST['user3name'];
      $user3surname = $_POST['user3surname'];
      $user3valonick = $_POST['user3valonick'];
      $user3discnick = $_POST['user3discnick'];

      $_SESSION['user3name'] = $user3name;
      $_SESSION['user3surname'] = $user3surname;
      $_SESSION['user3valonick'] = $user3valonick;
      $_SESSION['user3discnick'] = $user3discnick;

      if (!empty($user3name) && !empty($user3surname) && !empty($user3valonick) && !empty($user3discnick)) {



        header('location:sayfa4.php');
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
    <p class="align-self-start">3. Oyuncu Bilgileri</p>
    <form class="w-100 d-flex flex-column" action="" method="post">
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user3name'])){echo $_SESSION['user3name'];} ?>" id="user3name" name="user3name" placeholder="Adınız" /><br />
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user3surname'])){echo $_SESSION['user3surname'];} ?>" id="user3surname" name="user3surname" placeholder="Soyadınız" /><br />
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user3valonick'])){echo $_SESSION['user3valonick'];} ?>" id="user3valonick" name="user3valonick" placeholder="Valorant Nickiniz" /><br />
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user3discnick'])){echo $_SESSION['user3discnick'];} ?>" id="user3discnick" name="user3discnick" placeholder="Discord Nickiniz" />
      <br />

      <button class="btn btn-dark rounded-pill w-100" type="submit">
        Devam<i class="fa-solid fa-arrow-right ms-2"></i>
      </button>
    </form>
  </div>
  <script src="../index.js"></script>
</body>

</html>