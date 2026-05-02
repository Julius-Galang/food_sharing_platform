<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/style_sheet.css') }}">
</head>
<body>

<!-- BANUA SAGANA LOGO -->
<section><img src="{{ asset('images/banua_sagana.jpg') }}" alt="Banua Sagana Logo" height="180" width="185"/></section>
<section>Welcome to Banua SaGana's community-driven food sharing platform—where surplus meets need. Here, neighbors connect
 to share extra food, reduce waste, and support one another with dignity and fairness. Join us in turning excess intoopportunity!</section>

   <!-- POST FOOD TO SHARE -->
    <div id="post">
    <h2>Post Food</h2>
    <input id="name" placeholder="Describe your food">
    <select id="foodType" placeholder="Select food type"></select> <!-- should be from a databas -->
    <button onclick="postFood()">Post</button>
    </div>

  <!-- SEARCH FOOD LISTINGS -->
    <div id="search">
    <h2>Find Food</h2>
    <input id="location" placeholder="Search by location" />
    <input id="foodType" placeholder="Search by food type" />
    <button onclick="searchFood()">Search</button>
    </div>

    <section>
    <div>
    @forelse ($foodposts as $foodpost)
      <article>
        <h4>Food Item: {{ $foodpost->Name }} </h4>
        <p> Posted by: {{ $foodpost->Postedby }} </p>
        <p> Location: {{ $foodpost->Location }} </p>
        <p> Food Type: {{ $foodpost->Type}} </p>
        <button onclick="requestMessage()">Message</button>
      </article>
    @endforeach
   </div>
   </section>

  <!-- MESSAGING -->
  <section id="messages">
    <h2>Messages</h2>
    <h4>You are chatting with: </h4>
    <div id="chatBox"></div>
    <input id="messageInput" placeholder="Type a message" />
    <button onclick="sendMessage()">Send</button>
  </section>

  <button onclick="logout()">Logout</button>

  <!--
  <script>
    const foods = [
      { name: "Cooked Rice", location: "Laguna", type: "Meal" },
      { name: "Bread", location: "Manila", type: "Bakery" },
      { name: "Vegetables", location: "Laguna", type: "Produce" }
    ];

    function showSection(sectionId) {
      document.querySelectorAll("section").forEach(sec => sec.classList.add("hidden"));
      document.getElementById(sectionId).classList.remove("hidden");
    }

    function displayFoods(list) {
      const container = document.getElementById("foodList");
      container.innerHTML = "";
      list.forEach(food => {
        container.innerHTML += `
          <div class="bg-white p-4 shadow rounded">
            <h3 class="font-bold">${food.name}</h3>
            <p>${food.location}</p>
            <p>${food.type}</p>
            <button onclick="openChat('${food.name}')" class="mt-2 bg-green-500 text-white px-2 py-1">Message</button>
          </div>
        `;
      });
    }

    function searchFood() {
      const loc = document.getElementById("location").value.toLowerCase();
      const type = document.getElementById("foodType").value.toLowerCase();

      const filtered = foods.filter(f =>
        f.location.toLowerCase().includes(loc) &&
        f.type.toLowerCase().includes(type)
      );

      displayFoods(filtered);
    }

    function openChat(foodName) {
      alert("Chatting about " + foodName);
      showSection('messages');
    }

    function sendMessage() {
      const input = document.getElementById("messageInput");
      const chatBox = document.getElementById("chatBox");
      chatBox.innerHTML += `<p>${input.value}</p>`;
      input.value = "";
    }

    // Initial load
    displayFoods(foods);
  </script>
  -->

</body>
</html>
