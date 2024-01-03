# Team-Project-blogSite
![shcoolmain](https://github.com/YunJiSung/SUsite/assets/144635669/7a39ec5e-1578-44e7-90f6-68b184c43147)

## Go!교복
팀플 블로그 사이트 만들기<br>
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
수다의 꽃을 피울 수 있습니다!

## Use Stack
  <a href="#"><img alt="Visual Studio Code" src="https://img.shields.io/badge/Visual Studio Code-007ACC?logo=Visual Studio Code&logoColor=white"></a>
  <a href="#"><img alt="JavaScript" src="https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=JavaScript&logoColor=white"></a>
  <a href="#"><img alt="HTML5" src="https://img.shields.io/badge/HTML5-E34F26?logo=HTML5&logoColor=white"></a>
  <a href="#"><img alt="CSS3" src="https://img.shields.io/badge/CSS3-1572B6?logo=CSS3&logoColor=white"></a>
  <a href="#"><img alt="PHP" src="https://img.shields.io/badge/PHP-777BB4?logo=PHP&logoColor=white"></a>
  <a href="#"><img alt="jQuery" src="https://img.shields.io/badge/jQuery-0769AD?logo=jQuery&logoColor=white"></a>
  <a href="#"><img alt="phpMyAdmin" src="https://img.shields.io/badge/phpMyAdmin-6C78AF?logo=phpMyAdmin&logoColor=white"></a>
  <a href="#"><img alt="Git" src="https://img.shields.io/badge/Git-F05032?logo=Git&logoColor=white"></a>

## Design Map
![image](https://github.com/uUZINN/gogyobok-blogSite/assets/89904583/82b08972-3e58-4daf-9fe0-141f9c6e8b88)
1. 사이트 명(Logo) 선정 : Go!교복
   - 해석1. Go를 그대로 해석하여 "교복을 보러가다"
   - 해석2. Go를 한글 '고'로 소리나는대로 읽어 "고교복" (고등학교 교복)
2. 페이지 구성
   - HOME (메인페이지)
   - SUB (교복소개, 인기순위, 수다방, LOGIN/JOIN)
3. 페이지별 기능 구성
   - 기본 기능 : 게시판 글쓰기, 리스트, 수정, 삭제, 회원가입, 로그인, 게시글 댓글
   - 새로 추가한 기능 : 게시글 좋아요, 게시글 싫어요, 댓글 좋아요, 교복 좋아요, 교복 싫어요, 교복 댓글


## Figma 
![image](https://github.com/uUZINN/gogyobok-blogSite/assets/89904583/4f7d1c60-7c9a-4245-91b1-812b52988969)

<br>
1. HEADER<br>
   - 메인 컬러 : #1976DE, 서브 컬러 : black, white, #D2E7FF<br>
   - 로고 : 롯데리아 촵땡겨체(LotteriaChab)<br>
   - 메뉴 : 롯데리아 딱붙어체(LotteriaDdag)<br>

2. MAIN<br>
   - Main Visual<br>
     1) 애니메이션 교실 배경 이미지<br>
     2) 메인 문구 폰트 : Londrina Solid 구글 폰트<br>
     3) 서브 폰트 : 샌드박스 어그로체<br>
   - Main Section<br>
     1) 메인 폰트 : 샌드박스 어그로체<br>
     2) 서브 폰트 : 롯데리아 딱붙어체(LotteriaDdag)<br>
        
3. SUB<br>
   - 상단 배너 이미지 : 애니메니션 학교 배경, 실사 교복 착용 화보 이미지<br>
     1) 전체 폰트 : 샌드박스 어그로체<br>
     2) 교복 상세페이지 : 인스타그램 레이아웃 참고<br>
        
4. FOOTER<br>
   - Black 색상 배경<br>
   - 전체 폰트 : 샌드박스 어그로체<br>

## Page-list
1. HEADER<br>
   - logo 제작<br>
   - nav - menu 구성 (교복소개, 인기순위, 수다방, 로그인, 회원가입)<br>
2. . 메인페이지<br>
   - Main Visual : gsap를 이용한 애니메이션<br>
   - section01 : 이미지 슬라이드, 배경 고정 효과<br>
   - section02 : 마우스 Hover 효과, 링크 바로가기<br>
   - section03 : php를 이용하여 게시판 리스트 정보 가져오기<br>
   - section04 : css animation 효과, 유튜브 영상 탭메뉴 구현<br>
3. 교복소개<br>
   - json을 이용하여 전국 학교 정보 출력<br>
   - 지역별 필터 검색<br>
   - 키워드 검색<br>
   - 교복 목록 조회수, 댓글수 표시<br>
4. 교복소개 상세<br>
   - 교복 이미지 swiper를 이용한 슬라이드<br>
   - 좋아요, 싫어요 투표 기능 : 클릭 시, 배경 색상 변경 효과<br>
   - 댓글 : 댓글작성, 댓글 좋아요/좋아요 취소, 이모티콘 작성<br>
5. 인기순위<br>
   - 조회수, 좋아요, 싫어요 순으로 리스트 정렬<br>
   - 각 조회수, 좋아요, 싫어요 수 노출<br>
