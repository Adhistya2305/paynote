<?php

namespace App\Http\Controllers;

use App\Models\Incomes;
use App\Models\Expenses;
use App\Models\Balance;
use App\Models\Categories;


class DashboardController extends Controller
{
    //hanya pengguna yang bisa login saja yang bisa mengakses
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Ambil total pemasukan dari model
        $total_incomes = Incomes::totalIncomes();

        // Ambil total balance dari model
        $total_balance = Balance::totalBalance();

        // Ambil total kategori dari model
        $total_categories = Categories::totalCategories();

        // Ambil total pengeluaran dari model
        $total_expenses = Expenses::totalExpenses();

        // Ambil semua data pemasukan dan pengeluaran dari model balance
        $incomesAndExpenses = Balance::getAllIncomesAndExpenses();

        // Ambil semua data kategori dari model categories
        $categories = Categories::getAll();

        //ini adalah sekumpulan array yang akan mengirimkan data ke tampilan view
        $data = [
            'total_incomes' => $total_incomes,//menampatkan total pendapatan dari variable $total_incomes
            'total_balance' => $total_balance,//mendapatkan total saldo dari variable $total_balance
            'total_categories' => $total_categories,
            'total_expenses' => $total_expenses,
            'incomesAndExpenses' => $incomesAndExpenses,
            'categories' => $categories
        ];

        // Kirim data total pemasukan ke view index
        return view('dashboard/index', $data);
    }
}
