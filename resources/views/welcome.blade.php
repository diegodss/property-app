@extends('layouts.app')

@section('content')
<div class="">
    <property :properties-data="{{ App\Models\Property::all() }}"></property>
</div>
@endsection