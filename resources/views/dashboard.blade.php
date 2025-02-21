@extends('layouts.app')
@section('content')
    <div id="admin-content">
        <div class="container">
            <!-- Section Selamat Datang -->
            <div class="row">
                <div class="col-md-12">
                    <div class="p-3 mb-4 text-center rounded" style="background-color: #f8f9fa;">
                        <h3 class="mb-1">Selamat Datang, <strong>Muhammad Septian Zamzani</strong>!</h3>
                        <p class="text-muted mb-0">NIM: 220101070408 | Program Studi: Sistem Informasi</p>
                    </div>
                </div>
            </div>
            <!-- Heading Dashboard -->
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Dashboard</h2>
                </div>
            </div>
            <!-- Kartu Statistik -->
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card" style="width: 14rem; margin: 0 auto;">
                        <div class="card-body text-center">
                            <p class="card-text">{{ $authors }}</p>
                            <h5 class="card-title mb-0">List Penulis</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 14rem; margin: 0 auto;">
                        <div class="card-body text-center">
                            <p class="card-text">{{ $publishers }}</p>
                            <h5 class="card-title mb-0">List Penerbit</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 14rem; margin: 0 auto;">
                        <div class="card-body text-center">
                            <p class="card-text">{{ $categories }}</p>
                            <h5 class="card-title mb-0">List Kategori</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 14rem; margin: 0 auto;">
                        <div class="card-body text-center">
                            <p class="card-text">{{ $books }}</p>
                            <h5 class="card-title mb-0">List Buku</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 14rem; margin: 0 auto;">
                        <div class="card-body text-center">
                            <p class="card-text">{{ $students }}</p>
                            <h5 class="card-title mb-0">Daftar Siswa</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 14rem; margin: 0 auto;">
                        <div class="card-body text-center">
                            <p class="card-text">{{ $issued_books }}</p>
                            <h5 class="card-title mb-0">Buku Dipinjam</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
