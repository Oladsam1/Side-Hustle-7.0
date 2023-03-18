<?php
 // Get voter's details
$voterAge = 19; // example age
$hasPVC = true; // example PVC status
$voterWard = "020"; // example ward

// Check if voter is above 18 years
if ($voterAge < 18) {
  echo "Voter is not old enough to vote.";
} 
// Check if voter has PVC
else if (!$hasPVC) {
  echo "Voter does not have a PVC.";
} 
// Check if voter's ward is 020
else if ($voterWard !== "020") {
  echo "Voter is not registered to vote in ward 020.";
} 
// If all checks out, echo "Voter eligible to vote"
else {
  echo "Voter is eligible to vote.";
}


?>


