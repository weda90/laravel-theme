@extends('layouts.app')

@section('page-title')
    Dashboard
    <small>page</small>
@endsection
@section('page-breadcrumb')
    <li>
        <a href="index.html">Home</a>
        <i class="fa fa-angle-right"></i>
    </li>
    <li>
        <span>Dashboard</span>
    </li>
@endsection
@section('page-content')
    <div class="note note-info">
        <p> Classic page head with page title, breadcrumbs and action dropdown menu. </p>
    </div>
@endsection