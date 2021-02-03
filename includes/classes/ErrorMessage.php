<?php
Class ErrorMessage {
    public static function show($text) {
        exit("<span class='errorBanner'>$text</span>");
    }
}
?>