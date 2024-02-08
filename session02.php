<?php

// SESSIONスタート
// ★この１行は必須★
// この１行で、新しいセッションを開始しセッションIDが割り当てられて、ファイルが作成される。
session_start();

// SESSION変数を取得
$name = $_SESSION['name'];
$age = $_SESSION['age'];

echo $name;
echo '<br>';
echo $age;
?>