#!/bin/bash

random=$((RANDOM % 6 + 1))

echo "Digite um número de 1 a 6"
  read numero_escolhido;
echo "Você escolheu o número $numero_escolhido"

if [[ $random -eq $numero_escolhido ]];
  then
    sudo poweroff
  else
    echo "Você sobreviveu otário, PARABÉNS!"
fi
