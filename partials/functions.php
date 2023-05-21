<?php
function generatePassword($length)
{
  $chars = "asjhfbhvilkajsfdiojAHFDGHJAKahsfb!?&%$<>^+-*/()[]{}@#_=asfg";
  $password = substr(str_shuffle($chars), 0, $length);
  return $password;
}