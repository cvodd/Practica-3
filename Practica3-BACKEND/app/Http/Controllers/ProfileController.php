<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function getProfile()
{
    // Lógica para obtener el perfil del usuario
    try{
         $profile = Profile::orderBy('created_at', 'desc')->get();
            return response()->json($profile, 200);

    }
    catch(\Exception $e)
    {
        return response()->json(['message' => 'Error al obtener el perfil'], 500);
    }
}

public function updateProfile(Request $request, int $id)
    {

        $fields= $request->validate(([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'city' => 'required',
            'country' => 'required',
            'summary' => 'required',
            'frameworks' => 'required',
            'hobbies' => 'required',
        ]));
        try{
            DB::beginTransaction();
            $profile = Profile::find($id);

            if (!$profile) {
                return response()->json(['message' => 'Perfil no encontrado'], 404);
            }

            // Actualiza los campos según los datos proporcionados en la solicitud
            $profile->update([
                'name' => $fields['name'],
                'lastname' => $fields['lastname'],
                'email' => $fields['email'],
                'city' => $fields['city'],
                'country' => $fields['country'],
                'summary' => $fields['summary'],
                'frameworks' => $fields['frameworks'],
                'hobbies' => $fields['hobbies'],

            ]);
            DB::commit();
            return response()->json($profile);
        }
        catch(\Exception $e)
        {
            DB::rollBack();
            return response()->json(['message' => 'Error al actualizar el perfil', 'error' => $e->getMessage()], 500);
        }

    }
}
