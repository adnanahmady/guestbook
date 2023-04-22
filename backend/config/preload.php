<?php

$preloader = '/var/cache/prod/App_KernelProdContainer.preload.php';

if (file_exists(dirname(__DIR__) . $preloader)) {
    require dirname(__DIR__) . $preloader;
}
