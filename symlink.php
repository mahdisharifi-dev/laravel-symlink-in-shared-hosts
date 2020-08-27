<?php

// By Mahdi Sharifi

$target = '../Your-Project-Name/storage/app/public';
$shortcut = 'storage';
symlink($target, $shortcut);

// put this file in your public_html directory then run www.youtSite.com/symlink.php
