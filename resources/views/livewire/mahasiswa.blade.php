<div>

<div class="col-md-12">

<div class="card">

<div class="card-header">

@if(!$addMahasiswa)

<button wire:click="create()" class="btn btn-primary btn-sm float-end">Tambah Data Mahasiswa</button>

@endif

</div>

<div class="card-body">


<div class="table-responsive">

<table class="table">

<thead>

<tr>

<th>NIM</th>

<th>Nama</th>

<th>Alamat</th>

<th>Kota/th>

<th>Umur</th>

<th>Kelas</th>

<th>Jurusan</th>

<th> ACTION </th>

</tr>

</thead>

<tbody>

@forelse ($mahasiswa as $data)

<tr>

<td>

{{$data->nim}}

</td>

<td>

{{$data->nama}}

</td>

<td>

{{$data->alamat}}

</td>

<td>

{{$data->kota}}

</td>

<td>

{{$data->umur}}

</td>

<td>

{{$data->kelas}}

</td>

<td>

{{$data->jurusan}}

</td>



<td>

<button wire:click="edit('{{$data->nim}}')"

class="btn btn-primary btn-sm">Edit</button>

<button wire:click="destroy('{{$data->nim}}')"

class="btn btn-danger btn-sm">Delete</button>

</td>

</tr>




@empty

<tr>

<td colspan="4" align="center">

Data Mahasiswa Kosong

</td>

</tr>

@endforelse

</tbody>

</table>


</div>

</div>

</div>

</div>

<hr />


<div class="col-md-12 mb-2">

@if(session()->has('success'))

<div class="alert alert-success" role="alert">

{{ session()->get('success') }}

</div>

@endif


@if(session()->has('error'))

<div class="alert alert-danger" role="alert">

{{ session()->get('error') }}

</div>

@endif


@if($addMahasiswa)

@include('livewire.create')

@endif


@if($updateMahasiswa)

@include('livewire.update')

@endif

</div>



</div>


