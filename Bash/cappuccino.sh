#!/bin/bash

principal () {
clear
BLACK=`tput setaf 0`
RED=`tput setaf 1`
GREEN=`tput setaf 2`
YELOW=`tput setaf 3`
BLUE=`tput setaf 4`
CYAN=`tput setaf 6`
WHITE=`tput setaf 7`
RESET=`tput sgr0`
  echo
  echo "              ${WHITE}MENU PRINCIPAL"
  echo -e " ${BLUE}[1] ${CYAN}Fazer um scanning nas portas:"
  echo -e " ${BLUE}[2] ${GREEN}Escutar em uma porta específica:"
  echo -e " ${BLUE}[3] ${YELOW}Jogar roleta-russa: "
  echo -e " ${BLUE}[4] ${CYAN}Enumerar diretórios (${RED}WPScan${CYAN})"
  echo -e " ${BLUE}[5] ${RESET}Brute force (${RED}WPScan${RESET})"
  echo
  echo
  echo -e "            ${WHITE}CONSULTAS"
  echo -e " ${BLUE}[6] ${CYAN}Consulta de ${RED}CEP${RESET}:"
  echo -e " ${BLUE}[7] ${CYAN}Consulta de ${RED}CPF${RESET}:"
  echo -e " ${BLUE}[8] ${CYAN}Consultar ${RED}placa${RESET}:"
  echo -e " ${BLUE}[9] ${CYAN}Consulta de ${RED}número${RESET}:"
  echo




  echo -e " ${BLUE}[99] ${RED}Sair" $BLUE
  echo "
          .  ζξ
            ┌─┬┐
            │☆├┘
            └─┘
"
  echo "${BLUE}script by ${YELOW}Naberius ${BLUE}&& ${GREEN}Abadon ${RED}<3"&&sleep 1
  echo "Digite uma opção: "
  read confirmado



roleta() {
  random=$((RANDOM % 6 + 1))

  echo "${GREEN}Digite um número de 1 a 6"
    read numero_escolhido;
  echo "${WHITE}Você escolheu o número $numero_escolhido"

  if [[ $random -eq $numero_escolhido ]];
    then
      sudo poweroff
    else
      echo "${RED}Você sobreviveu otário, PARABÉNS!"
  fi
}

scanning() {
  echo "${GREEN}Digite o nome de usuário desejado para se conectar:${RED}"
  read user
  echo "${GREEN}Digite o ip do alvo:${RED}"
  read ip2
  echo "${GREEN}Digite as portas desejadas para se conectar:${RED}"
  read -a portas2
  portas3=$(echo ${portas2[*]} | tr " " "\n" | wc -l )
  portas4=0
  while [[ $portas3 -eq $portas3 ]]; do
    echo `ssh $user@$ip2 -p ${portas2[$portas4]}`
    ${portas4[ + 1]}
  done
}

  escutar() {
    echo "${GREEN}Digite o ip do alvo:${RED}"
    read ip
    echo "${GREEN}Digite a porta que você deseja se conectar:${RED}"
    read porta
    echo "${GREEN}Continuar [ENTER]${RED}"
    read enter
    echo `nc -lnvp $ip:$porta`
  }

  enum() {
    echo "${GREEN}Digite o site do alvo:${RED}"
    read site
    echo `wpscan -u $site --enumerate u`
  }

  brute() {
    echo "${GREEN}Digite o site do alvo:${RED}"
    read site
    echo "${GREEN}Digite o usuário:${RED}"
    read user
    echo "${GREEN}Especifique uma wordlist: ${RED}"
    read list
    echo `wpscan --url $site -U $user -P $list `
  }

  sim3() {
    cep
  }

  cep() {
    echo "${GREEN}Digite o CEP desejado para consulta: ${RED}"
    read cons
    echo "${YELOW}consultando..."&&sleep 2
    echo `curl -s https://ws.apicep.com/cep/$cons.json` | tr '""' " " | tr "," " " | cut -d" " -f7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23
    echo -e " ${BLUE}[1] ${GREEN}Fazer uma nova consulta"
    echo -e " ${BLUE}[2] ${GREEN}Sair"
    read resp3
    case $resp3 in
      1) sim3;;
      2) nao;;
      *) echo "Opção inválida!"&&sleep 3&&principal;;
    esac
  }
    sim() {
      cpf
    }
    nao() {
      echo "${RED}até mais bb <3"
      principal
    }
  cpf() {
    echo "${GREEN}Digite o CPF desejado para consulta: ${RED}"
    read cf
    echo "${YELOW}consultando... ${BLUE}"&&sleep 2
    echo `curl -s http://api.trackear.com.br/basepv/cpf/$cf/noip` | tr '""' " " | tr "," " " | cut -d" " -f7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55
    echo -e " ${BLUE}[1] ${GREEN}Fazer uma nova consulta"
    echo -e " ${BLUE}[2] ${GREEN}Sair"
    read resposta
    case $resposta in
      1) sim;;
      2) nao;;
      *) echo "Opção inválida!"&&sleep 3&&principal;;
    esac
  }

  sim2() {
    placa
  }

  placa() {
    echo "${GREEN}Digite a placa desejada para a consulta: ${RED}"
    read pl
    echo "${YELOW}consultando..."&&sleep 2
    echo `curl https://apicarros.com/v1/consulta/$pl`
    echo -e " ${BLUE}[1] ${GREEN}Fazer uma nova consulta"
    echo -e " ${BLUE}[2] ${GREEN}Sair"
    read resposta2
    case $resposta2 in
      1) sim2;;
      2) nao;;
      *) echo "Opção inválida!"&&sleep 3&&principal;;
    esac
  }

  num() {
      echo "${GREEN}Digite o número desejado para consulta: ${RED}"
      read dg
      echo "${YELOW}consultando..."&&sleep 2
      echo "${RED}fi (teste)"
  }


  sair () {
    echo "${GRENN}Tecle [ENTER]"
    read resposta
    if [[ $sair -eq $resposta ]];
      then exit
    fi
  }

case $confirmado in
  1) scanning;;
  2) escutar;;
  3) roleta;;
  4) enum;;
  5) brute;;
  6) cep;;
  7) cpf;;
  8) placa;;
  9) num;;
  99) sair;;
  *) echo "Opção inválida!"&&sleep 3&&principal;;
esac
}
RED=`tput setaf 1`
GREEN=`tput setaf 2`
YELOW=`tput setaf 3`
BLUE=`tput setaf 4`
echo "${BLUE}Seja bem vindo membro ${RED}Cappuccino${BLUE}!"&&sleep 1
echo "${YELOW}Loading…
█▒▒▒▒▒▒▒▒▒"&&sleep 1
echo "30%
█████▒▒▒▒▒"&&sleep 1
echo "50%
███████▒▒▒"&&sleep 2
echo "100%
██████████"&&sleep 2
echo "${GREEN}Conectado :)"&&sleep 1
principal
