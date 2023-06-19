<?php

namespace app\controllers;

use app\models\City;

class StateController
{
    //
    public function getCitiesJson ()
    {
        if (empty($_GET['state'] && !is_int($_GET['state'])))
        {
            http_response_code(400);
            return false;
        }

        $cities = new City;
        echo json_encode($cities->findBy("state_id", $_GET['state'])) ?? http_response_code(404);
        die;
    }
}