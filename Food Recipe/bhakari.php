<?php
  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Tilgthecha bhakri Receipe</title>
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
    <h1>thecha bhakri</h1>
    <h4>Description</h4>
    <div class="desc"><p>"Thecha" or "Kharda" is a rustic dry peanut chutney made with coarsely ground peanuts, green chilies, and garlic. ln Maharashtra this spicy condiment is often served in an elaborate thali as well as served alongside a simple meal such as Pithla-Bhakri, Dal-Rice, or Khichdi.In the coastal Konkan and Goa regions of western India rice flour is used for making bhakri. Jowar bhakri – Jowar bhakris are the most common type of bhakri. The dough is prepared by mixing jowar flour with hot water and then flattened by hand.</p></div>    
    <div class="serve-time"><p><b>Servings:</b> 4 | <b>Timing:</b> 45 minutes</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/bhakari.jpg" alt=""></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the thecha bhakri:</p></div>
    <ul>
  
<li>
1 kg Jowar Seeds<br>
250 gram Black Urad Dal (Whole)<br>
1 teaspoon Salt<br>
For Thecha:<br>
15 Green Chillies chopped<br>
10 cloves Garlic, chopped<br>
1 teaspoon Cooking oil<br>
1/2 teaspoon Mustard seeds<br>
1/2 teaspoon Asafoetida (hing)<br>
to taste Salt

</li>

    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    
    <p>Step 1
Take about 2 cups of the above flour. Add water and knead to make a stiff pliable doug ball.
Step 2
Divide the dough into 4-5 parts and roll them into balls.Dust a working surface with some flour.
Step 3
Take 1 dough ball and flatten itin your palm. Keep the rest covered with a kitchen towel.
Step 4
Pat the dough ball into a circle on the work surface to about 6-7 inches round (you should get a thin circle)
Step 5
Heat a heavy iron griddle.Carefully lift the bhakri and place on the hot griddle.
Step 6
Apply some water over the entire upper side of bahkri.
Step 7
Use a flat spatula and flip it. Cook till brown spots appear on the bottom side of the bhakri (about 1 minute on high flame)
Step 8
Flip again and cook it directly on the flame till it ballons up or till it is well cooked.
Step 9
Repeat this for the rest of the dough balls.Serve hot with green groundnut chutney.
Thecha Bhakri recipe step 9 photo
Thecha Bhakri recipe step 9 photo
Step 10
To begin making the Green Chilli Thecha recipe, first grind together the green chillies, garlic and salt to a coarse paste in a mortar and pestle or a blender.
Thecha Bhakri recipe step 10 photo
Thecha Bhakri recipe step 10 photo
Step 11
Place the ground chillies in a bowl or a bottle.In a tadka pan heat the oil over medium heat. Add the mustard seeds and once they splutter add the asafoetida and turn off the heat.
Step 12
Pour this tempering over the green chilli thecha and mix well.
Step 13
Serve the Maharashtrian Green Chilli Thecha Recipe along with Methi Thalipeeth or Bhakri along with nice cup of Gulkand chai. </p>
  
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
        
            For the Kalna Bhakri flour:
1 kg Jowar Seeds
250 gram Black Urad Dal (Whole)
1 teaspoon Salt
For Thecha
15 Green Chillies chopped
10 cloves Garlic, chopped
1 teaspoon Cooking oil
1/2 teaspoon Mustard seeds
1/2 teaspoon Asafoetida (hing)
to taste Salt
        
        Method:
        
        Step 1
Take about 2 cups of the above flour. Add water and knead to make a stiff pliable doug ball.
Step 2
Divide the dough into 4-5 parts and roll them into balls.Dust a working surface with some flour.
Step 3
Take 1 dough ball and flatten itin your palm. Keep the rest covered with a kitchen towel.
Step 4
Pat the dough ball into a circle on the work surface to about 6-7 inches round (you should get a thin circle)
Step 5
Heat a heavy iron griddle.Carefully lift the bhakri and place on the hot griddle.
Step 6
Apply some water over the entire upper side of bahkri.
Step 7
Use a flat spatula and flip it. Cook till brown spots appear on the bottom side of the bhakri (about 1 minute on high flame)
Step 8
Flip again and cook it directly on the flame till it ballons up or till it is well cooked.
Step 9
Repeat this for the rest of the dough balls.Serve hot with green groundnut chutney.
Thecha Bhakri recipe step 9 photo
Thecha Bhakri recipe step 9 photo
Step 10
To begin making the Green Chilli Thecha recipe, first grind together the green chillies, garlic and salt to a coarse paste in a mortar and pestle or a blender.
Thecha Bhakri recipe step 10 photo
Thecha Bhakri recipe step 10 photo
Step 11
Place the ground chillies in a bowl or a bottle.In a tadka pan heat the oil over medium heat. Add the mustard seeds and once they splutter add the asafoetida and turn off the heat.
Step 12
Pour this tempering over the green chilli thecha and mix well.
Step 13
Serve the Maharashtrian Green Chilli Thecha Recipe along with Methi Thalipeeth or Bhakri along with nice cup of Gulkand chai.;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'ThechaBhakari_recipe.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}


  updateCounts();
</script>
 

</body>
</html>
