<?php

namespace App\Repository\Eloquent;

use App\Models\UserModel;
use App\Repository\Contract\UserRepository;
use Illuminate\Support\Facades\DB;

class EloquentUserRepository implements UserRepository
{
    public function list()
    { 
        
    }

    public function find($id)
    {

    }

    public function filtered($search)
    {
        $query = DB::table('einzig_user as eu'); 
        $query->whereNull('eu.deleted_at');
        $query->orderBy('eu.updated_at', 'DESC'); 
        return $query;
    }
 
   
    public function create($data)
    {
       
        $dateTime = $data['date'].' '.$data['hour'].':'.$data['minute'].' '.$data['am_pm'];  

        $imageDetail = pathinfo($data['image']->getClientOriginalName());
        $imageName   = md5(microtime().$data['image']->getClientOriginalName()).'.'.$imageDetail['extension']; 
        $imagePath   = $data['image']->storeAs('user/image', $imageName, 'public');

        $c_data                  = array();
        $c_data['name']          = $data['name']; 
        $c_data['email']         = $data['email'];  
        $c_data['subject']       = $data['subject']; 
        $c_data['message']       = $data['message']; 
        $c_data['date_time']     = $dateTime; 
        $c_data['image']         = $imagePath; 
        $result = UserModel::create($c_data);
        return $result->id;
    }

    public function update($id, $data)
    {
        
    }
 

    public function delete($data)
    { 

    }

}