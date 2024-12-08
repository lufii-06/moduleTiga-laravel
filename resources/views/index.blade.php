    @include('component.header')
    <main>
        <div class="grid grid-col-1 md:grid-cols-2 lg:grid-cols-3 mt-10 px-20 gap-4">
            <div class="px-2 shadow rounded-lg">
                <div class="font-semibold text-3xl  p-5 ">
                    <div class="my-5">
                        <i class="fa fa-headphones"></i>
                        Podcast episodes
                    </div>
                    <div class="text-4xl pe-10 font-bolder">Daily Minute: Reports from around the world</div>
                </div>
                <div class="flex justify-between p-5 items-center gap-5">
                    <div class="size-11 pt-2">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9l0 176c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z" />
                        </svg>
                    </div>
                    <div class="relative w-full h-2 bg-gray-300 rounded-full">
                        <div class="absolute top-0 left-0 h-2 rounded-full w-1/3 bg-slate-900"></div>
                    </div>
                    <a>22.18</a>
                </div>
                <div class="flex items-center gap-5 p-5 border-b-[1px] border-black mb-7 pb-10">
                    <div class="bg-slate-400 rounded-full size-11 "></div>
                    <p class="text-lg font-bold">Nicola Schulz</p>
                </div>
                <div class="px-5">
                    <div class="bg-slate-400 rounded-lg w-full h-64"></div>
                    <div class="text-2xl font-bold">news</div>
                    <h1 class="font-bold mt-4 text-2xl">Lost cat found the way back to her home</h1>
                    <div class="flex items-center justify-between text-sm text-slate-500 bg-danger">
                        <div class="">TOM JERRY</div>
                        <div class="">13 June 2023</div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-between rounded-lg">
                <div class="bg-slate-400 rounded-lg w-full h-96"></div>
                <h3 class="text-center font-bold mt-5 text-2xl">CULTURE</h3>
                <h1 class="text-center font-bold text-5xl my-8">Best summer reads <br> for your vacation</h1>
                <p class="text-center font-semibold text-lg">Summer is the perfect time to indulge in some leisurely
                    reading,
                    whether it’s lying
                    on the beach or
                    lounging in the park. So if you’re looking for a way to unwind this summer, why not pick up a few
                    books
                    and escape into some captivating stories?
                </p>
                <p class="text-lg text-center mt-3">RAD BOOKER</p>
                <p class="text-lg text-center">13 June 2023</p>
            </div>
            <div class="shadow px-5 rounded-lg">
                <div class="bg-slate-400 rounded-lg w-full h-64"></div>
                <h3 class="text-2xl font-bold mt-2 mb-3">SPORT</h3>
                <h5 class="text-3xl font-bold mt-2 mb-3">Footballer leads Argentina to <br> victory</h5>
                <div class="flex items-center justify-between text-slate-600 shadow py-3">
                    <div class="">FRED BALLER</div>
                    <div class="">14 June 2023</div>
                </div>
                <div class="bg-slate-400 rounded-lg w-full h-64 mt-5"></div>
                <h1 class="text-2xl font-bold my-2">NEWS</h1>
                <h3 class="text-4xl font-bold">Major cyberattack happened</h3>
                <div class=" flex items-center justify-between text-slate-600  py-3">
                    <div class="">PETER COMPUTER</div>
                    <div class="">14 June 2023</div>
                </div>
            </div>
        </div>

        <div class="px-20 mt-10 border-t-2 border-black">
            <div class="flex justify-between my-10 flex-wrap">
                <div class="text-2xl font-bold">Food and Drink</div>
                <a href="" class="font-bold">See all</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="flex flex-col justify-between">
                    <div class="bg-slate-400 rounded-lg w-full h-48"></div>
                    <div class="text-md font-bold my-2">DRINKS</div>
                    <div class="text-2xl font-bold">On a hunt for the best kombucha</div>
                    <div class=" flex items-center justify-between text-slate-600 shadow py-3">
                        <div class="">JANE DRINKS</div>
                        <div class="">13 June 2023</div>
                    </div>
                </div>
                <div class="flex flex-col justify-between">
                    <div class="bg-slate-400 rounded-lg w-full h-48"></div>
                    <div class="text-md font-bold my-2">FOOD</div>
                    <div class="text-2xl font-bold">Shoreditch's best bodegas</div>
                    <div class=" flex items-center justify-between text-slate-600 shadow py-3">
                        <div class="">TONY HUNGRY</div>
                        <div class="">13 June 2023</div>
                    </div>
                </div>
                <div class="flex flex-col justify-between">
                    <div class="bg-slate-400 rounded-lg w-full h-48"></div>
                    <div class="text-md font-bold my-2">FOOD</div>
                    <div class="text-2xl font-bold">Cooking on budget</div>
                    <div class=" flex items-center justify-between text-slate-600 shadow py-3">
                        <div class="">TONY HUNGRY</div>
                        <div class="">13 June 2023</div>
                    </div>
                </div>
                <div class="flex flex-col justify-between">
                    <div class="bg-slate-400 rounded-lg w-full h-48"></div>
                    <div class="text-md font-bold my-2">DRINKS</div>
                    <div class="text-2xl font-bold">best alcohol-free cocktails</div>
                    <div class=" flex items-center justify-between text-slate-600 shadow py-3">
                        <div class="">JANE DRINKS</div>
                        <div class="">13 June 2023</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-20 mt-10 border-t-2 border-black">
            <div class="flex justify-between my-10 flex-wrap">
                <div class="text-2xl font-bold">Editor's picks</div>
                <a href="" class="font-bold">See all</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-full">
                <div class="flex flex-col justify-between ">
                    <div class="flex items-end gap-5">
                        <p class="font-bold text-7xl">1</p>
                        <div class="bg-slate-400 rounded-lg w-full h-48"></div>
                    </div>
                    <div class="text-md font-bold my-2">NEWS</div>
                    <div class="text-2xl font-bold">People are happy and healthy everywhere</div>
                    <div class=" flex items-center justify-start text-slate-600 py-3">
                        <div class="">TOM JERRY</div>
                    </div>
                </div>
                <div class="flex flex-col justify-between">
                    <div class="flex items-end gap-5">
                        <p class="font-bold text-7xl">2</p>
                        <div class="bg-slate-400 rounded-lg w-full h-48"></div>
                    </div>
                    <div class="text-md font-bold my-2">SPORTS</div>
                    <div class="text-2xl font-bold">Hockey Championship is about to start</div>
                    <div class=" flex items-center justify-start text-slate-600  py-3">
                        <div class="">MIKE SPORT</div>
                    </div>
                </div>
                <div class="flex flex-col justify-between">
                    <div class="flex items-end gap-5">
                        <p class="font-bold text-7xl">3</p>
                        <div class="bg-slate-400 rounded-lg w-full h-48"></div>
                    </div>
                    <div class="text-md font-bold my-2">CULTURE</div>
                    <div class="text-2xl font-bold">Finnaly a good theatre!</div>
                    <div class=" flex items-center justify-start text-slate-600  py-3">
                        <div class="">MAMA DRAMA</div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <div id="modal" class="bg-black bg-opacity-50 fixed inset-0 hidden">
        <div class="flex justify-center items-center">
            <div id="cardmodal" class="bg-white rounded-lg w-1/4 p-10">
                <h1 class="text-lg font-bold" id="message"></h1>
                <button id="btn-closeModal"
                    class="float-right px-3 py-2 bg-red-600 rounded-lg text-white hover:bg-red-700">Tutup</button>
            </div>
        </div>
    </div>
    @include('component.footer')

    <script src="{{ asset('build/assets/jquery-3.7.1.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#btn-subscribe").click(function() {
                const email = prompt("Masukkan alamat email");
                $("#modal").show();
                $("#message").text("Terimakasih telah subscribe website kami");
            });
            $("#btn-closeModal").click(function() {
                $("#modal").hide();
            })
        })
    </script>
    </body>

    </html>
