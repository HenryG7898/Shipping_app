@extends('layout.app')

@section('content')
    <div class="w-full bg-center bg-cover bg-fixed h-screen" style="background-image: url(https://www.flytraplife.com/wp-content/uploads/2019/04/190415-FreeShipping-01.jpg);">
        <div class="flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-50">
            <div class="text-center">
                <h1 class="text-2xl font-semibold mb-4 text-white uppercase lg:text-3xl">LogiFreight  <span class="text-blue-400 underline">Limited</span></h1>
                <a href="{{ url('login') }}" class="w-full px-4 py-2 mt-10 text-sm font-medium text-white uppercase transition-colors duration-200 transform bg-blue-600 rounded-md lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Get Started</a>
            </div>
        </div>
    </div>
    <section class="w-full h-screen   text-gray-900 py-32 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 flex items-center justify-center">
            <div class="lg:w-3/6 lg:pr-0 pr-0">
                <h1 class="font-medium text-8xl text-white">LogiFreight Limited</h1>
                <p class="leading-relaxed mt-4 text-white">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="lg:w-3/6 xl:w-2/5 md:w-full bg-gray-50 p-8 flex flex-col lg:ml-auto w-full mt-10 lg:mt-0 rounded-md">
                <img src="https://th.bing.com/th/id/OIP.QeoDmrkr5MTFcIPVRKf_rgHaE8?pid=ImgDet&rs=1" alt="">
            </div>
        </div>
    </section>
@endsection


