<?php
$loremIpsum="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam mi tortor, consequat eget dignissim sit amet, placerat id elit. Vivamus luctus sodales tincidunt. Sed a dictum est, et ornare ante. Vestibulum sollicitudin mollis purus sed convallis. Vivamus vel laoreet lorem. In molestie vel tortor vel condimentum. Nullam id laoreet metus. Proin eget nisi at mauris finibus gravida in ut magna. Fusce varius sollicitudin velit nec viverra. Sed a diam diam. Mauris mauris mi, interdum et lorem id, placerat egestas ex. Maecenas vel est et augue gravida dignissim. Aliquam vitae ultricies orci. In hendrerit blandit risus, ut varius mi tincidunt id. Sed semper ac nisl non suscipit.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";

?>