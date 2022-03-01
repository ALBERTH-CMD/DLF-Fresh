@extends('adminlte::auth.login')

@if (session('error'))
<div class="font-medium text-red-600">
    {{ session('error') }}
</div>
@endif
