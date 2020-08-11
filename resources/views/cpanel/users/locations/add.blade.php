@extends('users.layout.master')

@section('head')
    <style>
        #content{
            padding: 2%;
        }
        input, textarea{
            display: block;
            margin-bottom: 2%;
        }
    </style>
@endsection

@section('content')
<div id="content">
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <form action="{{url('/location')}}" method="post" enctype="multipart/form-data">
        @csrf   
        <label for="">photo</label>
        <input type="file" name="image" id="" onchange="readURL(this);">
   
        <input type="text" name="name" id="" placeholder="location name">
        
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    {{-- <label for="date">Where: Country </label> --}}
                    <div class="form-field">
                        <div class="form-field">
                            <i class="icon icon-arrow-down3"></i>
                            <select name="country_id" id="Country" class="form-control">
                                <option value="">Where: Country</option>
                                @foreach ($countries as $country)
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                                
                            </select>
                        </div>	
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {{-- <label for="date">Where: City  </label> --}}
                    <div class="form-field">
                        <div class="form-field">
                            <i class="icon icon-arrow-down3"></i>
                            <select name="city_id" id="City" class="form-control">
                                
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-group">
                    {{-- <label for="date">Where:  Street   </label> --}}
                    <div class="form-field">
                        <div class="form-field">
                            <i class="icon icon-arrow-down3"></i>
                            <select name="street_id" id="Street" class="form-control">
                                
                
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        {{-- <label for=""> Details</label> --}}
        <div style="display: flex">
            <div style="width: 20%;">
                <textarea name="details" placeholder="Details" id="" cols="30" rows="10"></textarea> 
            </div>
            <div >
                <img style="width: 100%;height: 257px;" id="blah" src="http://placehold.it/180" alt="your image" />    
            </div>
        </div>
        {{-- <label for="">Price/night</label> --}}
        <input type="text" placeholder="Price/night" name="price" id="">
        <label for="">Uploade your Phoros</label>
        <input id="image-upload" name="image_upload[]" type="file"  multiple/>

        <input type="submit"  class="btn btn-success" value="create new location">
        <a href="{{url('/location/index')}}"  type="button" class="btn btn-danger">
            back 
        </a>
             
    </form>
</div>
@endsection
@section('script')
<script src="{{asset('js/page/index.js')}}"></script>
<script>
    function readURL(input) {
           if (input.files && input.files[0]) {
               var reader = new FileReader();

               reader.onload = function (e) {
                   $('#blah')
                       .attr('src', e.target.result);
               };

               reader.readAsDataURL(input.files[0]);
           }
       }
</script> 
@endsection 