<label>
    <span class="label">{{ $field->label }}</span>
    <select class="form-control uk-input"  name="{{ $field->name }}" >

        <option value="0" >دسته ی اصلی</option>
        @foreach(\App\Category::where('parent' , '0')->get() as $cat)
            <option value="{{$cat->id}}" {{$cat->id == $value ?'selected=selected':''}}>{{$cat->title}}</option>
        @endforeach
    </select>
</label>