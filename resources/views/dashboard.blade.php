<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold leading-tight text-gray-900">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-6 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Welcome Card -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 mb-6">
                <h1 class="text-3xl font-bold text-gray-900">Selamat Datang, {{ Auth::user()->name }} 👋</h1>
                <p class="mt-2 text-gray-700">Berikut adalah ringkasan akun dan aktivitas Anda.</p>
            </div>

            <!-- Info Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="bg-blue-500 text-white rounded-xl shadow-lg p-5">
                    <h3 class="text-lg font-semibold">Pengguna Terdaftar</h3>
                    <p class="text-2xl mt-2 font-bold">+120</p>
                </div>

                <div class="bg-green-500 text-white rounded-xl shadow-lg p-5">
                    <h3 class="text-lg font-semibold">Status Akun</h3>
                    <p class="mt-2">Aktif & Terverifikasi</p>
                </div>

                <div class="bg-yellow-400 text-white rounded-xl shadow-lg p-5">
                    <h3 class="text-lg font-semibold">Waktu Login</h3>
                    <p class="mt-2">{{ \Carbon\Carbon::now()->format('d M Y, H:i') }}</p>
                </div>

            </div>

            <!-- Logout Button -->
            <form method="POST" action="{{ route('logout') }}" class="mt-10">
                @csrf
                <button class="bg-red-600 hover:bg-red-700 text-white font-semibold px-4 py-2 rounded shadow">
                    Logout
                </button>
            </form>

        </div>
    </div>
</x-app-layout>
