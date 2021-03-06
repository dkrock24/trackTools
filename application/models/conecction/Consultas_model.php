<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Consultas_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //obtenemos las entradas de todos o un usuario, dependiendo
    // si le pasamos le id como argument o no
    public function users_entrys($table)
    {

        $this->db->select('*');
        $this->db->from($table);          
        
        $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }

    public function menu(){
    	$id = 1;
    	$this->db->select('*');
        $this->db->from('track_menus m');        
        $this->db->where('m.status',$id);
        $query = $this->db->get();
        return $query->result();
    }
    public function subMenu(){
    	$id = 1;
    	$this->db->select('*');
        $this->db->from('track_sub_menu s');        
        $this->db->where('s.status',$id);
        $query = $this->db->get();
        return $query->result();
    }

    public function users($user,$table)
    {

        $this->db->select('*');
        $this->db->from($table);   
        $this->db->where('nickname',$user);       
        
        $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }

    public function developerCount($table)
    {
        return $this->db->count_all_results($table);
    }
 
    //obtenemos todos los comentarios de un usuario y sus datos si le pasamos
    //un id como argumento, y si no los cogemos todos
    public function users_coments($id = false)
    {
        if($id === false)
        {
            $this->db->select('u.username,c.titulo_comentario,c.comentario,c.comment_date');
            $this->db->from('comentarios c');
            $this->db->join('users u', 'c.id_user = u.id');
        }else{
            $this->db->select('u.username,c.titulo_comentario,c.comentario,c.comment_date');
            $this->db->from('comentarios c');
            $this->db->join('users u', 'c.id_user = u.id');
            $this->db->where('u.id',$id);
        }
        $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }
 
    public function consulta_encadendada($id)
    {
        $this->db->select('username')->from('users')->where('id >=', $id)->limit(0, 10);
        $query = $this->db->get();
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }
 
    public function search_users($string,$pos_comodin)
    {
        $this->db->like('username', $string, $pos_comodin);
        $query = $this->db->get('users');
        if($query->num_rows() > 0 )
        {
            return $query->result();
        }
    }
 
    //contamos todos los resultados de la tabla
    //que pasemos como argumento
    public function count_results($table)
    {
        return $this->db->count_all_results($table);
    }
 
    //obtenemos un usuario dependiendo del id que le pasemos
    public function consulta_get_where($id)
    {
        $query = $this->db->get_where('users',array('id' => $id));
        if($query->num_rows() > 0 )
        {
            //veamos que sólo retornamos una fila con row(), no result()
            return $query->row();
        }
    }
    
    //insertamos un nuevo usuario en la tabla users
    public function insert_user()
    {
        $data = array(
            'username'       =>   'Juan68',
            'fname'          =>   'Juan',
            'lname'          =>   'Pérez',
            'register_date'  =>    '2013-01-19 10:00:00'
            );
            $this->db->insert('users',$data);
    }
   
    //eliminamos al usuario con id = 1
    public function delete_user()
    {
        $this->db->delete('users', array('id' => 1));
    }
 
    //actualizamos los datos del usuario con id = 3
    public function update_user()
    {
        $data = array(
            'username' => 'silvia',
            'fname' => 'madrejo',
            'lname' => 'sánchez'
        );
        $this->db->where('id', 3);
        $this->db->update('users', $data);
    }

    public function shortCut($table){
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