<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HotelAdmin extends BaseController
{
    public function __construct()
    {

        helper(['url', 'form', 'Toastr']);
        $this->room_type_model = model('RoomType');
        $this->rooms_model = model('RoomModel');
        $this->housekeeping_model = model('HousekeepingModel');
        $this->user_model = model('UserModel');
        
         
    }
    public function dashboard()
    {
        return view('admin/dashboard');
    }
    public function room_type()
    {
        return view('admin/room-type');
    }
    public function booking()
    {
        return view('admin/booking');
    }
    public function room()
    {
        $room_value = $this->request->getPost('room_value');
    
       
        if($room_value === 'insert_room'){
            $validated = $this->validate([
                'room_number' => [
                    'rules' => 'is_unique[rooms.roomNumber]',
                    'errors' => [
                        'is_unique' => 'Your Email is already Exist'
                    ]
                ]
            ]);

            if (!$validated)
            {
                return redirect('admin/room')->with('danger', 'Room has already been added');
            }
            else
            {
                $floor = $this->request->getPost('floor');
                $room_numbers = $this->request->getPost('room_number');
                $room_type_ids = $this->request->getPost('room_type_id');
                
                // I-check kung parehas ang haba ng mga array
                if (count($room_numbers) === count($room_type_ids)) {
                    $values = [];
                
                    // Gamitin ang foreach loop para ma-iterate ang mga room numbers at room type IDs nang sabay
                    foreach ($room_numbers as $key => $room_number) {
                        $values[] = [
                            'floor' => $floor,
                            'roomNumber' => $room_number,
                            'type_id' => $room_type_ids[$key],
                            'status' => '0'
                        ];
                    }
                }
    
                foreach ($values as $value){
                    $this->rooms_model->insert($value);
                }

                return redirect('admin/room')->with('success', 'Room has been added');
            }
        }
        elseif($room_value === 'update_room'){
            $id = $this->request->getPost('id');

            $values = [
                'floor' => $this->request->getPost('floor'),
                'roomNumber' => $this->request->getPost('room_number'),
                'type_id' => $this->request->getPost('room_type_id')
            ];

            $this->rooms_model->update($id, $values);

            return redirect('admin/room');
        }
        elseif($room_value === 'delete_room_value'){
            $room_id = $this->request->getPost('room_id');

            $this->rooms_model->delete($room_id);
        }
        elseif($room_value === 'housekeeping_status'){
            $date_limit_str  = $this->request->getPost('date_limit');
            $datetime = date_create_from_format('j M Y', $date_limit_str); 
            $formatted_date_limit = $datetime->format('Y-m-d H:i:s');

            $values = [
                'room_id' => $this->request->getPost('housekeeping_room_id'),
                'status' => ($this->request->getPost('status') === 'Dirty')?0:1,
                'remarks' => $this->request->getPost('remarks'),
                'user_id' => $this->request->getPost('user_id'),
                'date_limit' => $formatted_date_limit
            ];
            // var_dump($values['status']);

            $housekeeping_find = $this->housekeeping_model->where('id', $this->request->getPost('housekeeping_id'))->first();

            if($housekeeping_find == null){
                $this->housekeeping_model->insert($values);
            }
            else{
                $this->housekeeping_model->update($housekeeping_find['id'], $values);
            }
            return redirect('admin/room');
        }
        else
        {
            $data = [
                'room_type_datas' => $this->room_type_model->findAll(),
                'rooms' => $this->rooms_model
                ->select('*, rooms.id, housekeeping.id as housekeeping_id, housekeeping.status as housekeeping_status,  rooms.status as rooms_status')
                ->join('room_types', 'rooms.type_id = room_types.id', 'inner')
                ->join('housekeeping', 'rooms.id = housekeeping.room_id', 'left')
                ->join('profiles', 'housekeeping.user_id = profiles.user_id', 'left')
                ->findAll(),

                'users' => $this->user_model
                ->select('*, users.id')
                ->join('profiles', 'users.id = profiles.user_id', 'inner')
                ->where('usertype', 'Guest')
                ->findAll()
            ];

        return view('admin/room', $data);
          
        }
        
    }
    public function price_manager()
    {
        return view('admin/price-manager');
    }
    public function service()
    {
        return view('admin/service');
    }
    public function housekeeping($delete = null)
    {
        $update_housekeeping = $this->request->getPost('update_housekeeping');

        if($update_housekeeping == 'update_housekeeping'){
            $idd = $this->request->getPost('idd');

            $data = [
                'status' => ($this->request->getPost('housekeeping_status') === 'Dirty')?0:1,
                'remarks' => $this->request->getPost('remarks'),
                'user_id' => $this->request->getPost('user_id'),
                'date_limit' => $this->request->getPost('date_limit'),
            ];

            $this->housekeeping_model->update($idd, $data);
            // var_dump($this->request->getPost('housekeeping_status'));

            return redirect('admin/housekeeping')->with('success', 'Room has been added');
        }
        elseif($update_housekeeping == 'add_housekeeping'){

            $date_limit_str  = $this->request->getPost('date_limit');
            $datetime = date_create_from_format('j M Y', $date_limit_str); 
            $formatted_date_limit = $datetime->format('Y-m-d H:i:s');
            
            $data = [
                'room_id' => $this->request->getPost('roomNumber'),
                'status' => $this->request->getPost('housekeeping_status'),
                'remarks' => $this->request->getPost('remarks'),
                'user_id' => $this->request->getPost('user_id'),
                'date_limit' => $date_limit_str,
            ];

            $housekeeping_id_finder = $this->housekeeping_model->where('room_id', $this->request->getPost('roomNumber'))->first();

            if($housekeeping_id_finder == null){
                $this->housekeeping_model->insert($data);
            }
            else{
                $this->housekeeping_model->update($housekeeping_id_finder['id'], $data);
            }

            // var_dump($data);
            return redirect('admin/housekeeping')->with('success', 'Room has been added');
            
        }
        else{
            $data = [
                'datas' => $this->housekeeping_model
                ->select('*, housekeeping.id as housekeeping_id, housekeeping.status as housekeeping_status')
                ->join('rooms', 'housekeeping.room_id = rooms.id', 'inner')
                ->join('room_types', 'rooms.type_id = room_types.id', 'inner')
                ->join('users', 'housekeeping.user_id = users.id', 'inner')
                ->join('profiles', 'users.id = profiles.user_id', 'inner')
                ->get()->getResultArray(),

                'room_data' => $this->rooms_model->findAll(),

                'users' => $this->user_model
                ->select('*, users.id')
                ->join('profiles', 'users.id = profiles.user_id', 'inner')
                ->where('usertype', 'Guest')
                ->findAll()
            ];
            return view('admin/housekeeping', $data);
        }
    }

    public function guest()
    {
        return view('admin/guest');
    }
    public function amenity()
    {
        return view('admin/amenity');
    }
    public function walkthrough()
    {
        return view('admin/walkthrough-booking');
    }

}
