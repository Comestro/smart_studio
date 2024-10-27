<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') {{env('APP_NAME')}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Fix for positioning the profile icons at the bottom */
        .profile-icons {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
        }
    
        /* Custom CSS for the carousel */
        .photo_slider {
            min-height: 100vh;
            display: grid;
            place-items: center;
        }
    
        .slider {
            height: 250px;
            margin: auto;
            position: relative;
            width: 100%;
            display: grid;
            place-items: center;
            overflow: hidden;
        }
    
        .slide-track {
            display: flex;
            width: calc(250px * 18); /* Adjust width based on the number of slides */
            animation: scroll 40s linear infinite;
        }
    
        .slide-track:hover {
            animation-play-state: paused;
        }
    
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-250px * 9)); /* Adjust based on half of the total slides */
            }
        }
    
        .slide {
            height: 200px;
            width: 250px;
            display: flex;
            align-items: center;
            padding: 15px;
            perspective: 100px;
        }
    
        img {
            width: 100%;
           
            transition: transform 1s, border 0.5s;
            cursor: pointer;
        }
    
        /* Updated Hover and Click Effect */
        .expandable-image {
            width: 100%;
            border: 4px solid transparent;
            transition: transform 0.4s ease-in-out, border-color 0.4s ease;
        }
    
        .expandable-image:hover {
            transform: scale(1.05);
        }
    
        /* Click effect - expand with a thick blue border */
        .expandable-image:active {
            transform: scale(1.3); /* Expands the image on click */
            border-color: blue; /* Blue border */
            border-width: 8px;
        }
    
        /* GRADIENT SHADOWS */
        .slider::before,
        .slider::after {
            background: linear-gradient(to right, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 50%);
            content: '';
            height: 100%;
            position: absolute;
            width: 10%; /* Narrower shadow for a smoother effect */
            z-index: 2;
        }
    
        .slider::before {
            left: 0;
            top: 0;
        }
    
        .slider::after {
            right: 0;
            top: 0;
        }
    
    </style>
    
   
</head>
<body>
    @section('content')
    
    @show

</body>
</html>
