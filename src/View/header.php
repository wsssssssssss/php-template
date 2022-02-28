<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {margin: 0;padding: 0;box-sizing:border-box;}
    html, body, .app {
      min-height: 100vh;
    }
    li { list-style: none; }
    .app {
      display: flex;
      flex-direction: column;
    }
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 60px;
      padding: 0 60px;
      border-bottom: 1px solid #ddd;
    }
    header > div {
      display: flex;
      gap: 30px;
    }
    header ul {
      display: flex;
      gap: 30px;
    }
    footer {
      height: 60px;
      border-top: 1px solid #ddd;
    }
    main {
      flex: 1;
    }
  </style>
</head>
<body>
  <div class="app">
    <header>
      Header
      <div>
      <?php if (ss()) { echo ss()->email; } ?>
      <ul>
        <li><a href="/">Main</a></li>
        <?php if (ss()): ?>
          <li><a href="/test/1234">Test</a></li>
          <li><a href="/logout">Logout</a></li>
        <?php else: ?>
          <li><a href="/login">Login</a></li>
          <li><a href="/register">Register</a></li>
        <?php endif ?>
      </ul>
      </div>
    </header>