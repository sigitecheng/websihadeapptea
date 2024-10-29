
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sihade</title>

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/assets/login/signin.css" />
  </head>

  {{-- ============================================================================================================================================== --}}
  <body>
    <!-- header section starts  -->

    {{-- <header class="header"> --}}
      {{-- <a href="./index.html" class="logo">
        <i class="fas fa-seedling"></i> FarmBuddy
      </a> --}}

      {{-- <nav class="navbar">
        <a href="./index.html">home</a>
        <a href="./index.html">features</a>
        <a href="./index.html">categories</a>
        <a href="./index.html">products</a>
        <a href="./index.html">Learn</a>
        <a href="./index.html">Team</a>
        {{-- </nav> --}}
        {{-- </header> --}}
        
      {{-- </nav><h2>Sign in/up Form</h2>  --}}
<div class="container" id="container">
	<div class="form-container sign-up-container">
		 <form action="https://formsubmit.co/el/vadezu" method="POST">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
			{{-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> --}}
			{{-- <span>or use your account</span> --}}
            
            <form action="/login" method="post">
                <h1><i class="fas fa-seedling"></i> Sign in</h1>
            @csrf
            @method('post')
            <br>
			<input type="email" placeholder="Email" required />
            @error('email')
                <div class="invalid-feedback mb-2">
                    {{ $message }}
                </div>
            @enderror

			<input type="password" placeholder="Password" required />
            @error('password')
                <div class="invalid-feedback mb-2">
                    {{ $message }}
                </div>
            @enderror

            <br>
            <button type="submit"> <i class="fas fa-arrow-circle-right mr-2"></i> Sign In</button>
		</form>


        <form action="/login" method="post">
            @csrf
            <div class="form-group mt-0">
                <label class="font-semibold text-center d-block" for="email" style="font-family: 'Lato', sans-serif; font-weight: 700;">
                    <i class="fas fa-envelope" style="margin-right: 10px; "></i> Email
                </label>
                <input
                style="margin-left:330px; width: 400px; text-align:left; padding: 0px 15px;"
                type="text"
                name="email"
                class="form-control rounded-full @error('email') is-invalid @enderror"
                id="email"
                placeholder="Email"
                required
                value="{{ old('email') }}"
            />
        
            @error('email')
                <div class="invalid-feedback mb-2">
                    {{ $message }}
                </div>
            @enderror
            </div>
        
            <div class="form-group mt-0">
                <label class="font-semibold text-center d-block mb-2" for="password" style="font-family: 'Lato', sans-serif; font-weight: 700;">
                    <i class="fas fa-key" style="margin-right: 10px;"></i> Password
                </label>
                <input
                style="margin-left:330px; width: 400px; text-align:left; padding: 0px 15px;"
                type="password"
                name="password"
                class="form-control rounded-full @error('password') is-invalid @enderror"
                id="password"
                placeholder="Password"
                required
            />
        
            @error('password')
                <div class="invalid-feedback mb-2">
                    {{ $message }}
                </div>
            @enderror
        
            @if ($errors->has('loginError'))
                <div class="alert alert-danger">
                    {{ $errors->first('loginError') }}
                </div>
            @endif
            </div>
        
            <div class="form-group mt-4 text-center" style="background-color: white;">
            <style>
                    .masuk {
                        background: linear-gradient(to right, yellow, black);
                        color: white;
                        padding: 10px 20px;
                        border-radius: 35px;
                        display: inline-block;
                        border: none;
                        font-size: 1rem;
                        margin-right: 10px;
                        /* margin-left: 450px; */
                        text-align: center;
                        transition: background-color 0.3s, color 0.3s;
                    }
            
                    .masuk:hover {
                        /* background-color: white; */
                        background: linear-gradient(to right, darkblue, white);
                        color: black;
                    }
                </style>
                <button type="submit" class="masuk" style="width: 300px; background-color: #FFCB0F; color: white; font-family: 'Lato', sans-serif; font-weight: 700;"><i class="fab fa-telegram" style="color: white; font-size: 16px; margin-right: 10px;"></i>Login</button>
                <div style="margin-top: 10px;">
                    <a href="/404" class="text-black" style="font-family: 'Lato', sans-serif; font-weight: 700;">Register Here?</a>
                </div>
            </div>
        </form>
        
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Welcome !</h1>
                <a href="#" class="logo">
                    <h3 style="color: white"> Sihade</h3>
                  </a>
				{{-- <h2> <i class="fas fa-seddling"></i> Sihade</h2> --}}
                {{-- <br><br> --}}
				{{-- <button class="ghost" id="signUp">Sign Up</button> --}}
			</div>
		</div>
	</div>
</div>
<script src="/assets/login/signin.js"></script>
</body>
</html>