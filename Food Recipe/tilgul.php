<?php
  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Tilgul Receipe</title>
  <link rel="stylesheet" href="populardishes/vegbiryani.css">
</head>
<body>
<!-- Veg Biryani -->
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
    <h1>Tilgul</h1>
    <h4>Description</h4>
    <div class="desc"><p>Tilgul is a colourful sesame candy coated with sesame seeds; in Maharashtra people exchange tilgul on Sankranti, a Hindu festival celebrated on 14 January, which continue till Rathsaptami, till 7 days. Due to Sesame and Jageery, this candy is healthy for human body during winter season.</p></div>    
    <div class="serve-time"><p><b>Servings:</b> 4 | <b>Timing:</b> 45 minutes</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/tilgul.jpg" alt=""></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the Tilgul:</p></div>
    <ul>
  
<li>
1 cup sesame seeds<br>
1/4 teaspoon green cardamom<br>
3/4 cup jaggery<br>
2 teaspoon ghee<br>
</li>

    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    
    <p>Step 1 Dry roast sesame seeds
Take a heavy-bottomed pan and dry roast sesame seeds. Roast till the colour changes and becomes aromatic.

<br>Step 2 Heat jaggery till it melts
Add ghee in another pan, along with jaggery. Let it melt completely.

<br>Step 3 Mix sesame seeds
Once jaggery starts to boil, reduce the flame and add sesame seeds. Give a good mix and remove from flame.

<br>Step 4 Let the mixture cool down
Take out the mixture in a bowl and let it cool down a bit.

<br>Step 5 Make small laddoos
Grease your palms and make small laddoos, while the mixture is still warm. Store Tilguls in an airtight container. </p>
  
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
        Ingredients for Veg Biryani:
        
1 cup sesame seeds<br>
1/4 teaspoon green cardamom<br>
3/4 cup jaggery<br>
2 teaspoon ghee<br>
        
        Method:
        
        Step 1 Dry roast sesame seeds
Take a heavy-bottomed pan and dry roast sesame seeds. Roast till the colour changes and becomes aromatic.

Step 2 Heat jaggery till it melts
Add ghee in another pan, along with jaggery. Let it melt completely.

Step 3 Mix sesame seeds
Once jaggery starts to boil, reduce the flame and add sesame seeds. Give a good mix and remove from flame.

Step 4 Let the mixture cool down
Take out the mixture in a bowl and let it cool down a bit.

Step 5 Make small laddoos
Grease your palms and make small laddoos, while the mixture is still warm. Store Tilguls in an airtight container.;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'Tilgul_recipe.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}


  updateCounts();
</script>
 

</body>
</html>
