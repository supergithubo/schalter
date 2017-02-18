<?php

class Schalter {
    
    public $data;
    
    public function __construct($json, $identity = null)
    {
        $remote = json_decode(file_get_contents($json), true);
        if($remote[$identity]) {
            $this->data = $remote[$identity];   
        }
    }
    
}

?>
