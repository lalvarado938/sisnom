<?php

class UsersController extends AppController {
    
    var $name = 'Users';       
    
    public function login() {
        $this->layout = 'login';
        if (empty($this->data)) {
            return;
        }        
        $user = Authsome::login($this->data['User']);

        if (!$user) {
            $this->Session->setFlash('Usuario Desconocido o Password Incorrecto');
            return;
        }
        $redirect=$this->Session->read('loginRedirect');
        $this->Session->delete('loginRedirect');

        //$this->redirect($redirect);                
        $this->redirect('pages/display');                
    }
    
    public function logout(){
        $this->Authsome->logout();
        $this->redirect('/');
    }

}

?>