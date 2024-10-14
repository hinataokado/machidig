<?php
// POSTデータを取得
$data = $_POST;

// レスポンスを作成
$response = array('message' => 'Data received!', 'data' => $data);

// レスポンスヘッダーを設定
header('Content-Type: application/json');

// JSON形式でレスポンスを出力
echo json_encode($response);
?>
