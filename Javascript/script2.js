var media = 7
var max = 10
var nota = prompt("Digite sua nota: ")


if ( nota == max){
    document.write("PARABÉNS! Você tirou uma ótima nota e foi aprovado.")
} else if (nota >= media){
    document.write("Aprovado <br> <br>")
} else {
    document.write("Reprovado <br> <br>")
}


var numero1 = prompt("Digite um número: ")
var numero2 = prompt("Digite outro número: ")

numero1 = parseInt(numero1)
numero2 = parseInt(numero2)

document.write(numero1 + numero2)

