<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kecelakaan;
use Illuminate\Support\Facades\Storage;

class KecelakaanController extends Controller
{
    public function index()
    {
        $kecelakaan = Kecelakaan::all();
        return view('kecelakaan.index', compact('kecelakaan'));
    }

    public function create()
    {
        return view('kecelakaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'lokasi' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'korban' => 'required|integer',
            'bukti' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('bukti')) {
            $path = $request->file('bukti')->store('images', 'public');
        }

        Kecelakaan::create([
            'lokasi' => $request->lokasi,
            'tanggal' => $request->tanggal,
            'korban' => $request->korban,
            'bukti' => $path,
        ]);

        return redirect()->route('kecelakaan.index')->with('flash_message', 'Data Added!');
    }

    public function show($id)
    {
        $kecelakaan = Kecelakaan::findOrFail($id);
        return view('kecelakaan.show', compact('kecelakaan'));
    }

    public function edit($id)
    {
        $kecelakaan = Kecelakaan::findOrFail($id);
        return view('kecelakaan.edit', compact('kecelakaan'));
    }

    public function update(Request $request, $id)
    {
        $kecelakaan = Kecelakaan::findOrFail($id);

        $request->validate([
            'lokasi' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'korban' => 'required|integer',
            'bukti' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $kecelakaan->bukti;
        if ($request->hasFile('bukti')) {
            if ($path) {
                Storage::disk('public')->delete($path);
            }
            $path = $request->file('bukti')->store('images', 'public');
        }

        $kecelakaan->update([
            'lokasi' => $request->lokasi,
            'tanggal' => $request->tanggal,
            'korban' => $request->korban,
            'bukti' => $path,
        ]);

        return redirect()->route('kecelakaan.index')->with('flash_message', 'Data Updated!');
    }

    public function destroy($id)
    {
        $kecelakaan = Kecelakaan::findOrFail($id);
        if ($kecelakaan->bukti) {
            Storage::disk('public')->delete($kecelakaan->bukti);
        }
        $kecelakaan->delete();
        return redirect()->route('kecelakaan.index')->with('flash_message', 'Data deleted!');
    }
}
