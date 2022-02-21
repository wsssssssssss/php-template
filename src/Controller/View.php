<?php

namespace src\Controller;
use src\DB;

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

  function album() {
    $page = isset($_GET['page']) ? $_GET['page'] : 0;
    $start = $page * 8;

    $count = DB::fetchAll("SELECT COUNT(*) as 'count' FROM cullist");
    $result = DB::fetchAll("SELECT * FROM cullist order by sn desc LIMIT {$start}, 8");

    view('auth/album', ['list' => $result, 'page' => $page, 'count' => $count[0]->count]);
  }

  function list() {
    $page = isset($_GET['page']) ? $_GET['page'] : 0;
    $start = $page * 10;
  
    $count = DB::fetchAll("SELECT COUNT(*) as 'count' FROM cullist");
    $result = DB::fetchAll("SELECT * FROM cullist order by sn desc LIMIT {$start}, 10");
  
    view('auth/list', ['list' => $result, 'page' => $page, 'count' => $count[0]->count]);  
  }

  function insertcul() {
    view('auth/insertcul');  
  }

  function culdelete() {
    $sn = $_GET['sn'];

    DB::execute("DELETE FROM cullist WHERE sn = ?", [$sn]);

    move('/album', '문화재가 삭제되었습니다.');
  }

  function insertculPro() {
    $no = $_POST['no'];
    $ccmaName = $_POST['ccmaName'];
    $crltsnoNm = $_POST['crltsnoNm'];
    $ccbaMnm1 = $_POST['ccbaMnm1'];
    $ccbaMnm2 = $_POST['ccbaMnm2'];
    $ccbaCtcdNm = $_POST['ccbaCtcdNm'];
    $ccsiName = $_POST['ccsiName'];
    $ccbaAdmin = $_POST['ccbaAdmin'];
    $ccbaKdcd = $_POST['ccbaKdcd'];
    $ccbaCtcd = $_POST['ccbaCtcd'];
    $ccbaAsno = $_POST['ccbaAsno'];
    $ccbaCncl = $_POST['ccbaCncl'];
    $ccbaCpno = $_POST['ccbaCpno'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $gcodeName = $_POST['gcodeName'];
    $bcodeName = $_POST['bcodeName'];
    $mcodeName = $_POST['mcodeName'];
    $scodeName = $_POST['scodeName'];
    $ccbaQuan = $_POST['ccbaQuan'];
    $ccbaAsdt = $_POST['ccbaAsdt'];
    $ccbaLcad = $_POST['ccbaLcad'];
    $ccceName = $_POST['ccceName'];
    $ccbaPoss = $_POST['ccbaPoss'];
    $ccbaCndt = $_POST['ccbaCndt'];
    $imageUrl = $_POST['imageUrl'];
    $content = $_POST['content'];

    if($no == "" || $ccmaName == "" || $crltsnoNm == "" || $ccbaMnm1 == "" || $ccbaKdcd == "" || $ccbaCtcd == "" || $ccbaAsno == ""){
      alert('필수정보를 입력해주세요');
      script('history.back();');
    }

    $sn = DB::fetch("SELECT sn FROM cullist ORDER BY sn DESC");

    $result = DB::execute("INSERT INTO `cullist` VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", 
    [$sn->sn+1, $no, $ccmaName, $crltsnoNm, $ccbaMnm1, $ccbaMnm2, $ccbaCtcdNm, $ccsiName, $ccbaAdmin, $ccbaKdcd, $ccbaCtcd, $ccbaAsno, $ccbaCncl, $ccbaCpno, $longitude, $latitude, $gcodeName, $bcodeName, $mcodeName, $scodeName, $ccbaQuan, $ccbaAsdt, $ccbaLcad, $ccceName, $ccbaPoss, $ccbaCndt, $imageUrl, $content]);

    if($result) {
      move('/album', '문화재가 등록되었습니다.');
    }
  }

  function culdetail() {
    $sn = $_GET['sn'];
    $result = DB::fetch("SELECT * FROM cullist WHERE sn = ?", [$sn]);
  
    view('auth/culdetail', ['item' => $result]);  
  }

  function culupdate() {
    $sn = $_POST['sn'];
    $no = $_POST['no'];
    $ccmaName = $_POST['ccmaName'];
    $crltsnoNm = $_POST['crltsnoNm'];
    $ccbaMnm1 = $_POST['ccbaMnm1'];
    $ccbaMnm2 = $_POST['ccbaMnm2'];
    $ccbaCtcdNm = $_POST['ccbaCtcdNm'];
    $ccsiName = $_POST['ccsiName'];
    $ccbaAdmin = $_POST['ccbaAdmin'];
    $ccbaKdcd = $_POST['ccbaKdcd'];
    $ccbaCtcd = $_POST['ccbaCtcd'];
    $ccbaAsno = $_POST['ccbaAsno'];
    $ccbaCncl = $_POST['ccbaCncl'];
    $ccbaCpno = $_POST['ccbaCpno'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $gcodeName = $_POST['gcodeName'];
    $bcodeName = $_POST['bcodeName'];
    $mcodeName = $_POST['mcodeName'];
    $scodeName = $_POST['scodeName'];
    $ccbaQuan = $_POST['ccbaQuan'];
    $ccbaAsdt = $_POST['ccbaAsdt'];
    $ccbaLcad = $_POST['ccbaLcad'];
    $ccceName = $_POST['ccceName'];
    $ccbaPoss = $_POST['ccbaPoss'];
    $ccbaCndt = $_POST['ccbaCndt'];
    $imageUrl = $_POST['imageUrl'];
    $content = $_POST['content'];

    if($no == "" || $ccmaName == "" || $crltsnoNm == "" || $ccbaMnm1 == "" || $ccbaKdcd == "" || $ccbaCtcd == "" || $ccbaAsno == ""){
      alert('필수정보를 입력해주세요');
      script('history.back();');
    }

    DB::fetch("UPDATE cullist SET
    no = ?, ccmaName = ?, crltsnoNm = ?, ccbaMnm1 = ?, ccbaMnm2 = ?, ccbaCtcdNm = ?, ccsiName = ?, ccbaAdmin = ?, ccbaKdcd = ?, ccbaCtcd = ?, ccbaAsno = ?, ccbaCncl = ?, ccbaCpno = ?, longitude = ?, latitude = ?, gcodeName = ?, bcodeName = ?, mcodeName = ?, scodeName = ?, ccbaQuan = ?, ccbaAsdt = ?, ccbaLcad = ?, ccceName = ?, ccbaPoss = ?, ccbaCndt = ?, imageUrl = ?, content = ?
    WHERE sn = ?", [$no, $ccmaName, $crltsnoNm, $ccbaMnm1, $ccbaMnm2, $ccbaCtcdNm, $ccsiName, $ccbaAdmin, $ccbaKdcd, $ccbaCtcd, $ccbaAsno, $ccbaCncl, $ccbaCpno, $longitude, $latitude, $gcodeName, $bcodeName, $mcodeName, $scodeName, $ccbaQuan, $ccbaAsdt, $ccbaLcad, $ccceName, $ccbaPoss, $ccbaCndt, $imageUrl, $content, $sn]);

    move('/album', '문화재 정보가 수정되었습니다.');
  }

  function calendar() {
    $year = isset($_GET['year']) ? $_GET['year'] : date('Y');
    $month = isset($_GET['month']) ? $_GET['month'] : date('m');

    $date = "{$year}-{$month}-01";
    $time = strtotime($date);
    $start_week = date('w', $time);
    $total_day = date('t', $time);
    $total_week = ceil(($total_day + $start_week) / 7);

    
    $result = DB::fetchAll('SELECT * FROM showlist');

    view('/auth/calendar', 
    ['showlist' => $result, 'year' => $year, 'month' => $month, 'start_week' => $start_week, 'total_day' => $total_day, 'total_week' => $total_week]);
  }

  function year() {
    view('/auth/year');
  }

  function insertsch() {
    view('/auth/insertsch');
  }

  function showdelete() {
    $showUid = $_GET['showUid'];

    DB::execute("DELETE FROM showList WHERE showUid = ?", [$showUid]);

    move('/calendar', '공연 일정이 삭제되었습니다.');
  }

  function showdetail() {
    $showUid = $_GET['showUid'];

    $result = DB::fetch("SELECT * FROM showlist WHERE showUid = ?", [$showUid]);

    echo "<pre>";
    var_dump($result);
    echo "</pre>";

    view('/auth/showdetail', ['showlist' => $result]);
  }

  function showupdate() {
    $showUid = $_POST['showUid'];
    $showName = $_POST['showName'];
    $showDate = $_POST['showDate'];
    $showTime = $_POST['showTime'];
    $organizer = $_POST['organizer'];
    $place = $_POST['place'];
    $cast = $_POST['cast'];
    $rm = $_POST['rm'];

    DB::execute("UPDATE showlist SET 
    showName = ?,
    showDate = ?,
    showTime = ?,
    organizer = ?,
    place = ?,
    cast = ?,
    rm = ?
    WHERE showUid = ?", 
    [$showName, $showDate, $showTime, $organizer, $place, $cast, $rm, $showUid]);

    move('/calendar', '공연 일정이 수정되었습니다');
  }

  function insertschPro() {
    $showName = $_POST['showName'];
    $showDate = $_POST['showDate'];
    $showTime = $_POST['showTime'];
    $organizer = $_POST['organizer'];
    $place = $_POST['place'];
    $cast = $_POST['cast'];
    $rm = $_POST['rm'];
    
    if($showName == "" || $showDate == "" || $showTime == "") {
      alert('필수 값을 입력하세요');
      script('history.back();');
    }

    $show = DB::fetchAll("SELECT * FROM showlist");
    $showUid = $show ? DB::fetch("SELECT showUid FROM showlist order by showUid desc") : 0;
    

    $result = DB::execute("INSERT INTO `showlist`(`showUid`, `showName`, `showDate`, `showTime`, `organizer`, `place`, `cast`, `rm`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)", 
    [$showUid->showUid+1, $showName, $showDate, $showTime, $organizer, $place, $cast, $rm]);

    
    move('/calendar', '공연일정이 등록되었습니다.');
  }
}