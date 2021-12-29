<?php

namespace App\Repository\Contract;

interface BaseRepository 
{     
   
    public function list();

    public function find($id);
   
    public function create($attributes);

    public function update($id, $attributes);

    public function filtered($search);    

    public function delete($id);
 
}