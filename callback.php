<?php
// api/thesieutoc.php

$method = $_POST['method'];
if ($method === 'bank') {
  // Gửi yêu cầu chuyển khoản
  echo json_encode(['message' => 'Cảm ơn bạn đã ủng hộ qua ngân hàng!']);
} elseif ($method === 'card') {
  $data = [
    'APIKey' => 'YOUR_API_KEY',
    'network' => $_POST['card_type'],
    'code' => $_POST['card_pin'],
    'serial' => $_POST['card_serial'],
    'amount' => 10000
  ];

  // Gửi đến API
  $curl = curl_init("https://thesieutoc.net/card-auto");
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $res = curl_exec($curl);
  curl_close($curl);

  echo $res;
}
