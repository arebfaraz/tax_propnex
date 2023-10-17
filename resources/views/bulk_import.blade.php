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



    <div class="text-white py-5 px-8">
        <h1 class="text-4xl">Bulk Import</h1>

        <h1 class="text-base mt-8"></h1>
        <div class="bg-black/10 mt-2 py-6 px-3">
            <div>
                <form action="/bulk_import" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="flex items-end">
                        <div class="flex flex-col w-60">
                            <span class="px-1 text-sm">Bulk Import</span>
                            <input name="file" class="text-black rounded px-2" type="file">
                        </div>
                        
                        <button type="submit" class="bg-green-500 cursor-pointer flex px-7 py-0.5 h-7 mx-4">Submit</button>
                    </div>

                </form>

                <!-- component -->
                

            </div>
        </div>
    </div>
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






    <!-- <script>
        // function hideshow2() {
        //     $('#invoicetable').removeClass('hidden')
        // }

        function closebtn() {
            $('#commissontable').addClass('hidden')
        }


        function hideshow2() {
            $('#invoicetable').removeClass('hidden')
            var search_value = $("input[name=trans_no]").val();
            $.ajax({
                type: 'get',
                url: '/transaction_search',
                data: {
                    'search_value': search_value,
                },

                success: function(data) {
                    // console.log(data);
                    $('#transTable').empty();
                    data.forEach((item, index) => {
                        $('#transTable').append(`   <tr>
                                            <td class="px-2 py-1 text-xs font-medium whitespace-nowrap">
                                                <div>

                                                    <p
                                                        class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                        ${item.invoice_no}</p>
                                                </div>
                                            </td>
                                            <td class="px-2 py-1 text-xs font-medium whitespace-nowrap">
                                                <div>

                                                    <p
                                                        class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                        ${item.transaction_no}</p>
                                                </div>
                                            </td>
                                            <td class="px-2 py-1 text-xs whitespace-nowrap">
                                                <div>

                                                    <p
                                                        class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                        ${item.invoice_date}</p>
                                                </div>
                                            </td>
                                            <td class="px-2 py-1 text-xs whitespace-nowrap">
                                                <div>

                                                    <p
                                                        class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                        ${item.invoice_amount}</p>
                                                </div>
                                            </td>

                                            <td class="px-2 py-1 text-xs whitespace-nowrap">
                                                <div>

                                                    <p
                                                        class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                        0</p>
                                                </div>
                                            </td>
                                            <td class="px-2 py-1 text-xs whitespace-nowrap">
                                                <div>

                                                    <p
                                                        class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                        0</p>
                                                </div>
                                            </td>
                                            <td class="px-2 py-1 text-xs whitespace-nowrap">
                                                <div>

                                                    <p
                                                        class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                        ${item.invoice_amount}</p>
                                                </div>
                                            </td>
                                            <td class="px-2 py-1 text-xs whitespace-nowrap">
                                                <div>

                                                    <p
                                                        class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                        ${item.associate_name}</p>
                                                </div>
                                            </td>
                                            <td class="px-2 py-1 text-xs whitespace-nowrap">
                                                <div>

                                                    <p
                                                        class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                        ${item.status}</p>
                                                </div>
                                            </td>
                                            <td class="px-2 py-1 text-xs whitespace-nowrap">
                                                <div>

                                                    <p
                                                        class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                        </p>
                                                </div>
                                            </td>
                                            <td class="px-2 py-1 text-xs whitespace-nowrap">
                                                <div>

                                                    <a href="/invoice_update/${item.id}"
                                                        class="text-xs font-normal text-blue-600 dark:text-gray-400">
                                                        edit</a>
                                                </div>
                                            </td>
                                        </tr>`);
                    })
                }
            });
        }
    </script> -->
</body>
