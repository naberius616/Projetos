#include <stdio.h>


//do..while

int main() {
    int numero, soma = 0;

    printf("Informe um número: ");
    scanf("%d", &numero);

    do {
        printf("Informe um número: ");
        scanf("%d", &numero);

        soma = soma + numero;
    }
    while(numero != 0);

    printf("A soma é %d", soma);



    return 0;
}