#include <stdio.h>

int main(){
    int idade;

    printf("Qual a sua idade? ");
    scanf("%d", &idade);

    

    if(idade < 18) {
        printf("voce é menor de idade \n");
    } else if (idade > 18 && idade < 60) {
        printf("Voce é adulto \n");
    } else {
        printf("Você é idoso \n");
    }
    
    printf("Sua idade é %d \n", idade);
    
    return 0;
}