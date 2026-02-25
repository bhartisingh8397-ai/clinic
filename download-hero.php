<?php
$url = 'https://images.pexels.com/photos/3985163/pexels-photo-3985163.jpeg?auto=compress&cs=tinysrgb&w=1920';
$dest = __DIR__ . '/assets/images/hero-bg.jpg';
$data = file_get_contents($url);
if ($data !== false) {
    file_put_contents($dest, $data);
    echo "Downloaded successfully! Size: " . strlen($data) . " bytes";
} else {
    echo "Download failed.";
}
