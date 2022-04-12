<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LogoutResponse;
use Laravel\Fortify\Contracts\RegisterResponse;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            $email = (string) $request->email;

            return Limit::perMinute(5)->by($email.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        Fortify::registerView(function () {
            return view('register.index' ,[
                'title' => 'Register',
                'active' => 'register'
            ]);
        });

        Fortify::loginView(function () {
            return view('login.index',[
                'title' => 'Login',
                'active'=> 'login'
            ]);
        });

        Fortify::requestPasswordResetLinkView(function(){
            return view('login.forgot-password',[
                'title' => 'Forgot Password',
                'active'=> 'Forgot Password'
            ]);
        });

        Fortify::resetPasswordView(function($request){
            return view('login.reset-password',[
                'request' => $request,
                'title' => 'Reset Password',
                'active'=> 'Reset Password'
            ]);
        });

        Fortify::verifyEmailView(function () {
            return view('login.verify-email',[
                'title' => 'Verify Email',
                'active'=> 'Verify Email'
            ]);
        });
    }
}