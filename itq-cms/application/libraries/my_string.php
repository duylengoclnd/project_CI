<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_string {
    public function allow_post($param, $allow){
        $temp = NULL;
        if (isset($param) && count($param) && isset($allow) && count($allow)) {
            foreach ($param as $key => $value) {
                if (in_array($key, $allow)) {
                    $temp[$key] = $value;
                }
            }
        return $temp;
        }
    return $param;
    }

    public function php_redirect($url){
        header('location:'.$url);
    }

    public function js_redirect($alert, $url){
        die('<script type="text/javascript">alert(\''.$alert.'\'); window.location.href =\''.$url.'\';</script>');
    }
}
