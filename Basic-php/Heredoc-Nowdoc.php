<?php
//strings.

$x = 1916;
$y = 1816;
//heredoc.
    $text = <<<Text
    "This is a heredoc"
    Line-1. == $x
    Line-2. == $y
    Line-3.
    Line-4.
    Line-5.
    Text;
  echo nl2br($text)."<br/>";
  echo "<br/>";

//nowdoc.
$text = <<<'Text'
"This is a Nowdoc"
Line-1. == $x.
Line-2. == $y.
Line-3.
Line-4.
Line-5.
Text;
echo nl2br($text);

?>