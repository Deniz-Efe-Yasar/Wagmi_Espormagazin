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

      $user2name = $_POST['user2name'];
      $user2surname = $_POST['user2surname'];
      $user2valonick = $_POST['user2valonick'];
      $user2discnick = $_POST['user2discnick'];

        $_SESSION['user2name'] = $user2name;
        $_SESSION['user2surname'] = $user2surname;
        $_SESSION['user2valonick'] = $user2valonick;
        $_SESSION['user2discnick'] = $user2discnick;

      if (!empty($user2name) && !empty($user2surname) && !empty($user2valonick) && !empty($user2discnick)) {

        

        header('location:sayfa3.php');
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
    <p class="align-self-start">2. Oyuncu Bilgileri</p>
    <form class="w-100 d-flex flex-column" method="post" action="">
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user2name'])){echo $_SESSION['user2name'];} ?>" id="user2name" name="user2name" placeholder="Adınız" /><br />
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user2surname'])){echo $_SESSION['user2surname'];} ?>" id="user2surname" name="user2surname" placeholder="Soyadınız" /><br />
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user2valonick'])){echo $_SESSION['user2valonick'];} ?>" id="user2valonick" name="user2valonick" placeholder="Valorant Nickiniz" /><br />
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user2discnick'])){echo $_SESSION['user2discnick'];} ?>" id="user2discnick" name="user2discnick" placeholder="Discord Nickiniz" />
      <br />
    
    <button class="btn btn-dark rounded-pill w-100>" type="submit">
      Devam<i class="fa-solid fa-arrow-right ms-2"></i>
    </button>
    </form>
  </div>
  <script src="../index.js"></script>
</body>

</html>