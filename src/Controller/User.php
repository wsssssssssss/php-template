<?php
namespace src\Controller;

class User {
  function register() {
    [$email, $pw] = post('email', 'pw');

    if (!trim($email) || !trim($pw)) {
      back('모든 필드를 입력해주세요.');
    }

    $data = query("INSERT INTO user SET email=?, pw=?", [$email, hash('sha256', $pw)]);
    
    if ($data) {
      move("/login", "회원가입 성공");
    }

    back('중복되는 email 입니다.');
  }
  function login() {
    [$email, $pw] = post('email', 'pw');

    $data = fetch("SELECT * FROM user WHERE email=? AND pw=?", [$email, hash('sha256', $pw)]);

    if (!$data) {
      move("/login", "안돼요");
    }

    $_SESSION['user'] = $data;

		move("/", "로그인 성공");
  }
  function logout() {
    unset($_SESSION['user']);
		move("/", "로그아웃되었습니다.");
  }
}