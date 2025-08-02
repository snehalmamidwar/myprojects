<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>pinni</title>
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
    <h1>Pinni N Jilebi</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>
      Pinni is a traditional Punjabi sweet that holds a special place in the hearts and kitchens of North India. It is often prepared during festivals, family celebrations, and winters. Pinni is a dense, rich, and wholesome sweet made from a combination of whole wheat flour, ghee (clarified butter), jaggery or sugar, and an assortment of chopped dry fruits. This sweet treat is known for its hearty and earthy flavor, brought about by the roasted wheat flour, the caramelized sweetness of jaggery, and the nuttiness of ghee and dry fruits. Pinnis are usually shaped into round balls or flattened discs and are enjoyed not only for their delightful taste but also for their nutritional value. The addition of edible gum (gond) gives Pinni a unique texture and makes it a popular choice during the winter months to provide warmth and energy.</p></div>    <button class="btn" onclick="saveRecipe()">Save Recipe</button>
  </div>
  <div class="rating">
    <button class="like-button" onclick="likeRecipe()">Like 👍</button>
    <span id="like-count">0</span>
    <button class="dislike-button" onclick="dislikeRecipe()">Dislike 👎</button>
    <span id="dislike-count">0</span>
  </div>
  <div class="img"><img src="populardishes/pinni.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the pinni and jelebi:</p></div>
    <ul>
      <li>   

Pinni:
1 cup whole wheat flour (atta)
1 cup desi ghee (clarified butter)
1 cup powdered jaggery or sugar
1 cup chopped dry fruits (almonds, cashews, pistachios)
1/4 cup edible gum (gond)
1/4 cup semolina (suji)
1/2 teaspoon cardamom powder
<br><br>
Ingredients:
For the jilebi Batter:

1 cup all-purpose flour (maida)
1 tablespoon besan (gram flour)
1/2 teaspoon baking soda
1 cup yogurt
Water (as needed to make a thick batter)
For the Sugar Syrup:

2 cups sugar
1 cup water
A few strands of saffron (optional)
1/2 teaspoon cardamom powder
1 tablespoon lemon juice
For Frying:

Ghee or oil for deep frying


</ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>
Instructions for pinni:

Prepare Edible Gum (Gond):

Heat a little ghee in a pan and fry the edible gum until it puffs up. Remove from heat and let it cool. Crush the fried gum into small pieces.
Roast Semolina and Whole Wheat Flour:

In the same pan, add more ghee. Roast semolina until it turns golden brown, and then add whole wheat flour.
Roast the mixture on low heat until it releases a nutty aroma.
Prepare Pinni Mixture:

Add the crushed edible gum, chopped dry fruits, powdered jaggery or sugar, and cardamom powder to the roasted flour mixture.
Mix everything well until it forms a thick, sticky dough-like consistency.
Shape the Pinnis:

While the mixture is still warm, take small portions and shape them into round balls or flat discs, known as Pinnis.
Serve or Store


Allow the Pinnis to cool completely before serving or storing in an airtight container.
<br><br>
Instructions for jelibi:
Prepare Batter:

In a bowl, mix all-purpose flour, besan, baking soda, and yogurt to make a thick batter. Add water gradually until you achieve a smooth consistency. Let it rest for at least 30 minutes.
Prepare Sugar Syrup:

In a saucepan, combine sugar and water. Bring it to a boil, stirring until the sugar dissolves.
Add saffron strands (if using), cardamom powder, and lemon juice. Boil until it reaches a one-string consistency.
Fry Jalebis:

Heat ghee or oil in a wide pan for deep frying.
Pour the batter into a squeeze bottle or a cloth with a small hole at the bottom.
Squeeze the batter in a spiral shape directly into the hot ghee or oil. Fry until golden brown and crisp.
Soak in Sugar Syrup:

Immediately transfer the fried jalebis into the warm sugar syrup. Let them soak for a minute, ensuring they are well-coated.
Serve:

Serve the jalebis warm, garnished with chopped nuts if desired.
Both Pinni and Jalebi are traditional Indian sweets enjoyed during festivals and special occasions. They have a rich and indulgent taste, making them popular choices for celebrations.
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
 
Ingredients:
1 cup whole wheat flour (atta)
1 cup desi ghee (clarified butter)
1 cup powdered jaggery or sugar
1 cup chopped dry fruits (almonds, cashews, pistachios)
1/4 cup edible gum (gond)
1/4 cup semolina (suji)
1/2 teaspoon cardamom powder
Instructions:
Prepare Edible Gum (Gond):

Heat a little ghee in a pan and fry the edible gum until it puffs up. Remove from heat and let it cool. Crush the fried gum into small pieces.
Roast Semolina and Whole Wheat Flour:

In the same pan, add more ghee. Roast semolina until it turns golden brown, and then add whole wheat flour.
Roast the mixture on low heat until it releases a nutty aroma.
Prepare Pinni Mixture:

Add the crushed edible gum, chopped dry fruits, powdered jaggery or sugar, and cardamom powder to the roasted flour mixture.
Mix everything well until it forms a thick, sticky dough-like consistency.
Shape the Pinnis:

While the mixture is still warm, take small portions and shape them into round balls or flat discs, known as Pinnis.
Serve or Store:

Allow the Pinnis to cool completely before serving or storing in an airtight container.
Jalebi Recipe:
Ingredients:
For the Batter:

1 cup all-purpose flour (maida)
1 tablespoon besan (gram flour)
1/2 teaspoon baking soda
1 cup yogurt
Water (as needed to make a thick batter)
For the Sugar Syrup:

2 cups sugar
1 cup water
A few strands of saffron (optional)
1/2 teaspoon cardamom powder
1 tablespoon lemon juice
For Frying:

Ghee or oil for deep frying
Instructions:
Prepare Batter:

In a bowl, mix all-purpose flour, besan, baking soda, and yogurt to make a thick batter. Add water gradually until you achieve a smooth consistency. Let it rest for at least 30 minutes.
Prepare Sugar Syrup:

In a saucepan, combine sugar and water. Bring it to a boil, stirring until the sugar dissolves.
Add saffron strands (if using), cardamom powder, and lemon juice. Boil until it reaches a one-string consistency.
Fry Jalebis:

Heat ghee or oil in a wide pan for deep frying.
Pour the batter into a squeeze bottle or a cloth with a small hole at the bottom.
Squeeze the batter in a spiral shape directly into the hot ghee or oil. Fry until golden brown and crisp.
Soak in Sugar Syrup:

Immediately transfer the fried jalebis into the warm sugar syrup. Let them soak for a minute, ensuring they are well-coated.
Serve:

Serve the jalebis warm, garnished with chopped nuts if desired.
Both Pinni and Jalebi are traditional Indian sweets enjoyed during festivals and special occasions. They have a rich and indulgent taste, making them popular choices for celebrations.
`;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'pinni n Jilebi.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
