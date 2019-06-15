{{ $field->label }} :
<?php

    $cats=\App\Category::find($value);
    foreach ($cats as $cat){
        echo $cat['title'];
        echo ' ، ';

    }

?>

{{--{{ $cats }}--}}