<?php

$message = 'エンジニア転職活動中です' /* . date('l')*/;

$n = mt_rand(1, 3);

// if ($n === 1) {
//     $message = 'UI/UXデザイナー見習いです';
// } elseif ($n === 2) {
//     $message = 'プログラミング勉強中です';
// } else {
//     $message = 'PHPちょっとわかります';
// }

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>松橋大悟のポートフォリオサイト</title>
    <link rel="icon" href="favicon.ico">
    <meta name="description" content="松橋大悟のポートフォリオサイトです。">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="icon">
                <img src="img/digmat.png" width="150" height="120" alt="松橋大悟のアイコンです">
            </div>
            <div class="info">
                <h1>松橋 大悟</h1>
                <p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>
                <ul>
                    <li>
                        <a href="https://github.com/ts76cn" target="_blank">
                            <img src="img/github.png" width="20" height="20" alt="GitHubへのリンク画像です">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.wantedly.com/users/126103506
" target="_blank">
                            <img src="img/wantedly.png" width="20" height="20" alt="Wantedlyへのリンク画像です">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <section class="works">
        <h1>WORKS</h1>