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
