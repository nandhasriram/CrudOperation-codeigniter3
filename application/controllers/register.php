<?php
class Register extends CI_Controller {
    public function index() {
        $this->load->view('registration_form');
    }
    public function update(){
        extract($_POST);
        $id=$id;
        $data=[
            'name'=>$name,
            'email'=>$email,
            'city'=>$city,
            'mobile'=>$mobile
        ];
        $this->load->model('regmodel');
        $result=$this->regmodel->updatedata($id,$data);
        if($result) {
            redirect(base_url('register/fetchdata'));
        }
    }
    public function edit($id) {
        $this->load->model('regmodel');
        $result['data']=$this->regmodel->editdata($id);
        $this->load->view('displayrecords',$result);
    }
    public function student() {
        $mes['msg']='PERSONAL REGISTRATION';
        $this->load->view('registration_form.php',$mes);
    }
    public function delete($id) {
        echo $id;
        $this->load->model('regmodel');
         $result=$this->regmodel->deletedata($id);
        if($result) {
            redirect(base_url('register/fetchdata'));
    }
}

    public function saveData() {
        extract($_POST);
        $data=[
            'name'=>$name,
            'email'=>$email,
            'city'=>$city,
            'mobile'=>$mobile
        ];
       
        $this->load->model('regmodel');
        $result=$this->regmodel->insertdata($data);
        if($result){
            $res['status']= 'successfully inserted';
            $res['test']= 200;
            $this->load->view('registration_form',$res);
            //redirect(base_url('register/student/'));
        }else{
            $res['status']= 'error while inserting data';
            $this->load->view('registration_form',$res);
        }
    
    }

    public function fetchdata() {
        $this->load->model('regmodel');
        $result['table']=$this->regmodel->getrecord();
        $this->load->view('displayrecords',$result);
    }
}