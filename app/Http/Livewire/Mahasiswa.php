<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\Mahasiswa as MahasiswaModel;

class Mahasiswa extends Component
{
    public $nim, $nama, $alamat, $umur, $kota, $kelas, $jurusan, $updateMahasiswa = false, $addMahasiswa = false;

    public function render()
    {
        $mahasiswa = MahasiswaModel::latest()->get();
        return view('livewire.mahasiswa', compact('mahasiswa'));
    }

    protected $rules = [
        'nim' => 'required',
        'nama' => 'required',
        'kelas' => 'required',
        'jurusan' => 'required'
    ];

    public function resetFields()
    {
        $this->nim = '';
        $this->nama = '';
        $this->alamat = '';
        $this->umur = '';
        $this->kota = '';
        $this->kelas = '';
        $this->jurusan = '';
    }

    public function create()
    {
        $this->resetFields();
        $this->addMahasiswa = true;
        $this->updateMahasiswa = false;
    }

    public function store()
    {
        $this->validate();

        try {
            MahasiswaModel::create([
                'nim' => $this->nim,
                'nama' => $this->nama,
                'alamat' => $this->alamat,
                'kota' => $this->kota,
                'umur' => $this->umur,
                'kelas' => $this->kelas,
                'jurusan' => $this->jurusan
            ]);

            session()->flash('success', 'Data Mahasiswa berhasil disimpan!!');
            $this->resetFields();
            $this->addMahasiswa = false;
        } catch (\Exception $ex) {
            session()->flash('error', 'Ada kesalahan dalam proses penyimpanan!! ' . $ex);
        }
    }

    public function edit($nim)
    {
        try {
            $mahasiswa = MahasiswaModel::findOrFail($nim);

            $this->nim = $mahasiswa->nim;
            $this->nama = $mahasiswa->nama;
            $this->alamat = $mahasiswa->alamat;
            $this->kota = $mahasiswa->kota;
            $this->umur = $mahasiswa->umur;
            $this->kelas = $mahasiswa->kelas;
            $this->jurusan = $mahasiswa->jurusan;

            $this->updateMahasiswa = true;
            $this->addMahasiswa = false;
        } catch (\Exception $ex) {
            session()->flash('error', 'Gagal menyimpan!!');
        }
    }

    public function ups($nim = "")
    {
        $this->updateMahasiswa = true;
    }

    public function update()
    {
        $this->validate();

        try {
            MahasiswaModel::where('nim', $this->nim)->update([
                'nim' => $this->nim,
                'nama' => $this->nama,
                'alamat' => $this->alamat,
                'kota' => $this->kota,
                'umur' => $this->umur,
                'kelas' => $this->kelas,
                'jurusan' => $this->jurusan,
            ]);

            session()->flash('success', 'Data Mahasiswa berhasil di update!!');
            $this->resetFields();
            $this->updateMahasiswa = false;
        } catch (\Exception $ex) {
            session()->flash('error', 'Ada kesalahan/gagal update!! ' . $ex);
        }
    }

    public function cancel()
    {
        $this->addMahasiswa = false;
        $this->updateMahasiswa = false;
        $this->resetFields();
    }

    public function destroy($nim)
    {
        try {
            MahasiswaModel::find($nim)->delete();
            session()->flash('success', "Data Mahasiswa berhasil dihapus!!");
        } catch (\Exception $e) {
            session()->flash('error', "Terdapat kesalahan/gagal menghapus!!");
        }
    }
}
