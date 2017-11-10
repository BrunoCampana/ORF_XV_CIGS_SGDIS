// Botões da página de Cursos

function adicionarDisciplina() {
    var txt;
    var person = prompt("Insira o nome da Disciplina:", "");
    if (person == null || person == "") {
        txt = "< sem disciplina adicionada >";
    } else {
        txt = "Adicionei " + person + " como Disciplina de ...";
    }
    document.getElementById("validacaoDisciplina").innerHTML = txt;
};
function excluirDisciplina() {
    var txt;
    if (confirm("Excluír a Disciplina ______?") == true) {
        txt = "Deletado";
    } else {
        txt = "Mantido";
    }
    document.getElementById("validacaoDisciplina").innerHTML = txt;
};

// Botões da página de Alunos


// Botões da página de Turmas


