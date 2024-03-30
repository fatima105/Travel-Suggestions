
<?php
// Get an API key from the Yelp API website.
$api_key = "abtF0bH3xmpclStTZCIEqklsOMeEkSRNSTH_3ZAnzCPpKYCSpHzrOBvP4P-OwgMBZ11Njh0OusWdjSFWuU2YMD9AE48gYdx-S-et_oG6zsBWn9HRb9_ZpVrLqhWbZHYx";
// Use the API to get a list of restaurants.
$url = "https://api.yelp.com/v3/businesses/search?term=restaurants&location=United States";
$headers = array("Authorization: Bearer $api_key");
$response = json_decode(file_get_contents($url, false, stream_context_create(array("http" => array("header" => $headers)))));
// Output the results.
echo "<ul>";
foreach ($response->businesses as $business) {
  echo "<li>" . $business->name . "</li>";
}
echo "</ul>";
?>
