<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Templates {
	private $layout="default";

    // Page resources
    private $js = array();
    private $css = array();
    private $fonts = array();
    private $images = array();
    private $plugins = array();
    // Page data
    public $data = array();

    private $type;
    private $partials;

    function type($type=NULL){
        if($type) $this->type = $type;
        return $this;
    }

    function partials($partials=NULL){
        if($partials) $this->partials = $partials;
        return $this;
    }

    function js($js=NULL){
        if($js) $this->js = $js;
        return $this;
    }
    function plugins($plugins=NULL){
        if($plugins) $this->plugins = $plugins;
        return $this;
    }

    function css($css=NULL){
        if($css) $this->css = $css;
        return $this;
    }


    function layout($layout=NULL){
        if($layout) $this->layout = sprintf(LAYOUT."%s/%s",$this->type,$layout);
        return $this;
    }

    function render($view,$data=NULL, $ci=NULL) {
        if($data==NULL) {
            $data=new stdClass();
        }
        $ci = &get_instance(); 
        $ci->load->library('parser');

        $data->css_path=base_url(CSS.$this->type);
        $data->img_path=base_url(IMG.$this->type);
        $data->js_path=base_url(JS.$this->type);
        
        $data->css = $this->css;
        $data->js = $this->js;
        $data->plugins = $this->plugins;
        $data->images = $this->images;

        $data->base_url = base_url();   

        foreach($this->partials as $row) {
            $data->{$row['field']} = $ci->parser->parse(sprintf("%s%s/%s",PARTIAL,$this->type,$row['path']), $data, true);
        }

        $data->content = $ci->parser->parse($view, $data, true);

        $ci->parser->parse($this->layout, $data);
    }

}