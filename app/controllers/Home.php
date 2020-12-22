<?php
class Home 
{
    public function __constract($data = NULL)
    {
        if($data !== NULL){
            return $this->index($data);
        }
    }

    public function index($data = null)
    {

        $page = new stdClass();
        $page->view = get_called_class();
        $page->data = $data;
        return $data;

    }
}