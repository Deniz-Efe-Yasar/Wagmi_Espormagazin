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

    $db = mysqli_connect("localhost", "wagmiggc_dexy", "Wirchualbestcms!", "wagmiggc_turnuvakayit");

                        if (!$db) {

                            echo '<div class="alert alert-danger" role="alert">
                            Database Can\'t connect 
                            </div>';
                        }

    

    if ($_POST) {

      $user6name = $_POST['user6name'];
      $user6surname = $_POST['user6surname'];
      $user6valonick = $_POST['user6valonick'];
      $user6discnick = $_POST['user6discnick'];

      $_SESSION['user6name'] = $user6name;
      $_SESSION['user6surname'] = $user6surname;
      $_SESSION['user6valonick'] = $user6valonick;
      $_SESSION['user6discnick'] = $user6discnick;

      if (!empty($user6name) && !empty($user6surname) && !empty($user6valonick) && !empty($user6discnick)) {

      $teamname = $_SESSION['teamname'];
      $user1name = $_SESSION['user1name'];
      $user1surname = $_SESSION['user1surname'];
      $user1valonick = $_SESSION['user1valonick'];
      $user1discnick = $_SESSION['user1discnick'];
      $user2name = $_SESSION['user2name'];
      $user2surname = $_SESSION['user2surname'];
      $user2valonick = $_SESSION['user2valonick'];
      $user2discnick = $_SESSION['user2discnick'];
      $user3name = $_SESSION['user3name'];
      $user3surname = $_SESSION['user3surname'];
      $user3valonick = $_SESSION['user3valonick'];
      $user3discnick = $_SESSION['user3discnick'];
      $user4name = $_SESSION['user4name'];
      $user4surname = $_SESSION['user4surname'];
      $user4valonick = $_SESSION['user4valonick'];
      $user4discnick = $_SESSION['user4discnick'];
      $user5name = $_SESSION['user5name'];
      $user5surname = $_SESSION['user5surname'];
      $user5valonick = $_SESSION['user5valonick'];
      $user5discnick = $_SESSION['user5discnick'];

      $sql = "INSERT INTO turnuva_user (`id`,`teamname`,`birincioyuncuad`,`birincioyuncusoyad`,`birincioyuncunick`,`birincioyuncudc`,`ikincioyuncuad`,`ikincioyuncusoyad`,`ikincioyuncunick`,`ikincioyuncudc`,`ucuncuoyuncuad`,`ucuncuoyuncusoyad`,`ucuncuoyuncunick`,`ucuncuoyuncudc`,`dorduncuoyuncuad`,`dorduncuoyuncusoyad`,`dorduncuoyuncunick`,`dorduncuoyuncudc`,`besincioyuncuad`,`besincioyuncusoyad`,`besincioyuncunick`,`besincioyuncudc`,`yedekoyuncuad`,`yedekoyuncusoyad`,`yedekoyuncunick`,`yedekoyuncudc`)
      VALUES (NULL,'" . $teamname . "','" . $user1name . "','" . $user1surname . "','" . $user1valonick . "','" . $user1discnick . "','" . $user2name . "','" . $user2surname . "','" . $user2valonick . "','" . $user2discnick . "','" . $user3name . "','" . $user3surname . "','" . $user3valonick . "','" . $user3discnick . "','" . $user4name . "','" . $user4surname . "','" . $user4valonick . "','" . $user4discnick . "','" . $user5name . "','" . $user5surname . "','" . $user5valonick . "','" . $user5discnick . "','" . $user6name . "','" . $user6surname . "','" . $user6valonick . "','" . $user6discnick . "')";
      
      $send = mysqli_query($db,$sql);

        header('location:son.php');
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
    <p class="align-self-start">Yedek Oyuncu Bilgileri</p>
    <form class="w-100 d-flex flex-column" method="post" action="">
    <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user6name'])){echo $_SESSION['user6name'];} ?>" id="user6name" name="user6name" placeholder="Adınız" /><br />
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user6surname'])){echo $_SESSION['user6surname'];} ?>" id="user6surname" name="user6surname" placeholder="Soyadınız" /><br />
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user6valonick'])){echo $_SESSION['user6valonick'];} ?>" id="user6valonick" name="user6valonick" placeholder="Valorant Nickiniz" /><br />
      <input class="form-control rounded-pill text-dark" type="text" value="<?php if(isset($_SESSION['user6discnick'])){echo $_SESSION['user6discnick'];} ?>" id="user6discnick" name="user6discnick" placeholder="Discord Nickiniz" />
      <br />
    <button class="btn btn-dark rounded-pill w-100">
      Devam<i class="fa-solid fa-arrow-right ms-2"></i>
    </button>
    </form>
  </div>
  <script src="../index.js"></script>
</body>

</html>