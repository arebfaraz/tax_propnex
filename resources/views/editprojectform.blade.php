<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body class="bg-primary">
    <!-- header -->
    @include('inc.header')
    <!-- header -->

    @if (session()->has('error'))
        <div class="alert alert-success">
            {{ session()->get('error') }}
        </div>
    @endif
    <form action="/updateprojects/{{ $pageData->id }}" method="POST" class="text-white py-5 px-8">
        @csrf
        <h1 class="text-4xl">Edit Project</h1>
        <div class="bg-black/10 mt-5 py-6 px-3">

            <div class="mt-2">
                <div class="flex items-end">
                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">Name</span>
                        <input name="name" value="{{ $pageData->name }}" class="text-black text-sm" type="text"
                            required>
                    </div>
                    <div class="flex flex-col w-40 mx-4">
                        <span class="px-1 text-sm">
                            Block Number</span>
                        <input name="block_number" value="{{ $pageData->block_no }}" class="text-black text-sm"
                            type="text"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                            required>
                    </div>

                </div>



                <div class="flex items-end">
                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">Unit Number</span>
                        <input name="unit_number" value="{{ $pageData->unit_no }}" class="text-black text-sm"
                            type="text"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                            required>
                    </div>

                    <div class="flex flex-col w-40 mx-4">
                        <span class="px-1 text-sm">Active</span>
                        <select class="text-black text-sm" name="status">
                            <option {{ $pageData->active == 'Y' ? 'selected' : '' }} class="text-black text-sm"
                                value="Y">Yes</option>
                            <option {{ $pageData->active == 'N' ? 'selected' : '' }} class="text-black text-sm"
                                value="N">No</option>
                        </select>
                    </div>


                </div>


                <input type="submit" class="w-20 cursor-pointer py-1 px-auto mt-4 bg-blue-400" />
            </div>
        </div>



    </form>
    <div class="h-96"></div>


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
            // document.getElementById('table').classList.remove("hidden");
            // document.getElementById('closebtn').classList.remove("hidden");

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
