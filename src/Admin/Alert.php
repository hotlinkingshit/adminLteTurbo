<?php
/**
 * AdminLte Alert
 */

namespace Admin;

Class Alert
{ 
    public $id='';
    public $type='';
    public $title='';
    public $icon='fa fa-ban';
    public $body='';
    
    public function __construct ($type = '', $title = '', $body = '')
    {
        //$this->id = md5(rand(0, time()));
    }

    function html($type = '', $title = '', $body = '')
    {
        
        if($type)$this->type=$type;
        if($title)$this->title=$title;
        if($body)$this->body=$body;

        $HTML=[];
        $HTML[]="<div class='alert alert-".$type." id= alert-dismissable'>";
        $HTML[]='<i class="'.$this->icon.'"></i>';
        $HTML[]="<button type=button class=close data-dismiss=alert aria-hidden=true>×</button>";
        $HTML[]=$this->body;
        $HTML[]="</div>";
        return implode("\n", $HTML);
    }

    public function __toString()
    {
        return $this->html();
    }
}