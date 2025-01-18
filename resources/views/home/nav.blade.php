<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar Slider</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <style>
        .slider-container {
            display: none;
            /* Hide by default */
        }

        .slider-container.active {
            display: block;
            /* Show active slide */

        }
        
        .language-selector {
                position: absolute;
                right: 16px;
                top: 16px;
                z-index: 10;
            }

      /* General styles for the navbar language switcher */
.gt_switcher-popup {
    display: flex;
    align-items: center;
}

/* Show only flags in the navbar on mobile view */
@media (max-width: 1024px) {
    .gt_switcher-popup span {
        display: none;
    }
    .gt_switcher-popup img {
        margin-right: 0;
    }
}

/* Popup should still show flags and language names */
.gt_white_content a span {
    display: inline !important;
}

    </style>
</head>

<body class="bg-gray-100">
    <nav class="bg-blue-800 ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Left Section (Desktop) -->
                <div class="hidden md:flex items-center">
                    <a href="{{route('customize')}}" class="text-white text-lg font-900">Customize your trek</a>
                </div>

                <!-- Center Section (Desktop) -->
                <div class="hidden md:flex items-center space-x-6">
                    <a href="https://wa.me/9779846577522" class="flex items-center text-white hover:text-white px-3 py-2">
                        <svg class="w-[32px] h-[32px] text-white dark:text-white mr-2" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                clip-rule="evenodd" />
                            <path fill="currentColor"
                                d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                        </svg>
                        +977 9846577522
                    </a>
                    <a href="#" class="flex items-center text-white hover:text-white px-3 py-2">
                        <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M2.038 5.61A2.01 2.01 0 0 0 2 6v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-.12-.01-.238-.03-.352l-.866.65-7.89 6.032a2 2 0 0 1-2.429 0L2.884 6.288l-.846-.677Z" />
                            <path
                                d="M20.677 4.117A1.996 1.996 0 0 0 20 4H4c-.225 0-.44.037-.642.105l.758.607L12 10.742 19.9 4.7l.777-.583Z" />
                        </svg>
                        anmolsunar@gmail.com
                    </a>
                </div>

                <!-- Right Section (Language Selector & Slider) -->
                <div class="flex items-center space-x-4">
                    <!-- Language Selector -->
                    <div class="language-selector bg-blue-300 text-gray-800 pl-1 py-2 rounded-md text-sm font-medium" style="z-index: auto;">
                        <div id="gt-mordadam-43217984"></div>
                    </div>

                    <div class="md:hidden ">
                        <!-- Slider Items -->
                        <div class="flex justify-end"></div>
                        <div class="slider-container active" id="slider-item-1">
                            <!-- Customize your trek -->
                            <span>Customize your trek</span>
                        </div>
                        <div class="slider-container" id="slider-item-2">
                            <!-- WhatsApp Contact -->
                            <a href="https://wa.me/9779846577522" target="_blank" class="flex items-center space-x-2">
                                <svg class="w-[32px] h-[32px] text-green-700 dark:text-white mr-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z"
                                        clip-rule="evenodd" />
                                    <path fill="currentColor"
                                        d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                </svg>
                                <span>+977 9846577522</span>
                            </a>
                        </div>
                        <div class="slider-container" id="slider-item-3">
                            <!-- Email Address -->
                            <a href="mailto:loremipsum@gmail.com" class="flex items-center space-x-2">
                                <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M2.038 5.61A2.01 2.01 0 0 0 2 6v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-.12-.01-.238-.03-.352l-.866.65-7.89 6.032a2 2 0 0 1-2.429 0L2.884 6.288l-.846-.677Z" />
                                    <path
                                        d="M20.677 4.117A1.996 1.996 0 0 0 20 4H4c-.225 0-.44.037-.642.105l.758.607L12 10.742 19.9 4.7l.777-.583Z" />
                                </svg>
                                <span>loremipsum@gmail.com</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </nav>

    <!-- Language Selector Script -->
    <script type="text/javascript">
        window.gtranslateSettings = window.gtranslateSettings || {};
        window.gtranslateSettings["43217984"] = {
            default_language: "en",
            languages: ["en", "ja", "zh-CN", "ko", "fr", "de", "es", "it", "ar"],
            wrapper_selector: "#gt-mordadam-43217984",
            native_language_names: 1,
            flag_style: "2d",
            flag_size: 24,
            horizontal_position: "inline",
        };
    </script>
    <script src="{{ asset('trek/js/gt.min.js') }}" data-gt-widget-id="43217984"></script>

    <!-- JavaScript for Slider -->
    <script>
        const sliderItems = document.querySelectorAll(".slider-container");
        let currentIndex = 0;

        function showNextSlide() {
            sliderItems[currentIndex].classList.remove("active");
            currentIndex = (currentIndex + 1) % sliderItems.length;
            sliderItems[currentIndex].classList.add("active");
        }

        // Automatically switch slides every 3 seconds
        setInterval(showNextSlide, 2000);
    </script>
</body>

</html> 