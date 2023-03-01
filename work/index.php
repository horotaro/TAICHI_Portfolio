<?php

$title = '';
include('_header.php');

?>
    <section>
      <img src="img/Profile.jpg" width="400" height="260" alt="自己紹介の紹介画像">
      <h1><i class="bi bi-person-fill"></i> PROFILE</h1>
      <p>・<b>氏名</b>：小林 太一</p>
      <p>・<b>生年月日</b>：1998年7月26日(24歳)</p>
      <p>・<b>趣味</b>：旅行、料理、野球、スノーボード、ゲーム</p>
      <p>・<b>学歴</b><br>&nbsp;&nbsp;2021年3月 東京都市大学工学部応用化学科 卒業</p>
      <p>・<b>職歴</b><br>&nbsp;&nbsp;2021年4月 三機工業株式会社 入社</p>
      <a class="back" href="profile.php">もっと見る</a>
    </section>
  
    <section>
      <img src="img/Study.jpg" width="400" height="260" alt="勉強記録の紹介画像">
      <h1><i class="bi bi-briefcase-fill"></i> STUDY</h1>
      <p>勉強記録</p>
      <p>2023/01/04 ～ 01/13 Dotinstall HTML/CSS</p>
      <p>2023/01/14 ～ 01/18 Dotinstall JavaScript</p>
      <a class="back" href="study.php">もっと見る</a>
    </section>
  
    <section>
      <img src="img/App.jpg" width="400" height="260" alt="ミニアプリの紹介画像">
      <h1><i class="bi bi-controller"></i> 作品</h1>
      <p>ミニアプリ</p>
      <ul>
        <li><a class="game"href="https://horotaro.github.io/MyTodoApp/">ToDoアプリ</li>
        <li><a class="game"href="https://horotaro.github.io/tic-tac-toe/">〇×ゲーム</li>
      </ul>
      <a class="back" href="game.php">もっと見る</a>
    </section>

    <section>
      <img src="img/Contact.jpg" width="400" height="260" alt="連絡の紹介画像">
      <h1><i class="bi bi-envelope-fill"></i> CONTACT</h1>
      <p>何かありましたら<a href="https://twitter.com/Taichi2212">twitter</a>のDMからご連絡ください。</p>
    </section>
<?php

include('_footer.php');