<?php

namespace App\Models;

use CodeIgniter\Model;

class General extends Model
{
    // Seleccionar Datos
    public function selectData($table,$where=false)
    {
        $builder = $this->db->table($table);
        if ($where!=false) {
            $query = $builder->getWhere($where);
        }
        else{
            $query = $builder->get();
        }

        return $query->getResult();
        
    }
    
    // Seleccionar Datos
    public function selectSomeData($select,$table,$where=false,$order_by=false,$groupBy=false,$limit=false,$join=false)
    {
        $builder = $this->db->table($table);
        $builder->select($select);
        if ($order_by !=false) {
            $builder->orderBy($order_by);
        }
        if ($groupBy !=false) {
            $builder->groupBy($groupBy);
        }
        if ($limit !=false) {
            $builder->limit($limit);
        }
        if ($join != false) {
            $builder->join($join['table'],$join['where'],$join['type']);
        }
        if ($where!=false) {
            $query = $builder->getWhere($where);
        }
        else{
            $query = $builder->get();
        }

        return $query->getResult();
        
    }
    
    // insertar Datos
    public function insertData($table,$set)
    {
        $builder = $this->db->table($table);
        $query = $builder->insert($set);
        return $query;
        
    }
    
    
    public function updateData($table,$set,$where)
    {
        $builder = $this->db->table($table);
        $query = $builder->update($set,$where);
        return $query;
        
    }
    public function deleteData($table,$where)
    {
        $builder = $this->db->table($table);
        $builder->where($where);
        $query = $builder->delete();
        return $query;
        
    }
}