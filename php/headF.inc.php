<?php

    const titleForm = "Login";
    class Form {
        public $_sheet_css = "../font/stylesheet.css";
        public $_css_formulaire = "./css/form.css";
       

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
    <link rel="stylesheet" href="<?= $_new_css->_css_formulaire ?>">
    <title><?= titleForm?></title>
</head>