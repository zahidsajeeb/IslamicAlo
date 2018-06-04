<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Word
 *
 * @author LENOVO01
 */
class Wordsnippet  extends CI_Model{
    //put your code here
    
   public  function get_snippet( $str, $wordCount = 10 ) {
        return implode(
            '',
            array_slice(
                preg_split(
                    '/([\s,\.;\?\!]+)/',
                    $str,
                    $wordCount*2+1,
                    PREG_SPLIT_DELIM_CAPTURE
                ),
                0,
                $wordCount*2-1
            )
        );
    }
}
