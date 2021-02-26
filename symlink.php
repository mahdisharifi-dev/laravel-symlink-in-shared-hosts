<?php

// By Mahdi Sharifi

$target = '../Your-Project-Name/storage/app/public';
$shortcut = 'storage';
symlink($target, $shortcut);

// put this file in your public_html directory then run www.youtSite.com/symlink.php

// if you get error try it with Cron Job
// ln -s /home/YOUR_HOST_NAME/YOUR_APP_DIRECTORY/storage/app/public /home/YOUR_HOST_NAME/YOUR_PUBLIC_DRIECTORY/storage
