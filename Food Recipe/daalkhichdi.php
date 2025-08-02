<?php 
  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Daal Khichdi Recipe</title>
  <link rel="stylesheet" href="populardishes/daalkhichdi.css">
</head>
<body>
<!-- Daal khichdi -->
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
    <h1>Daal Khichdi</h1>
    <h4>Description</h4>
    <div class="desc"><p>Daal Khichdi is a popular and comforting one-pot dish from Indian cuisine. It is a nutritious and flavorful combination of rice and lentils, typically made with a variety of spices and sometimes vegetables. Daal Khichdi is known for its simplicity and ease of preparation, making it a go-to meal for many in India, especially when looking for something light and easy to digest.</p></div>    
    <div class="serve-time"><p><b>Servings:</b> 2 | <b>Timing:</b> 25 minutes</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/daalkhichdi.jpg" alt=""></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the Khichdi:</p></div>
    <ul>
      <li>1 cup rice</li>
      <li>1/2 cup split yellow lentils (moong daal)</li>
      <li>1 small onion, finely chopped (optional)</li>
      <li>1 small tomato, chopped (optional)</li>
      <li>1/2 inch piece of ginger, minced</li>
      <li>2-3 cloves of garlic, minced</li>
      <li>1/2 tsp cumin seeds</li>
      <li>1/2 tsp turmeric powder</li>
      <li>1/2 tsp red chili powder (adjust to taste)</li>
      <li>Salt to taste</li>
      <li>2-3 cups water</li>
      <li>2 tbsp ghee (clarified butter) or oil</li>
      <li>Fresh coriander leaves for garnish (optional)</li>
    </ul>
    <div><p>For the Tadka (Tempering):</p></div>
    <ul>
      <li>2 tbsp ghee or oil</li>
      <li>1/2 tsp cumin seeds</li>
      <li>2-3 cloves garlic, minced</li>
      <li>1-2 dried red chilies (optional)</li>
      <li>A pinch of asafoetida (hing)</li>
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>Step 1:</p></div>
    <p>Wash the rice and lentils together under running water until the water runs clear. Place the washed rice and lentils in a bowl and cover them with water. Allow them to soak for 30 minutes. This helps in cooking them evenly and reduces the cooking time.</p>
    
    <div><p>Step 2:</p></div>
    <p>In a large saucepan or pressure cooker, heat 2 tbsp of ghee or oil over medium heat. Add cumin seeds and allow them to splutter. Add the minced ginger and garlic, and sauté for a minute until they become fragrant. If using onions, add them now and sauté until they turn translucent. Add the chopped tomatoes (if using) and cook until they become soft and mushy. Add the turmeric powder, red chili powder, and salt. Stir well to combine the spices with the other ingredients. Drain the soaked rice and lentils and add them to the pan. Stir them for a couple of minutes to coat them with the spices and ghee/oil.</p>
    
    <div><p>Step 3:</p></div>
    <p>While the khichdi is cooking, prepare the tadka (tempering). Heat 2 tbsp of ghee or oil in a small pan. Add cumin seeds and let them splutter. Then, add minced garlic and dried red chilies (if using) and sauté until the garlic turns golden. Add a pinch of asafoetida and turn off the heat. Once the khichdi is cooked and has a porridge-like consistency, turn off the heat. Pour the prepared tadka over the khichdi and mix well. Garnish with fresh coriander leaves if desired and serve hot. Daal Khichdi is often served with yogurt, pickle, or papad on the side.</p>
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
      Daal Khichdi Recipe
      Description:
      Daal Khichdi is a popular and comforting one-pot dish from Indian cuisine. It is a nutritious and flavorful combination of rice and lentils, typically made with a variety of spices and sometimes vegetables. Daal Khichdi is known for its simplicity and ease of preparation, making it a go-to meal for many in India, especially when looking for something light and easy to digest.

      Ingredients:
      - 1 cup rice
      - 1/2 cup split yellow lentils (moong daal)
      - 1 small onion, finely chopped (optional)
      - 1 small tomato, chopped (optional)
      - 1/2 inch piece of ginger, minced
      - 2-3 cloves of garlic, minced
      - 1/2 tsp cumin seeds
      - 1/2 tsp turmeric powder
      - 1/2 tsp red chili powder (adjust to taste)
      - Salt to taste
      - 2-3 cups water
      - 2 tbsp ghee (clarified butter) or oil
      - Fresh coriander leaves for garnish (optional)

      Tadka (Tempering):
      - 2 tbsp ghee or oil
      - 1/2 tsp cumin seeds
      - 2-3 cloves garlic, minced
      - 1-2 dried red chilies (optional)
      - A pinch of asafoetida (hing)

      Method:
      Step 1:
    Wash the rice and lentils together under running water until the water runs clear. Place the washed rice and lentils in a bowl and cover them with water. Allow them to soak for 30 minutes. This helps in cooking them evenly and reduces the cooking time.
    
    Step 2:
    In a large saucepan or pressure cooker, heat 2 tbsp of ghee or oil over medium heat. Add cumin seeds and allow them to splutter. Add the minced ginger and garlic, and sauté for a minute until they become fragrant. If using onions, add them now and sauté until they turn translucent. Add the chopped tomatoes (if using) and cook until they become soft and mushy. Add the turmeric powder, red chili powder, and salt. Stir well to combine the spices with the other ingredients. Drain the soaked rice and lentils and add them to the pan. Stir them for a couple of minutes to coat them with the spices and ghee/oil.
    
    Step 3:
    While the khichdi is cooking, prepare the tadka (tempering). Heat 2 tbsp of ghee or oil in a small pan. Add cumin seeds and let them splutter. Then, add minced garlic and dried red chilies (if using) and sauté until the garlic turns golden. Add a pinch of asafoetida and turn off the heat. Once the khichdi is cooked and has a porridge-like consistency, turn off the heat. Pour the prepared tadka over the khichdi and mix well. Garnish with fresh coriander leaves if desired and serve hot. Daal Khichdi is often served with yogurt, pickle, or papad on the side.
  
    `;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'daal_khichdi_recipe.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
  }

  updateCounts();
</script>

</body>
</html>
