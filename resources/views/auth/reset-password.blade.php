<x-guest-layout>

    <div class="min-h-screen bg-indigo-300 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-12 w-auto"
                 src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                 alt="Workflow">

        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white pt-4 pb-8 px-4 shadow sm:rounded-lg sm:px-10">

                <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                    Set New Password
                </h2>

                @if (session('status'))
                <div class="mb-2 mt-4 font-medium text-sm text-green-600 bg-green-50 p-2 rounded-sm">
                    {{ session('status') }}
                </div>
                @endif


                @include('includes.partials.errors')

                <form class="space-y-6"
                      method="POST"
                      action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden"
                           name="token"
                           value="{{ $request->route('token') }}">


                    <div>
                        <label for="email"
                               class="block text-sm font-medium text-gray-700">
                            Email address
                        </label>
                        <div class="mt-1">
                            <input id="email"
                                   name="email"
                                   type="email"
                                   autocomplete="email"
                                   autofocus
                                   value="{{ old('email', $request->email) }}"
                                   required
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                    </div>

                    <div>
                        <label for="password"
                               class="block text-sm font-medium text-gray-700">
                            Password
                        </label>
                        <div class="mt-1">
                            <input id="password"
                                   name="password"
                                   type="password"
                                   autocomplete="current-password"
                                   required
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                    </div>

                    <div>
                        <label for="password_confirmation"
                               class="block text-sm font-medium text-gray-700">
                            Confirm Password
                        </label>
                        <div class="mt-1">
                            <input id="password_confirmation"
                                   name="password_confirmation"
                                   type="password"
                                   autocomplete="bew-password"
                                   required
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-guest-layout>