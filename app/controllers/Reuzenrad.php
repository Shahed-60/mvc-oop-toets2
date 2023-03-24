<?php

class Reuzenrad extends BaseController
{
    private $reuzenradModel;
    public function __construct()
    {
        $this->reuzenradModel = $this->model('reuzenradModel');
    }

    public function index()
    {
        $result = $this->reuzenradModel->getReuzenrad();
        // var_dump($result);

        $rows = '';
        foreach ($result as $reuzenrad) {
            $rows .= "<tr>
                    <td>$reuzenrad->Naam</td>
                    <td>$reuzenrad->Hoogte</td>
                    <td>$reuzenrad->Land</td>
                    <td>$reuzenrad->Kosten</td>
                    <td>$reuzenrad->AantalPassagiers</td>
                    
                    </tr>";
        }
        $data = [
            'title' => 'Top 5 hoogste reuzenrad ter wereld',
            'rows' => $rows
        ];

        $this->view('Reuzenrad/index', $data);
    }
}