6. 수다방<br>
    - 게시판 목록 : NO, Title, Name, Date, View, Like<br>
    - 게시판 상세 : 게시글 좋아요 기능, 댓글 기능(댓글 작성, 랜덤 프로필, 댓글 좋아요 기능)<br>
7. 마이페이지<br>
    - 내 정보 변경 : 회원가입 정보 불러오기/정보 수정 기능<br>
    - 내가 쓴 글 : 각 회원별 게시판 작성글 불러오기<br>
    - 내가 좋아한 교복 : 교복소개 페이지에서 좋아요 누른 교복 정보 불러오기<br>
    - 비밀번호 변경 : 비밀번호 변경 기능<br>
    - 회원 탈퇴하기 : 회원 정보 삭제<br>
8. 로그인<br>
    - 아이디, 비밀번호 입력 시 일치하는 정보  가져오기<br>
    - 아이디 찾기 : 연락처, 이름 일치 정보<br>
    - 비밀번호 찾기 기능 : 아이디, 연락처 일치 정보<br>
9. 회원가입<br>
    - 아이디 : 중복 검사 기능<br>
    - 이름<br>
    - 이메일 : 중복 검사 기능<br>
    - 비밀번호, 비밀번호 확인<br>
    - 주소 : 주소 검색 기능<br>
    - 연락처<br>
    - 약관 동의<br>
    - 가입 완료 시, 회원 정보 저장<br>
10. FOOTER<br>
    - Copyright 2023 Gogyobok

## CODE VIEW - JSON파일과 MYSQL정보 가져오기
```
<?php
include "../connect/connect.php";
include "../connect/session.php";

// SQL 쿼리 생성
$sql = "SELECT introId, introComment, introView FROM Intro";

// MySQL에서 데이터 가져오기
$result = mysqli_query($connect, $sql);

// introId 및 introComment 값을 저장할 배열 생성
$introData = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $introData[] = [
            'introId' => $row['introId'],
            'introComment' => $row['introComment'],
            'introView' => $row['introView']
        ];

    }
} else {
    echo "데이터를 가져오는 중에 오류가 발생했습니다.";
}

// PHP 배열을 JavaScript 배열로 출력
echo '<script>let introData = ' . json_encode($introData) . ';</script>';
?>
```

```
 // 정보 가져오기
const fetchgGobok = (selectedRegion = '') => {
    fetch("../blog_phpJSON/gobok.json")
        .then(res => res.json())
        .then(items => {
            gobokInfo = items.map((item, index) => {
                return {
                    infoRegion: item.region,
                    infoName: item.school,
                    infoUniformtypes: item.uniform_types,
                    infoUniformimg: item.uniform_img
                };
            });
            if (selectedRegion && selectedRegion !== '지역별') {
                // 선택된 지역에 해당하는 교복 정보만 필터링
                gobokInfo = gobokInfo.filter(gobok => gobok.infoRegion === selectedRegion);
            }
            updateGobok(gobokInfo); // 필터링된 정보로 교복 정보 업데이트
            
        });
}
```

## 느낀점

1.사용자 경험과 인터페이스:

  사용자 인터페이스(UI) 및 사용자 경험(UX)의 중요성을 깊이 이해했습니다. 사용자가 사이트를 쉽고 편리하게 탐색할 수 있도록 설계하는 것이 중요하다는 것을 깨달았습니다.
  사이트의 흐름과 레이아웃을 더 직관적으로 만들 필요성을 느꼈습니다. 사용자의 관점에서 사이트를 바라보며, 필요한 정보에 쉽게 접근할 수 있도록 개선해야 합니다.

2.기술적 도전과 성장:

  새로운 기술과 언어에 대한 학습의 중요성을 인식했습니다. 특히, 웹 개발에 있어서의 최신 트렌드와 기술을 익히는 것이 중요함을 깨달았습니다.
  프로젝트 중 발생한 기술적 문제들을 해결하면서, 문제 해결 능력과 코딩 역량이 향상되었습니다.

3.팀워크와 의사소통:

  프로젝트를 통해 팀워크의 중요성을 다시 한번 확인했습니다. 각자의 강점을 활용하고 약점을 보완하며 협력하는 과정에서 팀의 효율성과 생산성이 향상되었습니다.
  명확하고 효과적인 의사소통이 프로젝트의 성공에 결정적인 역할을 한다는 것을 경험했습니다. 팀 내에서 생각과 아이디어를 자유롭게 공유하며 서로를 이해하는 것이 중요합니다.

4.리소스 관리와 계획성:

  리소스의 한계와 중요성을 인식하게 되었습니다. 특히, 시간과 자료의 관리가 프로젝트의 진행에 큰 영향을 미친다는 것을 배웠습니다.
  보다 체계적이고 실현 가능한 계획을 세우는 것의 중요성을 깨달았습니다. 프로젝트의 목표와 일정을 명확히 설정하고, 이를 효율적으로 관리하는 것이 성공적인 프로젝트 수행을 위해 필수적임을 느꼈습니다.


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
