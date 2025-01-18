{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Section</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-orange-100  flex items-center justify-center">
    <div class="w-full max-w-6xl">
        <!-- Header -->
        <div class="bg-orange-500 text-white text-center m-6 p-6 rounded-t-lg">
            <h1 class="text-4xl font-bold">Trekking in Nepal – FAQs</h1>
            <p class="mt-2 text-lg">Have some Queries? We have the answers to your FAQs.</p>
        </div>
        <!-- FAQ Section -->
        <div id="faq-container" class="bg-orange-300 shadow-lg rounded-b-lg"></div>
    </div>

    <script>
        // Array of FAQs
        const faqs = [{
                question: "What are the best times to go trekking in Nepal?",
                answer: "The best times to go trekking in Nepal are March to May and September to November. During these months, the weather is pleasant and clear, offering the best views of the mountains. The monsoon season from June to August can bring heavy rain, making the trails muddy and slippery. Winter months from December to February can be cold with snow in high-altitude areas."
            },
            {
                question: "What should I pack for trekking in Nepal?",
                answer: "When trekking in Nepal, you should pack essentials such as comfortable trekking boots, warm clothing layers, a waterproof jacket, a sleeping bag, sunscreen, a hat, and a reusable water bottle. Depending on the season and region, you might also need gloves, trekking poles, and a first aid kit."
            },
            {
                question: "Do I need a guide for trekking in Nepal?",
                answer: "While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
            },
            {
                question: "Do I need a guide for trekking in Nepal?",
                answer:" While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
            }
        ];

        // Function to generate FAQs
        function renderFAQs() {
            const faqContainer = document.getElementById("faq-container");

            faqs.forEach((faq, index) => {
                // Create a new FAQ item with margin-bottom
                const faqItem = `
      <div class="border-b  border-orange-200 mb-4 last:mb-0">
        <button
          class="w-full flex justify-between items-center text-left p-4 text-lg font-semibold text-orange-800 bg-orange-100 hover:bg-orange-200 focus:outline-none"
          onclick="toggleAnswer('answer${index}')"
        >
          ${faq.question}
          <svg id="icon${index}" class="ml-2 w-5 h-5 text-orange-800 transition-transform transform rotate-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
          </svg>
        </button>
        <div class="hidden px-4 pb-4 bg-gray-200 text-orange-700" id="answer${index}">
          <p>${faq.answer}</p>
        </div>
      </div>
    `;
                // Append to the container
                faqContainer.innerHTML += faqItem;
            });
        }


        // Toggle function
        function toggleAnswer(answerId) {
            const answer = document.getElementById(answerId);
            const icon = document.getElementById(icon${answerId.slice(-1)});

            if (answer.classList.contains('hidden')) {
                answer.classList.remove('hidden');
                icon.classList.add('rotate-180');
            } else {
                answer.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
        }

        // Render FAQs on page load
        renderFAQs();
    </script>
</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Section</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <script
    src="https://kit.fontawesome.com/42849e078f.js"
    crossorigin="anonymous"
  ></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">


   
</head>

<body class="bg-orange-100">

    <header class="fixed top-0 w-full z-10">
        @include('home.nav')
        @include('home.header2')
      </header>

        <section class="mt-20  flex items-center justify-center">

   
            <div class="w-full max-w-7xl h-full">
                <!-- Header -->
                <div class="bg-orange-500 text-white text-center my-6 py-6 rounded-t-lg">
                    <h1 class="text-4xl font-bold">Trekking in Nepal – FAQs</h1>
                    <p class="mt-2 text-lg">Have some Queries? We have the answers to your FAQs.</p>
                </div>
                <!-- FAQ Section -->
                <div id="faq-container" class="bg-orange-300 shadow-lg rounded-b-lg"></div>
            </div>

            <script>
                // Array of FAQs
                const faqs = [
                    {
                        question: "What are the best times to go trekking in Nepal?",
                        answer: "The best times to go trekking in Nepal are March to May and September to November. During these months, the weather is pleasant and clear, offering the best views of the mountains. The monsoon season from June to August can bring heavy rain, making the trails muddy and slippery. Winter months from December to February can be cold with snow in high-altitude areas."
                    },
                    {
                        question: "What should I pack for trekking in Nepal?",
                        answer: "When trekking in Nepal, you should pack essentials such as comfortable trekking boots, warm clothing layers, a waterproof jacket, a sleeping bag, sunscreen, a hat, and a reusable water bottle. Depending on the season and region, you might also need gloves, trekking poles, and a first aid kit."
                    },
                    {
                        question: "Do I need a guide for trekking in Nepal?",
                        answer: "While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
                    },
                    {
                        question: "Do I need a guide for trekking in Nepal?",
                        answer: "While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
                    },

                    {
                        question: "Do I need a guide for trekking in Nepal?",
                        answer: "While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
                    },

                    {
                        question: "Do I need a guide for trekking in Nepal?",
                        answer: "While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
                    },

                    {
                        question: "Do I need a guide for trekking in Nepal?",
                        answer: "While trekking in Nepal is possible without a guide, hiring one can enhance your experience. Guides provide navigation, local knowledge, and safety, especially in remote areas."
                    },
            
                ];

                // Function to generate FAQs
                function renderFAQs() {
                    const faqContainer = document.getElementById("faq-container");
                    let faqHTML = "";

                    faqs.forEach((faq, index) => {
                        faqHTML += `
                            <div class="border-b border-orange-200 mb-4 last:mb-0">
                                <button
                                    class="w-full flex justify-between items-center text-left p-4 text-lg font-semibold text-orange-800 bg-orange-100 hover:bg-orange-200 focus:outline-none"
                                    onclick="toggleAnswer('answer${index}')"
                                >
                                    ${faq.question}
                                    <svg id="icon${index}" class="ml-2 w-5 h-5 text-orange-800 transition-transform transform rotate-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </button>
                                <div class="hidden px-4 pb-4 bg-gray-200 text-orange-700" id="answer${index}">
                                    <p>${faq.answer}</p>
                                </div>
                            </div>
                        `;
                    });

                    faqContainer.innerHTML = faqHTML;
                }

                // Toggle function
                function toggleAnswer(answerId) {
                    const answer = document.getElementById(answerId);
                    const icon = document.getElementById(`icon${answerId.slice(-1)}`);

                    if (answer.classList.contains('hidden')) {
                        answer.classList.remove('hidden');
                        icon.classList.add('rotate-180');
                    } else {
                        answer.classList.add('hidden');
                        icon.classList.remove('rotate-180');
                    }
                }

                // Render FAQs on page load
                renderFAQs();
            </script>

        </section>
</body>

</html>
