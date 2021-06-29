#include <stdio.h>



//estruturas de rpetição, for, while, do...while
// para, enquanto, faça...enquanto

//ultilizando o For (para)

int main() {
    int numero, soma = 0;

    for(int i = 0; i < 5; i++) {
        printf("Informe um número: ");
        scanf("%d", &numero);

        //processamento
        soma = soma + numero;
}
 //saida
 printf("A soma é %d", soma);   

    return 0;
}