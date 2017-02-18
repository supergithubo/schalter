<?php

class Schalter {
    
    public $data;
    
    public function __construct($json, $domain = null, $identity = null)
    {
        $remote = json_decode(file_get_contents($json));
        if($remote[$domain]) {
            $this->data = $remote[$domain];   
        }
        if($remote[$identity]) {
            $this->data = $remote[$identity];   
        }
    }
    
}

?>
