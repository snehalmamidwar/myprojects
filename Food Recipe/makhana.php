<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>makhana kheer</title>
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
    <h1>Makhana Kheer</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>
      Makhana Kheer is a delicious and creamy dessert made with fox nuts (makhana), milk, and sugar. This kheer is a popular and nutritious sweet dish in Indian cuisine. Here's a simple recipe for making Makhana Kheer</p>


    </div>    
    <div class="serve-time"><p><b>Servings:</b> 4 | <b>Timing:</b> 1 hour</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/makhana.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the makhana kheer:</p></div>
    <ul>
      <li>  1 cup makhana (fox nuts)
1 liter full-fat milk
1/2 cup sugar (adjust to taste)
1/2 teaspoon cardamom powder
A pinch of saffron strands (optional)
2 tablespoons chopped nuts (almonds, cashews, pistachios)
1 tablespoon ghee (clarified butter)/li>
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>

1. Roast the Makhana:

Heat a tablespoon of ghee in a pan.
Add makhana and roast them on low to medium heat until they become crisp. This should take about 5-7 minutes. Keep stirring to avoid burning. Once roasted, set aside.
2. Prepare the Milk:

In a separate heavy-bottomed pan, bring the milk to a boil.
Reduce the heat to low and let the milk simmer. Stir occasionally to prevent it from sticking to the bottom.
3. Crush the Makhana:

Crush the roasted makhana into coarse pieces using your hands or a mortar and pestle.
4. Add Makhana to Milk:

Add the crushed makhana to the simmering milk.
Continue to cook on low heat, stirring frequently, until the makhana becomes soft and the kheer thickens. This may take about 15-20 minutes.
5. Add Sugar and Flavorings:

Add sugar and stir until it dissolves completely.
Add cardamom powder and saffron strands (if using), and mix well.
6. Garnish:

Add chopped nuts to the kheer and reserve some for garnishing.
Continue to cook for another 5-10 minutes until the kheer reaches your desired consistency.
7. Serve:

Remove the Makhana Kheer from heat and let it cool slightly.
Garnish with the reserved chopped nuts.
Serve warm or chilled, as per your preference.
Makhana Kheer is a delightful dessert that combines the nutty flavor of fox nuts with the richness of milk and the sweetness of sugar. It's a perfect treat for festivals, celebrations, or as a comforting sweet dish after a meal.






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
    1 cup makhana (fox nuts)
1 liter full-fat milk
1/2 cup sugar (adjust to taste)
1/2 teaspoon cardamom powder
A pinch of saffron strands (optional)
2 tablespoons chopped nuts (almonds, cashews, pistachios)
1 tablespoon ghee (clarified butter)
Instructions:
1. Roast the Makhana:

Heat a tablespoon of ghee in a pan.
Add makhana and roast them on low to medium heat until they become crisp. This should take about 5-7 minutes. Keep stirring to avoid burning. Once roasted, set aside.
2. Prepare the Milk:

In a separate heavy-bottomed pan, bring the milk to a boil.
Reduce the heat to low and let the milk simmer. Stir occasionally to prevent it from sticking to the bottom.
3. Crush the Makhana:

Crush the roasted makhana into coarse pieces using your hands or a mortar and pestle.
4. Add Makhana to Milk:

Add the crushed makhana to the simmering milk.
Continue to cook on low heat, stirring frequently, until the makhana becomes soft and the kheer thickens. This may take about 15-20 minutes.
5. Add Sugar and Flavorings:

Add sugar and stir until it dissolves completely.
Add cardamom powder and saffron strands (if using), and mix well.
6. Garnish:

Add chopped nuts to the kheer and reserve some for garnishing.
Continue to cook for another 5-10 minutes until the kheer reaches your desired consistency.
7. Serve:

Remove the Makhana Kheer from heat and let it cool slightly.
Garnish with the reserved chopped nuts.
Serve warm or chilled, as per your preference.
Makhana Kheer is a delightful dessert that combines the nutty flavor of fox nuts with the richness of milk and the sweetness of sugar. It's a perfect treat for festivals, celebrations, or as a comforting sweet dish after a meal.





`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'makhana_kheer.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
