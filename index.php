<?php
/*
// エラー時に例外をスローするように登録
set_error_handler(function($errno, $errstr, $errfile, $errline) {
    if (!(error_reporting() & $errno)) {
        return;
    }
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
});
*/

echo "こんばんは！";

$num = rand(0, 1);
if ($num == 0) {
echo "今日の運勢は大吉です。";
} else {
echo "今日の運勢は吉です。";
}

/*

try {
    // エラーが出るかもしれない処理
    $link = mysqli_connect('test-sql-php.database.windows.net', 'testuser', 'Yume$2020', 'test-sql-php-database');
} catch (Exception $e) {
    echo "エラー".$e->getMessage();
}
*/
?>