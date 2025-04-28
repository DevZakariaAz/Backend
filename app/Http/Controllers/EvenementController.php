<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    public function index()
    {
        return Evenement::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'statut' => 'required|in:En cours,Terminé,Annulé',
            'priorite' => 'required|in:Haute,Moyenne,Basse',
        ]);

        return Evenement::create($request->all());
    }

    public function show(Evenement $evenement)
    {
        return $evenement;
    }

    public function update(Request $request, Evenement $evenement)
    {
        $request->validate([
            'nom' => 'required|string',
            'statut' => 'required|in:En cours,Terminé,Annulé',
            'priorite' => 'required|in:Haute,Moyenne,Basse',
        ]);

        $evenement->update($request->all());
        return $evenement;
    }

    public function destroy(Evenement $evenement)
    {
        $evenement->delete();
        return response()->json(null, 204);
    }
}
