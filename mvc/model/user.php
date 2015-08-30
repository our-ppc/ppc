<?php
class UserModel {
  public static function insert($email, $fullname, $hashedPassword, $time, $time){
    $db = Db::getInstance();
    $db->insert("INSERT INTO x_user
      (  email,  fullname,    password, registerTime, lastVisitTime) VALUES
      ('$email', '$fullname', '$hashedPassword',  '$time',     '$time')"
    );
  }

  public static function fetch_by_email($email){
    $db = Db::getInstance();
    $record = $db->first("SELECT * FROM x_user WHERE email='$email'");
    return $record;
  }
}