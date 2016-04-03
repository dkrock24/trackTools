<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class frameworks_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //obtenemos las entradas de todos o un usuario, dependiendo
    // si le pasamos le id como argument o no
    public function allFrameworks($table)
    {

        $this->db->select('*');
        $this->db->from($table);
        $this->db->join('track_languages_programing as LP','track_language_framework.LenguageFramework = LP.idLanguages');

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
