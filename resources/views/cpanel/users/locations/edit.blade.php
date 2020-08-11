@include('cpanel.layout.navbar') 
    <style>
        #content{
            padding: 2%;
        }
        input, textarea{
            display: block;
            margin-bottom: 2%;
        }
        .input-error{
            color:red;
        }


        .colorlib-wrap{
            width: 100%;
            display: block;
            float: left;
            padding:  0;
            clear: both;
        }

        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
            }

            div.gallery:hover {
            border: 1px solid #777;
            }

            div.gallery img {
            width: 100%;
            height: auto;
            }

            div.desc {
            padding: 15px;
            text-align: center;
            }
    </style>

<div id="content">
    <div class="colorlib-wrap">
        <div class="container">
            <div class="row">
                @foreach ($location->hotelApartment->photos as $photo)             
                    <div class="gallery">
                        <a href="#" onclick="deletee({{$photo->id}})">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="24" height="24"
                            viewBox="0 0 172 172"
                            style=" fill:#000000;"><defs><linearGradient x1="38.79747" y1="38.79747" x2="96.19673" y2="96.19673" gradientUnits="userSpaceOnUse" id="color-1_OZuepOQd0omj_gr1"><stop offset="0" stop-color="#e94460"></stop><stop offset="0.443" stop-color="#eb556e"></stop><stop offset="1" stop-color="#eb556e"></stop></linearGradient><linearGradient x1="95.66927" y1="95.66927" x2="133.32007" y2="133.32007" gradientUnits="userSpaceOnUse" id="color-2_OZuepOQd0omj_gr2"><stop offset="0" stop-color="#e94460"></stop><stop offset="0.179" stop-color="#eb556e"></stop><stop offset="0.243" stop-color="#eb556e"></stop></linearGradient></defs><g transform=""><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="#ffffff"></path><g><path d="M138.804,52.74953c2.2188,-2.2188 2.2188,-5.8136 0,-8.0324l-11.52113,-11.52113c-2.2188,-2.2188 -5.8136,-2.2188 -8.0324,0l-33.25047,33.25047l-33.25047,-33.25047c-2.2188,-2.2188 -5.8136,-2.2188 -8.0324,0l-11.52113,11.52113c-2.2188,2.2188 -2.2188,5.8136 0,8.0324l33.25047,33.25047l-33.25047,33.25047c-2.2188,2.2188 -2.2188,5.8136 0,8.0324l11.52113,11.52113c2.2188,2.2188 5.8136,2.2188 8.0324,0z" fill="url(#color-1_OZuepOQd0omj_gr1)"></path><path d="M86,105.55353l33.25047,33.25047c2.2188,2.2188 5.8136,2.2188 8.0324,0l11.52113,-11.52113c2.2188,-2.2188 2.2188,-5.8136 0,-8.0324l-33.25047,-33.25047z" fill="url(#color-2_OZuepOQd0omj_gr2)"></path></g><path d="" fill="none"></path></g></g></svg>
                            
                        </a>
                        <form style="display: none" id="delete{{$photo->id}}" action="{{url('/photo/delete/'.$photo->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <button  type="submit"></button>
                        
                        </form>
                        {{-- <a href="#" onclick="deletee({{$photo->id}})"> --}}
                            <img src="{{asset($photo->img_path)}}" alt="Cinque Terre" width="600" height="400">
                        {{-- </a> --}}
                    </div>

                @endforeach
            </div>
        </div>
    </div>
    <form action="{{url("/cpanel/location/$location->id")}}" method="post" enctype="multipart/form-data">
        @csrf   
        @method('PUT')
        <label for="">Uploade your Phoros</label>
        <input id="image-upload" name="image_upload[]" type="file"  multiple/>

        <label for="">photo</label>
        @error('image')
            <small class="input-error">{{ $message }}</small>
        @enderror
        <input type="file" name="image" id="" onchange="readURL(this);">
        @error('name')
            <small class="input-error">{{ $message }}</small>
        @enderror
        <input type="text" name="name" id="" value="{{$location->hotelApartment->name}}" placeholder="location name">
        @error('name')
             <small class="input-error">{{ $message }}</small>
        @enderror
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    {{-- <label for="date">Where: Country </label> --}}
                    <div class="form-field">
                        <div class="form-field">
                            <i class="icon icon-arrow-down3"></i>
                            @error('country_id')
                                <small class="input-error">{{ $message }}</small>
                            @enderror
                            <select name="country_id" id="Country" class="form-control">
                                <option value="">Where: Country</option>
                                @foreach ($countries as $country)
                                    @if ($country->id == $location->country_id)

                                         <option selected value="{{$country->id}}">{{$country->name}}</option>
                                    
                                    @else
                                        
                                        <option value="{{$country->id}}">{{$country->name}}</option>

                                    @endif

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
                            <input type="hidden" name="city_id" value="{{$location->city_id}}">
                            @error('city_id')
                                <small class="input-error">{{ $message }}</small>
                            @enderror
                            <select name="city_id" id="City" class="form-control">
                                <option value="{{$location->city_id}}">
                                    {{$location->city->name}}
                                </option>
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
                            <input type="hidden" name="street_id" value="{{$location->street_id}}">

                            @error('street_id')
                                <small class="input-error">{{ $message }}</small>
                            @enderror
                            <select name="street_id" id="Street" class="form-control">
                                <option value="{{$location->street_id}}">
                                    {{$location->street->name}}
                                </option>
                            </select>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        {{-- <label for=""> Details</label> --}}
        <div style="display: flex">
            <div style="width: 20%;">
                @error('details')
                    <small class="input-error">{{ $message }}</small>
                @enderror
                <textarea name="details"  placeholder="Details" id="" cols="30" rows="10">
                    {{$location->details}} 
                </textarea> 
               
            </div>
            <div style="">
                <img style="width: 100%; height: 256px;" id="blah" src="{{asset( $location->hotelApartment->img_path )}}" alt="your image" />    
            </div>
        </div>
        {{-- <label for="">Price/night</label> --}}
        @error('price')
            <small class="input-error">{{ $message }}</small>
        @enderror
        <input type="text" placeholder="Price/night" value="{{$location->price}} " name="price" id="">
        
      
            
        <button type="submit" class="btn btn-info" >Update your location</button>
        {{-- <input type="submit"  value="Update your location"> --}}

         <a href="{{url('/location/index')}}"  type="button" class="btn btn-danger">
            back 
        </a>
            
    </form>
   
</div>

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
       function deletee(id) {
            
            document.getElementById("delete"+id).submit();
        }
</script> 
@include('cpanel.layout.footer') 