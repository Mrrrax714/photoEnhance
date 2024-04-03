function photoEnhance($in,$out=false,$qual=100)
{
if($out===0)
{
$out=$in;}
// Load the image
$image = imagecreatefromjpeg($in);

// Get the current dimensions
$width = imagesx($image);
$height = imagesy($image);

// Set the new dimensions
$newWidth = $width * 0.5; // 50% of the original width
$newHeight = $height * 0.5; // 50% of the original height

// Create a new image with the new dimensions
$newImage = imagecreatetruecolor($newWidth, $newHeight);

// Resize the image
imagecopyresampled($newImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

// Save or output the modified image
imagejpeg($newImage, $out, $qual);

// Free up memory
imagedestroy($image);
imagedestroy($newImage);
}
