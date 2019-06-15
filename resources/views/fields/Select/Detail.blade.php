<label>
    <span class="label">{{ $field->label }} : </span>
    <?php
    $f=\App\Category::find($value)['title'];
    ?>
    <span > {{ $f==''?'دسته ی اصلی':$f }}</span>
</label>