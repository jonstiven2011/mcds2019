<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{   
    //este metodo es para hacer que despues del logueo no vuelva a iniciar sesion solo con el link, es darle seguridad a la vista
    public function __constructor(){
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Llamado de todos los campos
        //return User::All();
        //return response()->json(['Usuarios'=>User::All()]);
        //$users = User::all();
        $users = User::paginate(10);

        return view('users.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
         //Metodo para guardar todos los datos
         //return Bodegatecnico::create($request->all());
        //dd("Form Create");
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //Almacenamiento de datos
        //dd($request->all());
        $user = new User;
        $user->fullname     = $request->fullname;
        $user->email        = $request->email;
        $user->phone        = $request->phone;
        $user->birthdate    = $request->birthdate;
        $user->gender       = $request->gender;
        $user->address      = $request->address;
        if($request->hasFile('photo')){
            $file = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('imgs'),$file);
            $user->photo = 'imgs/'.$file;
        }
        $user->password = bcrypt($request->password);

        if($user->save()){
            return redirect('users')->with('message', 'El Usuario: '.$user->fullname.' fue Adicionado con Exito!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //mostrar un unico dato, esta en la vista show
        $user = User::find($id);
        return view('users.show')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //editar datos
        $user = User::find($id);
        return view('users.edit')->with('user', $user);

    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        //
        dd($request->all());

        //Modificar usuario
        $user = User::find($id);
        $user->fullname     = $request->fullname;
        $user->email        = $request->email;
        $user->phone        = $request->phone;
        $user->birthdate    = $request->birthdate;
        $user->gender       = $request->gender;
        $user->address      = $request->address;
        if($request->hasFile('photo')){
            $file = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('imgs'),$file);
            $user->photo = 'imgs/'.$file;
        }

        if($user->save()){
            return redirect('users')->with('message', 'El Usuario: '.$user->fullname.' fue Modificado con Exito!');
        }else{
            return redirect('users')->with('message', 'El Usuario: '.$user->fullname.' No pudo ser modificado. Intentelo de nuevo');
        }

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
