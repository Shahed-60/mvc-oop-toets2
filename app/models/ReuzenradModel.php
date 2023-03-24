<?php

class reuzenradModel
{
    private $db;


    public function __construct()
    {
        $this->db = new Database();
    }

    public function getreuzenrad()
    {
        $sql = "SELECT Naam
                    ,  Hoogte
                    ,Land
                    ,Kosten
                    ,AantalPassagiers
            FROM    Reuzenrad
            order by Id asc";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
