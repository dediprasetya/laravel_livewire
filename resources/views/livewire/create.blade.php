<div class="card">

<div class="card-body">

<form>

<div class="form-group mb-3">

<label for="nim">Nim:</label>

<input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim"

placeholder="Masukkan Nim" wire:model="nim">

@error('nim')

<span class="text-danger">{{ $message }}</span>

@enderror

</div>


<div class="form-group mb-3">

<label for="nama">NAMA</label>

<input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"

placeholder="Masukkan nama" wire:model="nama">

@error('nama')

<span class="text-danger">{{ $message }}</span>

@enderror

</div>

<div class="form-group mb-3">

<label for="alamat">Alamat:</label>

<input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"

placeholder="Masukkan Alamat" wire:model="alamat">

@error('alamat')

<span class="text-danger">{{ $message }}</span>

@enderror

</div>

<div class="form-group mb-3">

<label for="nim">Kota:</label>

<input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota"

placeholder="Masukkan Kota" wire:model="kota">

@error('kota')

<span class="text-danger">{{ $message }}</span>

@enderror

</div>

<div class="form-group mb-3">

<label for="umur">Umur:</label>

<input type="text" class="form-control @error('umur') is-invalid @enderror" id="umur"

placeholder="Masukkan Umur" wire:model="umur">

@error('umur')

<span class="text-danger">{{ $message }}</span>

@enderror

</div>

<div class="form-group mb-3">

<label for="kelas">Kelas:</label>

<input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas"

placeholder="Masukkan Kelas" wire:model="kelas">

@error('kelas')

<span class="text-danger">{{ $message }}</span>

@enderror

</div>


<div class="form-group mb-3">

<label for="jurusan">Jurusan:</label>

<input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"

placeholder="Masukkan Jurusan" wire:model="jurusan">

@error('jurusan')

<span class="text-danger">{{ $message }}</span>

@enderror

</div>




<div class="d-grid gap-2">

<button wire:click.prevent="store()" class="btn btn-success btn-block">Simpan</button>

<button wire:click.prevent="cancel()" class="btn btn-secondary btn-block">Cancel</button>

</div>

</form>

</div>

</div>


