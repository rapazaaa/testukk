<div class="py-24">
  <div class="mx-auto bg-white rounded-lg shadow-md overflow-hidden px-4 py-4">

    <div>
      @if (session()->has('error'))
      <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
      class="p-4 bg-red-500 text-white rounded-md">
      {{ session('error') }}
      </div>
    @endif

      @if (session()->has('success'))
      <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"
      class="p-4 bg-green-500 text-white rounded-md">
      {{ session('success') }}
      </div>
    @endif
    </div>

    <div class="w-full bg-gray-200 p-4 text-center text-xl font-bold text-gray-600">
      Tambah Daftar Industri
    </div>

    <div class="mx-auto flex items-center justify-between bg-white p-6 rounded-lg shadow-md">
      <button wire:click="create()" class="cursor-pointer bg-blue-500 text-white px-4 py-2 rounded-lg">
        Create Daftar Industri
      </button>

      @if($isOpen)
      @include('livewire.front.industri.create')
    @endif

      <input wire:model.live="search" type="text" placeholder="Search ..."
        class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-600">
    </div>

    <table class="min-w-full bg-white border border-gray-200">
      <thead>
        <tr>
          <th class="px-4 py-2 border-b border-gray-200 text-left text-gray-800">No</th>
          <th class="px-4 py-2 border-b border-gray-200 text-left text-gray-800">Nama Industri</th>
          <th class="px-4 py-2 border-b border-gray-200 text-left text-gray-800">Bidang Usaha</th>
          <th class="px-4 py-2 border-b border-gray-200 text-left text-gray-800">Kontak</th>
          <th class="px-4 py-2 border-b border-gray-200 text-left text-gray-800">Email</th>
          <th class="px-4 py-2 border-b border-gray-200 text-left text-gray-800">Website</th>
        </tr>
      </thead>
      <tbody>
        @php
      $no = 1;
    @endphp

        @foreach($industris as $key => $industri)
      <tr class="hover:bg-gray-100">
        <td class="px-4 py-2 border-b border-gray-200 text-gray-600">{{ $no++ }}</td>
        <td class="px-4 py-2 border-b border-gray-200 text-gray-600">{{ $industri->nama }}</td>
        <td class="px-4 py-2 border-b border-gray-200 text-gray-600">{{ $industri->bidang_usaha }}</td>
        <td class="px-4 py-2 border-b border-gray-200 text-gray-600">{{ $industri->kontak }}</td>
        <td class="px-4 py-2 border-b border-gray-200 text-gray-600">{{ $industri->email }}</td>
        <td class="px-4 py-2 border-b border-gray-200 text-gray-600">{{ $industri->website }}</td>
      </tr>
    @endforeach
      </tbody>
    </table>
  </div>
</div>