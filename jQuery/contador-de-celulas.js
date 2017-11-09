//Exercício Contador de células
var saque = 22;
var contador100 = 0;
var contador50 = 0;
var contador20 = 0;
var contador10 = 0;
var contador5 = 0;
var contador2 = 0;

if(saque != 0) {
	if(saque >= 100) {
		contador100++;
		saque -= 100;
	}

	if(saque >= 50) {
		contador50++;
		saque -= 50;
	}

	if(saque >= 20) {
		contador20++;
		saque -= 20;
	}

	if(saque >= 10) {
		contador10++;
		saque -= 10;
	}

	if(saque >= 5) {
		contador5++;
		saque -= 5;
	}

	if(saque >= 2) {
		contador2++;
		saque -= 2;
	}
}

console.log("A quantidade de notas 100 é: " + contador100);
console.log("A quantidade de notas 50 é: " + contador50);
console.log("A quantidade de notas 20 é: " + contador20);
console.log("A quantidade de notas 10 é: " + contador10);
console.log("A quantidade de notas 5 é: " + contador5);
console.log("A quantidade de notas 2 é: " + contador2);