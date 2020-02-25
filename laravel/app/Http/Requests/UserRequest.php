<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *|not_regex:/^.+$/i
     * @return array
     */
    public function rules()
    {
        if($this->method('put')){
            return [
                //
                'fullname'      => 'required|min:10',
                'email'         => 'required|email|unique:users'.$this->id,
                'phone'         => 'required|numeric|min:9',
                'birthdate'     => 'required|date|after:start_date',
                'gender'        => 'required',
                'address'       => 'required'
            ];
        }else{

            return [
                //
                'fullname'      => 'required|min:10',
                'email'         => 'required|email|unique:users',
                'phone'         => 'required|numeric|min:9',
                'birthdate'     => 'required|date|after:start_date',
                'gender'        => 'required',
                'address'       => 'required',
                'photo'         => 'required|file|max:800',
                'password'      => 'required|confirmed'
            ];
        }
        
    }
    public function messages()
    {
        return[
            'fullname.required'     => 'El campo Nombre Completo es obligatorio',
            'fullname.min'          => 'El campo Nombre Completo debe contener al menos :min catacteres',
            'email.required'        => 'El campo Correo Electronico es obligatorio',
            'email.email'           => 'El campo Correo Electronico debe ser una dirección de correo válida',
            'email.unique'          => 'El campo Correo Electronico ya esta en uso',
            'phone.required'        => 'El campo Número Telefónico  debe obligatorio',
            'phone.numeric'         => 'El campo Número Telefónico  debe ser un número',
            'birthdate.required'    => 'El campo Fecha Nacimiento es obligatorio',
            'birthdate.date'        => 'El campo Fecha Nacimiento debe ser una fecha',
            'gender.required'       => 'El campo Genero es obligatorio',
            'address.required'      => 'El campo Dirección es obligatorio',
            'photo.required'        => 'El campo Foto debe ser obligatorio',
            'photo.max'             => 'El campo Foto no debe pesar más de :max kilobytes',
            'password.required'     => 'El campo Contraseña es obligatorio',
            'password.confirmed'    => 'El campo Confirmación Contraseña no coincide'

        ];
        
    }
}
