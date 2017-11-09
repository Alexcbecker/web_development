//Exercício cálculo de votos
var numeroTotalVotos = 200000;
var votosBrancos = 1500;
var votosNulos = 800;
var votosValidos;

calcularVotosValidos();
calcularPorcentagens();

function calcularVotosValidos() {
	votosValidos = numeroTotalVotos - votosBrancos - votosNulos;	
}

function calcularPorcentagens() {
	percTotal = 100;
	percBrancos = (votosBrancos * percTotal)/numeroTotalVotos; 
	percNulos = (votosNulos * percTotal)/numeroTotalVotos; 
	percValidos = (votosValidos * percTotal)/numeroTotalVotos; 
	console.log("percTotal: " + percTotal);
	console.log("percBrancos: " + percBrancos);
	console.log("percNulos: " + percNulos);
	console.log("percValidos: " + percValidos);