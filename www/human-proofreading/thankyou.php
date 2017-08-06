<?php
$page = "Human Proofreading";
$title = "Human Proofreading Service";
$isProofreadingTest = true;
?>
<!doctype html>
<html lang=en>
<head>
    <?php include("../../include/header.php"); ?>
    <style>
        h1 {
            margin-top: 80px;
            text-align: center;
            font-size: 34px;
            color: #1a36d8;
        }
        p {
            text-align: center;
            margin: 20px 0 30px;
            font-size: 18px;
        }
        .eta {
            color: #333;
            font-size: 24px;
            margin-bottom: 80px;
        }
    </style>
 
</head>
<body>
  <?php include("../../include/partials/nav.php"); ?>

  <h1>Thank you!</h1>
  <p>
      We have received your order. Our editors will send the corrected text to:
      <strong><?= htmlspecialchars($_GET['email']) ?></strong>
      <br>Please also check for that mail in your spam folder.
  </p>
  
  <p class="eta">
      ETA: <strong>In <?= htmlspecialchars($_GET['time']) ?></strong>
  </p>
  <?php include("../../include/footer.php"); ?>
</body>
</html>
