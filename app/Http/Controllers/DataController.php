<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Data;
use Illuminate\View\View;

class DataController extends Controller
{
    public function index(): View
    {
        $data = Data::all();
        return view('data.index')->with('data', $data);
    }

    public function create(): View
    {
        return view('data.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'lokasi' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jumlah_korban' => 'required|in:1,2,lebih dari 2',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('images', 'public');
        }

        Data::create([
            'lokasi' => $request->lokasi,
            'tanggal' => $request->tanggal,
            'jumlah_korban' => $request->jumlah_korban,
            'deskripsi' => $request->deskripsi,
            'foto' => $path,
        ]);

        return redirect('data')->with('flash_message', 'Data Added!');
    }

    public function show(string $id): View
    {
        $data = Data::findOrFail($id);
        return view('data.show')->with('data', $data);
    }

    public function edit(string $id): View
    {
        $data = Data::findOrFail($id);
        return view('data.edit')->with('data', $data);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $data = Data::findOrFail($id);

        $request->validate([
            'lokasi' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jumlah_korban' => 'required|in:1,2,lebih dari 2',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $data->foto;
        if ($request->hasFile('foto')) {
            if ($path) {
                Storage::disk('public')->delete($path);
            }
            $path = $request->file('foto')->store('images', 'public');
        }

        $data->update([
            'lokasi' => $request->lokasi,
            'tanggal' => $request->tanggal,
            'jumlah_korban' => $request->jumlah_korban,
            'deskripsi' => $request->deskripsi,
            'foto' => $path,
        ]);

        return redirect('data')->with('flash_message', 'Data Updated!');
    }

    public function destroy(string $id): RedirectResponse
    {
        $data = Data::findOrFail($id);
        if ($data->foto) {
            Storage::disk('public')->delete($data->foto);
        }
        $data->delete();
        return redirect('data')->with('flash_message', 'Data deleted!');
    }
}
