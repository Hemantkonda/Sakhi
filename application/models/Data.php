<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Model {

	public function profileinput($data,$id)
	{
        if ($id == '') {

            $this->db->insert('profile',$data);
        }else{
            $this->db->update('profile',$data);
        }
		 
        
	}

    public function profiledataselect()
    {
        $result = $this->db->query('SELECT * FROM `profile`');
        return $result->row();
    }

    public function getprofile()
    {
        $this->db->select('*');
        $this->db->from('profile');
        $user = $this->db->get();
        return $user->row();
    }
    
    
    public function teaminput($data, $id)
    {
        if ($id == '') {

            $this->db->insert('team',$data);
        }else{
            $this->db->where('id',$id);
            $this->db->update('team', $data);
        }
    }

    public function delete_team($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('team');
    }

    public function getteam()
    {
        $this->db->select('*');
        $this->db->from('team');
        $user = $this->db->get();
        return $user->result();
    }

    public function getteambyid($id)
    {
        $this->db->select('*');
        $this->db->from('team');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }


    // Service

    public function serviceinput($data, $id)
    {
        if ($id == '') {

            $this->db->insert('service',$data);
        }else{
            $this->db->where('id',$id);
            $this->db->update('service', $data);
        }
    }

    public function service_add()
    {
        $result = $this->db->query('SELECT FROM `service`');
        return $result->result();
    }

    public function delete_service($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('service');
    }

    public function getservice()
    {
        $this->db->select('*');
        $this->db->from('service');
        $service_data = $this->db->get();
        return $service_data->result();
    }

    public function getservice_id($id)
    {
        $this->db->select('*');
        $this->db->from('service');
        $this->db->where('id', $id);
        $result = $this->db->get();
        return $result->row();
    }

    // faq 

    public function faq_input($data, $id)
    {
        if ($id == '') {
            $this->db->insert('faq',$data);
        }else {
            $this->db->where('id',$id);
            $this->db->update('faq',$data);
        }
    }

       public function faq_add()
    {
        $result = $this->db->query('SELECT FROM `faq`');
        return $result->result();
    }

    public function delete_faq($id) {
        // Delete the FAQ record from the database using the provided id
        $this->db->where('id', $id);
        $this->db->delete('faq');
    }
    
  
    public function getfaq()
    {
        $this->db->select('*');
        $this->db->from('faq');
        $user = $this->db->get();
        return $user->result();
    }

    public function getfaq_id($id)
    {
        $this->db->select('*');
        $this->db->from('faq');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }




    // table join faq & service

// Model: Example_model.php


public function get_service_faq_data() {
    $this->db->select('service.*, faq.*, service.title as service_title');
    $this->db->from('service');
    $this->db->join('faq', 'service.id = faq.service_id', 'inner');
    $query = $this->db->get();
    return $query->result();
}

public function get_single_faq_data($id) {
    $this->db->select('service.*, faq.*, service.title as service_title');
    $this->db->from('service');
    $this->db->join('faq', 'service.id = faq.service_id', 'inner');
    $this->db->Where('faq.id', $id);
    $query = $this->db->get();
    return $query->row();
}

public function get_single_service_data($id) {
    $this->db->select('service.*, faq.*');
    $this->db->from('service');
    $this->db->join('faq', 'service.id = faq.service_id', 'left');
    $this->db->Where('service.id', $id);
    $query = $this->db->get();
    return $query->row();
}

public function getfaq_data($id)
{
    $this->db->select('service.*, faq.*');
    $this->db->from('faq');
    $this->db->join('service', 'service.id = faq.service_id', 'left');
    $this->db->Where('service.id', $id);
    $query = $this->db->get();
    return $query->result();
}


}
