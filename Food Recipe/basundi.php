<?php
  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Basundi Receipe</title>
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
    <h1>Basundi</h1>
    <h4>Description</h4>
    <div class="desc"><p>"Basundi is an Indian sweet mostly in Maharashtra, Gujarat, Andhra Pradesh, Telangana, Tamil Nadu and Karnataka. It is a sweetened condensed milk made by boiling milk on low heat until the milk is reduced by half. In North India, a similar dish goes by the name rabri.</p></div>    
    <div class="serve-time"><p><b>Servings:</b> 4 | <b>Timing:</b> 45 minutes</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/basundi.jpg" alt=""></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the Basundi:</p></div>
    <ul>
  
<li>
Milk: You must use full-fat whole milk to get a nice creamy, rich texture. No, this recipe does not work with 1%, 2%, low-fat or fat-free versions.<br>
Sugar: At home, we like our desserts just sweet. But if you prefer more sweet then you can increase the sugar amount.<br>
Flavoring ingredients: Cardamom and saffron are necessary. You can skip nutmeg if you don’t have.<br>
Nuts: Almonds, cashews and pistachios are most commonly used. And I have not tried with any other nuts.

</li>

    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    
    <p>Take the milk in a heavy bottom pan. Turn the heat on medium.
Bring it to a boil. As it starts boiling, reduce the heat to medium-low. Keep stirring and keep cooking till it gets its half quantity. Do stir every five minutes and also scrap the sides and bottom of the pan to avoid scorching the milk.
While simmering the milk, you will see a thin film of malai at the surface. Mix as you stir and it gives grainy texture in the basundi. Now the milk is half quantity, it took me 35 minutes.
Add sugar, cardamom powder, nutmeg, saffron and chopped nuts. Mix and let it simmer for another 5 minutes. Saffron will infuse its color, basundi will be thick, yet runny consistency. Turn off the stove.
This can be served warm, room temperature or chilled.
</p>
<div>
    <h4>Tips:<br>Stirring frequently: It is very important to stir while it is simmering. In the beginning start with every 5 minutes, as the it starts to thicken stir every 2-3 minutes.
Medium-Low heat: To get the best texture, always simmer on low to medium heat.
Type of pan: Always use wide mouth, thick bottom pan. 
Serving chilled: If so then reduce the simmering time by 5 minutes, because as it gets chilled in the refrigerator, it will thicken more.
Double, triple the quantity: Yes, you can. But keep in mind that milk takes more time to thicken, so simmering time will be increased</h4>
  
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
        Ingredients for Basundi:
        
            Milk: You must use full-fat whole milk to get a nice creamy, rich texture. No, this recipe does not work with 1%, 2%, low-fat or fat-free versions.
Sugar: At home, we like our desserts just sweet. But if you prefer more sweet then you can increase the sugar amount.
Flavoring ingredients: Cardamom and saffron are necessary. You can skip nutmeg if you don’t have.
Nuts: Almonds, cashews and pistachios are most commonly used. And I have not tried with any other nuts.
        
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
    recipeLink.download = 'Basundi_recipe.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}


  updateCounts();
</script>
 

</body>
</html>
