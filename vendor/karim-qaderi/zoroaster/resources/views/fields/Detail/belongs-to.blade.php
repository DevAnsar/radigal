<label>
    <span class="label">{{ $field->label }}: </span>
    <div class="body" style="display: inline-block">
        @empty($data)
            چیزی پیدا نشد
        @else
            {{  $value }}
        @endempty
    </div>
</label>