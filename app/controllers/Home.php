<?php
class Home extends Controller 
{
    public function __constract($data = NULL)
    {
        return $this->index($data);
    }

    public function index($data = null)
    {

        // $this->setUser('Maniek');

        $data->partial = $this->getPartial();

        return $data;

    }
}