<?php

abstract class BaseManager
{
    
    private function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function setDB(PDO $db)
    {
        $this->setDB($db);
    }

    public function add(Perso $perso)
    {
        $this->db;
    }

    public function getOne($id)
    {
		return $this->db->query('SELECT * FROM `personnages` WHERE id=?',[$id]);
	}

    public function getAll()
    {
        return $this->db->query('SELECT * FROM `personnages` ORDER BY id DESC');
    }

    
}