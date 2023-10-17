<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</head>

<body class="overflow-hidden bg-primary">
    <!-- header -->
    @include('inc.header')
    <!-- header -->



    <div class="text-white py-5 px-8">
        <h1 class="text-4xl">New Transaction</h1>
        <div class="bg-black/10 mt-8 py-6 px-3">
            <div class="py-1 flex flex-col w-64">
                <span class="px-1 text-sm">Project</span>

                <div class="relative inline-flex text-sm">
                    <select id="project" class="border border-gray-300 text-gray-900 w-full">

                        <option value="" selected="" disabled="">Select Project</option>
                        {{-- @if (!empty($projects)) --}}
                        @foreach ($projects as $project)
                            <option value="{{ $project->id }}">{{ $project->name }}</option>
                        @endforeach
                        {{-- @else --}}
                        {{-- <h3>no project found</h3> --}}
                        {{-- @endif --}}
                    </select>
                </div>
            </div>
            <div class="flex items-end">
                <div class="flex flex-col w-52">
                    <span class="px-1 text-sm">Block No.</span>
                    <input class="text-black" type="number">
                </div>
                <div class="flex flex-col w-52 mx-7">
                    <span class="px-1 text-sm">Unit No.</span>
                    <input class="text-black" type="number">
                </div>
                <button onclick="hideshow()" class="flex justify-between px-7 py-0.5 bg-green-600">
                    Search
                </button>

            </div>
            <!-- component -->
            <button onclick="hideadd()" id="closebtn" class="hidden px-7 py-0.5 mt-7 bg-blue-600">
                x
            </button>

            <section id="table" class="hidden px-4 w-4/5">
                <div class="mt-6 md:flex md:items-center md:justify-between">
                    <div class="relative">
                        <select
                            class="appearance-none h-full rounded-l border block w-full bg-white
                     border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none
                      focus:bg-white focus:border-gray-500">
                            <option>5</option>
                            <option>10</option>
                            <option>20</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>

                    <div class="relative flex items-center mt-1 md:mt-0">
                        <span class="absolute">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </span>

                        <input type="text" placeholder="Search"
                            class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                    </div>
                </div>

                <div class="flex flex-col mt-6">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block w-full py-2 align-middle md:px-6 lg:px-8">
                            <div class="overflow-hidden border border-gray-200 dark:border-gray-700 ">
                                <table class="w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead class="bg-gray-50 dark:bg-gray-800">
                                        <tr>
                                            <th scope="col"
                                                class="py-1 px-1 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                <button class="flex items-center gap-x-3 focus:outline-none">
                                                    <span>No</span>
                                                </button>
                                            </th>

                                            <th scope="col"
                                                class="px-1 py-1 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Closing Agent
                                            </th>

                                            <th scope="col"
                                                class="px-1 py-1 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Block No.
                                            </th>

                                            <th scope="col"
                                                class="px-1 py-1 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Unit No.</th>

                                            <th scope="col"
                                                class="px-1 py-1 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Postal Code</th>
                                            <th scope="col"
                                                class="px-1 py-1 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Type</th>
                                            <th scope="col"
                                                class="px-1 py-1 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Size</th>
                                            <th scope="col"
                                                class="px-1 py-1 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Bed Room</th>
                                            <th scope="col"
                                                class="px-1 py-1 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Car Parking</th>
                                            <th scope="col"
                                                class="px-1 py-1 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Remark</th>
                                            <th scope="col"
                                                class="px-1 py-1 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                Select</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabledata"
                                        class="bg-white divide-y text-black divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 sm:flex sm:items-center sm:justify-between ">
                    <div class="text-sm text-gray-500 dark:text-gray-400">
                        Page <span class="font-medium text-gray-700 dark:text-gray-100">1 of 10</span>
                    </div>

                    <div class="flex items-center mt-4 gap-x-4 sm:mt-0">
                        <a href="#"
                            class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md sm:w-auto gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                            </svg>

                            <span>
                                previous
                            </span>
                        </a>

                        <a href="#"
                            class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md sm:w-auto gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                            <span>
                                Next
                            </span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
        </div>


    </div>

    <div class="bg-white fixed bottom-0 flex justify-between items-center px-10 left-0 w-full">
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
            <svg fill="#000000" class="w-10 h-10" viewBox="-5.5 0 32 32" version="1.1"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14.344 7.375c3.688 1.563 6.281 5.219 6.281 9.5 0 5.656-4.625 10.313-10.313 10.313-5.656 0-10.313-4.656-10.313-10.313 0-4.281 2.594-7.938 6.313-9.5v3.469c-1.938 1.313-3.25 3.5-3.25 6.031 0 4 3.25 7.25 7.25 7.25s7.25-3.25 7.25-7.25c0-2.531-1.281-4.719-3.219-6.031v-3.469zM12.031 16.813v-12.031h-3.438v12.031h3.438z">
                </path>
            </svg>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

        <h1>
            E.A.M.S HTTP1 © 2015 (ID- 0-1)</h1>
    </div>







    <script>
        function hideshow() {

            $value = $("#project").val();
            // console.log($value);
            $.ajax({
                type: 'get',
                url: '/transactions/search',
                data: {
                    'project_id': $value,
                },
                success: function(data) {
                    document.getElementById('table').classList.remove("hidden");
                    document.getElementById('closebtn').classList.remove("hidden");
                    $('#tabledata').empty();
                    $('#tabledata').append(data);
                }
            });

        }

        function transactions() {
            document.getElementById('transaction').classList.toggle("hidden")
        }

        function projAgent() {
            document.getElementById('projagent').classList.toggle("hidden")
        }


        function hideadd() {
            document.getElementById('table').classList.add("hidden")
            document.getElementById('closebtn').classList.add("hidden")
        }
    </script>
</body>
