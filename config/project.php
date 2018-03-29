<?php

return [
    /*
    |--------------------------------------------------------------------------
    | 캐싱 설정
    |--------------------------------------------------------------------------
    |
    */
//    'cache' => true,
    'cache' => false,

//    // 다음처럼 해도 좋다.
//    ! env('APP_DEBUG', false),
//    app()->environment('production'),

    'etag' => true,

    /*
    |--------------------------------------------------------------------------
    | 프로젝트 기본 정보
    |--------------------------------------------------------------------------
    */
    'url' => env('APP_URL', 'http://192.168.0.22'),

    'api_domain' => env('API_DOMAIN', 'api.myapp.dev'),

    'app_domain' => env('APP_DOMAIN', 'myapp.dev'),

    'description' => '',

    /*
    |--------------------------------------------------------------------------
    | Tag 목록
    |--------------------------------------------------------------------------
    */
    'tags' => [
        'ko' => [
            'laravel' => '라라벨',
            'lumen' => '루멘',
        ],
        'en' => [
            'laravel' => 'Laravel',
            'lumen' => 'Lumen',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | 업로드할 수 있는 파일 확장자
    |--------------------------------------------------------------------------
    */
    'mimes' => [
        'png',
        'jpg',
        'zip',
        'tar',
    ],

    /*
    |--------------------------------------------------------------------------
    | 정렬 필드
    |--------------------------------------------------------------------------
    */
    'sorting' => [
        'view_count' => '조회수',
        'created_at' => '작성일',
    ],

    /*
    |--------------------------------------------------------------------------
    | 지원하는 언어 목록
    |--------------------------------------------------------------------------
    */
    'locales' => [
        'ko' => '한국어',
        'en' => 'English',
    ],
];