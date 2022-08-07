@extends('layouts.user_layout')
@section('content')

<div class="container">

<button type="button" class="btn btn-primary mt-3 mb-3"><a class="text-light" href="{{route('crud.create')}}">Registration</a></button>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Gender</th>
                <th scope="col">Hobbies</th>
                <th scope="col">Address</th>
                <th scope="col">Country</th>
                <th scope="col">Profile</th>
                <th colspan="3">Actions</th>
            </tr>
        </thead>
{{-- @php
    echo "<pre>";
    print_r($data->toArray());
@endphp --}}

        <tbody>
            @foreach ($data as  $info)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$info->first_name}}</td>
                    <td>{{$info->last_name}}</td>
                    <td>{{$info->email}}</td>
                    <td>{{$info->contact}}</td>
                    <td>{{$info->gender}}</td>
                    <td>{{$info->hobbies}}</td>
                    <td>{{$info->address}}</td>
                    <td>{{$info->profile}}</td>
                    <td>{{$info->getCountry->countries}}</td>
                    <td>
                        <a href="{{route('crud.show',['id' => $info->id])}}" class="btn btn-primary mb-3">Show</a>
                        <a href="" class="btn btn-success mb-3">Update</a>
                        <a href="" class="btn btn-warning mb-3">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
@endsection
