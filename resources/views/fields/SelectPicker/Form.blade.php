<label>


    <span class="label">{{ $field->label }}</span>

    <link rel="stylesheet" href="/css/bootstrap-select.min.css">


    <select class="form-control"  name="{{ $field->name }}[]" id="selectP" multiple>


        @foreach(\App\Category::where('parent' ,'!=', '0')->get() as $cat)
            <option value="{{$cat->id}}"   {{ isset($value)? in_array($cat->id,$value)? 'selected':'' : '' }} >{{$cat->title}}</option>
        @endforeach

            {{--{{$cat->id == $value ?'selected=selected':''}}--}}
    </select>

    <script src="/js/bootstrap-select.min.js"></script>
    <script>
        $('#selectP').selectpicker();
    </script>

</label>