<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class sites_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //obtenemos las entradas de todos o un usuario, dependiendo
    // si le pasamos le id como argument o no
    public function allSites($table)
    {
        $this->db->select('*, D.nameDomain');
        $this->db->from($table);
        $this->db->join('track_domain as D','D.idDomain = track_domain_site.idSiteDomain');
        //$this->db->join('track_users_rol as R','R.id_rol = track_users.rol');
        ///$this->db->join('track_users_positions as P','P.idPosition = track_users.idPosition');
        //$this->db->join('track_users as U','U.idUser = track_users.idSupervisor');
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
