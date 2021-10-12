<html>

<head>
    <meta charset="UTF-8">
    <title>Template Sederhana</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/stylebuku.css">
</head>

<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h2>Ini Template Pertama Saya</h2>
            </hgroup>

            <nav>
                <ul>
                    <li><a href="<?= base_url() . 'web' ?>">Home</a></li>
                    <li><a href="<?= base_url() . 'web/about' ?>">about</a></li>
                    <li><a href="<?= base_url() . 'web/profile' ?>">profile</a></li>
                </ul>
            </nav>
        </header>