<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Absensi;

class AbsensiController extends Controller
{
    // Menampilkan halaman scan QR code
    public function showScanForm()
    {
        $title = 'AbsenScan';
        return view('absensi.scan', compact('title'));
    }

    // Menyimpan data absensi
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required', // QR code content
        ]);

        // Misalnya QR code berisi ID pegawai
        $pegawai = Pegawai::find($request->content);

        if (!$pegawai) {
            return redirect()->back()->with('error', 'Pegawai tidak ditemukan.');
        }

        // Simpan data absensi
        Absensi::create([
            'pegawai_id' => $pegawai->id,
            'scanned_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Absensi berhasil.');
    }
}


// // Ambil data yang dikirimkan dari form
// $encoded_data = $_POST['absensi'];

// // Decode data dari base64 ke binary
// $binary_data = base64_decode($encoded_data);

// // Simpan gambar ke server (pastikan izin file/direktori sesuai)
// $result = file_put_contents('webcam.jpg', $binary_data);

// // Periksa jika penyimpanan berhasil
// if (!$result) {
//     die('Tidak dapat menyimpan gambar! Periksa izin file.');
// } else {
//     echo 'Gambar berhasil disimpan!';
// }
