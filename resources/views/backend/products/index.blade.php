@extends('layouts.app')

@section('pageTitle')
    المنتجات
@endsection
@section('content')
    <div class="row text-center">
        <div class="col-md-6 text-left">
         @include('common.forms.search', [
            'searchLabel' => 'بحث',
            'route' => route('products.search'),
            'types' => $searchTypes
         ])
        </div>
        <div class="col-md-6">
            <button id="add-new-product" class="btn btn-success pull-right" data-toggle="modal" data-target="#add-new">اضافة منتج جديد</button>
        </div>
    </div>
    <br>
    <div id="main-table" class="row">
        {!! $table !!}
    </div>

    @include('backend.products.add')
    <section id="edit"></section>
@endsection

@section('after_js')
    @include('backend.products.ajax')
@endsection
