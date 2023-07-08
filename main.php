<?php
$inputFile = 'proxies.txt'; //your proxy file
$outputFile = 'fixed.txt'; //output file

$inputText = file_get_contents($inputFile);


$pattern = '/\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}:\d+/';
preg_match_all($pattern, $inputText, $matches);

if (!empty($matches[0])) {
    $proxies = $matches[0];
    $proxiesText = implode("\n", $proxies);
    file_put_contents($outputFile, $proxiesText);
    echo "Proxies berhasil disimpan dalam $outputFile.\n";
} else {
    echo "Tidak ada proxy yang ditemukan dalam teks.\n";
}
?>
