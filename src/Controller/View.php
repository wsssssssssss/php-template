<?php
namespace src\Controller;

class View {
  function index() {
    view('index');
  }
  function login() {
    view('auth/login');
  }
  function register() {
    view('auth/register');
  }
  // Route에서 넘겨준 $r의 값을 받아옴
  function test($arg) {
    // login 여부를 체크함
    authCheck();

    [$path, $idx] = $arg;
    
    // $idx 값 view로 넘기기
    view('test', ["idx" => $idx]);
  }
}