<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Job Portal
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
    *{
        margin:0 px;
        padding:0 px;
        color:black;

    }
   body {
            font-family: 'Roboto', sans-serif;
        }
        a{
            color:red;
        }
        .title{
            color:white;
        }
        .container{
            background:white;
        }
        .search-button:hover {
            background-color: #45a049;
        }
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Example</title>
</head>
<body>

<!-- Search Form -->
<form action="search.php" method="GET">
    <input type="text" name="searchQuery" placeholder="Enter search term">
    <button type="submit">Search</button>
</form>

<?php
// Check if the form is submitted and a search query exists
if (isset($_GET['searchQuery'])) {
    $searchQuery = $_GET['searchQuery'];
    
    // Process the search query (for example, query a database)
    echo "<h2>Search Results for: '$searchQuery'</h2>";
    
    // Example: Database search query or other search operations
    // You can add your database code here to search for matching results.
    // For now, we just display the search term.
}
?>

</body>
</html>

  </style>
 </head>
 <body class="bg-darkgray-100">
  <header class="bg-black shadow head">
   <div class="container mx-auto px-4 py-2 flex justify-between items-center">

    <nav class="space-x-4">
     <a class="text-blue-600 hover:text-black-1200" href="#">
      Home
     </a>
     <a class="text-blue-600 hover:text-black-1200" href="#">
      Support
     </a>
     <a class="text-blue-600 hover:text-black-1200" href="#">
      Free Themes
     </a>
     <a class="text-blue-600 hover:text-black-1200" href="#">
      Premium Themes
     </a>
     <a class="text-blue-600 hover:text-black-1200" href="#">
      Website Templates
    
     <a class="text-blue-600 hover:text-black-1200" href="#">
      Account
     </a>
     
    </nav>
   </div>
  </header>
  <main class="relative">
   <img alt="Woman with glasses looking at her phone and laptop" class="w-full h-96 object-cover" height="1080" src="https://storage.googleapis.com/a1aa/image/NAIWGdZ0WYexnp52PK39j-NN1_l2pqziL7c6ayXQo8A.jpg" width="1920"/>
   <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-center text-white px-4">
    <h1 class="text-4xl font-bold title">
     Your Dream Job is Waiting
    </h1>
    <p class="mt-2 title">
     We have 850,000 great job offers you deserve!
    </p>
    <div class="mt-6 flex space-x-4">
     <button class="bg-white text-gray-800 px-4 py-2 rounded">
      Find a Job
     </button>
    
    </div>
    <div class="mt-6 bg-white p-4 rounded shadow-lg w-full max-w-4xl">
     <div class="flex flex-wrap -mx-2">
      <div class="w-full md:w-1/4 px-2 mb-4 md:mb-0">
       <input class="w-full px-4 py-2 border rounded" placeholder="Job Title" type="text"/>
       
    
    
    
      </div>
      <div class="w-full md:w-1/4 px-2 mb-4 md:mb-0">
      <label for="job-title">Category</label>
   <select id="job-title" name="job-title">
  <option value="apple">Part time</option>
  <option value="banana">Full Time</option>
  <option value="orange">Internship</option>
  <option value="grape">Remote Job</option>
</select>
      </div>
      <div class="w-full md:w-1/4 px-2 mb-4 md:mb-0">
       <input class="w-full px-4 py-2 border rounded" placeholder="Location" type="text"/>
      </div>
      <div class="w-full md:w-1/4 px-2">
       <button class="w-full bg-blue-600 text-white px-4 py-2 rounded">
        Search<a href=https://www.naukri.com/link-jobs target="_blank"> Visit jobs</a>


       </button>
      </div>
     </div>
    </div>
   </div>
  </main>
 </body>
</html>
