<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Prodi;

class ProdiController extends Controller
{
    public function show(): View
    {
        $prodi1 = new Prodi('TI', 'Teknik Informatika');
        $prodi2 = new Prodi('SI', 'Sistem Informasi');
        $prodi3 = new Prodi('BD', 'Bisnis Digital');

        $prodi1->kaprodi = 'Ror. Ir. Budi Santoso, M.T.';
        $prodi2->kaprodi = 'Dr. Ir. Ror Santoso, M.T.';
        $prodi3->kaprodi = 'Dr. Ir. Budi Ror, M.T.';

        $ar_prodi = [$prodi1, $prodi2, $prodi3];

        return view('prodi.index', [
            "judul" => "Daftar Prodi",
            "listprodi" => $ar_prodi
        ]);
    }
}
