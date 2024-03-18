async function cadastrarVisitante(){
   const dados = await fetch ('core/views/gerar_atendimento.php');

   const resposta = await dados.json();

   if(!resposta['status']){
    document.getElementById("msgAlerta").innerHTML = resposta ['msg'];

   } else{
    document.getElementById("msgAlerta").innerHTML = "";
   }
}