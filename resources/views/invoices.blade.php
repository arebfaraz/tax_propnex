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
        <h1 class="text-4xl">Proforma Invoices <span class="text-sm">Search</span></h1>

        <h1 class="text-base mt-8"></h1>
        <div class="bg-black/10 mt-2 py-6 px-3">
            <div>

                <div class="flex items-end">
                    <div class="flex flex-col w-40">
                        <span class="px-1 text-sm">Transaction No.</span>
                        <input name="trans_no" class="text-black rounded px-2" type="text">
                    </div>
                    <div class="flex flex-col w-40 mx-7">
                        <span class="px-1 text-sm">Start Invoice Date<span class="text-red-600">*</span></span>
                        <input name="spa_date" class="text-black rounded px-2" type="date">
                    </div>
                    <div class="flex flex-col w-40 mx-7">
                        <span class="px-1 text-sm">End Invoice Date<span class="text-red-600">*</span></span>
                        <input name="spa_date" class="text-black rounded px-2" type="date">
                    </div>
                    <a onclick="hideshow2()" class="bg-green-500 cursor-pointer flex px-7 py-0.5 h-7 mx-4">Search <svg
                            class="w-4 mt-1 ml-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M4 11C4 7.13401 7.13401 4 11 4C14.866 4 18 7.13401 18 11C18 14.866 14.866 18 11 18C7.13401 18 4 14.866 4 11ZM11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C13.125 20 15.078 19.2635 16.6177 18.0319L20.2929 21.7071C20.6834 22.0976 21.3166 22.0976 21.7071 21.7071C22.0976 21.3166 22.0976 20.6834 21.7071 20.2929L18.0319 16.6177C19.2635 15.078 20 13.125 20 11C20 6.02944 15.9706 2 11 2Z"
                                fill="#fff"></path>
                        </svg></a>
                </div>
                <!-- component -->
                <section id="invoicetable" class="container hidden bg-blue-900 py-2 mt-3 px-4 w-3/4">
                    <div class="mt-6 md:flex md:items-center md:justify-between">
                        <div class="inline-flex overflow-hidden  rounded-lg">
                            <a class="px-5 py-2 text-xs font-medium text-gray-100 ">
                                Show
                            </a>

                            <button
                                class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                                Monitored
                            </button>

                            <a class="px-5 py-2 text-xs font-medium text-gray-100 ">
                                entries
                            </a>
                        </div>

                        <div class="relative flex items-center mt-4 md:mt-0">
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
                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                <div class="overflow-hidden border border-gray-200  md:rounded-lg">
                                    <table class="w-full">
                                        <thead class="bg-gray-50 ">
                                            <tr>
                                                <th scope="col"
                                                    class="px-2 py-1 text-xs font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Invoices No.
                                                </th>

                                                <th scope="col"
                                                    class="px-2 py-1 text-xs font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Trans No.
                                                </th>

                                                <th scope="col"
                                                    class="px-2 py-1 text-xs font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Invoice Date
                                                </th>

                                                <th scope="col"
                                                    class="px-2 py-1 text-xs font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Due Amount</th>

                                                <th scope="col"
                                                    class="px-2 py-1 text-xs font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Gst</th>
                                                <th scope="col"
                                                    class="px-2 py-1 text-xs font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Gst Amount</th>
                                                <th scope="col"
                                                    class="px-2 py-1 text-xs font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Invoice Amount</th>
                                                <th scope="col"
                                                    class="px-2 py-1 text-xs font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Bill To</th>
                                                <th scope="col"
                                                    class="px-2 py-1 text-xs font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Invoice Status</th>
                                                <th scope="col"
                                                    class="px-2 py-1 text-xs font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Invoice Remark</th>
                                                <th scope="col"
                                                    class="px-2 py-1 text-xs font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                    Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody id="transTable" class="bg-white">
                                            <tr>
                                                <td class="px-2 py-1 text-xs font-medium whitespace-nowrap">
                                                    <div>

                                                        <p class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                            1</p>
                                                    </div>
                                                </td>
                                                <td class="px-2 py-1 text-xs font-medium whitespace-nowrap">
                                                    <div>

                                                        <p class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                            1</p>
                                                    </div>
                                                </td>
                                                <td class="px-2 py-1 text-xs whitespace-nowrap">
                                                    <div>

                                                        <p class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                            1</p>
                                                    </div>
                                                </td>
                                                <td class="px-2 py-1 text-xs whitespace-nowrap">
                                                    <div>

                                                        <p class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                            1</p>
                                                    </div>
                                                </td>

                                                <td class="px-2 py-1 text-xs whitespace-nowrap">
                                                    <div>

                                                        <p class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                            1</p>
                                                    </div>
                                                </td>
                                                <td class="px-2 py-1 text-xs whitespace-nowrap">
                                                    <div>

                                                        <p class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                            1</p>
                                                    </div>
                                                </td>
                                                <td class="px-2 py-1 text-xs whitespace-nowrap">
                                                    <div>

                                                        <p
                                                            class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                            1</p>
                                                    </div>
                                                </td>
                                                <td class="px-2 py-1 text-xs whitespace-nowrap">
                                                    <div>

                                                        <p
                                                            class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                            1</p>
                                                    </div>
                                                </td>
                                                <td class="px-2 py-1 text-xs whitespace-nowrap">
                                                    <div>

                                                        <p
                                                            class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                            1</p>
                                                    </div>
                                                </td>
                                                <td class="px-2 py-1 text-xs whitespace-nowrap">
                                                    <div>

                                                        <p
                                                            class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                            1</p>
                                                    </div>
                                                </td>
                                                <td class="px-2 py-1 text-xs whitespace-nowrap">
                                                    <div>

                                                        <a href="/invoice_update"
                                                            class="text-xs font-normal text-blue-600 dark:text-gray-400">
                                                            edit</a>
                                                    </div>
                                                </td>
                                            </tr>
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






    <script>
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
    </script>
</body>
