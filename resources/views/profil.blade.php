@php
$username = "ahmad";
$role = "admin";
@endphp
<h2>Prodi{{!empty($prodi) ? $prodi : 'sistem informasi'}}</h2>

@if ($role == 'admin')
    <h1>Selamat datang admin</h1>
@elseif ($role == 'user')
    <h1>Selamat datang user</h1>
@else
    <h1>Selamat datang guest</h1>
@endif