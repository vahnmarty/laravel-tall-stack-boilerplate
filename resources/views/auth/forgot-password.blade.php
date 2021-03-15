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
                    Reset Password
                </h2>

                <p class="mt-4">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </p>

                @include('includes.partials.status')

                @include('includes.partials.errors')

                <form class="space-y-6"
                      method="POST"
                      action="{{ route('password.email') }}"
                      method="POST">
                    @csrf
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
                                   value="{{ old('email') }}"
                                   required
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Email Password Reset Link') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-guest-layout>