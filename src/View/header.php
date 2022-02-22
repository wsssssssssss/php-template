<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <div class="app">
    <header>
      Header
      <a href="/">Main</a>
      <?php if (ss()): ?>
        <a href="/test/1234">Test</a>
        <a href="/album">무형문화재 현황</a>
        <a href="/calendar">월간공연일정</a>
        <a href="/year">연간공연일정</a>
        <a href="/logout">Logout</a>
      <?php else: ?>
        <a href="/login">Login</a>
        <a href="/register">Register</a>
      <?php endif ?>
    </header>