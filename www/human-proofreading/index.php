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
        border: 1px solid #bbb;
        outline: 0;
        min-height: 320px;
        height: 31vh;
        font-family: inherit;
      }
      input[type=email] {
        font-size: 18px;
        width: 100%;
        outline: 0;
        padding: 10px 20px;
        border: 1px solid #bbb;
        box-sizing: border-box;
      }
      .briefing textarea {
        height: 150px;
        min-height: 150px;
      }
      select {
        width: 100%;
        border: 1px solid #bbb;
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
        cursor: pointer;
        line-height: 30px;
        font-weight: bold;
        font-size: 22px;
        display: inline-block;
        color: #333;
        padding-right: 21px;
        background: url(info.svg) right 56% no-repeat;
        background-size: 15px auto;
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
      .payment-logos {
        background:url(payment_logos.png) center top no-repeat;
        display: block;
        margin-top: 12px;
        height: 20px;
        opacity: 0.5;
        background-size: 90% auto;
      }
      .checkout button:hover {
        background: #1f7b1f;
      }
      .words {
        text-align: right;
      }
      .shadow {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        display: none;
        background: rgba(0, 0, 0, 0.9);
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        text-align: center;
        z-index: 10;
        white-space: nowrap;
        animation: fadeIn 0.2s;
      }
      .shadow:before {
        content: "";
        display: inline-block;
        vertical-align: middle;
        height: 100%;
      }
      .modal {
        display: inline-block;
        background: #fff;
        vertical-align: middle;
        text-align: left;
        white-space: nowrap;
        max-width: 730px;
        position: relative;
        animation: slideIn 0.2s;
      }
      .modal .close {
        position: absolute;
        height: 20px;
        width: 20px;
        border: 10px solid transparent;
        background: url(close.svg) center center no-repeat;
        cursor: pointer;
        right: 0;
        top: 0;
        color: #fff;
      }
      .modal .timing-info {
        border-left: 1px solid #ddd;
        padding-left: 30px;
        margin-left: 26px;
        margin-right: 30px;
      }
      
      .modal .pricing-info {
        margin-left: 30px;
      }
      
      .modal .pricing-info,
      .modal .timing-info {
        width: 320px;
        padding-top: 20px;
        padding-bottom: 20px;
        box-sizing: border-box;
        display: inline-block;
        vertical-align: top;
      }
      
      .modal h4 {
        margin: 0 0 25px;
        font-weight: bold;
        font-size: 22px;
      }
      td + td {
        padding-left: 20px;
      }
      td {
        padding-bottom: 8px;
      }
      .modal .hint {
        font-size: 14px;
        margin-top: 10px;
        color: #999;
      }
      
      .modal .header {
        background: #333;
        padding: 30px;
        white-space: normal;
        font-size: 34px;
        font-weight: 400;
        text-align: center;
      }
      .modal h2 {
        margin: 0;
        color: #fff;
      }
      
      @keyframes slideIn {
        0% {
          transform: translateY(100px);
        }
        100% {
          transform: translateY(0);
        }
      }
      @keyframes fadeIn {
        0% {
          opacity: 0;
        }
        100% {
          opacity: 1;
        }
      }
    </style>
    <script>
      var pricing = {
        PER_WORD: 0.035,
        MINIMUM: 13,
      };
      
      var HOUR_PUFFER = 10;
      
      function countWords(s){
        s = s.replace(/(^\s*)|(\s*$)/g, "");
        s = s.replace(/\s+/g, " ");
        if (!s) {
          return 0;
        }
        return s.split(' ').length;
      }
      
      function updateWordCount(wordCount) {
        if (wordCount === 0 || wordCount > 1) {
          $(".words").text(wordCount + " words");
        } else {
          $(".words").text("1 word");
        }
      }
      
      function updatePricing(wordCount) {
        var finalPrice = 0;
        if (wordCount < 1000) {
          finalPrice = Math.max(pricing.MINIMUM, wordCount * pricing.PER_WORD);
        } else {
          finalPrice = Math.ceil(wordCount / 1000) * 1000 * pricing.PER_WORD;
        }
        finalPrice = finalPrice.toFixed(2);
        $(".pricing .result").text("USD " + finalPrice);
      }
      
      function updateTiming(wordCount) {
        var time = Math.ceil(wordCount / 200);
        time = time === 0 ? 1 : time;
        time += HOUR_PUFFER;
        $(".timing .result").text(time.toString() + " hours");
      }
      
      function update() {
        var wordCount = countWords($("textarea[name=text]").val());
        updateWordCount(wordCount);
        updatePricing(wordCount);
        updateTiming(wordCount);
      }
      
      function focus($element) {
        setTimeout(function() {
          $(window).scrollTop($element.offset().top - 80);
          $element.focus();
        }, 10);
      }
      
      function validate() {
        var $textarea = $("textarea[name=text]");
        var wordCount = countWords($textarea.val());
        if (!wordCount) {
          alert("Please enter a text. We cannot check empty texts.");
          focus($textarea);
          return false;
        }
        
        var $emailField = $("input[type=email]");
        var email = $emailField.val();
        if (email.indexOf("@") === -1 || email.length < 6 || email.indexOf(".") === -1) {
          alert("Please enter a valid email address.");
          focus($emailField);
          return false;
        }
        
        return true;
      }
      
      $(function() {
        $(".close, .shadow").click(function() {
          $(".shadow").hide();
          return false;
        });

        $(".open-shadow").click(function() {
          $(".shadow").show();
          return false;
        });

        $(".modal").click(false);

        setInterval(update, 400);
        
        $("button.submit").click(function() {
          if (validate()) {
            var $fields = $("button,textarea, input, select").prop("disabled", true);
          }
          return false;
        });
      });
    </script>
</head>
<body>
  <?php include("../../include/partials/nav.php"); ?>

  <div class="banner">
      <h1>Expert Proofreading Service for<br>Students and Professionals</h1>
      <p>
        Your documents are checked 24/7 by professional editors and proofreaders. Affordable, secure and fast.
      </p>
  </div>

  <form class="content" onsubmit="return false">
    <h2>
      1. <strong>Paste or enter your Text below</strong>
      <span class="secure-note">Secure connection</span>
    </h2>
    <div class="section text">
      <textarea name="text" autofocus placeholder="Enter or paste text here"><?php if (isset($_POST['proofread_text'])) echo $_POST['proofread_text']; ?></textarea>
      <p class="hint words"></p>
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
      <textarea placeholder="Give our editors some more information about the subject of your text" name="briefing"></textarea>
    </div>
    
    <h2>
      4. <strong>Your Email Address</strong>
    </h2>
    <div class="section email">
      <input type="email" name="email" placeholder="Enter your Email Address">
      <p class="hint">Your email address will not be shared with any third party.</p>
    </div>
  </form>
  
  <div class="overview">
    <div class="overview-inner">
      <div class="timing column">
        <h3>Approximate delivery time:</h3>
        <span class="result open-shadow">11 hours</span>
        <p>Estimated based on text length</p>
      </div>
      <div class="pricing column">
        <h3>Price:</h3>
        <span class="result open-shadow">USD 13.00</span>
        <p>Incl. VAT</p>
      </div>
      <div class="checkout column">
        <button class="submit">Continue to Payment</button>
        <span class="payment-logos"></span>
      </div>
    </div>
  </div>

  <div class="shadow">
    <div class="modal">
      <span class="close"></span>
      <div class="header">
        <h2>Quickly fix your Grammar with our 24/7 Availability</h2>
      </div>
      <div class="pricing-info">
        <h4>Pricing</h4>
        <table cellspacing=0>
          <tr>
            <td>
              Price per word:
            </td>
            <td>
              <strong>USD  <script>document.write(pricing.PER_WORD)</script></strong>
            </td>
          </tr>
          <tr>
            <td>
              Minimum price:
            </td>
            <td>
              <strong>USD  <script>document.write(pricing.MINIMUM.toFixed(2))</script></strong>
            </td>
          </tr>
        </table>
        <p class="hint">
          All prices including VAT
        </p>
      </div>
      <div class="timing-info">
        <h4>Delivery Time Estimations</h4>
        <table cellspacing=0>
          <tr>
            <td>
              1 - 200 words:
            </td>
            <td>
              <strong><script>document.write(HOUR_PUFFER + 1)</script> hours</strong>
            </td>
          </tr>
          <tr>
            <td>
              201 - 400 words:
            </td>
            <td>
              <strong><script>document.write(HOUR_PUFFER + 2)</script> hours</strong>
            </td>
          </tr>
          <tr>
            <td>
              401 - 600 words:
            </td>
            <td>
              <strong><script>document.write(HOUR_PUFFER + 3)</script> hours</strong>
            </td>
          </tr>
          <tr>
            <td>
              1,000 words:
            </td>
            <td>
              <strong><script>document.write(HOUR_PUFFER + 5)</script> hours</strong>
            </td>
          </tr>
          <tr>
            <td>
              5,000 words:
            </td>
            <td>
              <strong><script>document.write(HOUR_PUFFER + 25)</script> hours</strong>
            </td>
          </tr>
          <tr>
            <td>
              10,000 words:
            </td>
            <td>
              <strong><script>document.write(HOUR_PUFFER + 50)</script> hours</strong>
            </td>
          </tr>
        </table>
        <p class="hint">
          Estimation based on previous jobs
        </p>
        
      </div>
    </div>
  </div>

</body>
</html>
