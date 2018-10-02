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
      <div class="contact-form">
        <div class="form-title">Contact</div>
        <form action="sent.php" method="post">
          <div class="form-item">お名前</div>
          <input type="text" name="name">

          <div class="form-item">ご所属</div>
          <input type="text" name="organization">

          <div class="form-item">メールアドレス</div>
          <input type="text" name="mail">

          <div class="form-item">お問い合わせの種類</div>
          <?php
            $types = array("ご依頼・ご相談","お誘い","その他");
           ?>
          <select name="category">
            <option value="未選択">選択してください</option>
             <?php
               foreach ($types as $type) {
                echo "<option value='{$type}'>{$type}</option>";
               }
             ?>
          </select>

          <div class="form-item">メッセージ</div>
          <textarea name="body"></textarea>

          <input type="submit" value="送信">
        </form>
      </div>
    </div>
 </body>
 </html>
