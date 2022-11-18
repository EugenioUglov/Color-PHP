<?php
class Color
{
    private $CI;

    function __construct() {
        $this->CI =& get_instance();
    }

    function get_hex_by_dec($dec) {
        return $dec == 0 ? '#000000' : '#'.dechex($dec);
    }

    function get_style_by_hex($hex, $width = "30px", $height = "20px") {
        return '<span style="width='.$width.'; height='.$height.'; background-color:'.$hex.'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> (hex: '.$hex.')';
    }

    function get_style_by_dec($dec, $width = "30px", $height = "20px") {
        $hex = $this->get_hex_by_dec($dec);

        return '<span style="width='.$width.'; height='.$height.'; background-color:'.$hex.'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> (hex: '.$hex.')';
    }
}