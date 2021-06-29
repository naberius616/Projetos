#include <stdio.h>
//while


int main() {
    
    int numero, soma = 0;

    printf("Informe um número: ");
    scanf("%d", &numero);

    while(numero != 0) {
        soma = soma + numero;

        printf("Informe um número: ");
        scanf("%d", &numero);
    }

    printf("A soma de %d", soma);


    return 0;
}