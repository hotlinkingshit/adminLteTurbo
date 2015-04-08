<?php
/**
 * AdminLte2 Modal
 */

/*
  <div class="modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title">Modal Default</h4>
        </div>
        <div class="modal-body">
          <p>One fine body…</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
 */

namespace Admin;

Class Modal
{
    private $type ='default';
    private $icon ='';
    private $title='title';
    private $body ='';
    private $footer ='';

    public function __construct ($title = '', $body = '', $footer='')
    {
        //$this->type = $type;
        $this->title = $title;
        $this->body = $body;
        $this->footer = $footer;
        //echo "Youpi !!";
    }

    public function icon($str = ''){
        $this->icon=$str;
    }

    public function html()
    {
        $HTML=[];
        /*
        $HTML[]="<div class='callout callout-".$this->type."'>";
        $HTML[]="<h4>".$this->title."</h4>";
        if ($this->body) {
            $HTML[]="<p>".$this->body."</p>";
        }
        $HTML[]="</div>";
        */
        
        $HTML[]='<div class="modal">';
        $HTML[]='<div class="modal-dialog">';
        $HTML[]='<div class="modal-content">';
        
        $HTML[]='<div class="modal-header">';
          $HTML[]='<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>';
          $HTML[]='<h4 class="modal-title">';
          if($this->icon)$HTML[]='<i class="'.$this->icon.'"></i>';
          $HTML[]=$this->title.'</h4>';
        $HTML[]='</div>';
        
        $HTML[]='<div class="modal-body">'.$this->body.'</div>';
        
        $HTML[]='<div class="modal-footer">';
          $HTML[]='<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>';
          //$HTML[]='<button type="button" class="btn btn-primary">Save changes</button>';
        $HTML[]='</div>';
        
        $HTML[]='</div>';//<!-- /.modal-content -->
        $HTML[]='</div>';//<!-- /.modal-dialog -->
        $HTML[]='</div>';//<!-- /.modal -->
        
        return implode("\n", $HTML);
    }

    public function __toString()
    {
        return $this->html();
    }
}