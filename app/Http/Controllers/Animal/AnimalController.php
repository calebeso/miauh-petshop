<?php

namespace App\Http\Controllers\Animal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Animal;
use Illuminate\Support\Facades\Validator;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::all();
        return view('animals.index')->with('animals', $animals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $validate = [
            'name' => 'required',
            'animal_type' => 'required'
        ];

        $custom = [
            'name.required' => 'O campo nome é obrigatório!',
            'animal_type' => 'O campo tipo do animal é obrigatório'
        ];

        $validator = Validator::make($request->all(), $validate, $custom);

        if($validator->fails()){
            return redirect('animal/cadastrar-animal')->withErros($validator);
        }

        $data = new Animal();
        $input = $request->all();
        $data->fill($input)->save();

   
       return redirect('animal/animais')->with('success', 'Animal cadastrado com sucesso!');
        
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        return view('animals.edit')->with(['animal' => $animal]);
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
        $data = Animal::findOrFail($id);
        $input = $request->all();

        $validate = [
            'name' => 'required',
            'animal_type' => 'required'
        ];

        $custom = [
            'name.required' => 'O campo nome é obrigatório!',
            'animal_type' => 'O campo tipo do animal é obrigatório'
        ];

        $validator = Validator::make($request->all(), $validate, $custom);

        if($validator->fails()){
            return redirect('animal/cadastrar-animal')->withErros($validator);
        }

        $data->update($input);

        return redirect('animal/animais');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Animal::find($id)->delete();
        return redirect()->route('animal.list');
    }
}
