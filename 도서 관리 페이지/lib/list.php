<?php
            $currentPage = 1;
            if (isset($_GET["currentPage"])) {
                $currentPage = $_GET["currentPage"];
            }

            //mysqli_connect()함수로 커넥션 객체 생성
            require_once("./db_info.php");

            //페이징 작업을 위한 테이블 내 전체 행 갯수 조회 쿼리
            $sqlCount = "SELECT count(*) FROM Current_book";
            $resultCount = mysqli_query($conn,$sqlCount);
            if($rowCount = mysqli_fetch_array($resultCount)){
                $totalRowNum = $rowCount["count(*)"];   //php는 지역 변수를 밖에서 사용 가능.
            }

            $rowPerPage = 20;   //페이지당 보여줄 게시물 행의 수
            $begin = ($currentPage -1) * $rowPerPage;
            $sql = "SELECT title_id, title, genre, author, note, state FROM Current_book order by title_id desc limit ".$begin.",".$rowPerPage."";
            $result = mysqli_query($conn,$sql);
        ?>
        <table class="book_list">
            <tr>
                <th>순번</th>
                <th>제목</th>
                <th>장르</th>
                <th>작가</th>
                <th>줄거리</th>
                <th>대여 상황</th>
            </tr>
            <?php
                //반복문을 이용하여 result 변수에 담긴 값을 row변수에 계속 담아서 row변수의 값을 테이블에 출력한다.
                while($row = mysqli_fetch_array($result)){
            ?>
                <tr>
                    <td>
                        <?= $row["title_id"];?>
                    </td>
                    <td>
                        <?php
                            echo "<a href='./index.php?title_id=".$row["title_id"]."'>";
                            echo $row["title"];
                            echo "</a>";
                        ?>
                    </td>
                    <td>
                        <?= $row["genre"];?>
                    </td>
                    <td>
                        <?php require("./lib/show_author.php") ?>
                    </td>
                    <td>
                      <?= $row["note"];?>
                    </td>
                    <td>
                      <?= $row["state"];?>
                    </td>
                </tr>
            <?php
                }
            ?>
        </table>
        <div class="button_list">
          <?php
              //currentPage 변수가 1보다 클때만 이전 버튼이 활성화 되도록 함
              if($currentPage > 1 ) {
                  //이전 버튼이 클릭될때 GET방식으로 currentPage변수 값에 1을 뺀 값이 넘어가도록 함
                  echo "<a class='button' href ='./index.php?currentPage=".($currentPage-1)."'>이전</a>";
              }

              $lastPage = ($totalRowNum-1) / $rowPerPage;

              if (($totalRowNum-1) % $rowPerPage !=0) {
                  $lastPage += 1;
              }
              //lastPage변수가 currentPage 변수보다 클때만 다음 버튼이 활성화 되도록 함
              if($currentPage < $lastPage-1) {
                  //다음 버튼이 클릭될때 GET방식으로 currentPage변수 값에 1을 더한 값이 넘어가도록 함
                  echo "<a class='button' href='./index.php?currentPage=".($currentPage+1)."'>다음</a>";
              }
              mysqli_close($conn);
          ?>
        </div>
