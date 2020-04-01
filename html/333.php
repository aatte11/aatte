<?php
$file_url = 'http://abc.com/test.zip';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_NOBODY, true);

curl_exec ($ch);

$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if($http_code == 200) {
    // 파일 다운로드
    $filename = 'test.zip';
    header("Content-Disposition: attachment; filename=$filename");
    header("Content-type: application/octet-stream");
    header("Content-Transfer-Encoding: binary");

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_URL, $url);

    $file = curl_exec ($ch);
    curl_close($ch);
} else {
    die('파일이 존재하지 않습니다.');
}
?>