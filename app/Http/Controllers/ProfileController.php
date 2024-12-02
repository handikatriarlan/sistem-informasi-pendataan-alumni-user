<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'pageTitle' => 'Profil',
        ];

        return view('front.profile', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'foto' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255|unique:users,email,' . $user->id,
            'tanggal_lahir' => 'nullable|date',
            'tempat_lahir' => 'nullable|string|max:255',
            'jenis_kelamin' => 'nullable|in:L,P',
            'nis' => 'nullable|numeric|unique:users,nis,' . $user->id,
            'tahun_lulus' => 'nullable|numeric|min:1900|max:' . date('Y'),
            'alamat' => 'nullable|string|max:1000',
            'no_phone' => 'nullable|string|max:15',
            'pendidikan_lanjut' => 'nullable|string|max:255',
            'pekerjaan' => 'nullable|string|max:255',
            'password' => 'nullable|string|min:8',
        ]);

        if ($request->filled('password')) {
            $validatedData['password'] = Hash::make($request->password);
        } else {
            $validatedData['password'] = $user->password;
        }

        $updateData = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'tanggal_lahir' => $validatedData['tanggal_lahir'],
            'tempat_lahir' => $validatedData['tempat_lahir'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'nis' => $validatedData['nis'],
            'tahun_lulus' => $validatedData['tahun_lulus'],
            'alamat' => $validatedData['alamat'],
            'no_phone' => $validatedData['no_phone'],
            'pendidikan_lanjut' => $validatedData['pendidikan_lanjut'] ?? $user->pendidikan_lanjut,
            'pekerjaan' => $validatedData['pekerjaan'] ?? $user->pekerjaan,
            'password' => $validatedData['password'],
        ];

        if ($request->filled('foto')) {
            $updateData['foto'] = $validatedData['foto'];
        }

        $user->update($updateData);

        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
