# RCS
이 소스코드는 다음 버전을 기준으로 한다.

# 컴포넌트 버전
프레임워크(laravel/laravel)	5.5.0
핵심 컴포넌트(laravel/framework)	5.5.39

# php.ini 설정
extension=php_curl.dll


# 아래 API 설치
composer require mashape/unirest-php
composer require mongodb/mongodb

# 라라벨에 따른 jenssegers/mongodb 설치버전
# Laravel version Compatibility
# Laravel	Package
# 4.2.x	2.0.x
# 5.0.x	2.1.x
# 5.1.x	2.2.x or 3.0.x
# 5.2.x	2.3.x or 3.0.x
# 5.3.x	3.1.x or 3.2.x
# 5.4.x	3.2.x
# 5.5.x	3.3.x
# 5.6.x	3.4.x
composer require jenssegers/mongodb 3.3

composer require barryvdh/laravel-cors ^0.11.0