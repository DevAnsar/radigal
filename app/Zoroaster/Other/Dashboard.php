<?php

    namespace App\Zoroaster\Other;

    use App\Zoroaster\Metrics\UserCount;
    use App\Zoroaster\Metrics\UserCountOverTime;
    use App\Zoroaster\Resources\User;
    use KarimQaderi\Zoroaster\Abstracts\DashboardAbstract;
    use KarimQaderi\Zoroaster\Fields\Group\Col;
    use KarimQaderi\Zoroaster\Fields\Group\HtmlElement;
    use KarimQaderi\Zoroaster\Fields\Group\Row;
    use KarimQaderi\Zoroaster\Fields\Group\RowOneCol;

    class Dashboard extends DashboardAbstract
    {

        /**
         * @return array
         */
        public static function handle()
        {
            return [

                HtmlElement::make('h1' , 'داشبورد' , 'resourceName') ,

                new Row([

                    new Col('uk-width-2-3' , [
                        new UserCountOverTime() ,
                    ]) ,

                    new Col('uk-width-1-3' , [
                        new UserCount() ,
                    ]) ,

                ]) ,


//                new RowOneCol([
//                    new User ,
//                ]) ,


            ];
        }
    }