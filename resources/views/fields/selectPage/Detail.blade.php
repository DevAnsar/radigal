<label>
    <span class="label">{{ $field->label }} : </span>
    <span > {{ \App\Page::find($value)['title'] }}</span>
</label>