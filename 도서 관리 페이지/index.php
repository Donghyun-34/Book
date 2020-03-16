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
            <li><a href="#" class="submenulink">도서 대여 하기</a></li>
          </ul>
        </li>
        <li class="main-list"><a href="#" class="menulink">Photo</a></li>
      </ul>
    </nav>

    <?php
    //기본적으로 도서 목록 출력하는 부분(title_id 값이 전달되지 않은 경우)
      if(!isset($_GET["title_id"])){
    ?>
        <p>
          <div class="nomal_view">
            <h2>소장 도서 목록</h2>
          </div>
        </p>

        <div class="text">
          <?php
            require_once("./lib/list.php");
          ?>
        </div>
    <?php
      }
      //title_id가 정상적으로 전달되면 해당 책에 대한 정보 출력하기.
      else{
        require_once("./lib/detail_view.php");
        ?>
        <div class="text">
          <ul class="detail_view">
            <li><img src="image\book_image\61781dec90fad1762fd4f8b8036c99b8.png" class="book_image">제목 : <?= $row["title"] ?></li>
            <li>장르 : <?= $row["genre"] ?></li>
            <li>작가 : <?php require("./lib/show_author.php") ?></li>
            <li>줄거리 <br><?= $row["note"]?></li>
            <li>대여 현황 : <?= $row["state"]?></li>
          </ul>
        </div>
        <?php
      }
    ?>
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
