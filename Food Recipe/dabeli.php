<?php 
  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Dabeli</title>
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
    <h1>Dabeli</h1>
    <h4>Description</h4>
    <div class="desc"><p>
Kacchi Dabeli is a popular street food in Gujarat, India. It's a delicious and flavorful snack that features a spicy and tangy potato filling inside a pav (burger bun), along with various chutneys and crunchy toppings. Here's a recipe for making Kacchi Dabeli at home</p></div>    
    <div class="serve-time"><p><b>Servings:</b> 2 | <b>Timing:</b> 25 minutes</p></div>
    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/dabeli.jpg" alt=""></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the Dabeli:</p></div>
    <ul>
      <li>Ingredients:
For the Potato Filling:
4 medium-sized potatoes, boiled and mashed
1 tablespoon oil
1 teaspoon mustard seeds
1 teaspoon cumin seeds
A pinch of asafoetida (hing)
1/2 cup finely chopped onions
1/4 cup masala peanuts (spiced peanuts)
2 tablespoons Dabeli masala
1 tablespoon tamarind chutney
Salt to taste
Fresh coriander leaves, chopped for garnish
<br><br><br>
For Dabeli Masala:
1 tablespoon coriander seeds
1 teaspoon cumin seeds
4-5 cloves
1-inch cinnamon stick
2-3 dry red chilies
1/2 teaspoon fennel seeds (saunf)
1/4 teaspoon black pepper
</li>
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>
For Assembling Dabeli:
Pav (burger buns), sliced
Tamarind chutney
Garlic chutney (made from garlic, red chili powder, and peanuts)
Sev (thin gram flour noodles)
Pomegranate seeds (optional)
Fresh coriander leaves, chopped<br><br>
Instructions:
Dabeli Masala:
Dry roast all the Dabeli masala ingredients in a pan until they release their aroma.
Grind the roasted spices into a fine powder. Your Dabeli masala is ready.
<br><br>
Potato Filling:
Heat oil in a pan. Add mustard seeds, cumin seeds, and asafoetida.
Add chopped onions and sauté until they turn golden brown.
Add mashed potatoes, Dabeli masala, masala peanuts, tamarind chutney, and salt. Mix well.
Cook the mixture for a few minutes until the flavors blend. Garnish with fresh coriander leaves.
Assembling:
Slice the pav horizontally without cutting through completely.
Apply garlic chutney on one side and tamarind chutney on the other.
Stuff the prepared potato filling inside the pav.
Roll the stuffed pav in sev until it's well coated.
Repeat the process for the remaining pav.
Heat a griddle or pan and lightly roast the stuffed pav.
Serving:
Serve Kacchi Dabeli hot, garnished with additional sev, pomegranate seeds, and chopped coriander leaves.
Enjoy the spicy and flavorful Kacchi Dabeli as a delightful snack. Adjust the spice levels and chutney quantities according to your taste preferences.</p></div>
 
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
For the Potato Filling:
4 medium-sized potatoes, boiled and mashed
1 tablespoon oil
1 teaspoon mustard seeds
1 teaspoon cumin seeds
A pinch of asafoetida (hing)
1/2 cup finely chopped onions
1/4 cup masala peanuts (spiced peanuts)
2 tablespoons Dabeli masala
1 tablespoon tamarind chutney
Salt to taste
Fresh coriander leaves, chopped for garnish
For Dabeli Masala:
1 tablespoon coriander seeds
1 teaspoon cumin seeds
4-5 cloves
1-inch cinnamon stick
2-3 dry red chilies
1/2 teaspoon fennel seeds (saunf)
1/4 teaspoon black pepper
For Assembling:
Pav (burger buns), sliced
Tamarind chutney
Garlic chutney (made from garlic, red chili powder, and peanuts)
Sev (thin gram flour noodles)
Pomegranate seeds (optional)
Fresh coriander leaves, chopped
Instructions:
Dabeli Masala:
Dry roast all the Dabeli masala ingredients in a pan until they release their aroma.
Grind the roasted spices into a fine powder. Your Dabeli masala is ready.
Potato Filling:
Heat oil in a pan. Add mustard seeds, cumin seeds, and asafoetida.
Add chopped onions and sauté until they turn golden brown.
Add mashed potatoes, Dabeli masala, masala peanuts, tamarind chutney, and salt. Mix well.
Cook the mixture for a few minutes until the flavors blend. Garnish with fresh coriander leaves.
Assembling:
Slice the pav horizontally without cutting through completely.
Apply garlic chutney on one side and tamarind chutney on the other.
Stuff the prepared potato filling inside the pav.
Roll the stuffed pav in sev until it's well coated.
Repeat the process for the remaining pav.
Heat a griddle or pan and lightly roast the stuffed pav.
Serving:
Serve Kacchi Dabeli hot, garnished with additional sev, pomegranate seeds, and chopped coriander leaves.
Enjoy the spicy and flavorful Kacchi Dabeli as a delightful snack. Adjust the spice levels and chutney quantities according to your taste preferences.
    `;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'dabeli_recipe.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
  }

  updateCounts();
</script>

</body>
</html>
