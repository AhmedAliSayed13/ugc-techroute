<div class="col-lg-{{$width}} float-start p-1">
    <div class="mb-3">
        <label for="{{$name}}" class="form-label">{{$title}}</label>
            <textarea class="form-control" id="{{$name}}" name="{{$name}}" rows="5">{{old($name,$value)}}</textarea>
            @error($name)
         <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
</div>