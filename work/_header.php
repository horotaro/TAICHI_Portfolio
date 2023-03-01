<?php

$n = mt_rand(1, 3);

if ($n === 1) {
  $message = '2023年1月から独学で勉強中です';
} elseif ($n === 2) {
  $message = 'React勉強中です';
} else {
  $message = 'PHP勉強中です';
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>太一のポートフォリオサイト</title>
  <link rel="icon" href="favicon.ico">
  <meta name="description" content="太郎のポートフォリオサイトです。">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
</head>
<body>
  <header>
    <div class="container">
      <div class="icon">
        <img src="img/Taichi.jpg" width="120" height="120" alt="太一のアイコンです">
      </div>
      <div class="info">
        <h1>小林太一</h1>
        <p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>
        <ul>
          <li>
            <a href="https://twitter.com/Taichi2212" target="_blank">
            <i class="bi bi-twitter"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <section class="works">
    <h1>自己紹介</h1>