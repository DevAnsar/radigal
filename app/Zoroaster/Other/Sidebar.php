<?php

    namespace App\Zoroaster\Other;


    use App\Category as ModelCategory;
    use App\User as ModelUser;
    use App\Product as ModelProduct;
    use App\Payment as ModelPayment;
    use App\Zoroaster\Resources\Column1footer;
    use App\Zoroaster\Resources\Column2footer;
    use App\Zoroaster\Resources\Comment;
    use App\Zoroaster\Resources\Discount;
    use App\Zoroaster\Resources\Order;
    use App\Zoroaster\Resources\Page;
    use App\Zoroaster\Resources\Pay;
    use App\Zoroaster\Resources\Payment;
    use App\Zoroaster\Resources\PayStatus;
    use App\Zoroaster\Resources\Product;
    use App\Zoroaster\Resources\Send;
    use App\Zoroaster\Resources\SendStatus;
    use App\Zoroaster\Resources\Setting;
    use App\Zoroaster\Resources\Showcase;
    use App\Zoroaster\Resources\Showcase2;
    use App\Zoroaster\Resources\Slider;
    use App\Zoroaster\Resources\User;
    use App\Zoroaster\Resources\Category;
    use KarimQaderi\Zoroaster\Abstracts\SidebarAbstract;
    use KarimQaderi\Zoroaster\Sidebar\FieldMenu\Divider;
    use KarimQaderi\Zoroaster\Sidebar\FieldMenu\MenuItem;
    use KarimQaderi\Zoroaster\Sidebar\SidebarHeader;

    class Sidebar extends SidebarAbstract
    {

        /**
         * سایت اصلی منوی بالای
         *
         * @return array
         */
       public static function Top()
        {
            return [

                SidebarHeader::make() ,

            ];
        }


        /**
         * سایت اصلی منوی قسمت
         *
         * @return array
         */
        public static function Menu()
        {
            return [
                MenuItem::make()->route('Zoroaster.dashboard' , 'داشبورد')->icon('home') ,
                Divider::make() ,
                MenuItem::make()->resource(User::class)->icon('users')->badge(ModelUser::count()) ,
                MenuItem::make()->resource(Product::class)->icon('store')->badge(ModelProduct::count()),
                MenuItem::make()->resource(Order::class)->icon('cart-2') ,
                MenuItem::make()->resource(Discount::class)->icon('trending-down') ,
                MenuItem::make()->resource(Slider::class)->icon('image-2') ,
                MenuItem::make()->resource(Page::class)->icon('duplicate') ,
                MenuItem::make()->resource(Comment::class)->icon('chat') ,
                MenuItem::make()->resource(Showcase::class)->icon('clipboard') ,
                MenuItem::make()->resource(Showcase2::class)->icon('news') ,
                MenuItem::make()->resource(Category::class)->icon('grid')->badge(ModelCategory::count()) ,
                MenuItem::make()->resource(Payment::class)->icon('grid')->badge(ModelPayment::count()) ,
                Divider::make() ,
                MenuItem::make()->resource(Send::class)->icon('upload-2'),
                MenuItem::make()->resource(Pay::class)->icon('currency-dollar'),
                MenuItem::make()->resource(SendStatus::class)->icon('toggle-left') ,
                MenuItem::make()->resource(PayStatus::class)->icon('toggle-right') ,
                Divider::make() ,
                MenuItem::make()->resource(Column1footer::class)->icon('database') ,
                MenuItem::make()->resource(Column2footer::class)->icon('database') ,
                Divider::make() ,
                MenuItem::make()->resource(Setting::class)->icon('settings-2') ,

//                MenuItem::make()->route('Zoroaster.settings.icons' , 'ایکون ها')->icon('Zoroaster') ,


            ];
        }

        /**
         * سایت اصلی منوی پایین
         *
         * @return array
         */
        public static function Bottom()
        {
            return [];
        }


    }