<link rel="stylesheet" href="/Sakana/view/css/cardapio.css">
<h2 class="titulo-form">Cadastrar Funcionários na Equipe</h2>

<form action="/Sakana/index.php?action=salvarItem" method="POST" class="form-grupo">

    <label class="form-label">Nome completo do funcionário:</label>
    <input type="text" name="nomeFunc" class="form-input" required placeholder="Ex: Ana Paula Silva">

    <label class="form-label">CPF:</label>
    <input type="text" name="cpf" class="form-input" required placeholder="Ex: 000.000.000-00">

    <label class="form-label">Endereço:</label>
    <input type="number" step="0.01" name="endereco" class="form-input" required placeholder="Ex: Avenida Brasil, nº 100 - CEP: 00000-000">

    <label class="form-label">Cargo:</label>
    <input type="number" step="0.01" name="endereco" class="form-input" required placeholder="Ex: Garçonete">

    <button type="submit" class="btn-primary">Cadastrar colaborador</button>
</form>