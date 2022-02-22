<?php

// 에러 표시
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 세션 시작
session_start();

use src\DB;

define("__ROOT__", dirname(__DIR__));

define("__nihImg__", dirname( __ROOT__ ) . '\\nihcImage\\' );
define("__nihList__", __ROOT__ . '/src/nihList.xml' );


require('../lib.php');
// require('../src/DB.php');
require('../src/Route.php');


// $imgF = opendir( __nihImg__ );
// closedir($imgF);


$result = DB::fetchAll("SELECT * FROM cullist");

// db에 기본 데이터가 없을때 실행
if(!$result) {
    $nihF = simplexml_load_file( __nihList__ ); // nihList.xml 파일 로드

    for($i = 0; $i < $nihF->totalCnt; $i++){    // 안에 들어있는 데이터 갯수 만큼 for문 반복
        $item = $nihF->item[$i];                // 해당 정보값들 $item 변수에 집어넣기
        extract(get_object_vars($item));        // $item 변수 key-value 배열로 변환 후 변수로 만듬 

        $detail = simplexml_load_file( __ROOT__  . "/src/detail/{$ccbaKdcd}_{$ccbaCtcd}_{$ccbaAsno}.xml" ); // 각 문화재의 맞는 디테일 정보를 가지고 있는 파일로드

        $data = array_merge(get_object_vars($item), get_object_vars($detail->item));    // nihList.xml 파일에서 만든 변수들과 detail.xml파일에서 만든 변수들을 $data라는 변수에 key-value 배열로 저장
        
        DB::execute("INSERT INTO `cullist` VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", array_values($data));   // db에 집어넣기   
    }
}


require('../web.php');