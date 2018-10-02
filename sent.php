<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Port-folio-site</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>
  <div class="header">
    <div class="header-left">Port-folio-site</div>
    <div class="header-right">
      <ul>
        <li>Portfolio</li>
        <li>Events</li>
        <li>Contact</li>
      </ul>
    </div>
  </div>


  <div class="main">
     <div class="thanks-message">Thank You!</div>
     <div class="display-contact">
       <div class="form-title">お問い合わせ内容</div>

       <div class="form-item">◇お名前</div>
       <?php echo $_POST["name"] ?>

       <div class="form-item">◇ご所属</div>
       <?php echo $_POST["organization"] ?>

       <div class="form-item">◇メールアドレス</div>
       <?php echo $_POST["mail"] ?>

       <div class="form-item">◇お問い合わせの種類</div>
       <?php echo $_POST["category"] ?>

       <div class="form-item">◇メッセージ</div>
       <?php echo $_POST['body'] ?>

     </div>
   </div>
 </body>
 </html>
