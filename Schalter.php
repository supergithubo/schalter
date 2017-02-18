<?php

class Schalter {
    
    public $data;
    private $domain;
    private $identity;
    
    public function __construct($json, $domain = null, $identity = null)
    {
        $this->domain = $domain;
        $this->identity = $identity;
        $this->data = json_decode(file_get_contents($json));
    }
    
}

?>
