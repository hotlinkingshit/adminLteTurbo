<?php
/**
 * This is a php class version of AdminLTE2 for quick integration
 * no hard coded path, no db dependency, or session tricks
 * configuration done through json
 * @author jambonbill
 */
namespace Admin;

/**
* @brief Class providing adminlte2 skeleton
*/
class AdminLte2
{

    /**
     * Static path to assets
     * @var string
     */
    private $path = '';// static path
    
    /**
     * Admin title (display at top-left)
     * @var string
     */    
    private $config = null;//admin config from file

    /**
     * AdminLte Constructor
     * @param boolean $private [description]
     */
    public function __construct()
    {
        // get the config file. it must be located next to the class
        $configjson=__DIR__."/config.json";
        if(is_file($configjson)){
            $string = file_get_contents($configjson);
            $this->config=json_decode($string);
            $err=json_last_error();
            if($err){
                die("Error: Invalid config.json");
            }else{
                //find the correct path for assets
                
                //echo "<pre>";
                //echo "realpath:".realpath('.')."\n";
                //echo "__DIR__ :".realpath(__DIR__."/../web")."\n";
                $diff=count(explode("/",realpath('.')))-count(explode("/",realpath(__DIR__."/../../web")));
                //echo "diff=$diff\n";
                $this->path=str_repeat("../", $diff);
                //echo 
                //echo "</pre>";
                
            }
        }else{
            die("<li>menu error : config file not found.".realpath("."));
        }
    }

    /**
     * Set app base path
     * @param  string $path [description]
     * @return [type]       [description]
     */
    public function path($path = '')
    {
        $this->path=$path;
        //echo "<li>".$this->path;
        return true;
    }
  
    /**
     * Set page title
     * @param  string $title [description]
     * @return [type]        [description]
     */
    public function title($title = '')
    {
        $this->title = $title;
        return $this->title;
    }


    /**
     * return the admin html
     * @return string html
     */
    public function html()
    {
        $html=[];
        $html[]=$this->head();
        $html[]=$this->body();
        $html[]=$this->header();
        $html[]=$this->leftside();
        $html[]=$this->scripts();
        $html[]='<aside class="right-side">';
        return implode("",$html);
    }


    /**
     * Print all admin html data
     * @return [type] [description]
     */
    public function printPublic()
    {
        echo $this->head();
        echo $this->body();
        echo $this->header();
        echo $this->leftside();
        echo $this->scripts();
        echo '<aside class="right-side">';
        return;
    }

    /**
     * Print all admin html data
     * @return [type] [description]
     */
    
    public function printPrivate($return = false)
    {
        echo $this->head();
        echo $this->body();
        echo $this->header();
        echo $this->leftside();
        echo $this->scripts();
        //echo $this->autoreload();// reload page every 15 minutes
        echo '<aside class="right-side">';
        /*
        if (!$this->session || !$this->user['is_superuser']) {
            //echo "<li>Please login";
            echo "<div class='box-body'>";
            echo "<section class=content>";
            echo "<pre>You are not logged in.<br /><a href='".$this->path."/login/'>Please login</a></pre>";
            echo "</div>";
            //print_r($this->session, true);
            exit;
        }
        */
        return;
    }

    public function printPage(){
        echo $this->head();
        echo $this->body();
        echo $this->scripts();
        return;
    }

    /**
     * Obsolete
     * Function to call in controllers, to make sure the user is logged in.
     * @return [type] [description]
     */
    public function ctrl()
    {
        die("TODO : Fix me in ".__FILE__);
        return true;
    }


    /**
     * head
     * bring the headers, and initial assets
     * @return [type] [description]
     */
    public function head()
    {
        // Assets
        $CSS=$this->config->css;

        // html
        $HTML=[];
        $HTML[]='<!DOCTYPE html>';
        $HTML[]='<html lang="en">';
        $HTML[]='<head>';
        $HTML[]='<meta charset="UTF-8">';
        $HTML[]="<title>".$this->title."</title>";
        $HTML[]="<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>";
        $HTML[]="<link rel='shortcut icon' href='".$this->path."img/favicon.png' type='image/png' />";
        foreach ($CSS as $v) {
            if(preg_match("/^http/i",$v)){
                $HTML[]='<link href="'.$v.'" rel="stylesheet" type="text/css" />';    
            }else{
                $HTML[]='<link href="'.$this->path.$v.'" rel="stylesheet" type="text/css" />';    
            }            
        }
        $HTML[]="</head>";
        return implode("\n", $HTML);
    }


    /**
     * body
     * bring the headers, and initial assets
     * @return [type] [description]
     */
    public function body()
    {
        $HTML=[];
        //todo, read it from the config file
        $skin='skin-blue';
        $HTML[]="<body class='$skin'>";

        return implode("\n", $HTML);
    }



