<x-guest-layout>
    <div class="max-w-screen min-h-screen   " style="background-image: url('/storage/images/fsuu.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="flex items-center relative">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
            <div class="block">
                <div class="uppercase font-zilla text-3xl text-gray-100">father saturnino urios university</div>
                <div class="font-zilla text-3xl text-gray-100">Scholarship Management System</div>
            </div>
        </div>
        <x-auth-session-status class="mb-4 relative" :status="session('status')" />  
        <div class="max-w-screen overflow-hidden bg-cover relative">
            <div class="flex md:justify-end lg:justify-end items-center">
                <div class="h-3/5 md:w-4/12 lg:w-[450px]">
                    <div class="bg-gray-100 border border-gray-200 rounded-md shadow-2xl">
                        <div class="p-4 lg:p-12 sm:p-7">
                            <div class="">
                                <!-- Form -->
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="grid gap-y-4">
                                    <!-- Form Group -->
                                    <div>
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <!-- End Form Group -->

                                    <div class="mt-4">
                                        <x-input-label for="password" :value="__('Password')" />

                                        <x-text-input id="password" class="block mt-1 w-full"
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="current-password" />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-sm border border-transparent font-semibold bg-blue-900 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">Login</button>
                                    </div>
                                </form>
                                <!-- End Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
