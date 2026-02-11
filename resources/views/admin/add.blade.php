@extends('layout.dashboard')
@section('content')
    <x-card title="Adding Admin" method="post" action="{{route('admin.save')}}" label1="Username" type1="text"
            name1="username" placeholder1="username" label2="password" type2="password" name2="password" placeholder2="password"/>
@endsection
