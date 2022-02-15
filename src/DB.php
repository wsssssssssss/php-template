<?php

namespace src;

class DB {
  static $db;

  static function get(){
    if(!self::$db){
      $option = [\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ, \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION];

      self::$db = new \PDO("mysql:host=localhost;dbname=dbname;charset=utf8mb4", "root", "", $option);
    }
    return self::$db;
  }

  static function query($sql, $data = []){
    $q = self::get()->prepare($sql);

    try {
      $d = $q->execute($data);

      return $d;
    } catch {
      return false;
    }
  }

  static function fetch($sql, $data = []){
    $q = self::query($sql, $data);

    return $q->fetch();
  }

  static function fetchAll($sql, $data = []){
    $q = self::query($sql, $data);

    return $q->fetchAll();
  }

  static function find($table, $id){
    return self::fetch("SELECT * FROM `$table` WHERE id = ?", [$id]);
  }

  static function lastInsertId(){
    return self::get()->lastInsertId();
  }
}