//Aula sobre variáveis
#include <stdio.h>

int main(){ //a chave delimita um bloco de código (inicio do bloco)
    //decalrando variáveis
    int idade; //int inteiro

    //declarando e inicializando variaveis
    //int idade = 0;

    //Função para escrever algo na saido padrao (console)
    printf("Qual é a sua idade seu cuzaum? "); //ponto e virgula finaliza um comando

    //receber dados
    scanf("%d" , &idade);

    //saida
    printf("A sua idade é %d", idade);

    return 0;
}
//fim do bloco