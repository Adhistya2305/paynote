<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incomes; // Assuming your Incomes model is in the Models namespace
use App\Models\Categories; // Assuming your Categories model is in the Models namespace

class IncomesController extends Controller
{
    // ...


    public function index()
    {
        $incomes = Incomes::getAll(); // Ambil semua data pemasukan
        $categories = Categories::getAll(); // Ambil semua data kategori
        //untuk menampilkan view dengan data pemasukan dan kategori
        return view('dashboard.incomes.list', compact('incomes', 'categories'));
    }

    public function addPage()
    {
        $title = "Tambah Data Pemasukan";
        $categories = Categories::getAll(); // Ambil semua data kategori
        return view('dashboard.incomes.add', compact('title', 'categories'));
    }

    // Insert Data
    public function insert(Request $request)
    {

        // Masukkan catatan pendapatan baru ke dalam database.
        $income = Incomes::insert([
            'amount'        => $request->amount,
            'description'   => $request->description,
            'date'          => $request->date,
            'id_category'   => $request->id_category,
            'created_at'    => now(),
        ]);

        // Notifikasi
        if ($income) {
            return redirect()->route('incomes')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('incomes')->with('error', 'Data Gagal Ditambahkan');
        }
    }

    // Delete Data
    public function delete($id)
    {
        // Hapus data pendapatan berdasarkan id
        $income = Incomes::deleteData($id);

        // Notifikasi
        if ($income) {
            return redirect()->route('incomes')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('incomes')->with('error', 'Data Gagal Dihapus');
        }
    }
}
// Langkah 4M Membuat View List Incomes di resources/views/dashboard/incomes/list.blade.php