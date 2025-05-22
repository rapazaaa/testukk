<div class="fixed inset-0 z-10 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

        <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class='py-4 px-4'>
                <h2 class='font-semibold text-gray-800'>Tambah Industri</h2>
                <div class="border-t border-gray-300 my-2"></div>
            </div>

            <form>
                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="mb-4">
                        <label class="block text-sm font-bold text-gray-700">Nama Industri</label>
                        <input wire:model="nama" type="text" class="mt-1 p-2 border rounded-md w-full text-black">
                        @error('nama') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-bold text-gray-700">Bidang Usaha</label>
                        <input wire:model="bidangusaha" type="text"
                            class="mt-1 p-2 border rounded-md w-full text-black">
                        @error('bidangusaha') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-bold text-gray-700">Alamat</label>
                        <input wire:model="alamat" type="text" class="mt-1 p-2 border rounded-md w-full text-black">
                        @error('alamat') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-bold text-gray-700">Kontak</label>
                        <input wire:model="kontak" type="text" class="mt-1 p-2 border rounded-md w-full text-black">
                        @error('kontak') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-bold text-gray-700">Email</label>
                        <input wire:model="email" type="email" class="mt-1 p-2 border rounded-md w-full text-black">
                        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-bold text-gray-700">Website</label>
                        <input wire:model="website" type="url" class="mt-1 p-2 border rounded-md w-full text-black">
                        @error('website') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button"
                            class="cursor-pointer inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-blue-700 border border-transparent rounded-md shadow-sm hover:bg-blue-400 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                            Save
                        </button>
                    </span>
                    <span class="flex w-full mt-3 rounded-md shadow-sm sm:mt-0 sm:w-auto">
                        <button wire:click="closeModal()" type="button"
                            class="cursor-pointer inline-flex justify-center w-full px-4 py-2 text-base font-medium leading-6 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue sm:text-sm sm:leading-5">
                            Cancel
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>