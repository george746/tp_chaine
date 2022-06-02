<?php

    const titleForm = "Sport";
    class Form {
        public $_sheet_css = "../font/stylesheet.css";
        public $_css_formulaire = "../css/style.css";
       

        static $_lang = ["fr", "en", "ar"];
        
    }

    $_new_css = new Form;
?>
<!DOCTYPE html>
<html lang="<?= Form::$_lang[0]?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= titleForm ?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?= $_new_css->_css_formulaire ?>">
    <link rel="stylesheet" href="<?= $_new_css->_sheet_css?>">
</head>