<label>
    <span class="label">{{ $field->label }}</span>
    <select class="form-control uk-input"  name="{{ $field->name }}" >
        @foreach(\App\Page::all() as $page)
            <option value="{{$page->id}}" {{$page->id == $value ?'selected=selected':''}}>{{$page->title}}</option>
        @endforeach
    </select>
</label>