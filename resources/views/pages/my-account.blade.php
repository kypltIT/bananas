@extends('layouts.app')

@section('title', 'My Account')

@section('content')
<li>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="my-account-nav-item">Logout</button>
    </form>
</li>

@endsection