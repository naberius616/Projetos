#!/bin/bash

if [ "$1" == "" ]; then exit; fi
ent=$1
echo
echo "Sua hash original é: $ent"
echo

p1="$(echo $ent | tr "zyxwvutsrqponmlkjihgfedcba" "abcdefghijklmnopqrstuvwxyz")"
p2="$(echo $p1 | tr ":" " ")"
p3="$(echo $p2 | tr "@" "\n")"

p4="$(for a in $(seq $(echo -n "$p3")); do
  carac="$(echo "$p3" | cut -b $a)"

  il="$(echo $carac | grep "[z-a]")"

  if [ "$il" != " " ]; then
    n $carac
  else
    echo "$carac"
  fi

done |tr "" "\n")"



p5="$(for a in $p4; do
  in="$(echo $a | grep "[9-1]")"
  if [ "$in" != " " ]; then
     let count++
     echo -n "$(($a/count))$(la)"
  else
    echo -n "$a"
  fi
done )"

echo "Sua frase criptografada é: $p5"
