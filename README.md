##트러블슈팅   
에러처리
문제점 : 이모티콘이 게시되지 않음
해결방법 
`ALTER TABLE '테이블명' CONVERT TO CHARACTER SET utf8mb4;`



utf8mb4는 MySQL에서 사용되는 문자 인코딩 방식입니다. 이 인코딩은 utf8의 확장된 버전으로, 전체 유니코드 문자 세트를 지원합니다. 주요 특징은 다음과 같습니다:

4-바이트 유니코드 지원: utf8mb4는 4바이트 길이의 유니코드 문자를 지원합니다. 이는 MySQL의 utf8 인코딩이 지원하지 않는 이모지, 특정 아시아 언어의 기호 등을 포함한 다양한 문자를 저장할 수 있다는 의미입니다.

전체 유니코드 범위 지원: 이 인코딩은 유니코드의 모든 문자를 지원하므로, 다국어 환경에서 데이터베이스를 운영할 때 유용합니다.

호환성: utf8mb4는 utf8과 호환됩니다. 기존에 utf8을 사용하던 시스템을 utf8mb4로 업그레이드 하는 것은 상대적으로 간단하며, 기존 데이터에 영향을 주지 않습니다.

MySQL 5.5.3 이상 필요: utf8mb4 인코딩은 MySQL 버전 5.5.3 이상에서 사용할 수 있습니다. 이전 버전의 MySQL에서는 사용할 수 없습니다.

utf8mb4로 데이터베이스나 테이블, 열을 설정하면 보다 다양한 문자 데이터를 저장하고 처리할 수 있어, 현대적인 웹 애플리케이션 개발에 적합합니다. 예를 들어, 다음과 같이 데이터베이스 또는 테이블을 생성할 때 utf8mb4 인코딩을 지정할 수 있습니다:

`CREATE DATABASE mydatabase CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE mytable (
  id INT PRIMARY KEY,
  text VARCHAR(255)
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
`

이렇게 설정하면 해당 데이터베이스나 테이블은 유니코드의 전 범위에 걸쳐 있는 문자를 저장할 수 있게 됩니다.


전국에 있는 고등학교 교복을 모아둔 교복소개 사이트 입니다.
<br>
직장인 커뮤니티, 대학생 커뮤니티 <br>
"왜 청소년을 위한 커뮤니티는 없을까?" 라는 생각에서 진행하게 된 프로젝트입니다!<br>
학교에서 얻을 수 없는 독특한 정보를 제공하고자,<br>
전국 고등학교의 교복을 소개하는 커뮤니티 사이트를 제작하였습니다.<br>
<br>
전국의 교복을 구경하며 투표를 할 수 있고,<br>
그에 대한 평가는 댓글로도 자유롭게 논할 수 있습니다.<br>
<br>
투표가 진행된 해당 학교의 교복은 인기순위로 매겨지고<br>
각 조회수, 좋아요, 싫어요 순으로 순위를 확인할 수 있습니다.<br>
<br>
또, "수다방" 커뮤니티에서 학생들만의 이야기로<br>
수다의 꽃을 피울 수 있습니다!<br>

  <a href="#"><img alt="Visual Studio Code" src="https://img.shields.io/badge/Visual Studio Code-007ACC?logo=Visual Studio Code&logoColor=white"></a>
  <a href="#"><img alt="JavaScript" src="https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=JavaScript&logoColor=white"></a>
  <a href="#"><img alt="HTML5" src="https://img.shields.io/badge/HTML5-E34F26?logo=HTML5&logoColor=white"></a>
  <a href="#"><img alt="CSS3" src="https://img.shields.io/badge/CSS3-1572B6?logo=CSS3&logoColor=white"></a>
  <a href="#"><img alt="PHP" src="https://img.shields.io/badge/PHP-777BB4?logo=PHP&logoColor=white"></a>
  <a href="#"><img alt="jQuery" src="https://img.shields.io/badge/jQuery-0769AD?logo=jQuery&logoColor=white"></a>
  <a href="#"><img alt="phpMyAdmin" src="https://img.shields.io/badge/phpMyAdmin-6C78AF?logo=phpMyAdmin&logoColor=white"></a>
  <a href="#"><img alt="Git" src="https://img.shields.io/badge/Git-F05032?logo=Git&logoColor=white"></a>


## Page-list
1. HEADER<br>
   - logo 제작<br>
   - nav - menu 구성 (교복소개, 인기순위, 수다방, 로그인, 회원가입)<br>
2. 메인페이지<br>
   - Main Visual : gsap를 이용한 애니메이션<br>
   - section01 : 이미지 슬라이드, 배경 고정 효과<br>
   - section02 : 마우스 Hover 효과, 링크 바로가기<br>
   - section03 : php를 이용하여 게시판 리스트 정보 가져오기<br>
   - section04 : css animation 효과, 유튜브 영상 탭메뉴 구현<br>
4. 교복소개<br>
   - json을 이용하여 전국 학교 정보 출력<br>
   - 지역별 필터 검색<br>
   - 키워드 검색<br>
   - 교복 목록 조회수, 댓글수 표시<br>
6. 교복소개 상세<br>
   - 교복 이미지 swiper를 이용한 슬라이드<br>
   - 좋아요, 싫어요 투표 기능 : 클릭 시, 배경 색상 변경 효과<br>
   - 댓글 : 댓글작성, 댓글 좋아요/좋아요 취소, 이모티콘 작성<br>
7. 인기순위<br>
   - 조회수, 좋아요, 싫어요 순으로 리스트 정렬<br>
   - 각 조회수, 좋아요, 싫어요 수 노출<br>
9. 수다방<br>
    - 게시판 목록 : NO, Title, Name, Date, View, Like<br>
    - 게시판 상세 : 게시글 좋아요 기능, 댓글 기능(댓글 작성, 랜덤 프로필, 댓글 좋아요 기능)<br>
11. 마이페이지<br>
    - 내정보 변경 : 이름, 주소, 연락처 변경하는 기능
    - 내가 쓴 글: 자신이 쓴글을 한번에 볼수 있는 기능
    - 내가 좋아하는 교복: 교복소개에서 좋아요 누른 학교를 한번에 볼수 있는 기능
    - 비밀번호 변경 : 현재 비밀번호를 변경하는 기능
    - 회원탈퇴하기 : 회원탈퇴 약관을 읽고 회원탈퇴 하는 기능
12. 로그인<br>
    - 아이디 찾기 : 잃어버린 아이디를 찾을수 있는 기능
    - 비밀번호 찾기 : 잃어버린 비밀번호를 찾을수 있는 기능
13. 회원가입<br>
    - 아이디 중복검사 : 중복된 아이디가 있는지 확인하는 기능
    - 이메일 중복검사 : 중복된 이메일이 있는지 확인하는 기능 
14. FOOTER<br>

<p align="center">
  <img src="https://github.com/jinhomun/Gogyobok-site/assets/144635699/775a10b2-d266-4b92-b297-4f7978b4538c">
</p>
