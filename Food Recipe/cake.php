<?php 
  session_start(); 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Red Velvet Cake Recipe</title>
  <link rel="stylesheet" href="populardishes/redvelvetcake.css">
</head>
<body>
<!-- Red Velvet Cake -->
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
    <h1>Red Velvet Cake</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>Red Velvet Cake is a classic dessert known for its vibrant red color and delicious, slightly chocolatey flavor. It's often paired with cream cheese frosting for the perfect balance of sweetness.</p>
    </div>    
    <div class="serve-time"><p><b>Servings:</b> 12 | <b>Preparation Time:</b> 30 minutes</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/cake.jpg" alt="Red Velvet Cake"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <ul>
      <li>2 1/2 cups all-purpose flour</li>
      <li>1 1/2 cups granulated sugar</li>
      <li>1 teaspoon baking soda</li>
      <li>1 teaspoon cocoa powder</li>
      <li>1 teaspoon salt</li>
      <li>2 large eggs</li>
      <li>1 1/2 cups vegetable oil</li>
      <li>1 cup buttermilk</li>
      <li>2 tablespoons red food coloring</li>
      <li>1 teaspoon vanilla extract</li>
      <li>1 teaspoon white vinegar</li>
      <li>Cream Cheese Frosting (for decoration)</li>
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>Step 1:</p></div>
    <p>Preheat your oven to 350°F (175°C). Grease and flour two 9-inch round cake pans.</p>
    
    <div><p>Step 2:</p></div>
    <p>In a mixing bowl, combine the all-purpose flour, granulated sugar, baking soda, cocoa powder, and salt.</p>
    
    <div><p>Step 3:</p></div>
    <p>In another bowl, beat the eggs, then add the vegetable oil, buttermilk, red food coloring, vanilla extract, and white vinegar. Mix until well combined.</p>
    
    <div><p>Step 4:</p></div>
    <p>Gradually add the dry ingredients to the wet ingredients and mix until the batter is smooth and well incorporated.</p>
    
    <div><p>Step 5:</p></div>
    <p>Divide the batter equally between the prepared cake pans.</p>
    
    <div><p>Step 6:</p></div>
    <p>Bake in the preheated oven for 25-30 minutes or until a toothpick inserted into the center comes out clean.</p>
    
    <div><p>Step 7:</p></div>
    <p>Remove the cakes from the oven and let them cool in the pans for about 10 minutes. Then, transfer them to a wire rack to cool completely.</p>
    
    <div><p>Step 8:</p></div>
    <p>Once the cakes are completely cool, spread a layer of cream cheese frosting on top of one cake layer. Place the second cake layer on top and frost the top and sides of the entire cake with the remaining frosting.</p>
    
    <div><p>Step 9:</p></div>
    <p>Decorate the cake as desired and enjoy your homemade Red Velvet Cake!</p>
  </div>
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
        Ingredients for Red Velvet Cake:
        
        - 2 1/2 cups all-purpose flour
        - 1 1/2 cups granulated sugar
        - 1 teaspoon baking soda
        - 1 teaspoon cocoa powder
        - 1 teaspoon salt
        - 2 large eggs
        - 1 1/2 cups vegetable oil
        - 1 cup buttermilk
        - 2 tablespoons red food coloring
        - 1 teaspoon vanilla extract
        - 1 teaspoon white vinegar
        
        For Cream Cheese Frosting:
        - Cream cheese
        - Butter
        - Confectioners' sugar
        - Vanilla extract
        
        Method:
        
        Step 1:
        Preheat your oven to 350°F (175°C). Grease and flour two 9-inch round cake pans.
        
        Step 2:
        In a mixing bowl, combine the all-purpose flour, granulated sugar, baking soda, cocoa powder, and salt.
        
        Step 3:
        In another bowl, beat the eggs, then add the vegetable oil, buttermilk, red food coloring, vanilla extract, and white vinegar. Mix until well combined.
        
        Step 4:
        Gradually add the dry ingredients to the wet ingredients and mix until the batter is smooth and well incorporated.
        
        Step 5:
        Divide the batter equally between the prepared cake pans.
        
        Step 6:
        Bake in the preheated oven for 25-30 minutes or until a toothpick inserted into the center comes out clean.
        
        Step 7:
        Remove the cakes from the oven and let them cool in the pans for about 10 minutes. Then, transfer them to a wire rack to cool completely.
        
        Step 8:
        Once the cakes are completely cool, spread a layer of cream cheese frosting on top of one cake layer. Place the second cake layer on top and frost the top and sides of the entire cake with the remaining frosting.
        
        Step 9:
        Decorate the cake as desired and enjoy your homemade Red Velvet Cake!
    `;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'red_velvet_cake_recipe.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
  }

  updateCounts();
</script>
</body>
</html>
