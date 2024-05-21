<div class="col-lg-{{$width}} float-start p-1">
    <div class="mb-3">
        <label class="form-check-label mb-2" ><b>{{$title}}</b></label>
        @foreach ($items as $item)
        <div class="form-check mb-2 form-check-primary">
            <input name="{{$name}}" class="form-check-input" type="checkbox" value="{{$item->id}}" id="{{$name}}" @if($value && in_array($item->id, $value)) checked="" @endif}}  >
            <label class="form-check-label" for="{{$name}}">{{$item->name}}</label>
        </div>
        @endforeach
        @error($name)
                <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
</div>


