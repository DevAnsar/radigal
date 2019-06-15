
<?php
 $product_slug=\App\Product::find($data->product_id)->slug;
?>
<a href="{{url('/product/'.$product_slug.'#comment'.$data->id)}}">?</a>