<div class="col-lg-{{$width}} float-start p-1">
    @if($title)
    <div class="mb-3">
        @endif
        @if($title)
        <label for="{{$name}}" class="form-label">{{$title}}</label>
        @endif
        <input type="{{$type}}" id="{{$name}}" name="{{$name}}" class="form-control {{$class}}"
            value="{{old($name,$value)}}" @if($disable) disabled @endif @if($change) onchange="{{$change}}" @endif
            @if($required) required @endif>
        @error($name)
        <p class="text-danger">{{ $message }}</p>
        @enderror
        @if($title)
    </div>
    @endif
</div>