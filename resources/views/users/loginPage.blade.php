<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    @vite(['resources/css/app.css'])
</head>
<body class="flex justify-center mt-5 bg-violet-900">
    
    <section class="login flex w-[65%] h-[65%] overflow-hidden justify-center items-center bg-neutral-900 rounded-lg">
        <!-- Login section image -->

        
        <div class="login-image w-[42%]">
            <!-- Register button -->
            <input class="btn absolute text-white z-10 top-10 mx-5 border px-4 py-2 rounded-md hover:bg-violet-900 duration-200" type="submit" value="Register" >
            <img src="{{asset('images/backgrounds/loginBackground.jpg')}}" alt="phone playing spotify" class="login-img relative rounded-md">
        </div>
        
        <form action="" class="login-form w-[58%] flex flex-col gap-10 justify-center items-center m-auto">

                <!-- greeting -->
                <div class="greeting text-center">
                    <h2 class="text-4xl font-bold text-white">Welcome home 👋</h2>
                    <h3 class="text-xl font-semibold text-white">We all need a safe place</h3>
                </div>

                <!-- email input -->
                <div class="username flex flex-col">
                    <label for="email" class="text-white text-xl font-semibold my-3">Email :</label>
                    <input type="text" name="email" placeholder="Rabie@gmail.com" class="w-[100%] h-8 p-5 text-white radius-full mx-5 rounded-md border-white border-2 border-white bg-inherit ">
                </div>
    
                <!-- password -->
                <div class="username flex flex-col">
                    <label for="name" class="text-white text-xl  font-semibold my-3">Password :</label>
                    <input type="password" name="password" placeholder="****************************" class="w-[100%] h-8 p-5 text-white radius-full mx-5 rounded-md border-white border-2 border-white bg-inherit">
                </div>
    
                <!-- Submit -->
    
                <div class="submit">
                    <input type="submit" value="Login" class="text-white w-[100%] px-20 py-1 rounded-md bg-violet-900 hover:bg-inherit ease-in duration-200 border border-white mx-5 ">
                </div>            

        </form>
        

    </section>
</body>
</html>