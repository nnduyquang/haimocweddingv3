<?php

namespace App\Repositories\Location;

use App\Location;
use App\Repositories\EloquentRepository;

class LocationRepository extends EloquentRepository implements LocationRepositoryInterface
{


    public function getAllLocation()
    {
        $locations = parent::getAll();
        return $locations;
    }

    public function getModel()
    {
        return Location::class;
    }

    public function createLocation($request)
    {
        $data = array();
        $name = $request->input('name');
        $imagePC = $request->input('image_pc');
        $imagePC = substr($imagePC, strpos($imagePC, 'images'), strlen($imagePC) - 1);
        $imageMobile = $request->input('image_mobile');
        $imageMobile = substr($imageMobile, strpos($imageMobile, 'images'), strlen($imageMobile) - 1);
        $isActive = $request->input('is_active');
        $order = $request->input('order');
        if ($isActive) {
            $data['is_active'] = 1;
        } else {
            $data['is_active'] = 0;
        }
        if ($order) {
            $data['order'] = $order;
        } else {
            $data['order'] = 1;
        }
        $data['name'] = $name;
        $data['path'] = chuyen_chuoi_thanh_path($name);
        $data['image_pc'] = $imagePC;
        $data['image_mobile'] = $imageMobile;
        return parent::create($data);
    }

    public function findLocationById($id)
    {
        return parent::find($id);
    }

    public function updateLocation($request, $id)
    {
        $data = array();
        $name = $request->input('name');
        $imagePC = $request->input('image_pc');
        $imagePC = substr($imagePC, strpos($imagePC, 'images'), strlen($imagePC) - 1);
        $imageMobile = $request->input('image_mobile');
        $imageMobile = substr($imageMobile, strpos($imageMobile, 'images'), strlen($imageMobile) - 1);
        $isActive = $request->input('is_active');
        $order = $request->input('order');
        if ($isActive) {
            $data['is_active'] = 1;
        } else {
            $data['is_active'] = 0;
        }
        if ($order) {
            $data['order'] = $order;
        } else {
            $data['order'] = 1;
        }
        $data['name'] = $name;
        $data['path'] = chuyen_chuoi_thanh_path($name);
        $data['image_pc'] = $imagePC;
        $data['image_mobile'] = $imageMobile;
        return parent::update($id, $data);
    }

    public function deleteLocation($id)
    {
        parent::delete($id);
    }

    public function searchLocation($request)
    {
        $data = array();
        $keywords = preg_replace('/\s+/', ' ', $request->input('txtSearch'));
        $locations = Location::where('name', 'like', '%' . $keywords . '%')->orderBy('id', 'DESC')->paginate(5);
        $data['keywords'] = $keywords;
        $data['locations'] = $locations;
        return $data;
    }


}