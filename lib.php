<?php

// autoload
spl_autoload_register(function ($f) {
  $f = str_replace("\\", "/", $f);

  require_once("../{$f}.php");
});

// echo 대신 사용함
function e($t) {
  echo "<pre>$t</pre>";
}

// session get 함수
function ss() {
  return isset($_SESSION['user']) ? $_SESSION['user'] : false;
}

// script 함수
function script($s) {
  echo "<script>$s</script>";
}

// alert 함수
function alert($t = "") {
  !empty($t) && script("alert('$t');");
}

// 페이지 이동 + alert 함수
function move($tg, $t = '') {
  alert($t);
  script("location.replace('$tg')");
  exit;
}

// 페이지 뒤로가기 + alert 함수
function back($t = '') {
  alert($t);
  script("history.back()");
  exit;
}

// 로그인 여부 체크 안했으면 /login으로 이동함 이 부분은 과제에 따라 달라짐
function authCheck() {
  if (!ss()) {
    move('/login', '로그인 후 이용해 주세요.');
  }
}

// view 함수 $d는 view php file에서 사용할 값들
function view($l,$d = []){
	extract($d);

	require "src/View/header.php";
	require "src/View/$l.php";
	require "src/View/footer.php";
}