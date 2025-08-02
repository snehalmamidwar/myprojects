<?php 
  session_start(); 
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=?, initial-scale=1.0">
  <title>Jelibi Fafda</title>
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
    <h1>jelebi n fafda</h1>
    <h4>Description</h4>
    <div class="desc">
      <p>

      Jalebi and Fafda are popular snacks in Gujarat, especially during festivals and special occasions. Here are recipes for both Jalebi and Fafda</p>
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
  <div class="img"><img src="populardishes/jelebi.jpg" alt="Puran Poli"></div>
</div>

<div class="box1">
  <div class="ingredients">
    <h2>Ingredients</h2>
    <div><p>For the jelebi and fafda:</p></div>
    <ul>
      <li>Ingredients For jelebi:
For the Batter:
1 cup all-purpose flour (maida)
1 tablespoon gram flour (besan)
1/4 teaspoon baking soda
1 cup curd (yogurt)
Water (as needed to make a thick batter)
For the Sugar Syrup:

1 cup sugar
1/2 cup water
Saffron strands (optional)
1/2 teaspoon cardamom powder
Oil or Ghee for frying <br>
<br>
Ingredients for fafda:
2 cups gram flour (besan)
1/4 cup semolina (sooji)
1/2 teaspoon turmeric powder
1/2 teaspoon red chili powder
A pinch of asafoetida (hing)
Salt to taste
1 tablespoon oil
Water (as needed to make a smooth dough)
Oil for frying

</li>
    </ul>
  </div>

  <div class="method">
    <h2>Method</h2>
    <div><p>
Instructions for jelebi:
    Prepare the Batter:

In a bowl, mix all-purpose flour, gram flour, baking soda, and curd to make a thick batter. Add water as needed. The consistency should be like pancake batter.
Allow the batter to ferment for 6-8 hours or overnight.
Prepare the Sugar Syrup:

In a pan, combine sugar and water. Bring it to a boil to make a syrup.
Add saffron strands (if using) and cardamom powder. Simmer until the syrup has a one-string consistency.
Make Jalebis:

Heat oil or ghee in a Jalebi dispenser or a piping bag.
Squeeze the batter into hot oil in a spiral or pretzel shape.
Fry until the jalebis are golden brown and crispy.
Soak in Sugar Syrup:

Remove the jalebis from the oil and immediately dip them into the warm sugar syrup.
Allow them to soak for a minute, ensuring they absorb the syrup.
Serve:

Serve Jalebis warm, garnished with chopped nuts if desired.

<br><br>
Instructions for fafda:
Prepare the Dough:

In a bowl, mix gram flour, semolina, turmeric powder, red chili powder, asafoetida, salt, and oil.
Gradually add water and knead into a smooth, stiff dough.
Shape and Roll:

Divide the dough into small portions and roll them into thin strips.
Fry Fafda:

Heat oil in a pan for deep frying.
Fry the rolled fafdas until they are golden brown and crisp.
Serve:

Serve Fafda with green chutney or sweet chutney.
Enjoy these delicious Gujarati snacks – Jalebi and Fafda – either separately or as a delightful combination!

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
        
    Jalebi:
Ingredients:
For the Batter:

1 cup all-purpose flour (maida)
1 tablespoon gram flour (besan)
1/4 teaspoon baking soda
1 cup curd (yogurt)
Water (as needed to make a thick batter)
For the Sugar Syrup:

1 cup sugar
1/2 cup water
Saffron strands (optional)
1/2 teaspoon cardamom powder
Oil or Ghee for frying

Instructions:
Prepare the Batter:

In a bowl, mix all-purpose flour, gram flour, baking soda, and curd to make a thick batter. Add water as needed. The consistency should be like pancake batter.
Allow the batter to ferment for 6-8 hours or overnight.
Prepare the Sugar Syrup:

In a pan, combine sugar and water. Bring it to a boil to make a syrup.
Add saffron strands (if using) and cardamom powder. Simmer until the syrup has a one-string consistency.
Make Jalebis:

Heat oil or ghee in a Jalebi dispenser or a piping bag.
Squeeze the batter into hot oil in a spiral or pretzel shape.
Fry until the jalebis are golden brown and crispy.
Soak in Sugar Syrup:

Remove the jalebis from the oil and immediately dip them into the warm sugar syrup.
Allow them to soak for a minute, ensuring they absorb the syrup.
Serve:

Serve Jalebis warm, garnished with chopped nuts if desired.
Fafda:
Ingredients:
2 cups gram flour (besan)
1/4 cup semolina (sooji)
1/2 teaspoon turmeric powder
1/2 teaspoon red chili powder
A pinch of asafoetida (hing)
Salt to taste
1 tablespoon oil
Water (as needed to make a smooth dough)
Oil for frying
Instructions:
Prepare the Dough:

In a bowl, mix gram flour, semolina, turmeric powder, red chili powder, asafoetida, salt, and oil.
Gradually add water and knead into a smooth, stiff dough.
Shape and Roll:

Divide the dough into small portions and roll them into thin strips.
Fry Fafda:

Heat oil in a pan for deep frying.
Fry the rolled fafdas until they are golden brown and crisp.
Serve:

Serve Fafda with green chutney or sweet chutney.
Enjoy these delicious Gujarati snacks – Jalebi and Fafda – either separately or as a delightful combination!
 `;

    // Create a Blob object containing the recipe text
    const recipeBlob = new Blob([recipeText], { type: 'text/plain' });

    // Create a download link
    const recipeLink = document.createElement('a');
    recipeLink.href = URL.createObjectURL(recipeBlob);
    recipeLink.download = 'jelebi_fafda.txt';

    // Trigger a click event on the link to initiate the download
    recipeLink.click();
}

  updateCounts();
</script>
</body>
</html>
