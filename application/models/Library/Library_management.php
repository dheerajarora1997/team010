<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Library_management extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', true);
    }
    public function saveData($requestData){
        $data = array(
            'name'      => !empty($requestData['user_name'])? $requestData['user_name']:'Student',
            'mobile'      => $requestData['user_mobile'],
            'sheet_no'      => $requestData['user_sheet'],
            'room_no '      => $requestData['user_room'],
            'gender'      => (int)$requestData['gender'],
            'parents_name'      => $requestData['parents_name'],
            'parents_mobile'      => $requestData['parents_mobile'],
            'address'      => $requestData['address'],
            'register_date'      => time(),
            'status'      => 1,
            'payment_date'      => time()
            
        );
        $res = $this->db->insert('student_master', $data);
        return $res;
    }
    public function getSavedData($dataSet,$table_name){
        if($dataSet['action']=='all'){
            $query = $this->db->get($table_name);
        }elseif($dataSet['action']=='limit'){
            $limit = 0;
            $offset = 10;
            $query = $this->db->get($table_name, $limit, $offset);
        }
        elseif($dataSet['action'] == 'id'){
            $id = $dataSet['id'];
            $query = $this->db->get_where($table_name, array('id' => $id));
        }
        $result = $query->result_array();
        return $result;
    }
}
