#include <stdio.h>

int main(){
    int num1;
    int num2;

    printf("Digite o seu primeiro número: ");
    scanf("%d", &num1);

    printf("Digite seu segundo número: ");
    scanf("%d", &num2);

    if (num1 > num2){
       printf("Seu número é maior");
    } else if (num1 == num2) {
        printf("Seu número é igual");
    } else {
        printf("Seu número é menor");
    }
    


}