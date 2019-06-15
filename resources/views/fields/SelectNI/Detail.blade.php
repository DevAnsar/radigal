<label>
    <span class="label">{{ $field->label }} : </span>
    <div class="body" style="display: inline-block">{{ \App\SendStatus::find($value)['title'] }}</div>
</label>