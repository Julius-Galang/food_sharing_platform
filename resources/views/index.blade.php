<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/style_sheet.css') }}">
</head>
<body>

<!-- BANUA SAGANA LOGO-->
<img src="{{ asset('images/banua_sagana.jpg') }}" alt="Banua Sagana Logo" height="180" width="185"/>
<p>Welcome to Banua SaGana's community-driven food sharing platform—where surplus meets need. Here, neighbors connect
  to share extra food, reduce waste, and support one another with dignity and fairness. Join us in turning excess into
  opportunity</p>

  <!-- NAVBAR -->
  <nav>
    <h2>Food Share</h2>
    <ul>
      <li>My Food Post</li>
      <li>Logout</li>
    </ul>
  </nav>

  <!-- SEARCH -->
  <section id="search">
    <h2>Find Food</h2>
    <input id="location" placeholder="Search by location" />
    <input id="foodType" placeholder="Search by food type" />
    <button onclick="searchFood()">Search</button>
  </section>

  <!-- FOOD LISTINGS -->
  <section id="listings">
    <h2>Available Food</h2>
    <div id="foodList"></div>
  </section>

  <!-- MESSAGING -->
  <section id="messages">
    <h2>Messages</h2>
    <div id="chatBox"></div>
    <input id="messageInput" placeholder="Type a message" />
    <button onclick="sendMessage()">Send</button>
  </section>

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

</body>
</html>
