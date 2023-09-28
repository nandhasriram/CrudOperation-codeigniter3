<?php
class regmodel extends CI_Model{
    public function updatedata($id,$data) {
        $this->load->database();
        $name=$data['name'];
        $email=$data['email'];
        $city=$data['city'];
        $mobile=$data['mobile'];
        return $this->db->query("update studentreg set name='$name',email='$email',city='$city',mobile='$mobile' where id='$id'");
        //return $this->db->update($data,'studentreg');
    }
    public function editdata($id) {
        $this->load->database();
        $this->db->where('id',$id);
        return $this->db->get('studentreg')->result();
    }
    public function insertdata($data){
        $this->load->database();
        return $this->db->insert('studentreg',$data);  
    }
    public function deletedata($id) {
         $this->load->database();
         $this->db->where("id",$id);
         return $this->db->delete("studentreg");
    }

    public function getrecord() {
        $this->load->database();
        return $this->db->get('studentreg')->result();
       
    }
}