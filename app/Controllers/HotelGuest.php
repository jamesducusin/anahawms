<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HotelGuest extends BaseController
{
    protected $session;
    protected $roomModel;
    protected $roomTypeModel;
    protected $uspModel;
    protected $serviceModel;
    protected $reviewModel;
    protected $tabModel;
    protected $promoModel;
    public function __construct()
    {
        helper(['StarRating', 'Toastr']);
        $this->session = session();
        $this->roomModel = new \App\Models\RoomModel();
        $this->roomTypeModel = new \App\Models\RoomType();
        $this->serviceModel = new \App\Models\ServiceModel();
        $this->reviewModel = new \App\Models\ReviewModel();
        $this->promoModel = new \App\Models\PromoModel();
    }
    public function index()
    {

        $data = [
            'rooms' => $this->roomTypeModel
                ->findAll(),
            'services' => $this->serviceModel->select('*, services.id as sid, reviews.id as rid')
                ->selectAvg('rate')
                ->selectCount('rate', 'rateCount')
                ->orderBy('rate', 'desc')
                ->orderBy('rateCount', 'desc')
                ->join('reviews', 'services.id = reviews.service_id', 'left')
                ->groupBy('services.id')

                ->findAll(),

            'featured' => $this->promoModel->select('*, promos.name as pname, promos.description as pdescription')
                ->join('room_types', 'room_types.id = promos.roomtype_id', 'inner')
                ->where(["promos.status" => 1])->find(),
        ];
        // var_dump($data['rooms']);
        return view('guest/mix-layout', $data);
    }

    public function listing()
    {
        return view('guest/hotel-listing');
    }

    public function booking($id = null)
    {
        if ($this->request->getPost()) {
        }
        return view('guest/hotel-booking');
    }


    public function detail($id)
    {

        $facilityModel = new \App\Models\FacilityModel();
        $facilityType = new \App\Models\FacilityType();
        $photoModel = new \App\Models\PhotoModel();
        $data = [
            'details' => $this->roomTypeModel->select('*, rooms.id as rid, room_types.id as rtid')
                ->join('rooms', 'room_types.id = rooms.type_id', 'inner')
                ->find($id),

            'facilities' => $facilityModel->select('*')
                ->findAll(),
            'facility_types' => $facilityType->findAll(),

            'reviews' => $this->reviewModel->select('*, profiles.name as pname, reviews.id as rid, users.id as uid, profiles.id as pid')
                ->selectAvg('rate', 'rerate')
                ->selectCount('rate', 'rateCount')
                ->groupBy('reviews.id')
                ->orderBy('rate', 'desc')
                ->join('users', 'reviews.user_id = users.id', 'inner')
                ->join('profiles', 'users.id = profiles.user_id', 'inner')
                ->where('reviews.service_id', 1)
                ->findAll(),
            'rateAvg' =>  $this->reviewModel->selectAvg('rate', 'rating')
                ->where('reviews.service_id', 1)->find(),
            'photos' => $photoModel->findAll(),

            'rooms' => $this->roomTypeModel
                ->where("id !=", $id)
                ->findAll(),
        ];
        // var_dump($data['rateAvg']);
        return view('guest/hotel-detail', $data);
    }
    public function checkAvailability()
    {
    }

    public function commingsoon()
    {
        if ($this->request->getPost()) {
            $newModel = new \App\Models\NewModel();
            $validation = $this->validate($newModel->validationRules);
            $this->session->setFlashdata('info', 'Thank you, please wait for further notice.');
            if ($validation) {
                $newModel->insert(['email' => $this->request->getPost('email')]);
                return redirect('/');
            }
            return redirect('/'); 
        }
        return view('guest/comming-soon');
    }

    public function dashboard()
    {
        return view('guest/user-dashboard');
    }
}
