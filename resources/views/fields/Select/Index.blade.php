<label>
    <?php
    $f=\App\Category::find($value)['title'];
    ?>
    <div class="body">{{ $f==''?'دسته ی اصلی':$f }}</div>
</label>