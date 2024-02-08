<?php

// SESSIONスタート
// ★この１行は必須★
// この１行で、新しいセッションを開始しセッションIDが割り当てられて、ファイルが作成される。
session_start();

$name = 'jone';
$age = 30;

$_SESSION['name'] = $name;
$_SESSION['age'] = $age;

// 適当な箇所に以下追加、SESSIONのidを取得
$sid = session_id();
echo $sid;