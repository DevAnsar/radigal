<label>
    <?php
    $f=\App\Category::find($value[0])['title'];
    ?>
    <div class="body">{{ $f==''?'دسته ی اصلی':$f }}</div>
</label>