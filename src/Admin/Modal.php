<?php
/**
 * AdminLte2 Modal
 * to pop the modal -> $("#modalwindow").modal(true);
 * to update the title -> $("#modalwindow .modal-title").html('html');
 * to update the body -> $("#modalwindow .modal-body").html('html');
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
    private $id ='';
    private $type ='default';
    private $icon ='';
    private $title='title';
    private $body ='';
    private $footer ='<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>';

    public function __construct ($title = '', $body = '', $footer='')
    {
        $this->id = md5(rand(0,time()));
        $this->title = $title;
        $this->body = $body;
        $this->footer = $footer;
        //echo "Youpi !!";
    }

    public function id($str = ''){
        $this->id=$str;
    }
    
    public function icon($str = ''){
        $this->icon=$str;
    }

    public function html()
    {
        $HTML=[];
        
        $HTML[]='<div class="modal" id="'.$this->id.'">';
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
          //$HTML[]='<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>';
          //$HTML[]='<button type="button" class="btn btn-primary">Save changes</button>';
          $HTML[]=$this->footer;
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