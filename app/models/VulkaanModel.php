<?php

class vulkaanModel
{
    private $db;


    public function __construct()
    {
        $this->db = new Database();
    }

    public function getvulkaan()
    {
        $sql = "SELECT Naam
                    ,  Hoogte
                    ,Land
                    ,JaarLaatsteUitbasrting
                    ,AantalSlachtoffers
            FROM    Vulkaan";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
