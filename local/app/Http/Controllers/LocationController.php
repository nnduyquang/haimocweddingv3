<?php

namespace App\Http\Controllers;

use App\Repositories\Location\LocationRepositoryInterface;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    protected $locationRepository;

    public function __construct(LocationRepositoryInterface $locationRepository)
    {
        $this->locationRepository = $locationRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $locations = $this->locationRepository->getAllLocation();
        return view('backend.admin.location.index', compact('locations'))->with('i', ($request->input('page', 1) - 1) * 5);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.location.create', compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->locationRepository->createLocation($request);
        return redirect()->route('location.index')->with('success', 'Tạo Mới Thành Công Địa Điểm');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = $this->locationRepository->findLocationById($id);
        return view('backend.admin.location.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->locationRepository->updateLocation($request, $id);
        return redirect()->route('location.index')->with('success', 'Cập Nhật Thành Công Địa Điểm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->locationRepository->deleteLocation($id);
        return redirect()->route('location.index')->with('success', 'Đã Xóa Thành Công');
    }

    public function search(Request $request)
    {
        $data = $this->locationRepository->searchLocation($request);
        $locations = $data['locations'];
        $keywords = $data['keywords'];
        return view('backend.admin.location.index', compact('locations', 'keywords'))->with('i', ($request->input('page', 1) - 1) * 5);
    }
}
