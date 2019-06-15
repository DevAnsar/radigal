<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserActivation;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if (auth()->validate($request->only('email','password'))){
            $user=User::whereEmail($request->input('email'))->first();
            if ($user->active == 0) {
                $oldesSendCode = $user->ActivationsCode()->where('expire', '>=', Carbon::now())->latest()->first();

                if (!is_null($oldesSendCode)) {
                    if ($oldesSendCode->expire >= Carbon::now()) {
                        $this->incrementLoginAttempts($request);
                        alert()->warning('کد فعال سازی به ایمیل شما ارسال شده است و هنوز منقضی نشده است', '')->confirmButton('ممنون');
                        return back();
                    }
                } else {
                    event(new UserActivation($user));
                    alert()->success('در ایمیل خود روی تایید اکانت کلیک کنید', '')->confirmButton('باشه');
                    return redirect('/');

                }
            }
        }





        if ($this->attemptLogin($request)) {
            alert()->success('با موفقیت وارد فروشگاه شدی', 'خوش اومدی')->confirmButton('ممنون');
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleProviderCallback()
    {
        $social_user = Socialite::driver('google')->user();

        $user=User::whereEmail($social_user->getEmail())->first();

        if(! $user){
            $user=User::create([
               'name'=>$social_user->getName(),
               'email'=>$social_user->getEmail(),
               'password'=>bcrypt($social_user->getId())
            ]);
        }
        auth()->loginUsingId($user->id);
        alert()->success('با موفقیت وارد فروشگاه شدی', 'خوش اومدی')->confirmButton('ممنون');
        return redirect('/');

        // $user->token;
    }
}
