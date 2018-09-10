<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Migrate extends CI_Controller{

    public function index()
    {
        $this->load->library('migration');

        $m_result = $this->migration->current();

        if ($m_result === TRUE){
            echo "No migration applied. Maybe you have to update the migration number/timestamp in the config.";
        }
        else if($m_result === FALSE)
        {
            show_error($this->migration->error_string());
        }
        else{
        	echo "Migration {$m_result} ran succesfully" . "<br>";
        }
    }
}
?>