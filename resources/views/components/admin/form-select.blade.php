<div class="col-lg-{{$width}} float-start p-1">
    <div class="mb-3">
        <label for="{{$name}}" class="form-label">{{$title}}</label>
        <select class="form-select" id="{{$name}}" name="{{$name}}" data-toggle="select2"  >
            <option value="">Select Option</option>
            @foreach ( $options as $option)
                <option value="{{$option->id}}" {{($option->id==old($name,$value))?'selected':''}} >
                    {{$option->$optionValue}}
                </option>
            @endforeach

        </select>
        @error($name)
        <p class="text-danger">{{ $message }}</p>
     @enderror
    </div>
</div>