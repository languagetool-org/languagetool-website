<!doctype html>
<html lang=en>
<head>
    <?php
    $page = "Human Proofreading";
    $title = "Human Proofreading Service";
    ?>
    <?php include("../../include/header.php"); ?>
    <style>
      html {
        background-color: #f9f9f9;
      }
      .banner {
        width: 100%;
        background: #333;
        color: #fff;
        text-align: center;
        padding: 20px 0 28px;
        box-sizing: border-box;
        position: relative;
      }
      h1, h1 + p {
        position: relative;
        z-index:1;
        max-width: 950px;
        margin: 0 auto;
      }
      h1 {
        font-size: 34px;
        font-weight: 400;
        margin-bottom: 15px;
      }
      
      h1 + p {
        font-size: 20px;
        font-weight: 300;
      }
      
      h2 {
        font-size: 30px;
        font-weight: normal;
        border-bottom: 1px solid #ddd;
        margin: 0 0 20px;
        color: #999;
      }
      h2 strong {
        color: #333;
        font-weight: normal;
      }
      .content {
        width: 950px;
        margin: 50px auto 20px;
      }
      .section  {
        margin-bottom: 40px;
      }
      textarea {
        padding: 20px;
        line-height: 1.5;
        font-size: 18px;
        box-sizing: border-box;
        width: 100%;
        border: 1px solid #aaa;
        outline: 0;
        min-height: 350px;
        height: 33vh;
      }
      .overview {
        position: fixed;
        left: 0;
        right: 0;
        bottom: 0;
        box-shadow: 0 -5px 5px rgba(0, 0, 0, 0.1);
        background: #fff;
      }
      .overview-inner {
        max-width: 950px;
        margin: 0 auto;
      }
    </style>
</head>
<body>
  <?php include("../../include/partials/nav.php"); ?>

  <div class="banner">
      <h1>Expert Proofreading Service for<br>Students and Professionals</h1>
      <p>
        Your documents are checked 24/7 by expert editors and proofreaders. Affordable, secure and fast.
      </p>
  </div>

  <form class="content">
    <h2>
      Step 1: <strong>Paste or enter your Text below</strong>
    </h2>
    <div class="section">
      <textarea name="text" autofocus placeholder="Enter or paste text here"></textarea>
    </div>
    <h2>
      Step 2: <strong>Select language</strong>
    </h2>
    <div class="section">
      <textarea name="text" autofocus></textarea>
    </div>
  </form>
  
  <div class="overview">
    <div class="overview-inner">
      <div class="delivery-time">
        <h3>Approximate delivery time:</h3>
        <span class="result">An hour</span>
        <p>Estimated based on text length</p>
      </div>
      <div class="pricing">
        <h3>Price:</h3>
        <span class="result">USD 14.00</span>
        <p>Incl. VAT</p>
      </div>
      <div class="checkout">
        <button>Continue to Payment</button>
      </div>
    </div>
  </div>
  <?php include("../../include/footer.php"); ?>

</body>
</html>
