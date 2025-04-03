<?php
Class Book_model extends CI_Model {

    public function get_Books(){
        return $this->db->get('Books')->result_array();

    }

    public function add_book ($data) {
        return $this->db->insert('Books', $data);
    }

    public function delete_book($id){
        return $this->db->delete ('Books', array('id' => $id));
    }
}
?>