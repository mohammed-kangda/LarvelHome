@extends('layouts.user_layout')

   @section('content')
{{-- @php
    print_r($)
@endphp --}}

        <div class="form-group">
            <label for="exampleInputEmail1">First Name: </label>
            <input type="text" value="{{$id->first_name}}" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Last Name: </label>
            <input type="text" value="{{$id->last_name}}" name="last_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last Name" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" value="{{$id->email}}" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" disabled>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Contact Number: </label>
            <input type="number" value="{{$id->contact}}" name="contact" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" disabled>
        </div>


        <div class="form-group">
            <select id="inputState" name="country"class="form-control">
              <option>Select Country</option>
              @foreach ($countries as $country)
                 <option value="{{$country->id}}">{{$country->countries}}</option>
              @endforeach
            </select>
        </div>


        <label for="exampleInputEmail1">Gender : </label>
        <div class="form-check form-check-inline form-group">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" @if ($id->gender == 'Male') checked @endif disabled>
            <label class="form-check-label" for="inlineRadio1">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" @if ($id->gender == 'Female') checked @endif disabled>
            <label class="form-check-label" for="inlineRadio2">Female</label>
        </div><br>

        <label for="exampleInputEmail1">Hobbies : </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="hobbies[]" id="inlineCheckbox1" value="Web" @if (in_array('Web',$id->hobbies)) checked @endif disabled>
            <label class="form-check-label" for="inlineCheckbox1">Web</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="hobbies[]" id="inlineCheckbox2" value="App" @if (in_array('App',$id->hobbies)) checked @endif disabled>
            <label class="form-check-label" for="inlineCheckbox2">App</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="hobbies[]" id="inlineCheckbox2" value="SEO" @if (in_array('SEO',$id->hobbies)) checked @endif disabled>
            <label class="form-check-label" for="inlineCheckbox2">SEO</label>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Address</label>
            <textarea class="form-control" value="add" name="address" id="exampleFormControlTextarea1" rows="3" disabled></textarea>
        </div>
        <div class="form-group">
            <img src="{{url('profiles').'/'.$id->profile}}" width="15%" alt="Profile Picture" srcset="">

        </div>


</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>


@endsection
