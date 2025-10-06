@extends('layout.master')
@section('title', 'LeaderBoard - HTML5VIRTUAL')
@section('menuPeringkat', 'active')

@section('content')
<div class="container py-4">
    <h1 class="h4 fw-bold text-center text-primary mb-4">Leaderboard Akadia</h1>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered shadow-lg rounded">
            <thead class="thead-light">
                <tr>
                    <th class="text-center">Posisi</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Poin</th>
                </tr>
            </thead>
            <tbody>
                <tr class="leaderboard-row gold">
                    <td class="text-center"><i class="bi bi-trophy-fill text-warning"></i> 1</td>
                    <td>Kelompok 4</td>
                    <td class="text-center">1100</td>
                </tr>
                <tr class="leaderboard-row silver">
                    <td class="text-center"><i class="bi bi-trophy-fill text-secondary"></i> 2</td>
                    <td>Kelompok 5</td>
                    <td class="text-center">1100</td>
                </tr>
                <tr class="leaderboard-row bronze">
                    <td class="text-center"><i class="bi bi-trophy-fill text-brown"></i> 3</td>
                    <td>Kelompok 1</td>
                    <td class="text-center">1100</td>
                </tr>
                <tr>
                    <td class="text-center">4</td>
                    <td>Kelompok 9</td>
                    <td class="text-center">1100</td>
                </tr>
                <tr>
                    <td class="text-center">5</td>
                    <td>Kelompok 21</td>
                    <td class="text-center">1100</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('styles')
<style>
    /* Tabel yang lebih playful */
    table {
        border-radius: 15px;
        overflow: hidden;
        background: linear-gradient(145deg, #f9f9f9, #e0e0e0);
    }

    th, td {
        padding: 15px 20px;
        text-align: center;
        vertical-align: middle;
        font-family: 'Roboto', sans-serif;
        font-size: 1rem;
    }

    .thead-light th {
        background-color: #007bff;
        color: white;
    }

    .table-hover tbody tr:hover {
        background-color: #e6f7ff;
        transform: scale(1.05);
        transition: transform 0.3s ease;
    }

    /* Efek untuk posisi peringkat */
    .leaderboard-row.gold {
        background-color: #ffec99;
        font-weight: bold;
    }

    .leaderboard-row.silver {
        background-color: #d3d3d3;
        font-weight: bold;
    }

    .leaderboard-row.bronze {
        background-color: #f0c27b;
        font-weight: bold;
    }

    /* Ikon piala */
    .bi-trophy-fill {
        font-size: 1.5rem;
    }

    /* Border dan shadow untuk tabel */
    .table-bordered {
        border: 2px solid #dddddd;
    }

    .shadow-lg {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .rounded {
        border-radius: 15px;
    }

    /* Menambahkan background gradien */
    .container {
        background: linear-gradient(145deg, #f0f8ff, #e0f7fa);
        border-radius: 10px;
        padding: 20px;
    }

    /* Menambahkan elemen hover pada kolom */
    th, td {
        cursor: pointer;
    }
</style>
@endsection
