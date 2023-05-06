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

      $user4name = $_POST['user4name'];
      $user4surname = $_POST['user4surname'];
      $user4valonick = $_POST['user4valonick'];
      $user4discnick = $_POST['user4discnick'];

      $_SESSION['user4name'] = $user4name;
      $_SESSION['user4surname'] = $user4surname;
      $_SESSION['user4valonick'] = $user4valonick;
      $_SESSION['user4discnick'] = $user4discnick;

      if (!empty($user4name) && !empty($user4surname) && !empty($user4valonick) && !empty($user4discnick)) {



        header('location:sayfa5.php');
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
    <p class="align-self-start">4. Oyuncu Bilgileri</p>
    <form class="w-100 d-flex flex-column" method="post" action="">
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user4name'])){echo $_SESSION['user4name'];} ?>" id="user4name" name="user4name" placeholder="Adınız" /><br />
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user4surname'])){echo $_SESSION['user4surname'];} ?>" id="user4surname" name="user4surname" placeholder="Soyadınız" /><br />
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user4valonick'])){echo $_SESSION['user4valonick'];} ?>" id="user4valonick" name="user4valonick" placeholder="Valorant Nickiniz" /><br />
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user4discnick'])){echo $_SESSION['user4discnick'];} ?>" id="user4discnick" name="user4discnick" placeholder="Discord Nickiniz" />
      <br />
    
    <button class="btn btn-dark rounded-pill w-100" type="submit">
      Devam<i class="fa-solid fa-arrow-right ms-2"></i>
    </button>
    </form>
  </div>
  <script src="../index.js"></script>
</body>

</html>