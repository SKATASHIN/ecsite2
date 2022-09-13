<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('owner.shops.update', ['shop' => $shop->id ])}}" enctype="multipart/form-data">
                        @csrf
                    <div class="-m-2" _msthidden="6">
                        <div class="p-2 w-1/2 mx-auto" _msthidden="1">
                            <div class="relative" _msthidden="1">
                                <label for="image" class="leading-7 text-sm text-gray-600" _msthash="1152983" _msttexthash="43069" _msthidden="1">画像</label>
                                <input type="file" id="image" name="image" accept="image/png,image/jpeg,image/jpg" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-full flex justify-around mt-4" _msthidden="1">
                            <button type="button" onclick="location.href='{{ route('owner.shops.index') }}'" class=" bg-gray-200 border-0 py-2 px-8 focus:outline-none hover:bg-gray-400 rounded text-lg" _msthash="1322126" _msttexthash="79859" _msthidden="1">戻る</button>
                            <button  type="submit" class=" text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" _msthash="1322126" _msttexthash="79859" _msthidden="1">更新する</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
