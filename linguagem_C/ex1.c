#include <stdio.h>
#include <math.h>

int main (){
    int num1;
    int elev; //nao é obrigado a declarar!//
    float raiz;
    int num2;
    char sn;

    printf("digite 1 numero!\n");
    scanf("%d", &num1);

    //scanf("%d", &num2);
   elev = num1 * num1;
   raiz = pow (num1, 0.5);


    if( num1 > 0){
    printf("o nuemero %d elevado ao quadrado é %d!\n", num1, elev);

  

    printf("e a raiz de %d é igual a %f", num1, raiz);
 
    }else{
        printf("numero inválido!");
    }

    printf("Você deseja continuar?: ");
    scanf("%s" &sn);
    if (sn == sim) {
      printf("Agora, digite um número ");
      scanf("%d", &num2);

    }else (
      system("pause");
    )

    
    if (num2 > 0 ) {
        
        raiz4 = num2 * num2;
        result = pow(num2, 0.5);

        printf("O número %d elevado ao quadrado é igual a: %d \n", num2, raiz);

        printf("A raiz de %d é: %d", num2, result);
    } else{
        printf("Seu número é inválido");
    }


return 0;
}