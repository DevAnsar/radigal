<label>
    <span class="label">{{ $field->label }} : </span>
    <select name="{{ $field->name }}">
        @foreach(\App\SendStatus::get() as $item)
            <option value="{{$item['id']}}" <?php
                if (\App\SendStatus::find($value)['id']==$item['id'] )echo 'selected'
                ?>
            >{{$item['title']}}</option>
        @endforeach
    </select>

</label>