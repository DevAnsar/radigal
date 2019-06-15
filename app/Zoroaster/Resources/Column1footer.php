<?php

    namespace App\Zoroaster\Resources;

    use App\Zoroaster\Fields\selectPage;
    use KarimQaderi\Zoroaster\Abstracts\ZoroasterResource;
    use KarimQaderi\Zoroaster\Fields\ID;
    use KarimQaderi\Zoroaster\Fields\Group\RowOneCol;
    use KarimQaderi\Zoroaster\Fields\btnSave;
    use KarimQaderi\Zoroaster\Fields\CreateAndAddAnotherOne;
    use KarimQaderi\Zoroaster\Fields\Group\Panel;
    use KarimQaderi\Zoroaster\Fields\Text;

    class Column1footer extends ZoroasterResource
    {

        /**
         * مربوطه Model نام
         *
         * @var Model
         */
        public static $model = 'App\Column1footer';

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
        public $singularLabel = 'ستون اول فوتر';


        /**
         * جمع بصورت Resource نام
         *
         * مثال : ها پست
         *
         * @var string
         */
        public $label = 'ستون اول فوتر';

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
                     Text::make('عنوان','title')->rules('required'),
                     selectPage::make('صفحه','page_id')->rules('required'),
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
