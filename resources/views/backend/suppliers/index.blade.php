@extends('layouts.app')

@section('pageTitle')
    العملاء
@endsection
@section('content')
    <div class="row text-center">
        <div class="col-md-6 text-left">
         @include('common.forms.search', [
            'searchLabel' => 'بحث',
            'route' => route('suppliers.search'),
            'types' => $searchTypes
         ])
        </div>
        <div class="col-md-6">
            <button class="btn btn-success" data-toggle="modal" data-target="#add-new">جديد</button>
        </div>
    </div>
    <br>
    <div id="main-table" class="row">
        {!! $table !!}
    </div>

    @include('backend.suppliers.add')
    @include('backend.suppliers.add-debts')
    @include('backend.suppliers.remove-debts')
    <section id="edit"></section>
@endsection

@section('after_js')
    @include('backend.suppliers.ajax')
@endsection
