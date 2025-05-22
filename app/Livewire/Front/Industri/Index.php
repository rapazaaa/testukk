<?php

namespace App\Livewire\Front\Industri;

use Livewire\Component;
use App\Models\Industri;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Livewire\Volt\Compilers\Mount;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $nama, $bidangusaha, $alamat, $kontak, $email, $website;
    public $isOpen = 0;

    use WithPagination;

    public $rowPerPage = 3;
    public $search;

    public function mount()
    {
        //
    }

    public function render()
    {
        return view('livewire.front.industri.index', [
            'industris' => $this->search === NULL ?
                Industri::latest()->paginate($this->rowPerPage) :
                Industri::latest()
                    ->where('nama', 'like', '%' . $this->search . '%')
                    ->paginate($this->rowPerPage),
        ]);
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->reset(['nama', 'bidangusaha', 'alamat', 'kontak', 'email', 'website']);
    }

    public function store()
    {
        $this->validate([
            'nama' => 'required|string',
            'bidangusaha' => 'required|string',
            'alamat' => 'required|string',
            'kontak' => 'required|string',
            'email' => 'required|string',
            'website' => 'required|string',
        ]);

        DB::beginTransaction();

        try {
            Industri::create([
                'nama' => $this->nama,
                'bidang_usaha' => $this->bidangusaha,
                'alamat' => $this->alamat,
                'kontak' => $this->kontak,
                'email' => $this->email,
                'website' => $this->website,
            ]);

            DB::commit();

            $this->closeModal();
            $this->resetInputFields();

            return redirect()->route('industri')->with('success', 'Data Industri berhasil disimpan!');
        } catch (\Exception $e) {
            DB::rollBack();
            $this->closeModal();
            return redirect()->route('industri')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

    }
}

