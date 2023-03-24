<?php

class Vulkanen extends BaseController
{
    private $vulkanen;
    public function __construct()
    {
        $this->vulkaanModel = $this->model('VulkaanModel');
    }

    public function index()
    {
        $result = $this->vulkaanModel->getVulkaan();
        // var_dump($result);

        $rows = '';
        foreach ($result as $vulkaan) {
            $rows .= "<tr>
                    <td>$vulkaan->Naam</td>
                    <td>$vulkaan->Hoogte</td>
                    <td>$vulkaan->Land</td>
                    <td>$vulkaan->JaarLaatsteUitbasrting</td>
                    <td>$vulkaan->AantalSlachtoffers</td>
                    
                    </tr>";
        }
        $data = [
            'title' => 'Top 5 actiefste vulkanen ter wereld',
            'rows' => $rows
        ];

        $this->view('Vulkaan/index', $data);
    }
}
