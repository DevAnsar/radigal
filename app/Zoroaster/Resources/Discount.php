<?php

    namespace App\Zoroaster\Resources;

    use KarimQaderi\Zoroaster\Abstracts\ZoroasterResource;
    use KarimQaderi\Zoroaster\Fields\Date;
    use KarimQaderi\Zoroaster\Fields\ID;
    use KarimQaderi\Zoroaster\Fields\Group\RowOneCol;
    use KarimQaderi\Zoroaster\Fields\btnSave;
    use KarimQaderi\Zoroaster\Fields\CreateAndAddAnotherOne;
    use KarimQaderi\Zoroaster\Fields\Group\Panel;
    use KarimQaderi\Zoroaster\Fields\Number;
    use KarimQaderi\Zoroaster\Fields\Text;

    class Discount extends ZoroasterResource
    {

        /**
         * مربوطه Model نام
         *
         * @var Model
         */
        public static $model = 'App\Discount';

        /**
         * دادن نمایش برای پیشفرض فیلد نام
         *
         * @var string
         */
        public $title = 'id';

        /**
         * فرد بصورت Resource نام
         *
         * مثال : پست
         *
         * @var string
         */
        public $singularLabel = 'تخفیف';


        /**
         * جمع بصورت Resource نام
         *
         * مثال : ها پست
         *
         * @var string
         */
        public $label = 'تخفیفات';

        /**
         * جستحو قابل های فیلد
         *
         * @var array
         */
        public $search = [
            'id' ,
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

                 new Panel('' , [
                     ID::make()->sortable()->onlyOnIndex() ,
                     Text::make('کد تخفیف','title')->rules('required'),
                     Text::make('توضیح','body'),
                     Number::make('درصد تخفیف','value')->rules('required'),
                     Date::make('تاریخ شروع','start')->format('Y/m/d'),
                     Date::make('تاریخ پایان','end')->format('Y/m/d'),

                 ]),

                 new Panel('' , [
                      btnSave::make() ,
                      CreateAndAddAnotherOne::make() ,
                 ]) ,

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
