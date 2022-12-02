<?php

echo "こんばんは！みおん!!";

$num = rand(0, 1);
if ($num == 0) {
echo "今日の運勢は大吉です。";
} else {
echo "今日の運勢は吉です。";
}

try {
    // エラーが出るかもしれない処理
    $link = mysqli_connect('test-sql-php.database.windows.net', 'testuser', 'Yume$2020', 'test-sql-php-database');
} catch (Exception $e) {
    echo "エラー".$e->getMessage();
}

?>