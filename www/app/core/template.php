<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Тэномастерсткая</title>
        <link rel="stylesheet" href="/template/css/primary.css" media="screen">
        <link rel="stylesheet" href="/template/css/icons.css">
        <link href="favicon.png" rel="shortcut icon" type="image/x-icon" />
    </head>
    <body>
        <div id="page">
            <? get_page($url_page); ?>
        </div>
        <div id="window">
            <? get_template('control-bar'); ?>
            <? get_template('notes-bar'); ?>
        </div>

        <script src="/template/js/jquery.js"></script>
        <script src="/template/js/gui.js"></script>
    </body>
</html>