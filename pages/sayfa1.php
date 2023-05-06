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

      $user1name = $_POST['user1name'];
      $user1surname = $_POST['user1surname'];
      $user1valonick = $_POST['user1valonick'];
      $user1discnick = $_POST['user1discnick'];

      $_SESSION['user1name'] = $user1name;
      $_SESSION['user1surname'] = $user1surname;
      $_SESSION['user1valonick'] = $user1valonick;
      $_SESSION['user1discnick'] = $user1discnick;

      if (!empty($user1name) && !empty($user1surname) && !empty($user1valonick) && !empty($user1discnick)) {

       

        header('location:sayfa2.php');
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
    <p class="align-self-start">1. Oyuncu Bilgileri (Kaptan)</p>
    <form class="w-100 d-flex flex-column" action="" method="post">
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user1name'])){echo $_SESSION['user1name'];} ?>" id="user1name" name="user1name" placeholder="Adınız" /><br />
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user1surname'])){echo $_SESSION['user1surname'];} ?>" id="user1surname" name="user1surname" placeholder="Soyadınız" /><br />
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user1valonick'])){echo $_SESSION['user1valonick'];} ?>" id="user1valonick" name="user1valonick" placeholder="Valorant Nickiniz" /><br />
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user1discnick'])){echo $_SESSION['user1discnick'];} ?>" id="user1discnick" name="user1discnick" placeholder="Discord Nickiniz" />
      <br />
    
    <button class="btn btn-dark rounded-pill w-100" type="submit">
      Devam<i class="fa-solid fa-arrow-right ms-2"></i>
    </button>
    </form>
  </div>
  <script src="../index.js"></script>
</body>

</html>