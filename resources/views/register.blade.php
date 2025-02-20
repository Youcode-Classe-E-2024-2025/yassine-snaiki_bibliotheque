<x-layout>
    <x-slot name="heading">Sign Up</x-slot>
    <div class="max-w-md mx-auto bg-white p-8 shadow-md rounded-lg">
        <form method="POST" action="register" class="space-y-6">
            @csrf
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" required
                    class="w-full p-3 mt-1 border rounded-lg focus:ring focus:ring-indigo-300">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full p-3 mt-1 border rounded-lg focus:ring focus:ring-indigo-300">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full p-3 mt-1 border rounded-lg focus:ring focus:ring-indigo-300">
            </div>
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                    Confirm Password
                </label>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                    class="w-full p-3 mt-1 border rounded-lg focus:ring focus:ring-indigo-300">
            </div>
            <button type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white p-3 rounded-lg transition">
                Register
            </button>
            <p class="text-sm text-gray-600 text-center">
                Already have an account?
                <a href="login" class="text-indigo-500 hover:underline">Login</a>
            </p>
        </form>
    </div>
</x-layout>

