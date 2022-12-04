<?php

$serverName = "https://smplephp.azurewebsites.net"; // update me
    $connectionOptions = array(
        "Database" => "test-sql-php.database.windows.net", // update me
        "Uid" => "testuser", // update me
        "PWD" => "Yume$2020" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT TOP 20 pc.Name as CategoryName, p.name as ProductName
         FROM [SalesLT].[ProductCategory] pc
         JOIN [SalesLT].[Product] p
         ON pc.productcategoryid = p.productcategoryid";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);

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