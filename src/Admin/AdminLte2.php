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
    private $path='';// static path
    private $config=[];//admin config from json file
    private $title= 'AdminLte Turbo';// document title
    private $DEBUG=false;

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
            //die("<li>Error : config.json file not found in ".realpath("."));
            throw new \Exception("Error : config.json file not found in ".realpath("."), 1);
            
        }
    }

    // Get/Set config
    public function config($config=[])
    {
        if($config){
            $this->config=$config;
        }
        return $this->config;
    }

    /**
     * Set app base path, what for ?
     * @param  string $path [description]
     * @return [type]       [description]
     */
    /*
    public function path($path = '')
    {
        $this->path=$path;
        //echo "<li>".$this->path;
        return $this->path;
    }
    */
   

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

    public function __toString()
    {
        return $this->html();
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
     * head
     * bring the headers, and initial assets
     * @return [type] [description]
     */
    public function head()
    {
        $HTML=[];
        $HTML[]='<!DOCTYPE html>';
        $HTML[]='<html lang="en">';
        $HTML[]='<head>';
        $HTML[]='<meta charset="UTF-8">';
        $HTML[]="<title>".$this->title."</title>";
        $HTML[]="<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>";
        //$HTML[]="<link rel='shortcut icon' href='".$this->path."img/favicon.png' type='image/png' />";
        if($this->config->favicon){
            $HTML[]='<link rel="shortcut icon" href="'.$this->path.$this->config->favicon.'">';    
        }
        

        // Css
        if(isset($this->config->css)){
            foreach ($this->config->css as $v) {
                if(preg_match("/^http/i",$v)){
                    $HTML[]='<link href="'.$v.'" rel="stylesheet" type="text/css" />';    
                }else{
                    $HTML[]='<link href="'.$this->path.$v.'" rel="stylesheet" type="text/css" />';    
                }            
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

        
        $title="Admin";
        if (isset($this->config->title)) {
            $title=$this->config->title;
        }

        //$HTML[]='<a href="?" class="logo">';
        //$HTML[]="<a href=? class=logo><img src='".$this->path."/img/logosocgen.png' width=180></i></a>";
        $HTML[]="<a href=? class=logo>$title</a>";
        //$HTML[]='</a>';
    
        // Header Navbar: style can be found in header.less -->
        $HTML[]='<nav class="navbar navbar-static-top" role="navigation">';
        
        // Sidebar toggle button
        $HTML[]='<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">';
        $HTML[]='<span class="sr-only">Toggle navigation</span>';
        $HTML[]='</a>';
    
        // Navbar right menu    
        $HTML[]='<div class="navbar-custom-menu">';

        $HTML[]='test';
        
        $HTML[]='</div>';


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
            //$HTML[]='<div class="pull-left info">';
            //$HTML[]='<p>Hello, '.$userName.'</p>';
            //$HTML[]='<a href="#"><i class="fa fa-circle text-success"></i> Online</a>';
            //$HTML[]='</div>';
            $HTML[]='</div>';
        }


        // search field /
        if(isset($this->config->menusearch) && $this->config->menusearch){
            $HTML[]='<div class="sidebar-form input-group">';
            $HTML[]='<input type="text" id="q" name="q" class="form-control" placeholder="Search ...">';
            $HTML[]='<span class="input-group-btn">';
            $HTML[]='<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>';
            $HTML[]='</span>';
            $HTML[]='</div>';
        }

        // sidebar menu: : style can be found in sidebar.less -->
        //$HTML[]= $this->menu();
        $HTML[]= $this->menu();

        $HTML[]='</section>';
        $HTML[]='</aside>';
        return implode("\n", $HTML);
    }


    /**
     * Return left menu
     * @return string html
     */
    public function menu($json = '')
    {
        
        $menu=$this->config->menu;
        
        //echo "<li>".count($menu);
        //var_dump(count($this->config->menu));exit;
        
        //var_dump($this->config->menu);exit;
        

        if(!isset($menu)||!is_object($menu)){
            return '';
        }

        $HTML=[];
        $HTML[]='<ul class="sidebar-menu">';

        // debug
        //$HTML[]='<li class="header">this->path : '.$this->path.'</li>';    
        
        foreach(@$menu as $name=>$o){
            
            $title='';
            $class='';
            
            if(isset($o->class))$class='class="'.$o->class.'"';
            if(isset($o->title))$title='title="'.$o->title.'"';
            
            if(isset($o->sub))
            {
                $HTML[]='<li class="treeview" '.$title.'>';
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
            }
            else
            {
                
                $HTML[]='<li '.$class.' '.$title.'>';
                
                //if(!isset($o->icon))$o->icon='';
                /*
                if(isset($o->class)){
                    $HTML[]='<li class="'.$o->class.'">';    
                }else{
                        
                }
                */
                if(isset($o->url))$HTML[]='<a href="'.$this->path.$o->url.'">';
                
                if(isset($o->icon))$HTML[]='<i class="'.$o->icon.'"></i> ';
                $HTML[]='<span>'.$o->text.'</span>';
                
                //$HTML[]='<small class="label pull-right bg-green">new</small>';//small
                if(isset($o->url))$HTML[]='</a>';
                
                $HTML[]='</li>';
                
            }
        }
        $HTML[]='</ul>';
        return implode('', $HTML); 
    }

    /**
    * @brief the list of js scripts to be included
    * @returns html
    */
    public function scripts()
    {
        if(!isset($this->config->js)){
            return '';
        }

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