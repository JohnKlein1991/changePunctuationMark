<?php

class Punctuation{
    public function changePunctuationMark($str, $enc = 'UTF-8') {
        $length = mb_strlen($str);
        $arr = [];
        while ($length) {
            $arr[] = mb_substr($str, 0, 1, $enc);
            $str = mb_substr($str, 1, $length, $enc);
            $length = mb_strlen($str);
        }

        foreach ($arr as $key => $value) {
            if (!preg_match('/[\d\wа-яА-ЯёЁ]/', $value)){
                $arrPuncMarks[] = $arr[$key];
            }
        }

        foreach ($arr as $key => $value) {
            if (!preg_match('/[\d\wа-яА-ЯёЁ]/', $value)){
                $arr[$key] = array_pop($arrPuncMarks);
            }
        }
        return implode($arr);

    }
}
