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
        $search['name']         = $request->input('name');
        $search['username']     = $request->input('username');
        $search['email']        = $request->input('email'); 
        $search['contact']      = $request->input('contact'); 
        $search['speciality']      = $request->input('speciality'); 
        $search['from_date']    = $request->input('from_date');
        $search['to_date']      = $request->input('to_date'); 

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}