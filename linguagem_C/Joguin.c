#include <stdio.h>

int main(){
    int idade;
    char nome[20];

    printf("Qual a sua idade cuzaum? ");

    scanf("%d", &idade);

    printf("A sua idade é: %d \n", idade);

    printf("E qual o seu nome bro? " );

    scanf("%s", &nome);

    printf("Seu nome é: %s", nome);
    
    
     return 0;

}