<?php
  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Ukadiche Modak Receipe</title>
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
    <h1>UkadicheModak</h1>
    <h4>Description</h4>
    <div class="desc"><p>"Ukadiche" literally means steamed. Ukadiche Modak is similar to dumplings, with an outer layer of steamed rice flour dough and a sweet filling of fresh coconut and jaggery. After shaping and filling the dumplings they are then steamed which gives them a soft melt-in-the-mouth texture.</p></div>    
    <div class="serve-time"><p><b>Servings:</b> 4 | <b>Timing:</b> 45 minutes</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/modak.jpg" alt=""></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the UkadicheModak:</p></div>
    <ul>
  
<li>For the filling

2 tbsp Water

1 Cup Gud/Jaggery, grated

2 Cups Fresh Coconut, grated

1 tsp Cardamom powder

2 tbsp Ghee

2 tbsp Cashew nuts, chopped

</li>
<li>
For the Dough

1 Cup Water

1 tsp Ghee

Salt a pinch

1 Cup Rice Flour</li>
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    
    <p>Heat a pan on medium flame. Add water and jaggery, let it melt completely.
Add coconut and cook for 10-15 minutes while stirring constantly.
Add cardamom powder, ghee and cashew nuts and cook for few minutes. Keep the mixture little bit moist. Remove from heat and keep aside.
For the dough, heat one cup water. Add salt and ghee to the water.
When the water comes to boil, add rice flour and with a spoon mix fastly in one direction.
The mixture will be lumpy. Cover and let it steam for 1 minute. Switch off the flame.
Remove the mixture and start kneading when it is hot, don’t let it cool down. Knead well ensuring there are no lumps.
Divide the dough in 8-10 equal portions. Roll each into a smooth ball.
Take one ball and roll it like puris. Stuff with the coconut filling.
Pinch with your fingers to form petals and start getting the petals together and seal by forming a pointy end.
Lay a banana leaf on the steamer plate and steam for 10-15minutes.
Serve hot.

Cover the vessel and cook bhat for 20 minutes on low flame. After cooking, open the lid and add cardamom powder into it. Scrumptious coconut bhat is ready. Garnish with chopped almonds-cashews and raisins. </p>
  
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
        
        - 2 tbsp Water

-1 Cup Gud/Jaggery, grated

-2 Cups Fresh Coconut, grated

-1 tsp Cardamom powder

-2 tbsp Ghee

-2 tbsp Cashew nuts, chopped

For the Dough

-1 Cup Water

-1 tsp Ghee

-Salt a pinch

-1 Cup Rice Flour
        
        Method:
        
        Heat a pan on medium flame. Add water and jaggery, let it melt completely.
Add coconut and cook for 10-15 minutes while stirring constantly.
Add cardamom powder, ghee and cashew nuts and cook for few minutes. Keep the mixture little bit moist. Remove from heat and keep aside.
For the dough, heat one cup water. Add salt and ghee to the water.
When the water comes to boil, add rice flour and with a spoon mix fastly in one direction.
The mixture will be lumpy. Cover and let it steam for 1 minute. Switch off the flame.
Remove the mixture and start kneading when it is hot, don’t let it cool down. Knead well ensuring there are no lumps.
Divide the dough in 8-10 equal portions. Roll each into a smooth ball.
Take one ball and roll it like puris. Stuff with the coconut filling.
Pinch with your fingers to form petals and start getting the petals together and seal by forming a pointy end.
Lay a banana leaf on the steamer plate and steam for 10-15minutes.
Serve hot.

Cover the vessel and cook bhat for 20 minutes on low flame. After cooking, open the lid and add cardamom powder into it. Scrumptious coconut bhat is ready. Garnish with chopped almonds-cashews and raisins. 
  ;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'UkadichaModak_recipe.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}


  updateCounts();
</script>
 

</body>
</html>
