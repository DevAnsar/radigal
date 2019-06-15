
<label>
    <span class="label">{{ $field->label }}</span>
    <textarea class="uk-input" name="{{ $field->name }}" id="editor">{{  $value }}</textarea>
    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor',{
            filebrowserUploadUrl:'/ck/upload-image',
            filebrowserImageUploadUrl:'/ck/upload-image'
        })
    </script>
</label>