<!DOCTYPE html>
<html lang="ko">

<head>
  <title>도서 관리</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/index.css">
</head>

<body>
  <header>
    <h1>
      <a href="index.php"><img src="./image/61781dec90fad1762fd4f8b8036c99b8.png" alt="Here is Aegis!!"></a>
    </h1>
  </header>

  <main>
    <nav class="menu">
      <ul class="list">
        <li class="main-list"><a href="#" class="menulink">Aegis?</a>
          <ul class="sub-list">
            <li><a href="#" class="submenulink">Waht is aegis?</a></li>
            <li><a href="#" class="submenulink">Hwo is in aegis?</a></li>
            <li><a href="#" class="submenulink">Hwo we are?</a></li>
            <li><a href="#" class="submenulink">Waht is aegis?</a></li>
            <li><a href="#" class="submenulink">Hwo is in aegis?</a></li>
            <li><a href="#" class="submenulink">Hwo we are?</a></li>
          </ul>
        </li>
        <li class="main-list"><a href="#" class="menulink">Notice Board</a></li>
        <li class="main-list"><a href="#" class="menulink">Secret Board</a></li>
        <li class="main-list"><a href="#" class="menulink">C.T.F</a></li>
        <li class="main-list"><a href="#" class="menulink">Study</a></li>
        <li class="main-list"><a href="#" class="menulink">Documents</a></li>
        <li class="main-list"><a href="#" class="menulink">Book</a>
          <ul class="sub-list">
            <li><a href="#" class="submenulink">도서 검색</a></li>
            <li><a href="#" class="submenulink">도서 반납 확인</a></li>
            <li><a href="./index.php?no=3" class="submenulink">도서 대여 하기</a></li>
          </ul>
        </li>
        <li class="main-list"><a href="#" class="menulink">Photo</a></li>
      </ul>
    </nav>

    <p>
      <div class="title">
        <h2>소장 도서 목록</h2>
      </div>
    </p>

    <div class="text">
      <?php
        require_once("./lib/list.php");
      ?>
    </div>
  </main>

  <footer>
    <div class="addre">
      주소: 경기도 성남시 분당구, <a href="mailto:akakak413@naver.com">E-MAIL:akakak413@naver.com</a>
    </div>
    <div class="copyright">
      Copyright © Kim Dong Hyun & Song Jun Sub. All Rights Reserved.
    </div>
  </footer>

</body>

</html>
