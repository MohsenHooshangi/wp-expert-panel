<?php

class panelController extends Handler
{
    public function __construct()
    {}
    
    public function index(){
 /*       $posts = $this->find();*/
        View::LoadView('panel.panelView',[
            'post'=>'دوره متخصص وردپرس'
        ]);
    }
    
/*    public function find()
    {
        $stmt = "SELECT * FROM POST ";
    }*/
}