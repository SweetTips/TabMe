<?php

Class Tab_me
{
    private $_struct;
    private $_html;

    public function __construct($struct)
    {
        $this->set_struct($struct);
        $this->make();
    }

    public function get_struct() { return $this->_struct; }

    public function set_struct($struct)
    {
        $this->_struct = $struct;
    }

    public function clear_tag()
    {
        foreach($this->get_struct() as $value)
        {
            $this->_html = str_replace('%%%tab-'.$value.'%%%', "", $this->_html);
        }
    }

    public function put_template_in_tab($template, $tab)
    {
        $this->_html = str_replace('%%%tab-'.$tab.'%%%', $template, $this->_html);
    }

    public function make()
    {
        $this->_html = '<div class="p-5 TabMe">';
        $this->_html .= '<ul class="pb-2">';
        foreach($this->get_struct() as $value)
        {
            $this->_html .= '<li class="mr-2"><button data="TabMe-tab-'.$value.'" class="TabMe-button btn btn-sm btn-primary">'.$value.'</button></li>';
        }
        $this->_html .= '</ul>';

        foreach($this->get_struct() as $key => $value)
        {
            if($key == 0)
            {
                $this->_html .= '<div id="TabMe-tab-'.$value.'" class="TabMe-default-tab TabMe-tab">%%%tab-'.$value.'%%%</div>';
            }
            else
            {
                $this->_html .= '<div id="TabMe-tab-'.$value.'" class="TabMe-tab">%%%tab-'.$value.'%%%</div>';
            }
        }

        $this->_html .= '</div>';
    }

    public function get_menu() { return $this->_html; }
}

?>