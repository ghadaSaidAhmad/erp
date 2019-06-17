@extends('layouts.app')

@section('pageTitle')
    الفروع
@endsection
@section('content')
    <div class="row text-center">
        <div class="col-md-6 text-left">
            @include('common.forms.search', [
               'searchLabel' => 'بحث',
               'route' => route('branches.search'),
               'types' => $searchTypes
            ])
        </div>
        <div class="col-md-6">
            <button class="btn btn-success" data-toggle="modal" data-target="#add-new">جديد</button>
        </div>
    </div>
    <br>
    <div class="row">
        {!! $table !!}
    </div>

    @include('backend.branches.add')
@endsection
