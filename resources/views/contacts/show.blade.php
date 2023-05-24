<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            詳細画面
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <section class="text-gray-600 body-font relative">
                    {{ $contact->id }} {{ $contact->name }}
                <div class="container px-5 py-24 mx-auto">
                        <div class="flex flex-col text-center w-full mb-12">
                        </div>
                        <div class="lg:w-1/2 md:w-2/3 mx-auto">
                        <div class="flex flex-wrap -m-2">
                            <div class="p-2 w-full">
                            <div class="relative">
                                <label for="name" class="leading-7 text-indigo-500 text-sm text-gray-600">氏名</label>
                                <div class="w-full bg-opacity-50 rounded  focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $contact->name }}</div>
                            </div>
                            </div>

                            <div class="p-2 w-full">
                            <div class="relative">
                                <label for="title" class="leading-7  text-indigo-500 text-sm text-gray-600">件名</label>
                                <div class="w-full bg-opacity-50 focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $contact->title }}</div>
                            </div>
                            </div>

                            <div class="p-2 w-full">
                            <div class="relative">
                                <label for="email" class="leading-7 text-indigo-500 text-sm text-gray-600">メール</label>
                                <div class="w-full bg-opacity-50 focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $contact->email }}</div>
                            </div>
                            </div>

                            <div class="p-2 w-full">
                            <div class="relative">
                                @if($contact->url)
                                <label for="url" class="leading-7 text-indigo-500 text-sm text-gray-600">ホームページ</label>
                               
                                <div class="w-full bg-opacity-50 focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $contact->url }}</div>
                            @endif
                            </div>
                            </div>

                            <div class="p-2 w-full">
                            <div class="relative">
                                <label for="gender" class="leading-7 text-indigo-500 text-sm text-gray-600">性別</label><br>
                                <div class="w-full bg-opacity-50 focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $gender }}</div>

                            </div>
                            </div>


                            <div class="p-2 w-full">
                            <div class="relative">
                                <label for="age" class="leading-7  text-indigo-500 text-sm text-gray-600">年齢</label>
                                <div class="w-full bg-opacity-50 focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ $age }}</div>

                            </div>
                            </div>

                            <div class="p-2 w-full">
                            <div class="relative">
                                <label for="contact" class="leading-7 text-indigo-500 text-sm text-gray-600">お問い合わせ</label>
                                <div class="w-full bg-opacity-50 rounded focus:border-red-500 focus:bg-white focus:ring-2 focus:ring-red-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ $contact->contact }}</div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </section>
 </div>
            </div>
        </div>
    </div>
</x-app-layout>
 