<?php

// By Mahdi Sharifi

$target = '../Your-Project-Name/storage/app/public';
$shortcut = 'storage';
symlink($target, $shortcut);

// put this file in your public_html directory then run www.youtSite.com/symlink.php

// if you get error try it with Cron Job
// ln -s /home/afkmuxpo/YOUR_APP_DIRECTORY/storage/app/public /home/afkmuxpo/YOUR_PUBLIC_DRIECTORY/storage