    /**
     * header 
     * this is NOT the html header, but the ADMIN header (top bar)
     * @return [type] [description]
     */
    public function header()
    {
        $HTML=[];
        //$HTML[]=__FUNCTION__."()";

        // header logo: style can be found in header.less -->
        $HTML[]='<header class="main-header">';

        // Add the class icon to your logo image or logo icon to add the margining -->
        //$HTML[]='Admin';
        $title=$this->config->title;
        if (!$title) {
            $title="Admin";
        }

        //$HTML[]='<a href="?" class="logo">';
        //$HTML[]="<a href=? class=logo><img src='".$this->path."/img/logosocgen.png' width=180></i></a>";
        $HTML[]="<a href=? class=logo>$title</a>";
        //$HTML[]='</a>';
    
        // Header Navbar: style can be found in header.less -->
        $HTML[]='<nav class="navbar navbar-static-top" role="navigation">';
        $HTML[]='</nav>';
        $HTML[]='</header>';

        return implode("\n", $HTML);
    }


    /**
     * Adminlte2 Footer, this one need some tweaking
     * @return [type] [description]
     */
    public function footer()
    {
        $HTML=[];
        $HTML[]="<footer class=\"main-footer\">";
        //<!-- To the right -->
        $HTML[]="<div class=\"pull-right hidden-xs\">Anything you want</div>";        
        //<!-- Default to the left --> 
        $HTML[]="<strong>Copyright © 2015 <a href=#>Company</a>.</strong> All rights reserved.";
        $HTML[]="</footer>";
        return implode("\n", $HTML);
    }


    /**
     * left side
     */
    public function leftside()
    {
        $HTML=[];
        $HTML[]='<div class="wrapper row-offcanvas row-offcanvas-left">';
        $HTML[]='<aside class="left-side sidebar-offcanvas">';
        // sidebar: style can be found in sidebar.less -->       
        $HTML[]='<section class="sidebar">';

        //if ($this->session) {
        if (true) {
            // Sidebar user panel -->
            $HTML[]='<div class="user-panel">';
            // avatar
            /*
            $HTML[]='<div class="pull-left image">';
            $HTML[]='<img src="'.$this->path.'img/avatar5.png" class="img-circle" alt="User Image" />';
            $HTML[]='</div>';
            */
            $HTML[]='<div class="pull-left info">';
            $userName="Toto";
            $HTML[]='<p>Hello, '.$userName.'</p>';
            //$HTML[]='<a href="#"><i class="fa fa-circle text-success"></i> Online</a>';
            $HTML[]='</div>';
            $HTML[]='</div>';
        }


        // search field /
        $HTML[]='<div class="sidebar-form input-group">';
        $HTML[]='<input type="text" name="q" class="form-control" placeholder="Search ...">';
        $HTML[]='<span class="input-group-btn">';
        $HTML[]='<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>';
        $HTML[]='</span>';
        $HTML[]='</div>';


        // sidebar menu: : style can be found in sidebar.less -->
        //$HTML[]= $this->menu();
        $HTML[]= $this->menu();

        $HTML[]='</section>';
        $HTML[]='</aside>';
        return implode("\n", $HTML);
    }



    public function menu()
    {
        $menu=$this->config->menu;
        //print_r($menu);
        $HTML=[];
        $HTML[]='<ul class="sidebar-menu">';
        foreach($menu as $name=>$o){
            
            //$id=$class=$url=$icon=$text=$target='';
            
            //if(isset($o->class))$class=$o->class;
            //if(isset($o->target))$target=$o->target;
            
            if(isset($o->sub))
            {
                $HTML[]='<li class="treeview">';
                //if(!isset($o->url))$o->url='#';
                if(!isset($o->icon))$o->icon='';
                $HTML[]='<a href="'.@$o->url.'">';
                $HTML[]='<i class="'.$o->icon.'"></i> <span>'.$o->text.'</span>';
                $HTML[]='<i class="fa fa-angle-left pull-right"></i>';
                $HTML[]='</a>';
                $HTML[]='<ul class="treeview-menu">';
                foreach($o->sub as $obj){
                    $HTML[]='<li>';
                    if(!isset($obj->url))$obj->url='#';
                    if(!isset($obj->icon))$obj->icon='';
                    $HTML[]='<a href="'.$obj->url.'"><i class="'.$obj->icon.'"></i> <span>'.$obj->text.'</span></a>';
                    $HTML[]='</li>';
                }
                $HTML[]='</ul>';
                $HTML[]='</li>'; 
            } else {
                
                //if(!isset($o->url))$o->url='#';
                if(!isset($o->icon))$o->icon='';
                
                if(isset($o->class)){
                    $HTML[]='<li class="'.$o->class.'">';    
                }else{
                    $HTML[]='<li>';    
                }
                
                if(isset($o->url))$HTML[]='<a href="'.$this->path.$o->url.'">';
                
                $HTML[]='<i class="'.$o->icon.'"></i> <span>'.$o->text.'</span>';
                //$HTML[]='<small class="label pull-right bg-green">new</small>';//small
                if(isset($o->url))$HTML[]='</a>';
                
                $HTML[]='</li>';
                
            }
        }
        $HTML[]='</ul>';
        return implode("\n", $HTML); 
    }

    /**
    * @brief the list of js scripts to be included
    * @returns html
    */
    public function scripts()
    {
        $HTML=[];
        foreach ($this->config->js as $k => $js) {
            if (preg_match("/^http/", $js)) {
                $HTML[]='<script src="' . $js . '" type="text/javascript"></script>';
            } else {
                $HTML[]='<script src="' . $this->path . $js . '" type="text/javascript"></script>';
            }
        }
        return implode("\n", $HTML);
    }   
}