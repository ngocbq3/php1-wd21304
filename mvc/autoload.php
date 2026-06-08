<?php

spl_autoload_register(function ($className) {
    //Khai báo thư mục có các file cần autoload
    $directories = [
        'Models/',
        'Controllers/'
    ];

    foreach ($directories as $dir) {
        //Lấy đường dẫn của file ở trong thư mục
        $file = __DIR__ . '/' . $dir . $className . '.php';
        //Kiểm tra file
        if (file_exists($file)) {
            //Nếu file đó tồn tài thì mới require
            require_once $file;
            return;
        }
    }
    die("Không tồn tại file có tên: " . $className . ' đường dẫn không tồn tại ' . $file);
});
