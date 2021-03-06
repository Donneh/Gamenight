@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular games</h2>

        <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="https://via.placeholder.com/264x352" alt="Game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full -mr-5 -mb-5">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Game name
                </a>
                <p class="text-gray-400 mt-1">
                    Platforms
                </p>
            </div>
        </div>


        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>

                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="https://via.placeholder.com/48x70" alt="Game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full -mr-5 -mb-5">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                        </div>

                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                Game name
                            </a>
                            <div class="text-gray-400 mt-1">Platform</div>
                            <p class="mt-6 text-gray-400 hidden lg:block">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur, autem beatae commodi corporis deleniti dolorum est facere facilis fugit impedit in nostrum nulla pariatur tempora temporibus ut vel veritatis.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="https://via.placeholder.com/48x70" alt="Game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full -mr-5 -mb-5">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                        </div>

                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                Game name
                            </a>
                            <div class="text-gray-400 mt-1">Platform</div>
                            <p class="mt-6 text-gray-400 hidden lg:block ">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur, autem beatae commodi corporis deleniti dolorum est facere facilis fugit impedit in nostrum nulla pariatur tempora temporibus ut vel veritatis.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="recently-reviewed-container space-y-12 mt-8">
                    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                        <div class="relative flex-none">
                            <a href="#">
                                <img src="https://via.placeholder.com/48x70" alt="Game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full -mr-5 -mb-5">
                                <div class="font-semibold text-xs flex justify-center items-center h-full">
                                    80%
                                </div>
                            </div>
                        </div>

                        <div class="ml-12">
                            <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                Game name
                            </a>
                            <div class="text-gray-400 mt-1">Platform</div>
                            <p class="mt-6 text-gray-400 hidden lg:block">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur, autem beatae commodi corporis deleniti dolorum est facere facilis fugit impedit in nostrum nulla pariatur tempora temporibus ut vel veritatis.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="most-anticipated lg:w-1/4 mt-12 lg:mt-0">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                    Most Anticipated
                </h2>

                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="https://via.placeholder.com/264x352" alt="Game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Game Title</a>
                            <div class="text-gray-400 text-sm mt-1">Release date</div>
                        </div>
                    </div>
                </div>

                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="https://via.placeholder.com/264x352" alt="Game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Game Title</a>
                            <div class="text-gray-400 text-sm mt-1">Release date</div>
                        </div>
                    </div>
                </div>

                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="https://via.placeholder.com/264x352" alt="Game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Game Title</a>
                            <div class="text-gray-400 text-sm mt-1">Release date</div>
                        </div>
                    </div>
                </div>

                <div class="most-anticipated-container space-y-10 mt-8">
                    <div class="game flex">
                        <a href="#">
                            <img src="https://via.placeholder.com/264x352" alt="Game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="ml-4">
                            <a href="#" class="hover:text-gray-300">Game Title</a>
                            <div class="text-gray-400 text-sm mt-1">Release date</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
