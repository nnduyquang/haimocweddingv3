<?php

namespace App\Repositories\Location;

interface LocationRepositoryInterface
{
    public function getAllLocation();

    public function createLocation($request);

    public function findLocationById($id);

    public function updateLocation($request, $id);

    public function deleteLocation($id);

    public function searchLocation($request);
}