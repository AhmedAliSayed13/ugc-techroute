<div class="col-lg-{{$width}} float-start p-1">
   <div class="mb-3">
      <div class="avatar-group mb-3" id="tooltips-container">
         @foreach ($items as $item)

            @php
               $extension = pathinfo($item->$key, PATHINFO_EXTENSION);
               $url=(str_contains('jpeg,png,jpg,gif,svg', $extension))?asset('storage/'.$item->$key):asset('assets/images/file.png');
            @endphp
            <a href="{{asset('storage/'.$item->$key)}}" download class="avatar-group-item ">
            
                  <img src="{{$url}}" class="rounded-circle avatar-sm" alt="{{$extension}}"
                     data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="bottom" 
                     data-bs-original-title="" aria-label="">
            </a>
         @endforeach
         
      </div>
   </div>
</div>
