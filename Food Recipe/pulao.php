<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>pulao</title>
  <link rel="stylesheet" href="puranpoli.css">
</head>
<body>
<!-- Puran Poli -->
<div id="google_translate_element"></div>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
    function googleTranslateElementInit()
    {
        new google.translate.TranslateElement(
            {pageLanguage:'en'},
            'google_translate_element'

        );
    }
</script>
<div class="infocontainer">
  <div class="devinfo">
    <h1>kashmiri_Pulao</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>
      Kashmiri Pulao is a flavorful and aromatic rice dish from the Kashmiri cuisine. It's known for its rich and subtle flavors, often enhanced with dry fruits and spices. Here's a simple recipe for making Kashmiri Pulao </p></div>
      <div class="serve-time"><p><b>Servings:</b> 4 | <b>Timing:</b> 1 hour</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/pulao.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p> For the Kashmiri_Pulao:</p></div>
    <ul>
       

1 cup basmati rice, soaked for 30 minutes and drained
2 tablespoons ghee (clarified butter)
1 large onion, thinly sliced
1/4 cup mixed dry fruits (cashews, almonds, raisins)
1/4 cup fresh or frozen peas
1/4 cup shredded carrots
1/4 cup chopped mixed bell peppers (optional)
2 cups water
1 teaspoon cumin seeds
1-inch cinnamon stick
3-4 green cardamom pods
4-5 whole cloves
1 bay leaf
1/2 teaspoon ginger-garlic paste
1/2 teaspoon turmeric powder
1/2 teaspoon Kashmiri red chili powder
A pinch of saffron strands (soaked in 2 tablespoons warm milk)
Salt to taste
Chopped cilantro and mint for garnish


</ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>

Instructions:
Prepare Saffron Milk:

Soak saffron strands in warm milk and set aside.
Cook Rice:

In a large pot, bring 2 cups of water to a boil.
Add soaked and drained basmati rice to the boiling water.
Cook the rice until it's 70-80% done. It should still have a slight bite to it.
Drain the rice and set it aside.
Sauté Onions and Dry Fruits:

In a heavy-bottomed pan or a biryani pot, heat ghee over medium heat.
Add cumin seeds, cinnamon stick, cardamom pods, cloves, and bay leaf. Sauté for a minute until the spices release their aroma.
Add thinly sliced onions and sauté until they turn golden brown.
Add Vegetables and Dry Fruits:

Add mixed dry fruits, peas, shredded carrots, and chopped bell peppers (if using). Sauté for a few minutes until the vegetables are slightly tender.
Add Ginger-Garlic Paste and Spices:

Add ginger-garlic paste and sauté for a minute until the raw smell disappears.
Add turmeric powder and Kashmiri red chili powder. Mix well.
Layering and Dum Cooking:

Gently layer the partially cooked rice over the sautéed vegetables.
Drizzle the saffron milk over the rice.
Cover the pot with a tight-fitting lid and cook on low heat for about 15-20 minutes. This dum cooking allows the flavors to meld.
Fluff the Rice:

Once done, gently fluff the rice with a fork.
Garnish and Serve:

Garnish the Kashmiri Pulao with chopped cilantro and mint.
Serve hot, paired with raita or a side of your choice.
Enjoy the aromatic and delicious Kashmiri Pulao, a delightful addition to your festive or special occasion meals. Adjust the spice levels according to your preference.







</p></div></div>
</div>
 <!-- Add a comment section -->
 <div class="comments">
  <h2>Comments</h2>
  <div class="comment-form">
    <input type="text" id="name" placeholder="Your Name">
    <textarea id="comment" placeholder="Your Comment"></textarea>
    <button onclick="submitComment()">Submit</button>
  </div>
  <div class="comment-list">
    <!-- Display comments here -->
  </div>
</div>
</div>

