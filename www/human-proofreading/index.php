<?php
$page = "Human Proofreading";
$title = "Human Proofreading Service";
$isProofreadingTest = true;
setcookie("proofreading_test", $cookieValue, time() + 60*60*24*365);
?>
<!doctype html>
<html lang=en>
<head>
    <?php include("../../include/header.php"); ?>
    <style>
      html {
        background-color: #f8f8f8;
      }
      .banner {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
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
        position: relative;
      }
      
      h1 + p {
        font-size: 20px;
        font-weight: 300;
      }
      
      p.hint {
        margin: 5px 0 0 0;
        color: #999;
      }
      
      h2 {
        font-size: 28px;
        font-weight: normal;
        padding-bottom: 4px;
        margin: 0 0 15px;
        color: #a2a8ca;
        position: relative;
      }
      
      h2 .secure-note {
        position: absolute;
        right: 0;
        bottom: 0;
        padding-left: 21px;
        color: #999;
        font-size: 14px;
        background: url(lock.svg) left center no-repeat;
      }
      
      h2 strong {
        color: #333;
        font-weight: normal;
      }
      .content {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        width: 950px;
        margin: 60px auto 150px;
      }
      .section  {
        margin-bottom: 60px;
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
        height: 31vh;
        font-family: inherit;
      }
      input[type=email] {
        font-size: 18px;
        width: 100%;
        outline: 0;
        padding: 10px 20px;
        box-sizing: border-box;
      }
      .briefing textarea {
        height: 150px;
        min-height: 150px;
      }
      select {
        width: 100%;
        border: 1px solid #aaa;
        outline: 0;
        padding: 0 20px;
        height: 45px;
        cursor: pointer;
        box-sizing: border-box;
        -webkit-appearance: none;
        -moz-appearance: none;
        border-radius: 0;
        font-size: 16px;
        font-family: inherit;
        background: #fff url(arrow_down.svg) 98% center no-repeat;
        background-size: 20px auto;
      }
      .overview {
        position: fixed;
        left: 0;
        right: 0;
        bottom: 0;
        box-shadow: 0 -4px 4px rgba(0, 0, 0, 0.05);
        background: #fff;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }
      .overview-inner {
        max-width: 950px;
        margin: 0 auto;
        padding: 10px 0;
        font-size: 0;
      }
      
      .column {
        width: 38%;
        box-sizing: border-box;
        border-left: 1px solid #ddd;
        padding-left: 20px;
        display: inline-block;
        vertical-align: top;
        min-height: 75px;
      }
      .column.checkout {
        width: 24%;
        padding-top: 4px;
      }
      .column:first-child {
        padding-left: 0;
        border-left: 0;
      }
      .column h3 {
        font-size: 16px;
        margin: 0;
        font-weight: normal;
        color: #999;
      }
      .column .result {
        line-height: 30px;
        font-weight: bold;
        font-size: 22px;
        display: block;
        color: #333;
      }
      .column p {
        margin: 0;
        font-size: 14px;
        color: #999;
      }
      .checkout button {
        -webkit-appearance: none;
        border: 0;
        padding: 7px 14px;
        outline: 0;
        background: #1b8c1c;
        color: #fff;
        font-size: 18px;
        display: block;
        width: 100%;
        cursor: pointer;
        box-shadow: 0 3px 3px rgba(0, 0, 0, 0.2);
      }
      .checkout button:hover {
        background: #1f7b1f;
      }
    </style>
</head>
<body>
  <?php include("../../include/partials/nav.php"); ?>

  <div class="banner">
      <h1>Expert Proofreading Service for<br>Students and Professionals</h1>
      <p>
        Your documents are checked 24/7 by professional editors and proofreaders. Affordable, secure and fast.
      </p>
  </div>

  <form class="content">
    <h2>
      1. <strong>Paste or enter your Text below</strong>
      <span class="secure-note">Secure connection</span>
    </h2>
    <div class="section text">
      <textarea name="text" autofocus placeholder="Enter or paste text here"><?php if (isset($_POST['proofread_text'])) echo $_POST['proofread_text']; ?></textarea>
    </div>
    
    <h2>
      2. <strong>Select Language</strong>
    </h2>
    <div class="section language">
      <select name="language">
        <option selected value="en-US">American English</option>
        <option value="en-GB">British English</option>
        <option value="en-CA">Canadian English</option>
        <option value="en-AU">Australian English</option>
      </select>
    </div>
    
    <h2>
      3. <strong>Optional Briefing for the Editor</strong>
    </h2>
    <div class="section briefing">
      <textarea placeholder="Give our editors some more information about the subject of your text"></textarea>
    </div>
    
    <h2>
      4. <strong>Your Email Address</strong>
    </h2>
    <div class="section briefing">
      <input type="email" name="email" placeholder="Enter your Email Address">
      <p class="hint">Your email address will not be shared with anyone.</p>
    </div>
  </form>
  
  <div class="overview">
    <div class="overview-inner">
      <div class="delivery-time column">
        <h3>Approximate delivery time:</h3>
        <span class="result">An hour</span>
        <p>Estimated based on text length</p>
      </div>
      <div class="pricing column">
        <h3>Price:</h3>
        <span class="result">USD 14.00</span>
        <p>Incl. VAT</p>
      </div>
      <div class="checkout column">
        <button>Continue to Payment</button>
      </div>
    </div>
  </div>

</body>
</html>
