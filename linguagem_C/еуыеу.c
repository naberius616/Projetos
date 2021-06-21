#include <math.h>
#include <stdio.h>


int main(){
    int num1;
    int raiz4;
    int result;

    printf("Digite um número ");
    scanf("%d", &num1);

    if (num1 > 0 ) {
        
        raiz4 = num1 * num1;
        result = pow(num1, 0.5);

        printf("O número %d elevado ao quadrado é igual a: %d \n", num1, raiz4);

        printf("A raiz de %d é: %d", num1, result);
    } else{
        printf("Seu número é inválido");
    }

        return 0;
}