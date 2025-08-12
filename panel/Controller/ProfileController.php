<?php

class ProfileController extends Handler
{
    public function __construct()
    {}
    
    public function index()
    {
      /*  $current_user_email = get_current_user_email();
        $current_user_display_name = get_current_user_display_name();*/
        $params = [
            'current_user_email'=>$this->get_current_user_email(),
            'current_user_display_name'=>$this->get_current_user_display_name()
        ];
        View::LoadView('panel.ProfileView',$params);
    }
    
    private function get_current_user_email(){
        return wp_get_current_user()->user_email;
    }
    private function get_current_user_display_name(){
        return wp_get_current_user()->display_name;
    }
    
}