<?php
class Country extends BaseController
{
    private $countryModel;
    public function __construct()
    {
        $this->countryModel = $this->model('CountryModel');
    }

    public function getCountries()
    {
        // echo "Dit is de get Countries method in de Counrty class";

        $result = $this->countryModel->getCountries();

        $rows = "";
        foreach ($result as $country) {
            $rows .= "<tr>
                    <td>$country->Id</td>
                    <td>$country->Name</td>
                    </tr>";
        }
        // var_dump($result);

        $data = [
            'title' => 'Overzicht landen!!!',
            'rows'  => $rows
        ];
        $this->view('country/getCountries', $data);
    }
}
