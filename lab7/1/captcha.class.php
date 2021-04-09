<?php

    Class Captcha
    {

        public $imgDir = 'img/'; // директория где хранятся изображения

        public $length = '3'; // количество цифр в капче

        public function __construct()
        {
            $this->keystring = array();

            for ($i = 0; $i < $this->length; $i++) {

                $this->keystring[] .= mt_rand(0, 9);
            }
        }

        public function draw()
        {

            $img = '';

            foreach ($this->keystring as $keystring) {

                $img .= '<img src="' . $this->imgDir . $keystring . '.png" border="0">';
            }

            return $img;
        }


        public function getKeyString()
        {
            return implode($this->keystring);
        }
    }

    ?>
