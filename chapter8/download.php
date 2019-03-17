<?php

    //強制的に画像ファイルlogo.pngをダウンロードさせる！
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename = "logo.png');
    print file_get_contents('./logo.png');