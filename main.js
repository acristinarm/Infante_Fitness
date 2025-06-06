function abrirEmpreendimentos(){

    setTimeout(clicarEmpreendimentos, 750);

}

function clicarEmpreendimentos(){
    let link_empreendimentos = document.querySelector("#link_empreendimentos");
    link_empreendimentos.click();

}

function scrollAutomatico(menu_atual){
    if(menu_atual != "home"){
        let main = document.querySelector("main");
        main.scrollIntoView();    
    }
}


