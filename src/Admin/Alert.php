<?php
/**
 * AdminLte Alert
 * https://almsaeedstudio.com/themes/AdminLTE/pages/widgets.html
 */

namespace Admin;

Class Alert
{ 
    public $id='';
    public $type='danger';
    public $title='Alert';
    public $icon='fa fa-ban';
    public $body='Lorem lipsum';
    
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
        $HTML[]="<div class='alert alert-".$type. " alert-dismissable' id='".$this->id."'>";
        $HTML[]='<h4><i class="'.$this->icon.'"></i> '.$this->title.'</h4>';
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

/*
<div class="alert alert-danger alert-dismissable">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
<h4><i class="icon fa fa-ban"></i> Alert!</h4>
Danger alert preview. This alert is dismissable. Lorem lipsum.
</div>
*/