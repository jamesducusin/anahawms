<?php
function generateStar($rating) {
    // Ensure the rating is within the range [0, 5]
    $rating = max(0, min(5, $rating));

    // Calculate the number of filled stars and the percentage for the last star
    $filledStars = floor($rating);
    $percentage = ($rating - $filledStars) * 100;

    // Generate the HTML code for the star rating
    $html = '<span>' . number_format($rating, 1) . '</span>';
    

    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $filledStars) {
            $html .= '<i class="fas fa-star"></i>';
        } elseif ($i == $filledStars + 1 && $percentage > 0) {
            $html .= '<i class="fas fa-star-half-alt"></i>';
        } else {
            $html .= '<i class="far fa-star"></i>';
        }
    }

    $html .= '';

    return $html;
  }







?>