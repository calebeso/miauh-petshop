<?php

namespace App\Http\Controllers\Costumer;

use App\Http\Controllers\Controller;
use App\Model\Costumer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costumers = Costumer::all();
        return view('admin.costumers.index')->with('costumers', $costumers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.costumers.create');
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
            'full_name' => 'required', 
            'phone' => 'required',
            'cpf' => 'required|formato_cpf'
        ];

        $custom = [
            'full_name.required' => 'O campo nome é obrigatório!',
            'phone.required' => 'O campo telefone é obrigatório!',
            'cpf.formato_cpf' => 'O formato do CPF está incorreto!',
            'cpf.required' => 'O campo CPF é obrigatório!'
        ];

        $validator = Validator::make($request->all(), $validate, $custom);

        if($validator->fails()){
            return redirect('costumer/cadastrar-cliente')->withErrors($validator);
        }

        $data = new Costumer();
        $input = $request->all();
        $data->fill($input)->save();

        return redirect('costumer/clientes');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models  $models
     * @return \Illuminate\Http\Response
     */
    public function edit(Models $models)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models  $models
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Models $models)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models  $models
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Costumer::find($id)->delete();
        return redirect('costumer/clientes');
    }
}