<script>
  // Function to handle comment submission
  function submitComment() {
    const nameInput = document.getElementById("name");
    const commentInput = document.getElementById("comment");
    const commentList = document.querySelector(".comment-list");

    const name = nameInput.value;
    const comment = commentInput.value;

    if (name && comment) {
      // Create a new comment element
      const commentElement = document.createElement("div");
      commentElement.classList.add("comment");
      commentElement.innerHTML = `<strong>${name}:</strong> ${comment}`;

      // Append the comment to the comment list
      commentList.appendChild(commentElement);

      // Clear the input fields
      nameInput.value = "";
      commentInput.value = "";
    } else {
      alert("Please enter your name and comment.");
    }
  }

  let likeCount = 0;
  let dislikeCount = 0;
  let liked = false;
  let disliked = false;

  function updateCounts() {
    document.getElementById("like-count").textContent = likeCount;
    document.getElementById("dislike-count").textContent = dislikeCount;
  }

  function likeRecipe() {
    if (!liked) {
      likeCount++;
      updateCounts();
      liked = true;
      // Disable the "Dislike" button
      document.querySelector(".dislike-button").disabled = true;
      // You can add your logic for handling the like action here
      alert("You liked the recipe!");
    }
  }

  function dislikeRecipe() {
    if (!disliked) {
      dislikeCount++;
      updateCounts();
      disliked = true;
      // Disable the "Like" button
      document.querySelector(".like-button").disabled = true;
      // You can add your logic for handling the dislike action here
      alert("You disliked the recipe!");
    }
  }

  function saveRecipe() {
    // Create a text content for the recipe
    const recipeText = `
  
    Ingredients:
1 cup basmati rice, soaked for 30 minutes and drained
2 tablespoons ghee (clarified butter)
1 large onion, thinly sliced
1/4 cup mixed dry fruits (cashews, almonds, raisins)
1/4 cup fresh or frozen peas
1/4 cup shredded carrots
1/4 cup chopped mixed bell peppers (optional)
2 cups water
1 teaspoon cumin seeds
1-inch cinnamon stick
3-4 green cardamom pods
4-5 whole cloves
1 bay leaf
1/2 teaspoon ginger-garlic paste
1/2 teaspoon turmeric powder
1/2 teaspoon Kashmiri red chili powder
A pinch of saffron strands (soaked in 2 tablespoons warm milk)
Salt to taste
Chopped cilantro and mint for garnish
Instructions:
Prepare Saffron Milk:

Soak saffron strands in warm milk and set aside.
Cook Rice:

In a large pot, bring 2 cups of water to a boil.
Add soaked and drained basmati rice to the boiling water.
Cook the rice until it's 70-80% done. It should still have a slight bite to it.
Drain the rice and set it aside.
Sauté Onions and Dry Fruits:

In a heavy-bottomed pan or a biryani pot, heat ghee over medium heat.
Add cumin seeds, cinnamon stick, cardamom pods, cloves, and bay leaf. Sauté for a minute until the spices release their aroma.
Add thinly sliced onions and sauté until they turn golden brown.
Add Vegetables and Dry Fruits:

Add mixed dry fruits, peas, shredded carrots, and chopped bell peppers (if using). Sauté for a few minutes until the vegetables are slightly tender.
Add Ginger-Garlic Paste and Spices:

Add ginger-garlic paste and sauté for a minute until the raw smell disappears.
Add turmeric powder and Kashmiri red chili powder. Mix well.
Layering and Dum Cooking:

Gently layer the partially cooked rice over the sautéed vegetables.
Drizzle the saffron milk over the rice.
Cover the pot with a tight-fitting lid and cook on low heat for about 15-20 minutes. This dum cooking allows the flavors to meld.
Fluff the Rice:

Once done, gently fluff the rice with a fork.
Garnish and Serve:

Garnish the Kashmiri Pulao with chopped cilantro and mint.
Serve hot, paired with raita or a side of your choice.
Enjoy the aromatic and delicious Kashmiri Pulao, a delightful addition to your festive or special occasion meals. Adjust the spice levels according to your preference.


`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'KashmiriPulao.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
