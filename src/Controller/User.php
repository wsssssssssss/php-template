<?php
namespace src\Controller;

class User {
  function register() {
    move("/login", "회원가입 성공");
  }
  function login() {
    $_SESSION['user'] = ["id" => 1, "name" => 'test'];

		move("/", "로그인 성공");
  }
  function logout() {
    unset($_SESSION['user']);
		move("/", "로그아웃되었습니다.");
  }
}