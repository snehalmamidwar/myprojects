<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>apong</title>
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
    <h1>Apong</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>

      Thukpa is essentially a dish of Darjeeling but finds its roots in the Tibetan cuisine. A hot-noodle soup, Thukpa comprises of many veggies, some customary tinge of spices, and Hakka noodles. It is one of the most admired dishes within the town and is available at almost all the restaurants and roadside stalls.Arunachal Pradesh, located in northeastern India, has a rich culinary tradition. One popular dish you might be referring to is "Thukpa" with dumplings. Here's a recipe for Thukpa with vegetarian dumplings, known as "Momos"</p>

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
  <div class="img"><img src="populardishes/apong.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the apong:</p></div>
    <ul>
      <li>  1 cup sticky rice
1 cup regular rice
Water
1 tablespoon yeast (or traditional starter culture, if available)
1-2 tablespoons sugar (optional, for sweetness)
Banana leaves (for covering, if available)
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>
    Rinse the Rice:

Wash both the sticky rice and regular rice thoroughly.
Soak the Rice:

Soak the rice in water for around 6-8 hours or overnight.
Grind the Rice:

Drain the soaked rice and grind it into a coarse paste. You can use a traditional stone grinder or a mixer grinder.
Fermentation:

Transfer the ground rice paste to a clean, large container.
Add water to the paste to create a thick batter-like consistency.
Add the yeast (or traditional starter culture) to the mixture and mix well.
Cover the container with a clean cloth and let it ferment in a warm place for about 24-48 hours. The fermentation time may vary based on the ambient temperature.
Strain:

After fermentation, strain the mixture using a clean cloth or a sieve to remove the solid residue. The liquid obtained is your Apong.
Sweetening (Optional):

If you prefer a slightly sweet taste, you can add sugar to the Apong and mix well.
Storage:

Transfer the Apong to clean bottles or containers for storage.
Maturation:

Allow the Apong to mature for an additional 24-48 hours. This step enhances the flavor.
Serving:

Apong is traditionally served at room temperature. You can chill it if you prefer a colder beverage.
Traditional Covering (Optional):

If you have banana leaves, you can cover the container with them during fermentation. This is believed to add a distinct flavor to the Apong.
Remember that the fermentation time and the flavor of Apong may vary based on factors like temperature and the yeast used. Exercise caution and ensure cleanliness throughout the process to prevent contamination.

Enjoy your homemade Apong responsibly! Note that the consumption of traditional rice beer should be done in moderation, and it's important to be aware of local regulations regarding the production and consumption of such beverages.






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
    1 cup sticky rice
1 cup regular rice
Water
1 tablespoon yeast (or traditional starter culture, if available)
1-2 tablespoons sugar (optional, for sweetness)
Banana leaves (for covering, if available)
Instructions:
Rinse the Rice:

Wash both the sticky rice and regular rice thoroughly.
Soak the Rice:

Soak the rice in water for around 6-8 hours or overnight.
Grind the Rice:

Drain the soaked rice and grind it into a coarse paste. You can use a traditional stone grinder or a mixer grinder.
Fermentation:

Transfer the ground rice paste to a clean, large container.
Add water to the paste to create a thick batter-like consistency.
Add the yeast (or traditional starter culture) to the mixture and mix well.
Cover the container with a clean cloth and let it ferment in a warm place for about 24-48 hours. The fermentation time may vary based on the ambient temperature.
Strain:

After fermentation, strain the mixture using a clean cloth or a sieve to remove the solid residue. The liquid obtained is your Apong.
Sweetening (Optional):

If you prefer a slightly sweet taste, you can add sugar to the Apong and mix well.
Storage:

Transfer the Apong to clean bottles or containers for storage.
Maturation:

Allow the Apong to mature for an additional 24-48 hours. This step enhances the flavor.
Serving:

Apong is traditionally served at room temperature. You can chill it if you prefer a colder beverage.
Traditional Covering (Optional):

If you have banana leaves, you can cover the container with them during fermentation. This is believed to add a distinct flavor to the Apong.
Remember that the fermentation time and the flavor of Apong may vary based on factors like temperature and the yeast used. Exercise caution and ensure cleanliness throughout the process to prevent contamination.

Enjoy your homemade Apong responsibly! Note that the consumption of traditional rice beer should be done in moderation, and it's important to be aware of local regulations regarding the production and consumption of such beverages.











`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'apong.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
