<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <title>부트스트랩 공부</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>

<!--
container는 크롬 화면 전체에 테이블이 차지깐 없어보인다.
그래서 좌우 공백을 맞추어 주기 위해서 사용
-->
<div class = "container">

<table class ="table table-striped">
    <thead>
    <tr>
        <th>번호</th>
        <th>제목</th>
        <th>작성자</th>
        <th>날짜</th>
        <th>조회수</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>165</td>
        <td>이제 곧 Bootstrap 4가 나온다면서요?</td>
        <td>길라임</td>
        <td>2</td>
    </tr>

    <tr>
        <td>164</td>
        <td>Bootstrap 강좌 입니다.</td>
        <td>관리자</td>
        <td>2016.12.01</td>
        <td>10</td>
    </tr>

    <tr>
        <td>163</td>
        <td>2016년을 지나 2017년 새해로.</td>
        <td>뚱이</td>
        <td>2016.11.30</td>
        <td>4</td>
    </tr>



    </tbody>
</table>
<!--
페이지 네이션 넣지
하단에 위치한 일련의 숫자
숫자 누르면 다음 페이지 혹은 이전 페이지의 게시물을 읽을 수 있도록 도와줌

-->
<hr/>
<a class ="btn btn-default">글쓰기</a>
<div class ="text-center">
    <ul class ="pagination">
        <li><a href="#">1 </a></li>
        <li><a href="#">2 </a></li>
        <li><a href="#">3 </a></li>
        <li><a href="#">4 </a></li>
        <li><a href="#">5 </a></li>
    </ul>
</div>
</div>
<script src="../js/jquery-3.1.1.js"></script>
<script src="../js/bootstrap.js"></script>

</body>
</html>