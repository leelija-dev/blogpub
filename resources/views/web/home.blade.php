@extends('layouts.web.main-layout')

@section('title', 'home-page')

@section('content')

<section class="bg-black min-h-[250px] flex justify-center items-center">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between text-white">
    <!-- Left Section: Text -->
    <div class="mb-6 md:mb-0 text-center md:text-left">
        <h1 class="text-4xl md:text-5xl font-bold leading-tight">
            Build Websites Rapidly With<br>
            <span class="text-indigo-400">Trendkit Interface Blocks</span>.
        </h1>
    </div>

    <!-- Right Section: Buttons -->
    <div class="flex flex-col sm:flex-row gap-4">
        <button class="px-6 py-3 border border-white text-white rounded-lg hover:bg-white hover:text-gray-900 transition duration-300 whitespace-nowrap">
            Check more
        </button>
        <button class="px-6 py-3 text-white rounded-lg btn-gradient hover:opacity-90 transition duration-300 whitespace-nowrap shadow-lg">
            Get trendkit
        </button>
    </div>
</div>
</section>


<!-- about us  -->
<section>
    <div class="container mx-auto ">
        <div class="flex flex-col lg:flex-row">

            <!-- Left Section - Images -->
            <div class="w-full lg:w-1/2 p-8 space-y-4">
                <!-- Top Row -->
                <div class="flex gap-4">
                    <div class="flex-1">
                        <div class="bg-gray-200 border-2 border-dashed rounded-xl w-full h-48 flex items-center justify-center">
                            <span class="text-gray-500 text-sm">Image 1</span>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="bg-gray-200 border-2 border-dashed rounded-xl w-full h-48 flex items-center justify-center">
                            <span class="text-gray-500 text-sm">Image 2</span>
                        </div>
                    </div>
                </div>

                <!-- Bottom Row -->
                <div class="flex gap-4">
                    <div class="flex-1">
                        <div class="bg-gray-200 border-2 border-dashed rounded-xl w-full h-56 flex items-center justify-center">
                            <span class="text-gray-500 text-sm">Image 3</span>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="bg-gray-200 border-2 border-dashed rounded-xl w-full h-56 flex items-center justify-center">
                            <span class="text-gray-500 text-sm">Image 4</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section - Content -->
            <div class="w-full lg:w-1/2 p-10 lg:p-16 flex flex-col justify-center space-y-8 ">
                <!-- Badge -->
                <div class="inline-flex items-center gap-2 bg-indigo-100 text-indigo-700 text-xs font-semibold px-3 py-1 rounded-full w-fit">
                    <span class="w-2 h-2 bg-indigo-600 rounded-full"></span>
                    BUSINESS GROWTH
                    <span class="w-2 h-2 bg-indigo-600 rounded-full ml-1"></span>
                </div>

                <!-- Title -->
                <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                    Connecting People And<br />Build Technology
                </h1>

                <!-- Description -->
                <p class="text-gray-600 text-base leading-relaxed">
                    Energetically evisculate an expanded array of meta-services after cross-media strategic theme areas.
                    Interactively simplify interactive customer service before fully tested relationship parallel task high standards.
                </p>

                <!-- Progress Bars -->
                <div class="space-y-6">
                    <!-- Business Security -->
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm font-medium text-gray-700">Business Security</span>
                            <span class="text-sm font-semibold text-indigo-600">65%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-gradient-to-r from-indigo-500 to-purple-600 h-3 rounded-full transition-all duration-700" style="width: 65%"></div>
                        </div>
                    </div>

                    <!-- Career Development -->
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm font-medium text-gray-700">Career Development</span>
                            <span class="text-sm font-semibold text-indigo-600">88%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-gradient-to-r from-indigo-500 to-purple-600 h-3 rounded-full transition-all duration-700" style="width: 88%"></div>
                        </div>
                    </div>

                    <!-- Business Innovation -->
                    <div>
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm font-medium text-gray-700">Business Innovation</span>
                            <span class="text-sm font-semibold text-indigo-600">90%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-gradient-to-r from-indigo-500 to-purple-600 h-3 rounded-full transition-all duration-700" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<x-web.faq />
@endsection
@section('scripts')


@endsection