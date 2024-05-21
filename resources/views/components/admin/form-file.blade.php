<div class="col-lg-{{$width}} float-start p-1">
    <div class="mb-3">
       <label for="{{$name}}" class="form-label">
            {{$title}} 
            @if($value)
                <img src="{{$value}}" width="30px" alt="{{$name}}" class="me-2 rounded-circle">
            @endif
        </label>
       <input type="{{$type}}" id="{{$name}}" name="{{$name}}" class="form-control" @if($multiple) multiple @endif>
       @error(str_replace(['[', ']'], '', $name))
          <p class="text-danger">{{ $message }}</p>
       @enderror
    </div>
 </div>