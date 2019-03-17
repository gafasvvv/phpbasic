<?php
    //アップロードファイルの取得
    $ext = pathinfo($_FILES['upfile']['name']);

    //アップロードを許可する拡張子を配列で定義
    $perm = ['gif', 'jpg', 'jpeg', 'png'];

    //アップロード処理そのものの成否をチェック
    //$_FILES['要素名']['情報名']
    if($_FILES['upfile']['error'] !== UPLOAD_ERR_OK){
        $msg = [
            UPLOAD_ERR_INI_SIZE => 'ファイルサイズが大きすぎます！',
            UPLOAD_ERR_PARTIAL => 'ファイルが一部しかアップロードされていません！',
            UPLOAD_ERR_NO_FILE => 'ファイルがアップロードされていません！',
            UPLOAD_ERR_NO_TMP_DIR => '一時保存ファイルが存在しません！',
            UPLOAD_ERR_CANT_WRITE => 'ディスクへの書き込みに失敗しました！',
            UPLOAD_ERR_EXTENSION => ' 拡張モジュールによってアップロードが中断！'
        ];
        $err_msg = $msg[$_FILES['upfile']['error']];
    //拡張子が許可されたものかどうかを判定
    } elseif (!in_array(strtolower($ext['extension']), $perm)){
        $err_msg = '画像以外のファイルはアップロードできません！';
    // ファイルの内容が画像であるかをチェックする
    } elseif (!@getimagesize($_FILES['upfile']['tmp_name'])){
        $err_msg = 'ファイルの内容が画像ではありません！';
    // アップロード処理
    } else {
        $src = $_FILES['upfile']['tmp_name'];
        $dest = $_FILES['upfile']['name'];
        //move_uploaded_file関数で一時フォルダから本来の保存先にファイルを移動させる！
        if(!move_uploaded_file($src, 'doc/'.$dest)){
            $err_msg = 'アップロード処理に失敗しました！';
        }
    }

    //エラー発生時はエラーメッセージを表示！
    if(isset($err_msg)){
        die('<div style="color:Red;">'.$err_msg.'</div>');
    }

    //処理成功時はフォームにリダイレクト！
    header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/file1.php');