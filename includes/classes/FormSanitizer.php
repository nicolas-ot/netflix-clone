<?php

    Class FormSanitizer {

        public static function sanitizeFormString($inputText) {
            $inputText = strip_tags($inputText);
            $inputText = trim($inputText);
            $inputText = strtolower($inputText);
            $inputText = ucwords($inputText, " ");
            return $inputText;  
        }

        public static function sanitizeFormUsername($inputText) {
            $inputText = strip_tags($inputText);
            $inputText = str_replace(" ", "", $inputText);
            return $inputText;  
        }

        public static function sanitizeFormEmail($inputText) {
            $inputText = strip_tags($inputText);
            $inputText = trim($inputText);
            return $inputText;  
        }

        public static function sanitizeFormPassword($inputText) {
            $inputText = strip_tags($inputText);
            return $inputText;  
        }
    }

?>