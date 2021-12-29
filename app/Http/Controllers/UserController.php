<?php

namespace App\Http\Controllers;

use App\Http\Requests\user\UserCreate;
use App\Repository\Contract\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    
    public function index(Request $request)
    {
        $search = []; 
        $this->data                 = [];
        $this->data['collection']   = $this->userRepository->filtered($search)->paginate(10); 
        
        $this->data['title']        = "User"; 
        $this->data['base_url']     = route('user.index'); 
        if ($request->ajax()) {
            return view('user.records', $this->data);
        }
        return view('user.list', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data = array();    
        $this->data['title']        = "User | Create"; 
        $this->data['base_url']     = route('user.create'); 
        return view('user.create', $this->data); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreate $userCreateRequest)
    {
        $this->userRepository->create($userCreateRequest->all()); 
        return response()->json([
            'success' => true,
            'message' => "User Added Successfully!",
            'redirect' => route('user.index')
            ]
         );
    }

    
}
