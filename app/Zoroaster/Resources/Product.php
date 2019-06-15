<?php

namespace App\Zoroaster\Resources;

use App\Zoroaster\Fields\ckeditor;
use App\Zoroaster\Fields\SelectPicker;
use Illuminate\Database\Eloquent\Model;
use KarimQaderi\Zoroaster\Abstracts\ZoroasterResource;
use KarimQaderi\Zoroaster\Fields\btnSave;
use KarimQaderi\Zoroaster\Fields\CreateAndAddAnotherOne;
use KarimQaderi\Zoroaster\Fields\Group\Panel;
use KarimQaderi\Zoroaster\Fields\Group\RowOneCol;
use KarimQaderi\Zoroaster\Fields\ID;
use KarimQaderi\Zoroaster\Fields\Image;
use KarimQaderi\Zoroaster\Fields\Text;
use KarimQaderi\Zoroaster\Fields\Trix;


class Product extends ZoroasterResource
{

    /**
     * مربوطه Model نام
     *
     * @var Model
     */
    public static $model = 'App\Product';

    /**
     * دادن نمایش برای پیشفرض فیلد نام
     *
     * @var string
     */
    public $title = 'title';

    /**
     * فرد بصورت Resource نام
     *
     * مثال : پست
     *
     * @var string
     */
    public $singularLabel = 'محصول';


    /**
     * جمع بصورت Resource نام
     *
     * مثال : ها پست
     *
     * @var string
     */
    public $label = 'محصولات';

    /**
     * جستحو قابل های فیلد
     *
     * @var array
     */
    public $search = [
        'id', 'title',
    ];

    /**
     * دادها نمایش برای فیلدها گرفتن
     *
     * @return array
     */
    public function fields()
    {

        return [

            new RowOneCol([

                new Panel('', [
                    ID::make()->onlyOnIndex()->sortable(),
                    Text::make('عنوان محصول', 'title')->rules('required'),
                    Text::make('توضیح مختصر', 'description')->rules('required'),
                    ckeditor::make('ویژگی ها و اطلاعات محصول', 'body')->hideFromIndex()->rules('required'),
                    Trix::make('توضیحات تکمیلی', 'cutoff')->hideFromIndex(),
                    Text::make('قیمت', 'price')->rules('required'),
                    Text::make('تگ ها', 'tags')->help('تگ ها با , از هم متمایز میشوند')->rules('required')->hideFromIndex(),


                    SelectPicker::make('دسته بندی', 'cat')->hideFromIndex()->rules('required'),

                    Text::make('موجودی', 'stockCount')->rules('required'),
                    Text::make('تخفیف', 'discount')->rules('required'),
                    Text::make('فروش', 'saleCount')->onlyOnIndex(),


                    Image::make('عکس', 'images')
                        ->help('( حداقل ۲ و حداکثر ۵ عکس را انتخاب کن ) کمترین سایز 250*250 پیکسل')
                        ->hideFromIndex()
                        ->path(function () {
                            return 'product' . '/' . now()->year . '/' . now()->month . '/' . now()->day;
                        })->resize('100', 100, 100)

                    ,

                ]),

                new Panel('', [
                    btnSave::make(),
                    CreateAndAddAnotherOne::make(),
                ]),

            ]),

        ];
    }

    /**
     * index صغحه برای query اعمال
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function indexQuery($query)
    {
        return $query->orderByDesc('updated_at');
    }

    /**
     * دادها نمایش برای فیلدها گرفتن
     *
     * @return array
     */
    function filters()
    {
        return [];
    }


}
