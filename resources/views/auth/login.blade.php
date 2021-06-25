@extends('layouts.app')

@section('content')
	<div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            @if(session('status'))
                <div class="bg-red-400 p-3 mb-5 text-white text-center rounded">
                    {{session('status')}}
                </div>
            @endif
            <h3 class="text-center">Login</h3>
			<form action="{{route('login')}}" method="post">
				@csrf
				<div class="mb-3 mt-3">
					<label for="email" class="sr-only">Email</label>
					<input type="text" name="email" id="email" placeholder="Enter your email" class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('email') border-red-500 @enderror" value="{{old('email')}}">

					@error('email')
						<div class="text-red-500 mt-2 text-sm">
							{{ $message }}
						</div>
					@enderror
				</div>
				<div class="mb-3">
					<label for="password" class="sr-only">Password</label>
					<input type="password" name="password" id="password" placeholder="Enter your password" class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('password') border-red-500 @enderror">

					@error('password')
						<div class="text-red-500 mt-2 text-sm">
							{{ $message }}
						</div>
					@enderror
				</div>
				<div>
					<button type="submit" class="bg-blue-400 text-white px-4 py-2 rounded font-medium w-full" >Login</button>
				</div>
			</form>
        </div>
    </div>
@endsection