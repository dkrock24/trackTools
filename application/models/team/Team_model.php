<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Team_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //obtenemos las entradas de todos o un usuario, dependiendo
    // si le pasamos le id como argument o no
    public function allTeam($table)
    {

        $this->db->select('*');
        $this->db->from($table);
        $this->db->join('track_users as users', 'users.idUser = track_team.ownerQ');

        $query = $this->db->get();
        //echo $this->db->queries[0];
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }


}
/*
 * end of application/models/consultas_model.php
 */
