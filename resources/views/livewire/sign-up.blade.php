<div>

        <div class="bg-gray-600">

            <section class="flex flex-wrap md:flex-row h-screen items-center ">

                <div class="bg-indigo-600 hidden lg:block w-full sm:w-4/12 md:w-5/12 xl:w-6/12 h-screen">
                    <img src="https://jitexpertshive.com/wp-content/uploads/2020/04/business-woman-entrepreneur-RCQ626N-1536x1024.jpg" alt="" class="w-full h-full object-cover">
                </div>

                <div class="bg-white  sm:max-w-md md:max-w-md lg:max-w-full md:mx-auto sm:mx-auto md:mx-0 md:w-4/12 sm:w-5/12 xl:w-6/12 h-screen px-6 md:px-5 sm:px-5 xl:px-5">
                    <h3 class="pt-4 text-2xl text-center">Create an Account!</h3>
                    <form class="px-1 pt-6 pb-8 mb-4 bg-white rounded" wire:submit.prevent="newmember">
                        <div class="mb-2 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                    First Name
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="firstName"
                                    wire:model="first_nm"
                                    type="text"
                                    placeholder="First Name"
                                />
                                @error('first_nm') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                    Last Name
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="lastName"
                                    wire:model="last_nm"
                                    type="text"
                                    placeholder="Last Name"
                                />
                                @error('last_nm') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                            </div>
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="gender">
                                    Gender
                                </label>
                                <select wire:model="gender" id="gender"
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                                    <option value="">Please select a gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @error('gender') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="trn">
                                TRN#
                            </label>
                            <input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="trn"
                                wire:model="trn"
                                type="number"
                                placeholder="TRN Number"
                            />
                            @error('trn') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-2">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="address">
                                Address
                            </label>
                            <input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="address"
                                wire:model="address"
                                type="text"
                                placeholder="Address"
                            />
                            @error('address') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-2">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="mail">
                                Mailing Address
                            </label>
                            <input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="mail"
                                wire:model="mail"
                                type="text"
                                placeholder="Mailing Address"
                            />
                            @error('mail') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-2">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                Email
                            </label>
                            <input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="email"
                                wire:model="email"
                                type="email"
                                placeholder="Email"
                            />
                            @error('email') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                        </div>

                            <div class="mb-2 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                    Password
                                </label>
                                <input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="password"
                                    wire:model="password"
                                    type="password"
                                    placeholder="******************"
                                />
                                @error('password') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror
                            </div>
{{--                            <div class="md:ml-2">--}}
{{--                                <label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">--}}
{{--                                    Confirm Password--}}
{{--                                </label>--}}
{{--                                <input--}}
{{--                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"--}}
{{--                                    id="c_password"--}}
{{--                                    type="password"--}}
{{--                                    placeholder="******************"--}}
{{--                                />--}}
{{--                                @error('') <span class="text-red-500 text-xs italic  m-1">{{ $message }}</span> @enderror--}}
{{--                            </div>--}}

                        <div class="mb-6 text-center">
                            <button
                                class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                type="submit"
                            >
                                Register Account
                            </button>
                        </div>
                        <hr class=" border-t" />
                        <div class="text-center">
                            <a
                                class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                href="#"
                            >
                                Forgot Password?
                            </a>
                        </div>
                        <div class="text-center">
                            <a
                                class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                href="{{ url('login') }}"
                            >
                                Already have an account? Login!
                            </a>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
