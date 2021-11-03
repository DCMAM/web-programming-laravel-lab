@extends('navbar')
@section('title', 'Form')
@section('content')
    <div>
        <h2>
            Form
        </h2>
        <h5>Id: {{$people->id}}</h5>
        <h5>Name: {{$people->name}}</h5>
        <h5>Major: {{$people->major}}</h5>
        <h5>Gender: {{$people->gender}}</h5>
        <br>
{{--        <h6>Array People: {{$people}}</h6>--}}

        <form action="" method="post">
            {{csrf_field()}}

            <input type="text" name="id" id="" placeholder="Input id">
            <input type="text" name="name" id="" placeholder="Input name">
            <input type="text" name="gender" id="" placeholder="Input gender">
            <input type="text" name="major" id="" placeholder="Input gender">

            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
