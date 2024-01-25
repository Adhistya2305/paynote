<?php
// langkah 1L
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    // Inisialisasi Table
    protected $table = 'categories'; // menetapknan nama table menjadi jamak
    public $timestamps = false;  // memberi tau laravel untuk tidak membuat cretae update secara otomatis 

    // Mass Assignment
    protected $fillable = [
        'name_category'
    ];

    // fungsi ini digunakan untuk mengambil semua data dari table categories
    public static function getAll()
    {
        return Categories::all();
    }

    // Get Data by ID
    //metode getByid digunkan untuk menangkap data id
    public static function getById($id)
    {
        //mengambil data dari table categories dengan mencari id tertentu
        return Categories::where('id_category', $id)->first();
        //first digunakan untuk mengembalikan baris pertama pada yang sesuai dengan kriteria pencarian
    }

    // Insert Data
    //mengambil 
    public static function insert($data)
    {
        return Categories::create($data);
    }

    // Update Data
    public static function updateData($id_category, $data)
    {
        return Categories::where('id_category', $id_category)->update($data);
    }

    // Delete Data
    public static function deleteData($id)
    {
        return Categories::where('id_category', $id)->delete();
    }

    // Get Total Data
    public static function totalCategories()
    {
        return Categories::count();
    }
}
//Langkah 2L membuat Category Controller