<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <!-- @vite('resources/css/app.css') -->     
    <title>@yield("title")</title>
    <link href="{{ URL::asset('css/common.css'); }}" rel="stylesheet">
</head>
<body style="font-family: Inter;" class="text-base text-black bg-white antialiased font-feature-default p-12 flex flex-col h-full">
    <header>
        <nav class="flex items-center">
          <div><img title="Logo" src="/images/logo.svg" /></div>
          <div class="flex justify-end items-center grow gap-6 text-[#21478A] font-bold">
            <a href="#" class="hover:text-[#4474C8]">Search Jobs</a>
            <a href="#" class="hover:text-[#4474C8]">Post Jobs</a> 
            <button class="hover:bg-[#4474C8] border-solid border border-[#4474C8] hover:text-white text-[#4474C8] font-bold py-4 px-8 text-base	rounded-full">Login/Sign Up</button>
          </div>
        </nav>
    </header>
    <main class="my-10 h-full">