<?php

    namespace App\Zoroaster\Resources;


    use App\Zoroaster\Fields\Select;
    use Illuminate\Database\Eloquent\Model;
    use KarimQaderi\Zoroaster\Abstracts\ZoroasterResource;
    use KarimQaderi\Zoroaster\Fields\ID;
    use KarimQaderi\Zoroaster\Fields\Group\RowOneCol;
    use KarimQaderi\Zoroaster\Fields\btnSave;
    use KarimQaderi\Zoroaster\Fields\CreateAndAddAnotherOne;
    use KarimQaderi\Zoroaster\Fields\Group\Panel;

    use KarimQaderi\Zoroaster\Fields\Text;

    class Category extends ZoroasterResource
    {

        /**
         * مربوطه Model نام
         *
         * @var Model
         */
        public static $model = 'App\Category';

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
        public $singularLabel = 'دسته بندی';


        /**
         * جمع بصورت Resource نام
         *
         * مثال : ها پست
         *
         * @var string
         */
        public $label = 'دسته بندی ها';

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

//            $options=[];
//            $x=0;
//            foreach (\App\Category::where('parent','0')->get() as $i){
//                $options[$x]= " '$i->id' => '$i->title' ,";
//                $x++;
//                         };
//            var_dump($options);
            return [


             new RowOneCol([

                 new Panel('' , [
                     ID::make()->sortable()->onlyOnIndex() ,
                     Text::make('عنوان دسته', 'title')->rules('required'),
                     Select::make('دسته ی والد','parent'),
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
