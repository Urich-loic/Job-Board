<x-layout>
     <h1 class="text-3xl font-medium text-center py-8">
            Sign into your account !
        </h1>
    <x-cardcomponent>

        <div class="py-8 px-16">
            <form action="{{ route('auth.store', ) }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="Email" class="mb-2 block text-slate-900">Email</label>
                    <x-text-input name="email" placeholder="Email"/>
                    @error('email')
                    <small>{{ session('message')
                     }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="mb-2 block text-slate-900">Password</label>
                    <x-text-input name="password" placeholder="Password" type="password"/>
                </div>
                <div class="mb-4 mt-2 flex justify-between">
                    <div class="ckeckBox flex gap-2">
                         <x-text-input type="checkbox" name="remember" placeholder="Password"/>
                         <label for="remember">Remember password</label>
                    </div>
                    <div class="ckeckBox">
                         <a href="#" class="text-indigo-600 hover:underline">Reset password</a>
                    </div>
                </div>
                <button type="submit" class="w-full bg-slate-800 hover:bg-slate-400 text-white py-2 rounded-md mt-3"> SignIn</button>
            </form>
        </div>
    </x-cardcomponent>
</x-layout>
