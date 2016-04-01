<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class libraries_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //obtenemos las entradas de todos o un usuario, dependiendo
    // si le pasamos le id como argument o no
    public function allLibraries($table)
    {

        $this->db->select('*');
        $this->db->from($table);

        $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }


}
/*
 * end of application/models/consultas_model.php
 */
