<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link
        href="https://fonts.googleapis.com/css?family=Changa"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css"
    />
    <link rel="stylesheet" href="{{asset('assets')}}/css/register.css"/>
    <title>متابعة كصاحب مطعم</title>
</head>
<body>
<div id="register-container">
    <div id="register-box">
        <div class="img-div">
            <img
                src="{{asset('assets')}}/img/login.png"
                class="fadeIn"
                alt=""
                id="loginImg"
            />
        </div>
        <div class="forms">
            <div class="formButtons">
                <button href="{{route('registeruser')}}" id="RegisterBtn">إنشاء حساب جديد</button>
            </div>

            <div class="login-form fadeIn" id="loginForm">
                <form method="post" action="{{route('sample.validate_login')}}">
                    @csrf

                    <div class="relative form-group" id="form">
                        <input
                            type="email"
                            name="email"
                            id="floating_outlined"
                            class="form-control block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" "
                            required
                        />
                        @if($errors->has('email'))
                            <span class="text-danger">{{$errors->first('email')}}</span>
                        @endif
                        <label
                            for="floating_outlined"
                            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1"
                        >البريد الإلكتروني</label
                        >
                    </div>
                    <div class="relative form-group" id="form">
                        <input
                            type="password"
                            name="password"
                            id="floating_outlined"
                            class="form-control block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" "
                        />
                        @if($errors->has('password'))
                            <div style="border: 1px solid rebeccapurple">
                                <span class="text-danger">{{$errors->first('password')}}</span>
                            </div>

                        @endif
                        <label
                            for="floating_outlined"
                            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1"
                        >كلمة السر</label
                        >
                    </div>
                    <div class="Password-Remember form-control">
                        <div class="remember-me">
                            <input
                                name="remember"

                                id="purple-checkbox"
                                type="checkbox"
                                value=""
                                class="w-4 h-4 text-purple-600 bg-gray-100 rounded border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                            />
                            <label
                                for="purple-checkbox"
                                class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                            >تذكرني</label
                            >
                        </div>
                        <div class="forgotPassword">
                            <a href="#">نسيت كلمة السر؟</a>
                        </div>

                    </div>
                    @include("home.messages")


                    <button type="submit" class="loginBtn">تسجيل الدخول</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
