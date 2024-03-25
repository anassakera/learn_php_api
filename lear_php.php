<!-- 6  -  Function  -->

<?php
//Function دالة

$state = " FINE ";
function printname($name)
{
  echo "How are you" . $name;
  echo "<br>";
  echo "I hope you're" . $GLOBALS['state'] . "=> Methode 1";
  echo "<br>";
  global $state;
  echo "I hope you're" . $state  . "=> Methode 2";
  //في حال أردت إستدعاء متغير يوجد داخل الدالةPrivet variable من الخارج
  //قم بالتصريح بأنه Global من داخل الدال بالشكل التالي:
  $GLOBALS['statePrivet'] = " SAD ";
  echo "<br>";
}
//لكي أطبع الدالة أكتب إسمها فقط
printname(" ANASS CHAKLOUL"); // إياك أن تنسى إستدعاء الدالة

//في لغة دارت يمكنك أن تستدعي المتغير الذي يوجد خارج الدالة 
// من دون مشاكل لأنه Global 
// أما في لغة PHP ضرور تصرح بأنه Global لكي تستدعيه كما
// هو موضح في المثال التالي :

$GLOBALS['state'];
// أو بهذا الشكل
global $state;

echo "My real state is " . $statePrivet;


?>