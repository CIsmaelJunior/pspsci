<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;

class Teamcontroller extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('admin.liste-equipes', compact('teams'));
    }

    public function store(REQUEST $request)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenoms' => 'required|string|max:255',
            'fonction' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'titre' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'x' => 'nullable|string|max:255',
            'skype' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        try {
            // Gestion de l'upload de la photo
            $photoPath = null;
            if ($request->hasFile('photo')) {
                $photoPath = $request->file('photo')->store('teams', 'public');
                $photoPath = str_replace('public/', '', $photoPath);
            }

            // Création du membre de l'équipe
            Team::create([
                'titre' => $request->titre,
                'nom' => $request->nom,
                'prenoms' => $request->prenoms,
                'fonction' => $request->fonction,
                'photo' => $photoPath,
                'facebook' => $request->facebook,
                'linkedin' => $request->linkedin,
                'x' => $request->x,
                'skype' => $request->skype,
                'description' => $request->description,
            ]);

            notify()->success('Welcome to Laravel Notify ⚡️', 'Membre ajouté avec succès. ⚡️');
            return redirect()->route('admin-teams-lists');

        } catch (\Exception $e) {
            // En cas d'erreur, supprimer la photo si elle a été uploadée
            if ($photoPath) {
                Storage::delete('public/' . $photoPath);
            }

            notify()->warning('Une erreur est survenue lors de l\'ajout du membre.', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }
}
