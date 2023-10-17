<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="h-screen">
    <header class="text-gray-600 body-font w-full bg-primary h-1/5">
        <a class="flex p-2 title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img src="images/logoT.png" alt="" class="w-28">
        </a>
    </header>
    <!-- component -->
    <div class="w-full h-3/5 bg-secondary flex-col flex justify-center items-start">

        <div class="text-white mx-auto py-24">
            <h1 class="text-white text-lg mx-auto">Real Estate Management System <span
                    class="text-yellow-500 text-sm">ver
                    1.0</span>
            </h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="py-4  flex flex-col w-52">
                    <span class="px-1 text-sm">Username</span>
                    <input class="text-black" placeholder="" type="email"
                        class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="text-red-600 text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="py-4 flex flex-col w-52">
                    <span class="px-1 text-sm">Password </span>
                    <input class="text-black" id="password" type="password"
                        class="form-control @error('password') is-invalid @enderror" name="password" required
                        autocomplete="current-password">

                    @error('password')
                        <span class="text-red-600 text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="py-4 flex flex-col w-52">
                    <span class="px-1 text-sm">Branch </span>
                    <div class="relative inline-flex">
                        <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                            <path
                                d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                                fill="#648299" fill-rule="nonzero" />
                        </svg>
                        <select class="border border-gray-300 text-gray-900 w-52">
                            <option>Cambodia HQ</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-end w-52">
                    <button type="submit" class="flex justify-between px-2 bg-primary w-20">
                        Go <span>
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-1 mt-1" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="w-full bg-primary h-1/5 text-primary">.</div>

</body>

</html>
