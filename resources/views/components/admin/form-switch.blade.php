<div class="col-lg-{{$width}} float-start p-1">
    <div class="mb-3">
        <label for="{{$name}}" class="form-label">{{$title}}</label>
        <br>
            <input type="checkbox"  data-plugin="switchery" id="{{$name}}" name="{{$name}}" @if($value) checked @endif data-color="#9261c6"/>
            @error($name)
                <p class="text-danger">{{ $message }}</p>
            @enderror
    </div>
</div>