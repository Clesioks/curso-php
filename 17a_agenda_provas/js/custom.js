async function visUsuario(id) {
  const dados = await fetch('visualizar.php?id=' + id);
  const resposta = await dados.json();
  console.log(resposta);

  if (!resposta['status']) {
    document.getElementById('msgAlerta').innerHTML = resposta['msg'];
  } else {
    document.getElementById('msgAlerta').innerHTML = '';
    const visModal = new bootstrap.Modal(
      document.getElementById('visUsuarioModal')
    );
    visModal.show();
  }

  let dataProva = resposta['dados'].date;
  data = new Date(dataProva);
  dataFormatada = data.toLocaleDateString('pt-BR', { timeZone: 'UTC' });

  document.getElementById('idUsuario').innerHTML = resposta['dados'].id;
  document.getElementById('nomeUsuario').innerHTML =
    resposta['dados'].disciplina;
  document.getElementById('telefoneUsuario').innerHTML = dataFormatada;
  document.getElementById('obsUsuario').innerHTML =
    resposta['dados'].observations;
}
