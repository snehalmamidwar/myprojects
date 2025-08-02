<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Pantabhat</title>
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
    <h1>PantaBhat</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>

      Thentuk is a traditional Tibetan noodle soup that typically includes handmade flat noodles and a hearty broth with vegetables or meat. Here's a recipe for vegetarian thentuk</p>
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
  <div class="img"><img src="populardishes/pantabhat.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the PantaBha:</p></div>
    <ul>
      <li>   1 cup parboiled rice
Water
Salt to taste
Mustard oil
Green chilies, finely chopped (optional)
Onion, finely chopped (optional)
Coriander leaves, chopped (optional)
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>

Instructions:
Parboil the Rice:

Wash the rice thoroughly and then parboil it. You want the rice to be partially cooked but still firm.
Cool the Rice:

After parboiling, spread the rice on a flat surface to cool. It's important that the rice is at room temperature before moving on to the next step.
Fermentation:

Place the cooled parboiled rice in a clean, airtight container.
Add water to the rice until it is fully submerged.
Add salt to taste.
Close the container tightly and leave it at room temperature for at least 12-24 hours. This allows the rice to ferment.
Serve:

After the fermentation period, the rice will have a slightly sour taste.
Drain any excess water. The consistency can be adjusted according to your preference; some people prefer it dry, while others prefer it more moist.
Add Flavors (Optional):

Mix in a bit of mustard oil to enhance the flavor.
Add finely chopped green chilies, onions, and coriander leaves for additional taste and texture.
Chill (Optional):

Some people prefer to serve Panta Bhat chilled. You can refrigerate it for a few hours before serving.
Serve with Accompaniments:

Panta Bhat is traditionally served with various side dishes such as fried fish, pickles, green chilies, and sometimes, lentil fritters (known as "bhaja").
Panta Bhat is not only enjoyed for its unique taste but is also a cultural symbol associated with the Bengali New Year festivities. The fermentation process gives it a distinct flavor that adds a special touch to the celebration.






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
    1 cup parboiled rice
Water
Salt to taste
Mustard oil
Green chilies, finely chopped (optional)
Onion, finely chopped (optional)
Coriander leaves, chopped (optional)
Instructions:
Parboil the Rice:

Wash the rice thoroughly and then parboil it. You want the rice to be partially cooked but still firm.
Cool the Rice:

After parboiling, spread the rice on a flat surface to cool. It's important that the rice is at room temperature before moving on to the next step.
Fermentation:

Place the cooled parboiled rice in a clean, airtight container.
Add water to the rice until it is fully submerged.
Add salt to taste.
Close the container tightly and leave it at room temperature for at least 12-24 hours. This allows the rice to ferment.
Serve:

After the fermentation period, the rice will have a slightly sour taste.
Drain any excess water. The consistency can be adjusted according to your preference; some people prefer it dry, while others prefer it more moist.
Add Flavors (Optional):

Mix in a bit of mustard oil to enhance the flavor.
Add finely chopped green chilies, onions, and coriander leaves for additional taste and texture.
Chill (Optional):

Some people prefer to serve Panta Bhat chilled. You can refrigerate it for a few hours before serving.
Serve with Accompaniments:

Panta Bhat is traditionally served with various side dishes such as fried fish, pickles, green chilies, and sometimes, lentil fritters (known as "bhaja").
Panta Bhat is not only enjoyed for its unique taste but is also a cultural symbol associated with the Bengali New Year festivities. The fermentation process gives it a distinct flavor that adds a special touch to the celebration.


`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'pantabhat.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
