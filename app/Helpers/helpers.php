<?php

if ( !function_exists('converCase') )
{
    function converCase($str){
        return mb_convert_case($str, MB_CASE_TITLE, 'UTF-8');
    }
}

if ( !function_exists('stringNormalize') )
{
    function stringNormalize($value): string
    {
        return iconv('utf8', 'ASCII//TRANSLIT', mb_strtolower($value, 'UTF-8'));
    }
}

if ( !function_exists('stringContains') )
{
    function stringContains($needle, $haystack): bool
    {
        return mb_strpos(stringNormalize($haystack), stringNormalize($needle)) === false ? false : true;
    }
}

if ( !function_exists('getOnlyNumericCharacters') )
{
    function getOnlyNumericCharacters($str): string
    {
        $arr = str_split($str);
        $finalStr = '';
        $sanitizedStr = '';
        for ($i = 0; $i < count($arr); ++$i) {
            $character = $arr[$i];
            if (!is_numeric($character) && !in_array($character, [',', '.']) ) {
                break;
            } else {
                $finalStr .= $character;
           }
        }

        if (strpos($finalStr, '000') !== false) {
            if (strpos($finalStr, '.') !== false) {
                $finanStrParts = explode('.', $finalStr);
                foreach ($finanStrParts as $key => $value) {
                    if ($key < 2) {
                        $sanitizedStr .= $value;
                    } else {
                        $sanitizedStr .= '.' . $value;
                    }
                }
            }
        }

        return !empty($sanitizedStr) ? $sanitizedStr : $finalStr;
    }
}
