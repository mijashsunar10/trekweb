<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customize Your Trek</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100">
    <header class="fixed top-0 w-full z-10">
        <div style="display:none;">
        @include('home.nav')
        </div>
        @include('home.header2')
      </header>
      
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mt-16">
        <h1 class="text-3xl font-bold text-center text-yellow-500 mb-6">Customize Your Trek</h1>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Form Section -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-xl font-bold text-yellow-500 mb-4">Fill the form to Customize Your Trek / Expedition</h2>
                <form class="space-y-4">
                    <!-- Name Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="first-name" class="block text-sm font-medium text-gray-700">First Name</label>
                            <input type="text" id="first-name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm" placeholder="First Name">
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
                            <input type="text" id="last-name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm" placeholder="Last Name">
                        </div>
                    </div>

                    <!-- Contact Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email <span class="text-red-500">*</span></label>
                            <input type="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm" placeholder="Email Address">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone/Mobile <span class="text-red-500">*</span></label>
                            <input type="text" id="phone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm" placeholder="Mobile Number">
                        </div>
                    </div>

                    <!-- Additional Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                            <input type="text" id="country" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm" placeholder="Nationality">
                        </div>
                        <div>
                            <label for="people" class="block text-sm font-medium text-gray-700">No of People</label>
                            <input type="number" id="people" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm" placeholder="No of People">
                        </div>
                    </div>

                    <!-- Trek Details -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="trek-name" class="block text-sm font-medium text-gray-700">Trek / Expedition / Yatra Name <span class="text-red-500">*</span></label>
                            <input type="text" id="trek-name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm" placeholder="Trek Name">
                        </div>
                        <div>
                            <label for="date" class="block text-sm font-medium text-gray-700">Date/Month of Travel</label>
                            <input type="date" id="date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm">
                        </div>
                    </div>

                    <!-- Budget & Region -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="budget" class="block text-sm font-medium text-gray-700">Budget (Approx)</label>
                            <input type="number" id="budget" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm" placeholder="Budget in USD">
                        </div>
                        <div>
                            <label for="region" class="block text-sm font-medium text-gray-700">Region</label>
                            <select id="region" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm">
                                <option>- Select -</option>
                                <option>Himalayas</option>
                                <option>Andes</option>
                                <option>Alps</option>
                                <option>Rockies</option>
                            </select>
                        </div>
                    </div>

                    <!-- Guide Dropdown -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="budget" class="block text-sm font-medium text-gray-700">Budget (Approx)</label>
                            <input type="number" id="budget" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm" placeholder="Budget in USD">
                        </div>
                        <div>
                            <label for="region" class="block text-sm font-medium text-gray-700">Region</label>
                            <select id="region" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm">
                                <option>- Select -</option>
                                <option>Himalayas</option>
                                <option>Andes</option>
                                <option>Alps</option>
                                <option>Rockies</option>
                            </select>
                        </div>
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label>
                        <textarea id="message" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-yellow-500 focus:ring-yellow-500 sm:text-sm" placeholder="Your Message"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="w-full bg-yellow-500 text-white py-2 px-4 rounded-md shadow-sm hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">Submit Form</button>
                    </div>
                </form>
            </div>

            <!-- Info Section -->
            <div class="mt-5">
                <h2 class="text-xl font-bold text-yellow-500 mb-4">Go on Adventure in the Way You Want To</h2>
                <p class="text-gray-700 mb-4">
                    With customizable packages, you can create your own adventures ideal for your requirements. Design one-of-a-kind treks that suit your schedule and preferences.
                </p>
                <h3 class="text-lg font-bold text-yellow-500 mb-2">What Happens?</h3>
                <ul class="list-decimal list-inside text-gray-700 space-y-2">
                    <li>You select the dates and service level you desire, and we do the rest.</li>
                    <li>Choose from our selection of comfortable transport.</li>
                    <li>Adjust the trek’s pace to suit your preference.</li>
                    <li>Add custom experiences tailored to your interests.</li>
                </ul>
                <h3 class="text-lg font-bold text-yellow-500 mt-4 mb-2">Who Benefits?</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Solo trekkers</li>
                    <li>Groups of friends</li>
                    <li>Couples</li>
                    <li>Families</li>
                    <li>Corporate teams</li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>