#include <stdio.h>

//usamos o switch em casos onde tenhams uma estrutura grande ou confusa de if/else/if else

//Pseudocódigo

/*Escola(variavel)
Inicio
Caso valor1:
Intruções
Caso valor2:
Instruções
Caso valor N
Fim*/

/*Na Linguagem C
switch(variavel) {
    case valor1:
    instruções;
    break;
    case valor2:
    instruções;
    break;
   default:
   instruções;
}*/

int main(){

    int valor;

    printf("Digite um valor de 1 a 7 ");
    scanf("%d", &valor);

    switch (valor)
    {
    case 1:
        printf("Domingo\n");
        break;
     case 2:
        printf("Segunda\n");
        break;
     case 3:
        printf("Terça\n");
        break;
     case 4:
        printf("Quarta\n");
        break;
     case 5:
        printf("Quinta");
        break;
     case 6:
        printf("Sexta\n");
        break;
     case 7:   
        printf("Sábado\n");
        break;
    default:
        printf("Valor inválido");
    }
}

